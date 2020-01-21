<?php
require ("./sendgrid-php/sendgrid-php.php");

class Sendmail{
    private $api_key = "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";
    
    

    public function send($mail, $user, $subject, $body){

        $email = new SendGrid\Mail\Mail(); 
        $email->setFrom("nikizhelqzkov@gmail.com", "The Admin of FitnessXZone");
        $email->setSubject($subject);
        $email->addTo($mail, $user);
        $email->addContent("text/plain", $body);
        $email->addContent(
            "text/html", $body);
        $sendgrid = new \SendGrid($this->api_key);
        try {
            $response = $sendgrid->send($email);
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
            return true;
        } catch (Exception $e) {
            $_SESSION['error'] = 'Caught exception: '. $e->getMessage() ."\n";
            return false;
        }
            }   
    
}
