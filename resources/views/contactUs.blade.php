@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    <div class="container mainItemContainer">
        <div class="row">
            <div class="col-md-6">
                <form class="callusForm" action="SendEmail.php" method="post">
                    <table >
                        <tr>
                            <th>نام و نام خانوادگی:</th>
                            <td>
                                <input type="text" name="name" placeholder="نام و نام خانوادگی"></td>
                        </tr>
                        <tr>
                            <th>شماره تماس:</th>
                            <td>
                                <input type="text" name="phonenumber" placeholder="شماره تماس"></td>
                        </tr>
                        <tr>
                            <th>ایمیل:</th>
                            <td>
                                <input type="email" name="email" placeholder="ایمیل"></td>
                        </tr>
                        <tr>
                            <th>موضوع:</th>
                            <td>
                                <select name="subject">
                                    <option value="subject1">موضوع 1</option>
                                    <option value="subject2">موضوع 2</option>
                                    <option value="subject3">موضوع 3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>توضیحات:</th>
                            <td>
                                <textarea name="description"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>کد امنیتی</th>
                            <td>
                                <!--<img alt="captcha" width="250px" src="img/cpatcha/1.png"> -->
                                <input type="text" readonly id="txtCaptcha">
                                <input type="button" id="btnrefresh" onclick="GenerateCaptcha();" value="دوباره">
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input id="txtCompare" type="text" name="captcha" placeholder="کد امنیتی"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="ارسال" onclick="alert(ValidCaptcha());">
                                <input type="reset" value="پاک کردن"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-md-6">

            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@endsection
