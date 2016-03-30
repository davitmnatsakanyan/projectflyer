@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <h1>{{ $flyer->street }}</h1>
            <p>${{ number_format($flyer->price) }}</p>
            <hr>
            <i>{{ $flyer->description }}</i>
        </div>
        <div class="col-md-9">
            @foreach($flyer->photos->chunk(4) as $set)
                <div class="row">
                    @foreach($set as $photo)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <img class="img-responsive"  src="/{{ $photo->thumbnail_path }}">
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <hr>
    <h2>Add Your Photos</h2>
    <div class="row">
        <div class="col-md-12">
        {!! Form::open(array('url' => $flyer->zip.'/'.$flyer->street.'/photos', 'method' => 'POST', 'class' => 'dropzone', 'id' => 'addPhotosFlyer')) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotosFlyer = {
            paramName: "photo", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            acceptedFiles: '.jpg, jpeg, png'
        }
    </script>
    @endsection
<style>
    h1,h2,h3,h4,h5,h6,div,p,a,li,span{
        transition: all 1s ease;
    }
</style>