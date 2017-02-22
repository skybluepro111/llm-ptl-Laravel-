<?php

namespace App\Helpers;

use App\Models\Application;
use App\Models\Messages\ConversationRepository;
use App\Models\Messages\Message;
use App\Models\Messages\MessageRepository;
use App\Models\Project;
use App\Models\Responsibility;
use App\Models\Phase;
use Auth;

/**
 * Class Messenger
 * @package Helpers
 */
class Messenger
{
    protected $conversation;
    protected $message;
    protected $authUserId;

    /**
     * Initialize and instantiate conversation and message repository
     *
     * @param ConversationRepository $conversation
     * @param MessageRepository $message
     */
    public function __construct(ConversationRepository $conversation, MessageRepository $message)
    {
        $this->conversation = $conversation;
        $this->message = $message;
    }


    /**
     * set currently authenticated user id for global usage
     *
     * @param  int $id
     * @return int/bool
     */
    public function setAuthUserId($id = null)
    {
        if (!is_null($id)) {
            return $this->authUserId = $id;
        }

        return false;
    }

    /**
     * make sure is this conversation exist for this user with currently loggedin user
     *
     * @param  int $userId
     * @return bool/int
     */
    public function isConversationExists($userId)
    {
        if (empty($userId)) {
            return false;
        }

        $user = $this->getSerializeUser($this->authUserId, $userId);
        return $this->conversation->isExistsAmongTwoUsers($user['one'], $user['two']);
    }


    /**
     * check the given user exist for the given conversation
     *
     * @param  int $conversationId
     * @param  int $userId
     * @return bool
     */
    public function isAuthenticUser($conversationId, $userId)
    {
        if ($conversationId && $userId) {
            return $this->conversation->isUserExists($conversationId, $userId);
        }
        return false;
    }


    /**
     * make new conversation the given receiverId with currently loggedin user
     *
     * @param  int $receiverId
     * @return int
     */
    protected function newConversation($receiverId)
    {
        $convId = $this->isConversationExists($receiverId);
        $user = $this->getSerializeUser($this->authUserId, $receiverId);

        if ($convId === false) {
            $conv = $this->conversation->create([
                'user_one' => $user['one'],
                'user_two' => $user['two'],
                'status' => 1
            ]);

            if ($conv) {
                return $conv->id;
            }
        }

        return $convId;
    }

    /**
     * @param $conversation_id
     * @param $id
     * @param $message
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function makeMessage($conversation_id, $id, $message)
    {
        
        $user_id = (Auth::user()->id) ? Auth::user()->id : 1;
        $data = [
            'message' => $message,
            $conversation_id => $id,
            'user_id' => $user_id,
            'is_seen' => 0
        ];
        $message = $this->message->create($data);
        return $message;
    }

    /**
     * Send a message
     * @param $id
     * @param $type
     * @param $message
     * @return Message|bool
     */
    public function sendMessage($id, $type, $message)
    {
        $conversation_id = $type . '_id';
        if ($this->conversation->existsById($type, $id)) {
            $message = $this->makeMessage($conversation_id, $id, $message);
            return $message;
        }
        return false;
    }


    /**
     * create a new message by using reciever
     *
     * @param  int $receiverId
     * @param  string $message
     * @return \App\Models\Messages\Message
     */
    public function sendMessageByUserId($receiverId, $message)
    {
        if ($conversationId = $this->isConversationExists($receiverId)) {
            $message = $this->makeMessage($conversationId, $message);
            return $message;
        }

        $convId = $this->newConversation($receiverId);
        $message = $this->makeMessage($convId, $message);
        return $message;
    }


    /**
     * fetch all inbox for currently logged in user with pagination
     *
     * @param  int $offset
     * @param  int $take
     * @return array
     */
    public function getInbox($offset = 0, $take = 20)
    {
        return Auth::user()->applications;
    }

    /**
     * fetch all inbox with soft deleted message for currently loggedin user with pagination
     *
     * @param  int $offset
     * @param  int $take
     * @return array
     */
    public function getInboxAll($offset = 0, $take = 20)
    {
        return $this->conversation->getListAll($this->authUserId, $offset, $take);
    }


    /**
     * fetch all conversation by using application
     *
     * @param  int $application_id
     * @return \App\Models\Application
     */
    public function getConversationById($application_id)
    {
        $conversation = Application::findOrFail($application_id);
        if ($conversation->user_id === Auth::user()->id || !Auth::user()->hasRole('applicant')) {
            return $conversation;
        } else {
            abort(404);
        }
    }


