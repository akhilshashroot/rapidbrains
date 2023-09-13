<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobReturnMail extends Mailable
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
        $message_content = "<div style='text-align: justify;'><p>Thank you for taking the time to submit your application at RapidBrains Talent Marketplace. Your application has been received and we value your interest in the opportunity listed on our website. Our team will carefully review your qualifications and consider your fit for the role.<br/><br/>Your Talent ID <b>".$data['talent_id']."</b> will serve as a reference for any future updates or communication regarding your application. We will be in touch with you as soon as we have further updates regarding your application.<br/><br/> Once again, thank you for your interest, and we wish you the best of luck in your job search.</p></div>";
        $subject  ="Thank You for Your Job Application - Talent ID ".$data['talent_id'];
        $to_address= $data['email'];
        return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains -Job Application')
        ->subject($subject)
        ->view('template.appreply', ['message_content' => $message_content]);
    }
}
