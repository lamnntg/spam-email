<?php

namespace App\Jobs;

use App\Mail\CustomMail;
use App\Mail\MailNotify;
use App\Mail\MailNotifyOldVersion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailAmazon implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $customer;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $customer)
    {
        $this->data = $data;
        $this->customer = $customer;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->data['type'] == 3) {
            Mail::to($this->customer->email)->send(new CustomMail($this->data, $this->customer));
        } else {
            Mail::to($this->customer->email)->send(new MailNotify($this->data, $this->customer));
        }
    }
}
