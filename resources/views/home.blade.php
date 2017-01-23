@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="slider container-fluid">
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
    <hr class="bigHr">
    <div class="container specialNews">
        <div class="itemContainer">
            <div class="item">
                <h4>محصولات شرکت</h4>
            </div>
            <div class="item">
                <h4>item2</h4>
            </div>
            <div class="item">
                <h4>اطلاعات تماس</h4>
            </div>
        </div>
    </div>
    <hr class="bigHr">
    <div class="container">
        <div class="itemContainer">
            <p>اخبار ویژه</p>
            <a href="#">
                <div class="item">
                    <img src="/img/(1).jpg">
                    <h4>تیتر خبر1</h4>
                </div>
            </a>
            <div class="item">
                <img src="/img/(2).jpg">
                <h4>تیتر خبر2</h4>
            </div>
            <div class="item">
                <img src="/img/(3).jpg">
                <h4>تیتر خبر3</h4>
            </div>
        </div>
    </div>
    <br>
    <hr class="bigHr">
    <div class="container">
        <div class="itemContainer">
            <p>محصولات شرکت</p>
            <a href="#">
                <div class="item">
                    <img src="/img/(1).jpg">
                </div>
            </a>
            <div class="item">
                <img src="/img/(2).jpg">
            </div>
            <div class="item">
                <img src="/img/(3).jpg">
            </div>
            <div class="item">
                <img src="/img/(3).jpg">
            </div>
        </div>
    </div>
    <p>This is my body content.</p>

@endsection