<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    function index()
    {

        return view('contactUs');
    }

    function sendEmail(Request $request){

        require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

        $this->validate($request,[
           'name'=>'required',
            'email'=>'required',
            'description'=>'max:600',
            'phonenumber'=>'required',
        ]);

        $senderFrom=$request["email"];//$_POST["email"];
        $senderName=$request["name"];//$_POST["name"];
        $senderDescription=$request["description"];//$_POST["description"];
        $senderNumber=$request["phonenumber"];//$_POST["phonenumber"];

        $mail = new \PHPMailer();
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';//'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        //user pass
        $mail->Username = 'alireza.delavari2@gmail.com';//'user@example.com';                 // SMTP username
        $mail->Password = "alireza09216252866";                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;//465; //587;                                    // TCP port to connect to

        $mail->setFrom($senderFrom, $senderName);
        //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress('alirezadl.73@gmail.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //$mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $senderName."  ".$senderNumber;
        //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->Body= $senderDescription;
        $mail->AltBody = $senderDescription;//'This is the body in plain text for non-HTML mail clients';

        $sendResult=false;
        if(!$mail->send()) {
            $sendResult=false;
//            echo 'Message could not be sent.';
//            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $sendResult=true;
//            echo 'Message has been sent';
        }
        $data['sendResult']=$sendResult;
        return view('contactUs',$data);

        //return view('contactUs');
    }
}
