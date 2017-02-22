<?php

namespace App\Events\BPO;

use App\Events\Event;
use App\Models\Project;
use App\Jobs\ChangePhase;
use App\Jobs\CreateNotification;
use App\Jobs\SendEmail;
use App\Jobs\SendMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ProjectWasConfirmedByBPO extends Event
{
    use SerializesModels, DispatchesJobs;

    /**
     * ProjectWasConfirmedByBPO constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        $this->dispatch(new ChangePhase($project->application->id, 'technical_review'));
        $this->dispatch(new CreateNotification($project->application->id, 'pw'));
        $this->dispatch(new SendEmail('pw', trans('emails.bpo.project_was_confirmed')));
        $this->dispatch(new SendMessage('project', $project->id, trans('emails.bpo.project_was_confirmed')));

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
