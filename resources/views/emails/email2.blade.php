<html>
<head>

</head>
<body >
<div style="width: 700px;background-color: #F5F5F5;box-shadow: 3px 1px 20px 1px #9E9E9E;margin:auto;">
<div style="background-color: #424242;height: 200px">
    <h1 style="text-align: center;color:#FAFAFA;padding-top: 75px;">شرکت ایزوگام شرق</h1>
</div>
<div style="background-color: #F5F5F5;padding: 15px">
<p style="direction: rtl;font-family: 'Tahoma'">
    کاربر گرامی {{$senderName or ''}}
    <br><br>
    درخواست شما با مشخصات زیر ثبت شد.
    <br><br>
    شماره تماس :{{$senderNumber or ''}}
    <br><br>
    ایمیل : {{$senderFrom or ''}}
    <br><br>
    @if(isset($senderAddress))
        آدرس : {{$senderAddress or ''}}
        <br><br>
    @endif
</p>
    @if(isset($senderDescription))

    <pre style="direction: rtl;font-family: 'Tahoma'">توضیحات:
{{$senderDescription or ''}}
    </pre>
    @endif
</div>
<footer style="background-color: #424242;text-align: center;padding-top: 10px;padding-bottom: 15px;">

    <small style="text-align: center;color: #F5F5F5">تمامی حقوق متعلق به شرکت داده پژوهان میباشد</small>
</footer>
</div>
</body>
</html>