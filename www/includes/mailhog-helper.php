<?php
/**
 * MailHog Helper - Eenvoudige functie om e-mails te versturen via MailHog
 * 
 * Gebruik: sendMailHogEmail('test@example.com', 'Onderwerp', 'Bericht');
 */

function sendMailHogEmail($to, $subject, $body, $from = 'test@curiodevbox.local') {
    $smtpHost = 'mailhog';
    $smtpPort = 1025;
    
    // Maak verbinding met MailHog
    $socket = @fsockopen($smtpHost, $smtpPort, $errno, $errstr, 10);
    
    if (!$socket) {
        return ['success' => false, 'error' => "Kan geen verbinding maken met MailHog: $errstr ($errno)"];
    }
    
    try {
        // Lees welkomstbericht
        fgets($socket, 515);
        
        // Stuur SMTP commando's
        fputs($socket, "EHLO localhost\r\n");
        fgets($socket, 515);
        
        fputs($socket, "MAIL FROM: <{$from}>\r\n");
        fgets($socket, 515);
        
        fputs($socket, "RCPT TO: <{$to}>\r\n");
        fgets($socket, 515);
        
        fputs($socket, "DATA\r\n");
        fgets($socket, 515);
        
        // E-mail headers en body
        $emailData = "From: {$from}\r\n";
        $emailData .= "To: {$to}\r\n";
        $emailData .= "Subject: {$subject}\r\n";
        $emailData .= "Content-Type: text/html; charset=UTF-8\r\n";
        $emailData .= "\r\n";
        $emailData .= $body . "\r\n";
        $emailData .= ".\r\n";
        
        fputs($socket, $emailData);
        fgets($socket, 515);
        
        fputs($socket, "QUIT\r\n");
        fgets($socket, 515);
        
        fclose($socket);
        return ['success' => true];
        
    } catch (Exception $e) {
        fclose($socket);
        return ['success' => false, 'error' => $e->getMessage()];
    }
}

