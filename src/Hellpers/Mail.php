<?php
namespace App\Hellpers;
use Cake\Mailer\Mailer;

class Mail {
    
    public static function sendMail($param)
    {
        try{
        $email =  new Mailer();
        $email->setTransport('gmail');
        $email->setEmailFormat('html')
        ->setFrom([$param["fromMail"] => $param["from"]])/*'subscriptionsys@gmail.com' => 'مرتحل'*/
        ->setTo([$param["toMail"] => $param["to"]])
        ->setSubject($param["subject"])
        ->deliver($param["mailBody"]);
        }catch(SocketException  $q){
            return $q ; 
        }
    }

    ///////////////////
  
  
      
}
