/**
 * Created by alireza on 1/23/17.
 */
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
    /*
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
    */

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