    /**
     * create a new message by using sender id
     *
     * @param  int $senderId
     * @return \Nahid\Talk\Messages\Message / bool
     */
    public function getConversationsByUserId($senderId)
    {
        $conversationId = $this->isConversationExists($senderId, $this->authUserId);
        if ($conversationId) {
            return $this->getConversationsById($conversationId);
        }

        return false;
    }


    /**
     * make a message as seen
     *
     * @param  int $messageId
     * @return bool
     */
    public function makeSeen($messageId)
    {
        $seen = $this->message->update($messageId, ['is_seen' => 1]);
        if ($seen) {
            return true;
        }

        return false;
    }


    /**
     * get receiver information for this conversation
     *
     * @param  int $conversationId
     * @return UserModel
     */
    public function getReceiverInfo($conversationId)
    {
        $conversation = $this->conversation->find($conversationId);
        $receiver = '';
        if ($conversation->user_one == $this->authUserId) {
            $receiver = $conversation->user_two;
        } else {
            $receiver = $conversation->user_one;
        }

        $userModel = config('talk.user.model');
        $user = new $userModel;
        return $user->find($receiver);
    }


    /**
     * delete a specific message, its a softdelete process. All message stay in db
     *
     * @param  int $messageId
     * @return bool
     */
    public function deleteMessage($messageId)
    {
        $message = $this->message->find($messageId);

        if ($message->user_id == $this->authUserId) {
            $message->deleted_from_sender = 1;
        } else {
            $message->deleted_from_receiver = 1;
        }

        $deleteMessage = $this->message->update($message);

        if ($deleteMessage) {
            return true;
        }

        return false;
    }


    /**
     * permanently delete message for this id
     *
     * @param  int $messageId
     * @return bool
     */
    public function deleteForever($messageId)
    {
        $deleteMessage = $this->message->delete($messageId);
        if ($deleteMessage) {
            return true;
        }

        return false;
    }


    /**
     * delete message threat or conversation by conversation id
     *
     * @param  int $id
     * @return bool
     */
    public function deleteConversations($id)
    {
        $deleteConversation = $this->conversation->delete($id);
        if ($deleteConversation) {
            return $this->message->deleteMessages($id);
        }

        return false;
    }

    /**
     * make two users as serialize with ascending order
     *
     * @param  int $user1
     * @param  int $user2
     * @return array
     */
    protected function getSerializeUser($user1, $user2)
    {
        $user = [];
        $user['one'] = ($user1 < $user2) ? $user1 : $user2;
        $user['two'] = ($user1 < $user2) ? $user2 : $user1;
        return $user;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getProjects()
    {
        $user = Auth::user();
        $role = Auth::user()->roles()->first()->name;
        $applications = $this->getApplications()->pluck('id');
        switch ($role) {
            case 'admin':
                $projects = Project::all();
                break;
            case 'bpo':
                $projects = Project::all();
                break;
            case 'pw':
                $projects = Project::all();
                break;
            default:
                $projects = Project::whereIn('application_id', $applications)->get();
                break;
        }

        return $projects->lists('slug', 'id');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getApplications()
    {
        $user = Auth::user();
        $role = Auth::user()->roles()->first()->name;
        switch ($role) {
            case 'admin':
                $applications = Application::all();
                break;
            case 'bkpa':
                $responsibility = Responsibility::whereName('payment_verification')->first();
                $ids = collect(Phase::whereResponsibilityId($responsibility->id)->get())->pluck('application_id');
                $applications = Application::findMany($ids);
                break;
            case 'bpo':
                $responsibility = Responsibility::whereName('application_acceptance')->first();
                $ids = collect(Phase::whereResponsibilityId($responsibility->id)->get())->pluck('application_id');
                $applications = Application::findMany($ids);
                break;
            case 'pw':
                $applications = Application::all();
                break;
            default:
                $applications = Application::whereUserId($user->id)->get();
                break;
        }
        return $applications;
    }

    public function getMessagesCount()
    {
        $projects = $this->getProjects()->pluck('id');
        $applications = $this->getApplications()->pluck('id');
        return Message::whereIn('application_id', $applications)->orWhereIn('project_id', $projects)->get()->count();
    }


}
