@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

<div class="container mainItemContainer">

        <div class="myItemContainer">
            <p>گالری ها</p>

            <div class="myItem">
                <a href="{{url("gallery",1)}}">
                    <img class="img-thumbnail blur" src="/img/products/product1.jpg">
                    <h5>گالری ۱</h5>
                </a>
            </div>
            <div class="myItem">
                <a href="{{url("gallery",2)}}">
                    <img class="img-thumbnail blur" src="/img/products/product2.jpg">
                    <h5>گالری ۲</h5>
                </a>
            </div>
            <div class="myItem">
                <a href="{{url("gallery",3)}}">
                    <img class="img-thumbnail blur" src="/img/products/product3.jpg">
                    <h5>گالری ۳</h5>
                </a>
            </div>
            <div class="myItem">
                <a href="{{url("gallery",4)}}">
                    <img class="img-thumbnail blur" src="/img/products/product4.jpg">
                    <h5>گالری ۳</h5>
                </a>
            </div>
        </div>

</div>

@endsection