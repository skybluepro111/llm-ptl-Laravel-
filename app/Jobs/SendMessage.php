<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Messenger;


class SendMessage extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    private $type;
    private $id;
    private $text;

    /**
     * SendMessage constructor.
     * @param string $type
     * @param integer $id
     * @param string $text
     */
    public function __construct($type, $id, $text)
    {
        $this->type = $type;
        $this->id = $id;
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
        Messenger::sendMessage($this->id, $this->type, $text['text']);
    }
}
