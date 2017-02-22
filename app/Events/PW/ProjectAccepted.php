<?php

namespace App\Events\PW;

use App\Events\Event;
use App\Models\Project;
use App\Jobs\ChangePhase;
use App\Helpers\Helper;
use App\Jobs\CreateNotification;
use App\Jobs\SendMessage;
use App\Jobs\SendEmail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ProjectAccepted extends Event
{
    use SerializesModels, DispatchesJobs;

    /**
     * ProjectAccepted constructor.
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        $department = Helper::getDepartmentByApplicationType($project->application->type);
//        $this->dispatch(new ApplicationToProject($application));
        $this->dispatch(new ChangePhase($project->application->id, 'project_review'));
        $this->dispatch(new CreateNotification($project->id, $department));

        $this->dispatch(new SendEmail($department, trans('emails.project_accepted')));
        $this->dispatch(new SendMessage('project', $project->id, trans('emails.project_accepted')));
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

    /**
     * @param $type
     * @return string
     */
    private function getDepartment($type)
    {
        return ($type == 'highway') ? 'bpo' : 'but';
    }
}
