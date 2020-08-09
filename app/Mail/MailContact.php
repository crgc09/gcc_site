<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;
    //
    public $em_data;
    //
    public function __construct($em_data){
      $this->emd = $em_data;
    }
    //
    public function build(){
      return $this->markdown('emails.mail_contact')
        ->subject($this->emd['asunto'])
        ->with('email',$this->emd);
    }
}
