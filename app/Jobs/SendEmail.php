<?php

namespace App\Jobs;

use App\Mail\MailNotify;
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
        $mail = new Mail;

        if ($this->data['type'] == 1) {
            $mail->to($this->customer->email)
                ->view('mails.forms.notification', ['customer' => $this->customer])
                ->subject($this->data['subject'])->send();
        } elseif ($this->data['type'] == 2) {
            $mail->to($this->customer->email)
                ->view('mails.forms.notification-old-version', ['customer' => $this->customer])
                ->subject($this->data['subject'])->send();
        }
        //  else {
        //     dd(1);
        //     $view = View::make($this->data['content']);
        //     dd($view);
        //     $mail->to($this->customer->email)
        //         ->view($view, ['customer' => $this->customer])
        //         ->subject($this->data['subject']);
        // }
    }
}
