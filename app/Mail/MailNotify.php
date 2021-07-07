<?php

namespace App\Mail;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $data, $customer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $customer)
    {
        $this->customer = $customer;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $urlForm = Customer::$urlFormMail[$this->data['type']][$this->data['supplyCompany']->id];
// dd($urlForm, $this->data['supplyCompany']);
        return $this
            ->view($urlForm, ['customer' => $this->customer, 'supplyCompany' => $this->data['supplyCompany']])
            ->subject($this->data['subject']);
    }
}
