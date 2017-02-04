<html>
<head>
    <style>

        body {
            direction: rtl;
            background-color: #2196F3;
            /*color: #424242;*/
            color: #E0E0E0;

        }

        .bodyClass {
            direction: rtl;
            background-color: #2196F3;
            /*color: #424242;*/
            color: #E0E0E0;

        }

        .mainText {
            background-color: #424242;
        }

        table {
            width: 100%;
        }

        .tableSides {
            width: 20%;
        }

        .header {
            width: 100%;
            background-color: #222;
            height: 50px;
            text-align: center;
            padding-top: 10px;
            font-size: 30px;
        }

        footer {
            width: 100%;
            background-color: #222;
            text-align: center;
        }

        .footerInfo {
            background-color: #222;
            color: #E0E0E0;
            text-align: center;
            width: 33%;

        }
    </style>
</head>
<title>
    عنوان
</title>
<body>
<div class="bodyClass">
    <div class="header">
        ایزوگام شرق
        <img src="http://bayanbox.ir/view/6446262725355449426/Avalin-o-akharin-eshgh3.png" style="width: 30px;height: 30px"/>
    </div>
    <table>
        <tr>
            <th class="tableSides"></th>
            <th>
                <div class="mainText">
                    کاربر گرامی جناب اقای {{$senderName}}
                    <br>
                    پیام شما با محتوای زیر دریافت شد
                    <pre style="margin: 15px !important;padding 15px !important;text-align: right !important;background-color: #616161">{{$senderDescription}}</pre>
                    <br>
                    پس از بررسی با شماره‌ی {{$senderNumber}} تماس گرفته میشود
                </div>
            </th>
            <th class="tableSides"></th>

        </tr>

    </table>
    <footer>
        <table>
            <tr>
                <td class="footerInfo">alirezadl.73@gmail.com</td>
                <td class="footerInfo">alirezadl.73@gmail.com</td>
                <td class="footerInfo">alirezadl.73@gmail.com</td>

            </tr>

        </table>
    </footer>
</div>
</body>
</html>