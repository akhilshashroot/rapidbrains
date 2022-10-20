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
            $subject  = "RapidBrain Enquiry";
            $to_address="akhil.s@hashroot.com";
            return $this->to($to_address)->from('site@rapidbrain.com', 'RapidBrain Enquiry')
            ->subject($subject)
            ->html($message_content);
        }
        if($data['type']=='gettouch'){
            $message_content = "<b>Name :</b> ".$data['name']."<br/><br/><b>
            Email :</b> ".$data['email']."<br/><br/><b>
            Phone :</b> ".$data['phone']."<br/><br/><b>
            skill : </b>".$data['skill']."<br/><br/><b>";
            $subject  = "RapidBrain Get in Touch";
            $to_address="akhil.s@hashroot.com";
            return $this->to($to_address)->from('site@rapidbrain.com', 'RapidBrain Get in Touch')
            ->subject($subject)
            ->html($message_content);
        }
        if($data['type']=='callback'){
            $message_content = "<b>Name :</b> ".$data['name']."<br/><br/><b>
            Phone :</b> ".$data['phone']."<br/><br/><b>";
          
            $subject  = "RapidBrain Callback Request";
            $to_address="akhil.s@hashroot.com";
            return $this->to($to_address)->from('site@rapidbrain.com', 'RapidBrain Callback Request')
            ->subject($subject)
            ->html($message_content);
        }
    }
}
