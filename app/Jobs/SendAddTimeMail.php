<?php

namespace App\Jobs;

use App\Mail\AddTimeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendAddTimeMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $AdminMail;
    private $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($AdminMail,$order)
    {
        $this->AdminMail = $AdminMail;
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->AdminMail)->send(new AddTimeMail($this->order));
    }
}
