<?php

namespace App\Services;

use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use App\Repositories\ActivationRepository;
use App\Models\User;

class ActivationService
{

    protected $mailer;

    protected $activationRepo;

    protected $resendAfter = 24;

    public function __construct(Mailer $mailer, ActivationRepository $activationRepo)
    {
        $this->mailer = $mailer;
        $this->activationRepo = $activationRepo;
    }

    public function sendActivationMail(User $user)
    {

        if ($user->activated || !$this->shouldSend($user)) {
            return;
        }

        $token = $this->activationRepo->createActivation($user);

        $link = route('user.activate', $token);

        /*switch ($user->contractor_category_id) {
            case 1: {
                $message = trans('emails.register.activation.link', ['link' => $link]);
            }
            case 2: {
                $message = trans('emails.register.activation.link', ['link' => $link]);

            }
            case 3: {
                $message = trans('emails.register.activation.link', ['link' => $link]);
            }
            case 4: {
                $message = trans('emails.register.activation.manual');
            }
            case 5: {
                $message = trans('emails.register.activation.manual');
            }
        }*/

        //$mail_content = view('emails.activation-my', ['link' => $link])->render();

        //$message = sprintf('Activate account <a href="%s">%s</a>', $link, $link);

        //$this->mailer->raw($mail_content, function (Message $m) use ($user) {
        //    $m->to($user->email)->subject(trans('emails.register.activation.title'));
        //});

        $from      = config('mail.from.address');
        $from_name = config('mail.from.name');
        $subject   = trans('emails.register.activation.title');
        \Mail::send('emails.activation-my', ['link' => $link], function($message) use ($from, $from_name, $user, $subject){
            $message->from($from, $from_name);
            $message->subject($subject);
            $message->to($user->email);
        });

    }

    public function activateUser($token)
    {
        $activation = $this->activationRepo->getActivationByToken($token);

        if ($activation === null) {
            return null;
        }

        $user = User::find($activation->user_id);

        $user->activated = true;

        $user->save();

        $this->activationRepo->deleteActivation($token);

        return $user;

    }

    private function shouldSend(User $user)
    {
        $activation = $this->activationRepo->getActivation($user);
        return $activation === null ||
        strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time()
        || $user->contractor_category_id <= 3;
    }

}