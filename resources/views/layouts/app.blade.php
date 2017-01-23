<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>App Name - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<div>
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
</div>

<div class="mainContent">
    @yield('content')
</div>

<script src="/js/script.js"></script>
</body>
</html>