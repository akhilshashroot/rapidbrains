<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InternalMail extends Mailable
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
       // if($data['type']=='remote'){
            $message_content = "<div style='text-align: justify;'>
            Job ID - ".$data['job_id']."<br/>
            Talent ID - ".$data['talent_id']."<br/>
            Name - ".$data['name']."<br/>
            Email - ".$data['email']."<br/>
            Phone - ".$data['phone']."<br/>
            Skill - ".$data['skill']."<br/>
            Experience - ".$data['experience']."<br/>
            Rate - ".$data['rate']."<br/><br/>";
            
            
            $subject  =$data['job_id']." - Website Job Application (Talent - ".$data['talent_id'].")";

            if($data['type']=='remote'){
            $to_address= 'rapidbrains@hashroot.zohodesk.in';
          // $to_address= 'akhil.s@hashroot.com';  
            }else{
                $to_address= 'stakefield@hashroot.zohodesk.in';    
              // $to_address= 'akhil.s@hashroot.com';  
            }
            return $this->to($to_address)->from('site@rapidbrains.com', 'RapidBrains')
            ->subject($subject)
            ->view('template.internalmail', ['message_content' => $message_content,'data' => $data]);
     //   }
        
    
    }
}
