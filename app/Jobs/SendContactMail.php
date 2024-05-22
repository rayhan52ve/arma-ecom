<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $webInfo;
    private $maildata;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($webInfo,$maildata)
    {
        $this->webInfo = $webInfo;
        $this->maildata = $maildata;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Mail::to($this->webInfo->email)->send(new ContactMail($this->maildata));
        if ($this->maildata->copy == 1) {
            Mail::to($this->maildata->email)->send(new ContactMail($this->maildata));
        }
    }
}
