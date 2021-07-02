<?php

namespace App\Mail;

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
        return $this
            ->view('mails.forms.notification', ['customer' => $this->customer])
            ->subject($this->data['subject']);
    }
}
