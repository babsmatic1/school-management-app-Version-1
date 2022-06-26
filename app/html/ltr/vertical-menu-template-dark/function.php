<?php
//Include required php mailer
require 'include/PHPMailer.php';
require 'include/SMTP.php';
require 'include/Exception.php';
require 'include/OAuth.php';
//Define name spaces
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function send_message(string $to = null, $body, $head = "Scolarix", $title)
{
    //Create instance of phpmailer
    $mail = new PHPMailer();
    //Set mailer to use smtp
    $mail->isSMTP();
    //define smtp host
    $mail->Host = "smtp.gmail.com";
    //enable smtp authentication
    $mail->SMTPAuth = true;
    //set type of enccryption
    $mail->SMTPSecure = "tls";
    //set port to connect smtp
    $mail->Port = 587;
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Priority = 1;
    //set gmail username
    $mail->Username = "devcarle@gmail.com";
    //set gmail password
    $mail->Password = "arycysrkbhderyzd";
    //set email subject
    $mail->Subject = $title;
    //set sender email
    $mail->SetFrom("devcarle@gmail.com", $head);
    //Enable HTML
    $mail->isHTML(true);
    //Email attachement
    $mail->addAttachment('');
    //email body
    $mail->Body = $body;
    //add recipient
    $mail->addAddress($to);
    //finally send mail
    $mail->Send();
    //closing smtp connection
    $mail->smtpClose();
    # code...
}

function cachewrite($cachename, $content)
{
    $cacheFile = "cache".DIRECTORY_SEPARATOR.sha1($cachename);
    $handle = fopen($cacheFile, 'a');
    fwrite($handle, $content);
    fclose($handle);
    return;
    # code...
}

function cacheread($cachename, $maxAge=0, $deleteExpired = true){
    $cacheFile = "cache".DIRECTORY_SEPARATOR.sha1($cachename);
    if (file_exists($cacheFile)) {
        if ($maxAge == 0 || (time() - filemtime($cacheFile)) <= $maxAge) {
            return file_get_contents($cacheFile);
            # code...
        }elseif ($deleteExpired) {
            unlink($cacheFile);
            # code...
        }
        # code...
    }
    return null;
}


function getcache($page, $cacheMaxage = 86400 * 365){
    $cacheData = cacheread($page, $cacheMaxage);

    if ($cacheData !=null) {
        echo $cacheData;
        # code...
    }else {
        ob_start();
        include $page;
        $page_content = ob_get_contents();
        cachewrite($page, $page_content);
        ob_end_flush();
    }
}