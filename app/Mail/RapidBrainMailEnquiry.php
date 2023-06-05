<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RapidBrainMailEnquiry extends Mailable
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
        $countrycode= ($data['countrycode'])?"+":"";
            $message_content = "<b>Name :</b> ".$data['name']."<br/><br/><b>
            Email :</b> ".$data['email']."<br/><br/><b>
            Phone :</b> <b>".$countrycode.$data['countrycode']." ".'</b>'.$data['phone']."<br/><br/><b>
            Skills : </b>".$data['skill']."<br/><br/><b>
            Company : </b>".$data['company']."<br/><br/><b>
            Experience : </b>".$data['experience']."<br/><br/><b>
            Number of developers  : </b>".$data['count']."<br/><br/><b>
            Convenient time for a meeting : </b>".$data['time']."<br/><br/><b>
            Country Name  : </b>".$data['countryname']."<br/><br/><b>";
            $subject  = "RapidBrains Enquiry";
            $to_address="enquiry@rapidbrains.com";
           // $to_address="akhil.s@hashroot.com";
            return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains Enquiry')
            ->subject($subject)
            ->view('template.enmail', ['message_content' => $message_content]);
    
    }
}
