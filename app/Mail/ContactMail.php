<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
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
        $message_content = "<b>Name :</b> ".$data['name'].' '.$data['surname']."<br/><br/><b>
            Email :</b> ".$data['email']."<br/><br/><b>
            Department :</b> ".$data['department']."<br/><br/><b>
            Message : </b>".$data['message']."<br/><br/><b>";
            $subject  = "RapidBrain Contact Mail";
            $to_address="akhil.s@hashroot.com";
            return $this->to($to_address)->from('site@rapidbrain.com', 'RapidBrain Enquiry')
            ->subject($subject)
            ->html($message_content);
    }
}
