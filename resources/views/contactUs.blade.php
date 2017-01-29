@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    <div class="container mainItemContainer">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <form class="callusForm" action="SendEmail.php" method="post">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12" >نام و نام خانوادگی: </div>
                        <div class="col-sm-6 col-xs-12" >
                            <input type="text" name="name" placeholder="نام و نام خانوادگی">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12" >شماره تماس: </div>
                        <div class="col-sm-6 col-xs-12" >
                            <input type="text" name="phonenumber" placeholder="شماره تماس">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12" >ایمیل: </div>
                        <div class="col-sm-6 col-xs-12" >
                            <input type="email" name="email" placeholder="ایمیل">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12" >توضیحات: </div>
                        <div class="col-sm-6 col-xs-12" >
                            <textarea name="description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12" style="text-align: center" >
                            <input type="submit" value="ارسال" >
                            <input type="reset" value="پاک کردن">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="callusinfo">
                    <table>
                        <tr>
                            <th> شماره تماس: </th>
                            <td> 08644223868 </td>
                        </tr>
                        <tr>
                            <th> شماره همراه: </th>
                            <td> 09216252866 </td>
                        </tr>
                        <tr>
                            <th> آدرس پستی: </th>
                            <td> محلات میدان استقلال </td>
                        </tr>
                        <tr>
                            <th> شبکه های اجتماعی: </th>
                            <td>
                                <div class="sharingicons">
                                    <i class="fa fa-facebook-square fa-2x" style="color: #1f648b"  aria-hidden="true"></i>
                                    <i class="fa fa-twitter-square fa-2x" style="color: #2a88bd" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus-square fa-2x" style="color: #c12e2a"  aria-hidden="true"></i>
                                    <i class="fa fa-linkedin-square fa-2x" style="color: #2a88bd"  aria-hidden="true"></i>
                                    <i class="fa fa-tumblr-square fa-2x" style="color: #1f648b"  aria-hidden="true"></i>
                                    <i class="fa fa-instagram fa-2x" style="color: #2a88bd" aria-hidden="true"></i>
                                    <i class="fa fa-telegram fa-2x" style="color: #2aabd2" aria-hidden="true"></i>
                                    <a href="#" title="facebook" class="facebookicon"></a>
                                    <a href="#" title="twitter" class="twittericon"></a>
                                    <a href="#" title="google" class="googleicon"></a>
                                    <a href="#" title="instagram" class="instagramicon"></a>
                                    <a href="#" title="linkedin" class="linkedinicon"></a>
                                    <a href="#" title="tumblr" class="tumblricon"></a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@endsection
