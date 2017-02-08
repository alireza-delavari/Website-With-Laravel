@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    <div class="container mainItemContainer">
        <div class="myItemContainer">
            <p> محصولات </p>

            {{--@foreach($products as $product)--}}
            {{--<div class="myItem productImg">--}}
            {{--<a title="image" data-title="{{url("products",$product["id"])}}" >--}}
            {{--<img class="thumbnail blur" data-title="{{$product["description"] or "default"}}" src="{{$product["image"] or "default.jpg"}}">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--@endforeach--}}

            @foreach($products as $product)
                <div class="productDescriptor">
                    <div class="productDescriptorImage col-md-3 col-sm-12 col-xs-12">
                        <div class="myItem productImg">
                            <a title="image" href="{{url("products",$product["id"])}}"
                               data-title="{{url("products",$product["id"])}}">
                                <img class="thumbnail blur" data-title="{{$product["description"] or "default"}}"
                                     src="{{$product["image"] or "default.jpg"}}">
                            </a>
                        </div>
                    </div>
                    <div class="productDescriptorText col-md-9 col-sm-12 col-xs-12">
                        <p>
                            {!!  $product["description"] or "default"!!}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach

            {{--<div class="productDescriptor">--}}
            {{--<div class="productDescriptorImage col-md-3 col-sm-12 col-xs-12">--}}

            {{--</div>--}}
            {{--<div class="productDescriptorText col-md-9 col-sm-12 col-xs-12">--}}

            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        </div>
    </div>


@endsection