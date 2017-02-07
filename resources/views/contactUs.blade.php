@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    <div class="container mainItemContainer">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <form class="callusForm" action="/contactUs" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">نام و نام خانوادگی:</div>
                        <div class="col-sm-6 col-xs-12">
                            <input type="text" class="form-control" name="name" placeholder="نام و نام خانوادگی"
                                   value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">شماره تماس:</div>
                        <div class="col-sm-6 col-xs-12">
                            <input type="tel" class="form-control" name="phonenumber" placeholder="شماره تماس"
                                   value="{{old('phonenumber')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">ایمیل:</div>
                        <div class="col-sm-6 col-xs-12">
                            <input type="email" name="email" class="form-control" required="required"
                                   placeholder="ایمیل"
                                   value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">توضیحات:</div>
                        <div class="col-sm-6 col-xs-12">
                            <textarea name="description" class="form-control">{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">فایل:</div>
                        <div class="col-sm-6 col-xs-12">
                            <label class="btn btn-primary btn-block btnFile">
                                انتخاب فایل
                                <input type="file" style="display:none;" id="fileAttachmet" name="fileAttachmet"
                                       placeholder="فایل"
                                       value="{{old('fileAttachmet')}}">
                                <span class="fa fa-paperclip chooseFileIcon" style="display: none"/>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">کد امنیتی:</div>
                        <div class="col-sm-6 col-xs-12">
                            {!! captcha_image_html('ExampleCaptcha') !!}
                            <input type="text" name="CaptchaCode" id="CaptchaCode" style="margin-top: 3px" class="form-control"
                                   required="required" placeholder="کد امنیتی" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12" style="text-align: center">
                            <input type="submit" class="btn btn-success" id="formSubmit" value="ارسال">
                            <input type="reset" class="btn btn-warning" value="پاک کردن">
                            <div class="formLoading" style="display: none">
                                <img src="/img/loading.gif">
                            </div>
                            @if(isset($sendResult))
                                @if($sendResult)
                                    <p style="margin-top: 10px;" class="alert alert-success">ارسال شد</p>
                                @endif
                                @if(!$sendResult)
                                    <p style="margin-top: 10px;" class="alert alert-danger">ارسال نشد</p>
                                @endif
                            @endif
                            @if (count($errors) > 0)
                                <div style="margin-top: 5px;" class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="callusinfo">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <strong>شماره تماس:</strong>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <p>08644223868</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <strong>شماره همراه:</strong>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <p>09216252866</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <strong> آدرس پستی:</strong>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <p>محلات - میدان استقلال</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <strong> شبکه های اجتماعی:</strong>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="sharingicons">
                                <i class="fa fa-facebook-square fa-2x" style="color: #1f648b"
                                   aria-hidden="true"></i>
                                <i class="fa fa-twitter-square fa-2x" style="color: #2a88bd" aria-hidden="true"></i>
                                <i class="fa fa-google-plus-square fa-2x" style="color: #c12e2a"
                                   aria-hidden="true"></i>
                                <i class="fa fa-linkedin-square fa-2x" style="color: #2a88bd"
                                   aria-hidden="true"></i>
                                <i class="fa fa-tumblr-square fa-2x" style="color: #1f648b" aria-hidden="true"></i>
                                <i class="fa fa-instagram fa-2x" style="color: #2a88bd" aria-hidden="true"></i>
                                <i class="fa fa-telegram fa-2x" style="color: #2aabd2" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    {{--<table>--}}
                    {{--<tr>--}}
                    {{--<th> شماره تماس:</th>--}}
                    {{--<td> 08644223868</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<th> شماره همراه:</th>--}}
                    {{--<td> 09216252866</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<th> آدرس پستی:</th>--}}
                    {{--<td> محلات میدان استقلال</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<th> شبکه های اجتماعی:</th>--}}
                    {{--<td>--}}
                    {{--<div class="sharingicons">--}}
                    {{--<i class="fa fa-facebook-square fa-2x" style="color: #1f648b"--}}
                    {{--aria-hidden="true"></i>--}}
                    {{--<i class="fa fa-twitter-square fa-2x" style="color: #2a88bd" aria-hidden="true"></i>--}}
                    {{--<i class="fa fa-google-plus-square fa-2x" style="color: #c12e2a"--}}
                    {{--aria-hidden="true"></i>--}}
                    {{--<i class="fa fa-linkedin-square fa-2x" style="color: #2a88bd"--}}
                    {{--aria-hidden="true"></i>--}}
                    {{--<i class="fa fa-tumblr-square fa-2x" style="color: #1f648b" aria-hidden="true"></i>--}}
                    {{--<i class="fa fa-instagram fa-2x" style="color: #2a88bd" aria-hidden="true"></i>--}}
                    {{--<i class="fa fa-telegram fa-2x" style="color: #2aabd2" aria-hidden="true"></i>--}}
                    {{--</div>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--</table>--}}
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@endsection
