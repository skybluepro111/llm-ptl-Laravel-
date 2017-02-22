<?php

namespace App\Events\BPO;

use App\Events\Event;
use App\Models\Application;
use App\Jobs\ChangePhase;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ApplicationRejected extends Event
{
    use SerializesModels, DispatchesJobs;

    /**
     * ApplicationWasCreated constructor.
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->dispatch(new ChangePhase($application->id, 'updating_application'));
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
