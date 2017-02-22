<?php

namespace App\Http\Controllers\Messages;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Messages\Message;
use App\Models\Application;
use App\Models\Project;
use Illuminate\Http\Request;
use Messenger;
use App\Helpers\Helper;
use Auth;
use App\Models\Responsibility;
use App\Models\Phase;

class MessageController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inbox()
    {
        return view('messenger.layouts.master');
    }

    /**
     * @param $type
     * @return bool|\Illuminate\Support\Collection
     */
    public function getItems($type)
    {
        switch ($type) {
            case 'project':
                return Messenger::getProjects();
                break;
            case 'application':
                $items = Helper::transform(Messenger::getApplications(),
                    \App\Transformers\ApplicationMessengerTransformer::class);
                return $items->lists('name', 'id');
                break;
        }
        return false;
    }

    public function getMessages($type, $id)
    {
        $items = [];
        switch ($type) {
            case 'project':
                $items = array_keys(Messenger::getProjects()->toArray());
                break;
            case 'application':
                $items = array_keys(Messenger::getApplications()->toArray());
                break;
        }
        
        if (in_array($id, $items)) {
            $messages = Message::where($type . '_id', $id)
                ->orderBy('created_at', 'DESC')->get();
            return view('messenger.messages', compact('messages', 'type', 'id'));
        }else {
            $messages = false;
        }
        return view('messenger.messages', compact('messages', 'type', 'id'));
    }

    public function readMessage($id)
    {
        $inbox = Messenger::getInbox();
        $application = Messenger::getConversationById($id);
        return view('messenger.message', compact('inbox', 'application', 'id'));
    }

    public function send(Request $request)
    {
        $id = $request->input('id');
        $type = $request->input('type');
        $message = $request->input('message');
        $send = Messenger::sendMessage($id, $type, $message);
        return $request;
    }

    public function deleteConversation($id)
    {
        if (Messenger::deleteConversations($id)) {
            return redirect()->back();
        }
    }


}