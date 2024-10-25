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
        $this->mail->SMTPAuth = true;                           // Set the Authorization to true
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
            $this->mail->addAddress($order->email, $order->firstName . " " . $order->lastName); // Recipient's email and name
            $this->mail->Subject = 'Your Sunny Socks Order Receipt';
            $this->mail->isHTML(true); // Enable HTML formatting for the email
            
            // Construct the HTML email body
            $this->mail->Body = "
                <html>
                <head>
                    <link rel='stylesheet' href='./css/emailFormat.css' type='text/css'>
                </head>
                <body>
                    <main id='emailContainer'>
                        <h2>Thank you for your order, {$order->firstName}!</h2>
                        <p>Here is a summary of your purchase:</p>
        
                        <table>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th style='text-align: right;'>Price</th>
                                </tr>
                            </thead>
                            <tbody>";
                            
                            // Loop through items and add to table
                            foreach ($order->items as $item) {
                                $this->mail->Body .= "
                                <tr>
                                    <td>{$item->name}</td>
                                    <td style='text-align: right;'>\${$item->price}</td>
                                </tr>";
                            }
        
                            $this->mail->Body .= "
                            </tbody>
                        </table>
                        <p class='total'><strong>Total:</strong> \${$order->totalPrice}</p>
                        
                        <p class='thank-you'>If you have any questions about your order, feel free to reply to this email.</p>
                        <p>Thank you for choosing Sunny Socks!</p>
                    </main>
                </body>
                </html>
            ";
    
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