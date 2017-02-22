<?php

namespace App\Jobs;

use Auth;
use App\Jobs\Job;
use App\Models\Notification;
use App\Models\Phase;
use App\Models\Responsibility;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChangePhase extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $application_id;
    public $responsibility;

    /**
     * ChangePhase constructor.
     * @param $application_id
     * @param $responsibility
     */
    public function __construct($application_id, $responsibility)
    {
        $this->application_id = $application_id;
        $this->responsibility = $responsibility;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Notification::whereApplicationId($this->application_id)->delete();
        Phase::whereApplicationId($this->application_id)->delete();

        $phase = new Phase();
        $phase->application_id = $this->application_id;
        $phase->responsibility_id = Responsibility::whereName($this->responsibility)->first()->id;
        $phase->user_id = Auth::user()->id;
        $phase->save();
    }
}
