<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Application;
use App\Models\Phase;
use App\Models\Project;
use App\Models\Responsibility;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationToProject extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * @var Application
     */
    public $application;

    /**
     * ApplicationToProject constructor.
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $project = new Project();
        $project->application_id = $this->application->id;
        $project->slug = ($this->application->type === 'highway') ? $this->generateSlug($this->application) : '';
        $project->num = '';
        $project->status = 'new';
        $project->save();

        if($this->application->type == 'billboard'):
            $num = $this->generateNum($project);
            $project->update([
                'num' => $num
            ]);
        endif;
    }

    /**
     * Generate slug for project
     * @param Application $application
     * @return string
     */
    private function generateSlug(Application $application)
    {
        $pre = 'LLM/BT/PI/';
        $slug = $pre . $application->highway->code . '/' . date('Y') . '/' . date('m') . $application->id;
        return $slug;
    }

    /**
     * @param Project $project
     * @return string
     */
    private function generateNum(Project $project)
    {
        $code = $project->application->highway->office->code;
        return $project->id . '-' . date('Y') . ' [' . $code . ']';
    }
}
