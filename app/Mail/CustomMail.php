<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomMail extends Mailable
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
            ->html($this->data['content'], 'text/html')
            ->subject($this->data['subject']);
    }
}
