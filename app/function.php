<?php 
// * scolaricx
//  *
//  * An open source application development framework for PHP
//  *
//  * This content is released under the MIT License (MIT)
//  *
//  * Copyright (c) 2002 - 2022, Personnal project
//  *
//  * Permission is hereby granted, free of charge, to any person obtaining a copy
//  * of this software and associated documentation files (the "Software"), to deal
//  * in the Software without restriction, including without limitation the rights
//  * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
//  * copies of the Software, and to permit persons to whom the Software is
//  * furnished to do so, subject to the following conditions:
//  *
//  * The above copyright notice and this permission notice shall be included in
//  * all copies or substantial portions of the Software.
//  *
//  * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
//  * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
//  * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
//  * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
//  * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
//  * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
//  * THE SOFTWARE.
//  *
//  * @package	scolaricx
//  * @author	carelii dev
//  * @copyright	Copyright (c) 2020 - 2022, Carleii, Inc. (https://github.com/carleii)
//  * @license	http://opensource.org/licenses/MIT	MIT License
//  * @link	http://scolaricx.lescigales.org/
//  * @since	Version 1.0.0
//  * @filesource
//  */
?><?php
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


function send_message(string $to = null, $body, $title, $head = "Scolaricx")
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