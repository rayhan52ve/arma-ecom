<?php

namespace App\Jobs;

use App\Mail\ServiceCompleteMail;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class StartCountdownJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $orderId;

    /**
     * Create a new job instance.
     *
     * @param  int  $orderId
     * @param  int  $time
     * @param  string  $time_type (Hour, Minute, Day)
     * @return void
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $this->sendCompletionEmail();


        $this->completeOrder();
    }


    private function sendCompletionEmail()
    {
        $order = Order::findOrFail($this->orderId);
        $customerEmail = $order->user->email;
        Mail::to($customerEmail)->send(new ServiceCompleteMail($order));
    }


    /**
     * Complete the order.
     *
     * @return void
     */
    public function completeOrder()
    {
        $order = Order::findOrFail($this->orderId);

        $order->status = 4;
        $order->save();
    }
}
