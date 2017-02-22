<?php

namespace App\Events\BKPA;

use App\Events\Event;
use App\Helpers\Helper;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Payment;
use App\Jobs\ChangePhase;
use App\Jobs\CreateNotification;
use App\Jobs\SendMessage;
use Mockery\Matcher\Not;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Jobs\SendEmail;


class PaymentWasConfirmed extends Event
{
    use SerializesModels, DispatchesJobs;

    /**
     * PaymentWasConfirmed constructor.
     * @param Payment $payment
     */
    public function __construct(Payment $payment)
    {
        $type = $payment->application->type;
        $department = Helper::getDepartmentByApplicationType($type);
        $this->dispatch(new ChangePhase($payment->application->id, 'application_acceptance'));
        $this->dispatch(new CreateNotification($payment->application->id, $department));

        $this->dispatch(new SendEmail($department, trans('emails.payment_was_confirmed')));
        $this->dispatch(new SendMessage('application', $payment->application->id, trans('emails.payment_was_confirmed')));

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
