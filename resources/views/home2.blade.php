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
                <div class="myItem myItemBorder">
                    <h4>محصولات شرکت</h4>
                    <div class="myItem2">
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
                        <p>
                            item5
                        </p>
                    </div>
                </div>
                <div class="myItem myItemBorder">
                    <h4>item2</h4>
                    <div class="myItem2">
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
                        <p>
                            item5
                        </p>
                    </div>
                </div>
                <div class="myItem myItemBorder">
                    <h4>اطلاعات تماس</h4>
                    <div class="myItem2">
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
                        <p>
                            item5
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bigHr">
        <div class="container2">
            <div class="myItemContainer">
                <p>اخبار ویژه</p>

                <div class="myItem">
                    <a href="#">
                        <img class="img-thumbnail blur" src="/img/(1).jpg">
                        <h4>تیتر خبر1</h4>
                    </a>
                </div>

                <div class="myItem">
                    <a href="#">
                        <img class="img-thumbnail blur" src="/img/(2).jpg">
                        <h4>تیتر خبر2</h4>
                    </a>
                </div>
                <div class="myItem">
                    <a href="#">
                        <img class="img-thumbnail blur" src="/img/(3).jpg">
                        <h4>تیتر خبر3</h4>
                    </a>
                </div>

            </div>
        </div>
        <br>
        <hr class="bigHr">
        <div class="container2">
            <div class="myItemContainer">
                <p>محصولات شرکت</p>

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
    </div>
@endsection