<?php
  class phpMailer{
    public $mailto, $subject, $message, $headers, $mailyou;
    
    public function __construct($mail, $subj, $mex, $you){
      $this->mailto = $mail;
      $this->subject = $subj;
      $this->message = wordwrap($mex, 70); 
      $this->headers = "From: " .$you ."\r\n" ."Reply-To: " .$you ."\r\n" ."Mailer: PHP/" .phpversion(); 
      $this->mailyou = $you;
      
      $res = $this->validate(); 
      if($res){ die('ajia..'); }; 
      $this->send();
    }
   
    public function send(){
      $res = mail($this->mailto, $this->subject, $this->message, $this->headers);
      echo 'result: ' .$res;
    }
    
    public function validate(){
      $msg='';
      if($this->mailto){
        $mail1 = $this->mailto; 
        $mail1 = filter_var($mail1, FILTER_SANITIZE_EMAIL);
        $mail1 = filter_var($mail1, FILTER_VALIDATE_EMAIL);
        if($mail1 == false){ $msg .= 'The first email address is not valid. ';}
      }
      if($this->mailyou){
        $mail2 = $this->mailyou; 
        $mail2 = filter_var($mail2, FILTER_SANITIZE_EMAIL);
        $mail2 = filter_var($mail2, FILTER_VALIDATE_EMAIL);
        if($mail2 == false){ $msg .= 'The second email address is not valid.';}
      }
      
      return $msg;
    }
  }
  
  $obj1 = new phpMailer('explosivedynamicwork@gmail.com', 'cOZZY World', "Ahaahahah. Beh che vuoi? questo dovrebbe essere il messaggio e lo sto allungando parecchio almeno vedo se mi taglia le righe xD ...vediamo \n se gli\n fun \n zionano. :)",'carroburro19@libero.it');

?>