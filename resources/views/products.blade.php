@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    <div class="container mainItemContainer">
        <div class="myItemContainer">
            <p> محصولات </p>
            <div class="myItem productImg">
                <a title="image">
                    <img class="thumbnail blur" data-title="image" src="/img/gallery1/(1).jpg">
                </a>
            </div>
            <div class="myItem productImg">
                <a title="image">
                    <img class="thumbnail blur" data-title="image" src="/img/gallery1/(2).jpg">
                </a>
            </div>
            <div class="myItem productImg">
                <a title="image">
                    <img class="thumbnail blur" data-title="image" src="/img/gallery1/(1).jpg">
                </a>
            </div>
            <div class="myItem productImg">
                <a title="image">
                    <img class="thumbnail blur" data-title="image" src="/img/gallery1/(2).jpg">
                </a>
            </div>
            <div class="myItem productImg">
                <a title="image">
                    <img class="thumbnail blur" data-title="image" src="/img/gallery1/(3).jpg">
                </a>
            </div>
            <div class="myItem productImg">
                <a title="image">
                    <img class="thumbnail blur" data-title="image" src="/img/gallery1/(4).jpg">
                </a>
            </div>

            <div class="productDescriptor">
                <div class="productDescriptorImage col-md-3 col-sm-12 col-xs-12">

                </div>
                <div class="productDescriptorText col-md-9 col-sm-12 col-xs-12">

                </div>
            </div>

        </div>
    </div>


@endsection