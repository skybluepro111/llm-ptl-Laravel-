<?php

namespace App\Events\BPO;

use App\Events\Event;
use App\Models\Application;
use App\Jobs\ChangePhase;
use App\Jobs\CreateNotification;
use App\Jobs\ApplicationToProject;
use App\Jobs\SendMessage;
use App\Jobs\SendEmail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ApplicationAccepted extends Event
{
    use SerializesModels, DispatchesJobs;

    /**
     * ApplicationWasCreated constructor.
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $department = 'pw';

        $this->dispatch(new ApplicationToProject($application));
        $this->dispatch(new ChangePhase($application->id, 'application_acceptance'));
        $this->dispatch(new CreateNotification($application->id, $department));

        $this->dispatch(new SendEmail($department, trans('emails.payment_was_confirmed')));
        $this->dispatch(new SendMessage('application', $application->id, trans('emails.payment_was_confirmed')));
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
