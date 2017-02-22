<?php

namespace App\Events\BKPA;

use App\Events\Event;
use App\Models\Payment;
use App\Jobs\ChangePhase;
use App\Jobs\SendMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Bus\DispatchesJobs;


class PaymentWasRejected extends Event
{
    use SerializesModels, DispatchesJobs;

    /**
     * ApplicationWasCreated constructor.
     * ApplicationWasRejected constructor.
     * @param Payment $payment
     */
    public function __construct(Payment $payment)
    {
        $this->dispatch(new ChangePhase($payment->application->id, 'updating_application'));
        $this->dispatch(new SendMessage('application', $payment->application->id, trans('emails.payment_was_rejected')));
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
