<?php

namespace App\Jobs;

use App\Mail\MailNotify;
use App\Models\Customer;
//use Mail;
use Dacastro4\LaravelGmail\Services\Message\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\View;

class SendEmail implements ShouldQueue
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
        $urlForm = Customer::$urlFormMail[$this->data['type']][$this->data['supplyCompany']->id];

        $mail = new Mail;

        $mail->to($this->customer->email)
            ->view($urlForm, ['customer' => $this->customer, 'supplyCompany' => $this->data['supplyCompany']])
            ->subject($this->data['subject'])->send();
    }
}
