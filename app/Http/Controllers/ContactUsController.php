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

    function agent()
    {
        $isAgent=true;
        return view('contactUs',compact('isAgent'));
    }

    function sendEmail(Request $request)
    {

        require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

        $code = $request->input('CaptchaCode');
        $isHuman = captcha_validate($code);
        if (!$isHuman) {
            $messages = [
                'CaptchaCode.required' => 'فیلد "کد امنیتی" خالی است.',
                'CaptchaCode.valid_captcha' => 'فیلد "کد امنیتی" معتبر نیست.',
            ];

            $rules = [//inputPhone,inputEmail,inputAddress,CaptchaCode
                'CaptchaCode' => 'bail|required|valid_captcha',
            ];

            $this->validate($request, $rules, $messages);
        }

        $messages = [
            'name.required' => 'فیلد "نام و نام خانوادگی" خالی است.',
            'email.required' => 'فیلد "ایمیل" خالی است.',
            'email.email' => 'فیلد "ایمیل" معتبر نیست.',
            'phonenumber.numeric' => 'فیلد "شماره تماس" معتبر نیست.',
            'phonenumber.regex' => 'فیلد "شماره تماس" معتبر نیست.',
            'phonenumber.required' => 'فیلد "شماره تماس" خالی است.',
            'description.required' => 'فیلد "توضیحات" خالی است.',
            'description.max' => 'فیلد "توضیحات" باید کمتر از :max کاراکتر باشد.',
            'subject.required' => 'فیلد "موضوع" خالی است.',
        ];

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required|max:600',
            'phonenumber' => 'required|numeric|regex:/^(0)[0-9]{10}$/',
            'subject' => 'required|not_in:-1',
        ];
        $this->validate($request, $rules, $messages);


        $senderFrom = $request["email"];//$_POST["email"];
        $senderName = $request["name"];//$_POST["name"];
        $senderDescription = $request["description"];//$_POST["description"];
        $senderSubject = $request["subject"];//$_POST["description"];
        $senderNumber = $request["phonenumber"];//$_POST["phonenumber"];
        $senderFile = $request["fileAttachmet"];//$_POST["phonenumber"];
//        $sss = $request->file('fileAttachmet');
//        $bbb ='File Name: '.$sss->getClientOriginalName().'    File Real Path: '.$sss->getRealPath();
//        $ccc=$sss.".".$sss->getClientOriginalExtension();
//        return ($bbb);

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
        //$mail->addAddress($senderFrom);
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //fileAttachmet
        //$mail->addAttachment($senderFile);


        $ext = pathinfo($_FILES['fileAttachmet']['name'], PATHINFO_EXTENSION);
        $acceptExt = array("jpg", "rar", "zip");
        //$acceptFileName="":  return redirect()->back()->withErrors(['erorr'=>'Somthing went wrong'])->withInput();
        if ($_FILES['fileAttachmet']['name'] != "" && ($_FILES['fileAttachmet']['size'] > 6000000 || !in_array($ext, $acceptExt))) {
            return redirect()->back()->withErrors(['error' => 'فایل انتخاب شده معتبر نیست'])->withInput();
        }
        elseif ($_FILES['fileAttachmet']['name'] != "") {
            // First handle the upload
            // Don't trust provided filename - same goes for MIME types
            // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
            $uploadFile = tempnam(sys_get_temp_dir(), sha1($_FILES['fileAttachmet']['name']));
            if (move_uploaded_file($_FILES['fileAttachmet']['tmp_name'], $uploadFile)) {
                // Upload handled successfully
                // Now create a message
                // This should be somewhere in your include_path
                $mail->addAttachment($uploadFile, 'My uploaded file');
            }
        }
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //$mail->isHTML(true);                                  // Set email format to HTML
        $emailView = \View::make('emails/email2', compact('senderName', 'senderNumber', 'senderFrom', 'senderDescription'))->render();
        $mail->CharSet = "UTF-8";
        $sSubject="subject";
        switch ($senderSubject){
            case 1:
                $sSubject="اعطای نمایندگی";
                break;
            case 2:
                $sSubject="پیشنهاد";
                break;
            case 3:
                $sSubject="انتقاد";
                break;
            default:
                $sSubject="موضوع";
        }
        $mail->Subject = $sSubject;//$senderName . "  " . $senderNumber;
        $mail->Body = $emailView;//$senderDescription;
        $mail->AltBody = $emailView;//'This is the body in plain text for non-HTML mail clients';

        $sendResult = false;
        if (!$mail->send()) {
            $sendResult = false;
//            echo 'Message could not be sent.';
//            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $sendResult = true;
//            echo 'Message has been sent';
        }
        $data['sendResult'] = $sendResult;
        return view('contactUs', $data);
    }
}
