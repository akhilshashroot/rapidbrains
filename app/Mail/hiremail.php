<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class hiremail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data ;
        \Log::info($data);
        $message_content = "Email :</b> ".$data['email']."<br/><br/><b>";
            $subject  = "RapidBrains Enquiry Mail from Landing page";
            $to_address="contact@rapidbrains.com";
            return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains Enquiry Mail')
            ->subject($subject)
            ->html($message_content);
    }
}
