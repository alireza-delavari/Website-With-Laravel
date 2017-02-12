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
                <div class="myItem3 myItemBorder">
                    <h4>گواهی نامه و افتخارات</h4>
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
                            item4css
                        </p>
                    </div>
                </div>
                <div class="myItem3 myItemBorder">
                    <h4>دسترسی سریع</h4>
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
                <div class="myItem3 myItemBorder">
                    <h4>اطلاعات تماس</h4>
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
        </div>
        <hr class="bigHr">

        <div class="container2">
            <div class="productSliderImgContainer">
                <img src="/img/slider/i3.jpg">
            </div>

            <div class="productSliderAllProducts">
                <div class="carousel slide productSliderAllProductsInner" >
                    <div class="carousel-inner productSliderItemContainer">
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i1.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i3.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i1.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i3.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i1.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i3.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i1.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i3.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i1.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i3.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper"></a></div>
                        <div class="productSliderItem" ><a href="#1"><img src="/img/slider/i2.jpg" alt="tarpaper"></a></div>
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