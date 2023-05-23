<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RapidBrainMail extends Mailable
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
        if($data['type']=='enquirenow'){
            $message_content = "<b>Name :</b> ".$data['name']."<br/><br/><b>
            Email :</b> ".$data['email']."<br/><br/><b>
            Phone :</b> ".$data['phone']."<br/><br/><b>
            skill : </b>".$data['skill']."<br/><br/><b>";
            $subject  = "RapidBrains Enquiry";
            $to_address="enquiry@rapidbrains.com";
            return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains Enquiry')
            ->subject($subject)
            ->html($message_content);
        }
        if($data['type']=='gettouch'){
            $message_content = "<b>Name :</b> ".$data['name']."<br/><br/><b>
            Email :</b> ".$data['email']."<br/><br/><b>
            Phone :</b> ".$data['phone']."<br/><br/><b>
            skill : </b>".$data['skill']."<br/><br/><b>";
            $subject  = "RapidBrains Get in Touch";
            $to_address="contact@rapidbrains.com";
            return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains Get in Touch')
            ->subject($subject)
            ->html($message_content);
        }
        if($data['type']=='callback'){
            $message_content = "<b>Name :</b> ".$data['name']."<br/><br/><b>
            Phone :</b> ".$data['phone']."<br/><br/><b>";
          
            $subject  = "RapidBrains Callback Request";
            $to_address="contact@rapidbrains.com";
            return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains Callback Request')
            ->subject($subject)
            ->html($message_content);
        }
    }
}
