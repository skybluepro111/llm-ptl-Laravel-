<?php

namespace App\Models\Messages;

use Illuminate\Support\Facades\DB;
use SebastianBerc\Repositories\Repository;

class MessageRepository extends Repository
{
    public function takeModel()
    {
        return Message::class;
    }

    public function getConversations($conversationId)
    {
        $readMessage = DB::select(
            DB::raw(

                'SELECT U.name, M.id, U.id as user_id, M.deleted_from_sender, M.deleted_from_receiver, M.message, M.created_at
			    FROM ' . DB::getTablePrefix() . 'users U, ' . DB::getTablePrefix() . 'messages M
			    WHERE M.user_id = U.id
			    AND M.conversation_id = ?
			    order by M.created_at asc',
                [$conversationId]
            )
        );
        return $readMessage;
    }

    public function getMessageByConversationId($id)
    {
        return $this->where('application_id', $id)->get();
//        return $this->with('user')->where('application_id', $id)->all();
    }

    public function deleteMessages($conversationId)
    {
        $delete = Message::where('application_id', $conversationId)->delete();
        if ($delete) {
            return true;
        }
        return false;
    }
}
