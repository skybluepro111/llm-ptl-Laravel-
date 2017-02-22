<?php

namespace App\Jobs;

use Mail;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Helper;

class SendEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $department;
    protected $text;

    /**
     * Create a new job instance.
     *
     * @param string $department
     * @param string $text
     * @return void
     */
    public function __construct($department, $text)
    {
        $this->department = $department;
        $this->text = $text;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $text = $this->text;
        $emails = Helper::getDepartmentEmails($this->department);
        Mail::send('emails.main', ['text' => $text], function ($m) use ($emails, $text) {
            $m->from('hello@app.com', 'LLM');
            foreach ($emails as $email) {
                $m->to($email)->subject($text['subject']);
            }
        });
    }
}
