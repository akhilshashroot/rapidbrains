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
            $subject  = "RapidBrains Hire Mail";
            $to_address="akhil.s@hashroot.com";
            return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains Hire Mail')
            ->subject($subject)
            ->html($message_content);
    }
}
