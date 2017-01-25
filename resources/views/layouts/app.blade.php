<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>App Name - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font/font-awesome-4.7.0/css/font-awesome.min.css">

    <link href="/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

{{--<div>
    <div class="menu is-sticky container-fluid">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home" style="font-size: 17px"></i>صفحه اصلی</a></li>
                <li><a href="#"> اطلاعات فنی </a></li>
                <li><a href="#"> گالری تصاویر </a></li>
                <li><a href="#"> اعطای نمایندگی </a></li>
                <li><a href="#"> ارتباط با ما </a></li>
                <li><a href="#"> Item3</a>
                    <ul class="sub-menu">
                        <li><a href="#">sub-Item1</a></li>
                        <li><a href="#">sub-Item2222222</a></li>
                        <li><a href="#">sub-Item3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>--}}

<div class="topInfoBar" >
    <div class="col-sm-3 hidden-xs">
        info@gmail.com
    </div>
    <div class="col-sm-6 col-xs-12" >
        برای عضویت در کانال تلگرام کلیک کنید
    </div>
    <div class="col-sm-3 hidden-xs" ></div>
</div>


<nav class="navbar navbar-inverse container-fluid" data-spy="affix" data-offset-top="50" >
    <div class="container">
        <div class="navbar-header navbar-right">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="Brand" class="menuLogo" src="/img/Logo2.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-nav-rtl navbar-right">
                <li class="active"><a href="#"><i class="fa fa-home" style="font-size: 17px"></i><span class="menuText">صفحه اصلی</span><span
                                class="sr-only">(current)</span></a></li>
                <li><a href="#">اطلاعات فنی </a></li>
                <li><a href="#">محصولات </a></li>
                <li><a href="#">گالری تصاویر </a></li>
                <li><a href="#">اعطای نمایندگی </a></li>
                <li><a href="#">ارتباط با ما </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">درباره ما <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">زیر منوی اول</a></li>
                        <li><a href="#">زیر منوی دوم</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">زیر منوی سوم</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>


<div class="mainContent">
    @yield('content')
</div>


<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <p class="footerTextTitles">اطلاعات تماس</p>
                <hr>
                <div class="footerColumn">
                    <p>آدرس:</p>
                    <br>
                    <p>تلفن:</p>
                    <br>
                    <p>ایمیل:</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <p class="footerTextTitles">دسترسی سریع</p>
                <hr>
                <div class="footerColumn">
                    <a href="#">صفحه اصلی</a>
                    <br>
                    <a href="#">ارتباط با ما</a>
                    <br>
                    <a href="#">تماس با ما</a>
                    <br>
                    <a href="#">اخبار</a>
                </div>
            </div>
            <div class="clearfix visible-sm visible-xs"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <p class="footerTextTitles">خبرنامه</p>
                <hr>
                <div class="footerColumn">
                    <p> برای عضویت در خبرنامه ایمیل خود را ثبت کنید. </p>
                    <form method="get" action="#" >
                        <input name="email" type="email">
                        <input type="submit" value="ثبت نام">
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <p class="footerTextTitles">برنامه ها</p>
                <hr>
                <div class="footerColumn">
                    <a href="#">ایزوگام شرق</a>
                    <br>
                    <a href="#">ایزوگام دلیجان</a>
                    <br>
                    <a href="#">ایزوگام مرکزی</a>
                </div>
            </div>
        </div>
        <hr class="hr2">
        <div class="row">
            <div class="bottomCopyRight" >
                <div class="col-sm-3 hidden-xs">
                </div>
                <div class="col-sm-6 col-xs-12" >
                    <p>کلیه حقوق این سایت متعلق به شرکت x میباشد</p>
                </div>
                <div class="col-sm-3 col-xs-12" >
                    info@gmail.com
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>