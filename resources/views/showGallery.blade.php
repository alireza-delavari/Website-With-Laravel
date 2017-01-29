@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    <div class="container mainItemContainer">
        <div class="myItemContainer">
            <p> {{  $galleryId or 'Default' }} </p>

            @foreach($images as $image)
                @break($loop->index==5)

                <div class="myItem">
                    {{--<a href="/img/gallery{{$galleryId or '0'}}/{{$image}}" >--}}
                    <a href="#" title="image">
                        <img class="thumbnail blur" data-title="{{$image or '0'}}" src="/img/gallery{{$galleryId or '0'}}/{{$image or '(0).jpg' }}">
                    </a>
                </div>
                {{--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">--}}
                {{--<a title="Image {{$galleryId}}" href="/img/gallery{{$galleryId or '0'}}/{{$image}}" target="_blank">--}}
                {{--<img class="thumbnail img-responsive" src="/img/gallery{{$galleryId or '0'}}/{{$image or '(0).jpg' }}">--}}
                {{--</a>--}}
                {{--</div>--}}
            @endforeach
        </div>
    </div>

    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Heading</h3>
                </div>

                <div class="modal-body">
                    <div class="imageViewer col-xs-10">

                    </div>
                    <div class="allImages col-xs-2">
                        @foreach($images as $image)
                            <div>
                                <a href="#" title="image">
                                    <img class="thumbnail myThumbnail blur img-responsive" data-title="{{$image or '0'}}"
                                         src="/img/gallery{{$galleryId or '0'}}/{{$image or '(0).jpg' }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                </div>

                {{--<div class="modal-footer">--}}
                    {{--<button class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

@endsection