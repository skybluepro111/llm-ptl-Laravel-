<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateNotification extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Application id
     * @int
     */
    public $application_id;

    /**
     * Department
     * @string
     */
    public $department;

    /**
     * CreateNotification constructor.
     * @param $application_id
     * @param $department
     */
    public function __construct($application_id, $department)
    {
        $this->application_id = $application_id;
        $this->department = $department;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $notification = new Notification();
        $notification->department = $this->department;
        $notification->application_id = $this->application_id;
        $notification->status = 'new';
        $notification->save();
    }
}
