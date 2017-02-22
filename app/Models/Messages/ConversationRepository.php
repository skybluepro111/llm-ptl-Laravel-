<?php

namespace App\Models\Messages;

use Illuminate\Support\Facades\DB;
use SebastianBerc\Repositories\Repository;
use App\Models\Application;
use Auth;
use App\Models\Project;

class ConversationRepository extends Repository
{
    public function takeModel()
    {
        return Application::class;
    }

    public function existsById($type, $id)
    {
        switch ($type) {
            case 'application':
                $model = Application::find($id);
                break;
            case 'project':
                $model = Project::find($id);
                break;
        }
        if ($model) {
            return true;
        }
        return false;
    }

    public function isExistsAmongTwoUsers($user1, $user2)
    {
        $conversation = Conversation::where('user_one', $user1)
            ->where('user_two', $user2);

        if ($conversation->exists()) {
            return $conversation->first()->id;
        }

        return false;
    }

    public function isUserExists($conversationId, $userId)
    {
        $exists = Conversation::where('id', $conversationId)
            ->where(function ($query) use ($userId) {
                $query->where('user_one', $userId)->orWhere('user_two', $userId);
            })
            ->exists();

        return $exists;
    }

    protected function getUserColumns()
    {
        $columns = config('messenger.user.columns');
        $strColumns = '';
        foreach ($columns as $column) {
            if ($column == 'id') {
                $strColumns .= 'user.' . $column . ' as receiver_id, ';
            } else {
                $strColumns .= 'user.' . $column . ', ';
            }
        }
        return $strColumns;
    }

    public function getList($user, $offset, $take)
    {
        /*
        $conversations = DB::select(
            DB::raw("SELECT " . $this->getUserColumns() . "msg.user_id as sender_id, conv.id as conv_id, msg.message, msg.created_at, msg.is_seen
    FROM " . DB::getTablePrefix() . config('messenger.user.table') . " user, " . DB::getTablePrefix() . "conversations conv, " . DB::getTablePrefix() . "messages msg
    WHERE conv.id = msg.conversation_id
                AND (
                    conv.user_one ={$user}
                    OR conv.user_two ={$user}
                ) and (msg.created_at)
    in (
        SELECT max(msg.created_at) as created_at
        FROM " . DB::getTablePrefix() . "conversations conv, " . DB::getTablePrefix() . "messages msg
        WHERE CASE
            WHEN conv.user_one ={$user}
            THEN conv.user_two = user.id
            WHEN conv.user_two ={$user}
            THEN conv.user_one = user.id
        END
        AND conv.id = msg.conversation_id
        AND (
            conv.user_one ={$user}
            OR conv.user_two ={$user}
            )
        AND (
           (
                msg.user_id = {$user}
                AND
                msg.deleted_from_sender = 0
           ) OR (
                msg.user_id != {$user}
                AND
                msg.deleted_from_receiver = 0
           )
        )
    GROUP BY conv.id
)
     ORDER BY msg.created_at DESC
     LIMIT " . $offset . ", " . $take)
        );

        */
        return $conversations;
    }


    public function getListAll($user, $offset, $take)
    {
        dd('ss');
        $conversations = DB::select(
            DB::raw("SELECT " . $this->getUserColumns() . "msg.user_id as sender_id, conv.id as conv_id, msg.message, msg.created_at, msg.is_seen
    FROM " . DB::getTablePrefix() . config('messenger.user.table') . " user, " . DB::getTablePrefix() . "conversations conv, " . DB::getTablePrefix() . "messages msg
    WHERE conv.id = msg.conversation_id
                AND (
                    conv.user_one ={$user}
                    OR conv.user_two ={$user}
                ) and (msg.created_at)
    in (
        SELECT max(msg.created_at) as created_at
        FROM " . DB::getTablePrefix() . "conversations conv, " . DB::getTablePrefix() . "messages msg
        WHERE CASE
            WHEN conv.user_one ={$user}
            THEN conv.user_two = user.id
            WHEN conv.user_two ={$user}
            THEN conv.user_one = user.id
        END
        AND conv.id = msg.conversation_id
        AND (
            conv.user_one ={$user}
            OR conv.user_two ={$user}
            )
    GROUP BY conv.id
)
     ORDER BY msg.created_at DESC
     LIMIT " . $offset . ", " . $take)
        );


        return $conversations;
    }
}
