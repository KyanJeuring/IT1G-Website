<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('vendor/autoload.php');

$mailer = new Mailer();

class Mailer
{
    private $mail;

    function __construct()
    {
        // SMTP server settings
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.gmail.com';              // Set Gmail SMTP server
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'sunny.socks.real@gmail.com';    // Your Gmail address
        $this->mail->Password = 'zcjj izdw brla jepo';             // Your Gmail password or App Password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
        $this->mail->Port = 587;                                   // TCP port for TLS    
    }

    public function sendReceipt($order)
    {
        try 
        {
            // Email settings
            $this->mail->setFrom($this->mail->Username, 'SunnySocks');
            $this->mail->addAddress($order->email, $order->firstName." ".$order->lastName); // Recipient's email and name
            $this->mail->Subject = 'Sunny socks order receipt';
            $this->mail->Body    = $order->totalPrice;
            
            // Send the email
            $this->mail->send();
            return true;
        } 
        catch (Exception $e) 
        {
            return false;    
        }
    }    
}
?>