@extends('layouts.app')

@section('title', 'Page Title')

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
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/img/(1).jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="/img/(2).jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="/img/(3).jpg" alt="Flower">
                </div>

                <div class="item">
                    <img src="/img/(4).jpg" alt="Flower">
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
    </div>




    <hr class="bigHr">
    <div class="container">
        <div class="myItemContainer">
            <div class="myItem">
                <h4>محصولات شرکت</h4>
            </div>
            <div class="myItem">
                <h4>item2</h4>
            </div>
            <div class="myItem">
                <h4>اطلاعات تماس</h4>
            </div>
        </div>
    </div>
    <hr class="bigHr">
    <div class="container">
        <div class="myItemContainer">
            <p>اخبار ویژه</p>
            <a href="#">
                <div class="myItem">
                    <img src="/img/(1).jpg">
                    <h4>تیتر خبر1</h4>
                </div>
            </a>
            <div class="myItem">
                <img src="/img/(2).jpg">
                <h4>تیتر خبر2</h4>
            </div>
            <div class="myItem">
                <img src="/img/(3).jpg">
                <h4>تیتر خبر3</h4>
            </div>
        </div>
    </div>
    <br>
    <hr class="bigHr">
    <div class="container">
        <div class="myItemContainer">
            <p>محصولات شرکت</p>
            <a href="#">
                <div class="myItem">
                    <img src="/img/(1).jpg">
                </div>
            </a>
            <div class="myItem">
                <img src="/img/(2).jpg">
            </div>
            <div class="myItem">
                <img src="/img/(3).jpg">
            </div>
            <div class="myItem">
                <img src="/img/(3).jpg">
            </div>
        </div>
    </div>
@endsection