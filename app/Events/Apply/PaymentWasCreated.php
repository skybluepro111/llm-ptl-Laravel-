<?php

namespace App\Events\Apply;

use Auth;
use App\Events\Event;
use App\Models\Application;
use App\Jobs\ChangePhase;
use App\Jobs\CreateNotification;
use App\Jobs\SendEmail;
use App\Jobs\SendMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Bus\DispatchesJobs;


class PaymentWasCreated extends Event
{
    use SerializesModels, DispatchesJobs;

    /**
     * ApplicationWasCreated constructor.
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->dispatch(new ChangePhase($application->id, 'payment_verification'));
        $this->dispatch(new CreateNotification($application->id, 'bkpa'));
        $this->dispatch(new SendEmail('bkpa', trans('emails.payment_was_created')));
        $this->dispatch(new SendMessage('application', $application->id, trans('emails.payment_was_created')));
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
