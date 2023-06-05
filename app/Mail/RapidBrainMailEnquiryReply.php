<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RapidBrainMailEnquiryReply extends Mailable
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
        $name= $data['name'];
        $message_content = "<div style='text-align: justify;'><p>Thank you for contacting RapidBrains. We appreciate your interest in our talent marketplace and for considering our services to fulfill your remote developer requirements.<br/><br/>We have received your enquiry and are thrilled to assist you in finding the perfect remote developers for your team. Our team of experts is already working on reviewing your requirements and identifying the most suitable candidates for your consideration.<br/><br/>Should you have any additional information or specific criteria that you would like us to consider, please don't hesitate to let us know.<br/><br/>Once again, we sincerely appreciate your interest in RapidBrains. We are excited to have the opportunity to work with you and assist you in building a talented and productive remote developer team.</p></div>";
     
            $subject  = "Thank you for contacting RapidBrains";
            //$to_address="akhil.s@hashroot.com";
            $to_address=$data['email'];
            return $this->to($to_address)->from('site@rapidbrains.com', 'Thank you for contacting RapidBrains')
            ->subject($subject)
            ->view('template.replymail', ['message_content' => $message_content,'name'=> $name]);
    
    }
}
