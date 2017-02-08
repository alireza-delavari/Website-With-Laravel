@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div class="container mainItemContainer">
        <a title="image">
            <img class="thumbnail" style="width: 100%;max-height: 400px" data-title="{{$image or '0'}}"
                 src="{{$image}}">
        </a>
        <div class="row">
            <div class="productInfo table-responsive col-md-6 col-sm-12 col-xs-12">
                <div class="generalInfo">
                    <h4 class="text-center">عنوان محصول</h4>
                    <table style="background-color: white" class=" table table-striped table-bordered table-hover">
                        <tr>
                            <td>فنی۱</td>
                            <td>فنی۱</td>
                        </tr>
                        <tr>
                            <td>فنی۲</td>
                            <td>فنی2</td>
                        </tr>
                        <tr>
                            <td>فنی3</td>
                            <td>فنی3</td>
                        </tr>
                        <tr>
                            <td>فنی3</td>
                            <td>فنی3</td>
                        </tr>
                        <tr>
                            <td>فنی3</td>
                            <td>فنی3</td>
                        </tr>
                        <tr>
                            <td>فنی3</td>
                            <td>فنی3</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{--<div class="clearfix hidden-md hidden-lg"></div>--}}
            <div class="col-md-6 col-sm-12 col-xs-12 ">
                <div class="generalInfo">
                    <form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-4 col-xs-12 control-label">نام و نام خانوادگی</label>
                            <div class="col-sm-8 col-xs-12">
                                <input type="text" class="form-control" name="inputName" value="{{old('inputName')}}" id="inputName"
                                       placeholder="نام و نام خانوادگی">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMeter" class="col-sm-4 col-xs-12 control-label">متراژ مورد نیاز</label>
                            <div class="col-sm-8 col-xs-12">
                                <input type="number" class="form-control" name="inputMeter" value="{{old('inputMeter')}}" id="inputMeter"
                                       placeholder="متراژ مورد نیاز">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone" class="col-sm-4 col-xs-12 control-label">شماره تماس</label>
                            <div class="col-sm-8 col-xs-12">
                                <input type="tel" class="form-control" name="inputPhone" value="{{old('inputPhone')}}" id="inputPhone"
                                       placeholder="شماره تماس">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-4 col-xs-12 control-label">ایمیل</label>
                            <div class="col-sm-8 col-xs-12">
                                <input type="email" class="form-control" name="inputEmail" value="{{old('inputEmail')}}" id="inputEmail"
                                       placeholder="ایمیل">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="col-sm-4 col-xs-12 control-label">آدرس</label>
                            <div class="col-sm-8 col-xs-12">
                            <textarea class="form-control" name="inputAddress" value="{{old('inputAddress')}}" id="inputAddress" rows="3"
                                      placeholder="آدرس"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCaptcha" class="col-sm-4 col-xs-12 control-label">کد امنیتی</label>
                            <div id="captcha_holder" class="col-sm-8 col-xs-12">
                                {!! captcha_image_html('ExampleCaptcha') !!}
                                <input type="text" class="form-control" required="required" name="CaptchaCode" style="margin-top: 3px" id="CaptchaCode"
                                       placeholder="کد امنیتی">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8 col-xs-12">
                                <button type="submit" id="formSubmit" class="btn btn-success btn-block">ارسال</button>
                                <div class="formLoading" style="text-align: center;display: none">
                                    <img src="/img/loading.gif">
                                </div>
                                @if(isset($sendResult))
                                    @if($sendResult)
                                        <p style="margin-top: 10px; text-align: center" class="alert alert-success">ارسال شد</p>
                                    @endif
                                    @if(!$sendResult)
                                        <p style="margin-top: 10px;text-align: center" class="alert alert-danger">ارسال نشد</p>
                                    @endif
                                @endif
                                @if (count($errors) > 0)
                                    <div style="margin-top: 5px; " class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="list-style: none">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection