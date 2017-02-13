@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{--<div class="slider container-fluid">--}}
    {{--<div class="slideImg">--}}
    {{--<img class="sliderActive" src="/img/(1).jpg">--}}
    {{--</div>--}}
    {{--<div class="sliderTumbs">--}}
    {{--<a href="#"><img class="tumbActive" src="/img/(1).jpg"></a>--}}
    {{--<a href="#"><img src="/img/(2).jpg"></a>--}}
    {{--<a href="#"><img src="/img/(3).jpg"></a>--}}
    {{--<a href="#"><img src="/img/(4).jpg"></a>--}}
    {{--</div>--}}
    {{--</div>--}}




    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img/slider/i1.jpg" alt="tarpaper">
            </div>

            <div class="item">
                <img src="/img/slider/i2.jpg" alt="tarpaper">
            </div>

            <div class="item">
                <img src="/img/slider/i3.jpg" alt="tarpaper">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="container mainItemContainer">
        <hr class="bigHr">
        <div class="container2">
            <div class="myItemContainer">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="myItem3 myItemBorder">
                        <h4>گواهی نامه و افتخارات</h4>
                        <hr>
                        <div>
                            <p>
                                item1
                            </p>
                            <p>
                                item2
                            </p>
                            <p>
                                item3
                            </p>
                            <p>
                                item4
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="myItem3 myItemBorder">
                        <h4>ارتباط سریع</h4>
                        <hr>
                        <div>
                            <p>
                                item1
                            </p>
                            <p>
                                item2
                            </p>
                            <p>
                                item3
                            </p>
                            <p>
                                item4
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="myItem3 myItemBorder">
                        <h4>درخواست نمایندگی</h4>
                        <hr>
                        <div>
                            <p>توضیحات</p>
                            <a href="/contactUs/agent" class="btn btn-block btn-success">درخواست نمایندگی</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <hr class="bigHr">

        <div class="container2" style="border: solid 1px black;padding: 15px;border-radius: 3px">
            <h3 style="text-align: center">معرفی شرکت</h3>
            <p class="text-justify">
                یک برنامه‌نویس، برنامه‌نویس رایانه، توسعه‌دهنده، کدنویس، یا مهندس نرم‌افزار کسی است که نرم‌افزار رایانه می‌نویسد. عبارت برنامه‌نویس رایانه می‌تواند به یک متخصص در زمینه‌ای از برنامه‌نویسی یا یک شخص دارای سررشته که برای بسیاری از گونه‌های نرم‌افزار کد می‌نویسد اشاره کند. شخصی که یک روش رسمی برای برنامه‌نویسی تمرین یا تدریس می‌کند همچنین می‌تواند به عنوان یک تحلیل‌گر برنامه‌نویس شناخته شود. زبان برنامه‌نویسی اصلی یک برنامه‌نویس (کوبول، سی، سی++، سی شارپ، جاوا، لیسپ، پایتون، غیره) اغلب دارای پیشوندی به این نام‌ها است، و کسانی که در محیط وب کار می‌کنند اغلب عنوان‌هایشان را با پیشوند وب می‌نویسند. عبارت برنامه‌نویس می‌تواند برای اشاره به یک توسعه‌دهنده نرم‌افزار، توسعه‌دهنده وب، توسعه‌دهندهٔ اپلیکیشن‌های تلفن همراه، توسعه‌دهندهٔ سفت‌افزار تعبیه‌شده، مهندس نرم‌افزار، دانشمند رایانه یا تحلیل‌گر نرم‌افزار به کار برده‌ شود
            </p>
        </div>


        <hr class="bigHr">

        <div class="container2">
            <h3 style="text-align: center">محصولات شرکت</h3>
            <div class="myItemContainer">

                <div class="myItem">
                    <a href="#">
                        <img class="img-thumbnail blur" src="/img/products/product1.jpg">
                        <h5>پشم شیشه</h5>
                    </a>
                </div>
                <div class="myItem">
                    <a href="#">
                        <img class="img-thumbnail blur" src="/img/products/product2.jpg">
                        <h5>مهتاب شرق</h5>
                    </a>
                </div>
                <div class="myItem">
                    <a href="#">
                        <img class="img-thumbnail blur" src="/img/products/product3.jpg">
                        <h5>قمر شرق</h5>
                    </a>
                </div>
                <div class="myItem">
                    <a href="#">
                        <img class="img-thumbnail blur" src="/img/products/product4.jpg">
                        <h5>ماهان گستر</h5>
                    </a>
                </div>
            </div>
        </div>

        <hr class="bigHr">

        <div class="container2">
            <h3 style="text-align: center" >پروژه های انجام شده</h3>
            <div class="productSliderImgContainer">
                <img src="/img/slider/i1.jpg">
            </div>

            <div class="productSliderAllProducts">
                <div class="carousel slide productSliderAllProductsInner">
                    <div class="carousel-inner productSliderItemContainer">
                        <div class="productSliderItem prductItemactive">
                            <a href="#1">
                                <img src="/img/slider/i1.jpg" alt="tarpaper">
                                <p>
                                    پروژه۱
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i3.jpg" alt="tarpaper">
                                <p>
                                    پروژه2
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper">
                                <p>
                                    پروژه3
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i1.jpg" alt="tarpaper">
                                <p>
                                    پروژه4
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i3.jpg" alt="tarpaper">
                                <p>
                                    پروژه5
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper">
                                <p>
                                    پروژه6
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper">
                                <p>
                                    پروژه6
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper">
                                <p>
                                    پروژه6
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper">
                                <p>
                                    پروژه6
                                </p>
                            </a>
                        </div>
                        <div class="productSliderItem"><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper">
                                <p>
                                    پروژه6
                                </p>
                            </a>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#prev" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#next" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection