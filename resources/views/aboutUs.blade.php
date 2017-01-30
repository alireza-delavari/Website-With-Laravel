@extends('layouts.app')

@section('title', 'AboutUs')

@section('content')

    <div class="container mainItemContainer">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="callusinfo">
                    {{-- http://map.parsijoo.ir/API.html?lat=33.91074606699266&lon=50.451604203504374&zoom=17&m=1 --}}
                    {{--<object type='type/html' data='http://map.parsijoo.ir/API.html?lat=33.91074606699266&lon=50.451604203504374&zoom=17&m=1' style="width: 100%;height: 300px;"></object>--}}
                    <iframe src='http://map.parsijoo.ir/API.html?lat=33.91119529388772&lon=50.45237027983929&zoom=16&m=1' style="width: 100%;height: 300px;"></iframe>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="callusinfo aboutCompany">
                    <p class="text-center h4">درباره شرکت</p>
                    <p class="text-right">

                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


@endsection