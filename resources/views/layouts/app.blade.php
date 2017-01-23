<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <title>App Name - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css" >

</head>
<body>

<div >
    <div class="menu">
        <ul>
            <li><a href="#"><i class="fa fa-home" style="font-size: 17px" ></i>صفحه اصلی</a></li>
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

<div class="container-fluid">
    <div class="slider" >
        <div class="slideImg">
            <img class="sliderActive" src="/img/(1).jpg">
        </div>
        <div class="sliderTumbs">
            <a href="#"><img class="tumbActive" src="/img/(1).jpg"></a>
            <a href="#"><img src="/img/(2).jpg"></a>
            <a href="#"><img src="/img/(3).jpg"></a>
            <a href="#"><img src="/img/(4).jpg"></a>
        </div>
    </div>
</div>

@section('sidebar')
    <p>This is the master sidebar.</p>
@show

<div style="height: 1000px" ></div>
<div class="container">
    @yield('content')
</div>

<script>
    $(document).ready(function () {

        //open and close subMneu
        $(".menu li:has(.sub-menu)").mouseenter(function () {
            if ($(this).children(".sub-menu").css("display") == "none")
                $(this).children(".sub-menu").slideDown();//animate({height:'toggle',opacity:'0.5'});
        });
        $(".menu li:has(.sub-menu)").mouseleave(function () {
            $(this).children(".sub-menu").slideUp();
        });

        //stick top Menu
        $(document).scroll(function () {
            if ($(document).scrollTop() >= 50) {
                if (!$(".menu").hasClass("is-sticky")) {
                    $(".menu").slideUp(500, function () {
                        $(".menu").addClass("is-sticky");
                        $(".menu").stop();
                        $(".menu").fadeIn(500);
                    });
                }
            }
            else {
                $(".menu").removeClass("is-sticky");
            }
        });

        //slider
        $(".sliderTumbs a").click(function () {
            if (!$(this).children("img").hasClass("tumbActive"))
            {
                $(".sliderTumbs img").removeClass("tumbActive");
                $(this).children("img").addClass("tumbActive");
                var x=$(this).children("img").attr("src");

                $(".sliderActive").fadeOut(300,function () {
                    $(".sliderActive").attr("src",x);
                    $(".sliderActive").stop();
                    $(".sliderActive").fadeIn(300);
                });
            }
        });
        //Auto Slide
        function autoSlide() {
            var z = $(".sliderTumbs a:has(.tumbActive)");
            z.children("img").removeClass("tumbActive");
            if (z.next()[0] != undefined)
                z.next().children("img").addClass("tumbActive");
            else
                $(".sliderTumbs img").first().addClass("tumbActive");

            $(".sliderActive").fadeOut(300,function () {
                var x = $(".sliderTumbs a:has(.tumbActive)");
                $(".sliderActive").attr("src", x.children("img").attr("src"));
                $(".sliderActive").stop();
                $(".sliderActive").fadeIn(300);
            });

            setTimeout(autoSlide, 6000);
        }
        setTimeout(autoSlide, 6000);


    });
</script>
</body>
</html>