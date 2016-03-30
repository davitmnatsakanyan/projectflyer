@inject('countries', 'App\Http\Utilities\Country')
@extends('layouts.master')
@section(('content'))

        <h1> Selling your home?</h1>
        @include('errors.validation')
        <div class="row">
            <div class="col-md-6">
                {!!  Form::open(array('url' => 'flyer', 'method' => 'POST', 'enctype' => 'mulipart/form-data')) !!}
                <div class="form-group">
                    {!! Form::label('street', 'Street') !!}
                    {!! Form::text('street', old('street'), array('class' => 'form-control', 'required')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('city', 'City') !!}
                    {!! Form::text('city', old('city'), array('class' => 'form-control', 'required')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('zip', 'Zip/Postal Code') !!}
                    {!! Form::text('zip', old('zip'), array('class' => 'form-control', 'required')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('country', 'Country') !!}
                    {!! Form::select('country', $countries::all(), 'ru', array('class' => 'form-control', 'required')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('state', 'State') !!}
                    {!! Form::text('state', old('state'), array('class' => 'form-control', 'required')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('price', 'Price') !!}
                    {!! Form::text('price', old('price'), array('class' => 'form-control', 'required')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('decription', 'Home Decription') !!}
                    {!! Form::textarea('description', old('description'), array('class' => 'form-control', 'required')) !!}
                </div>
            </div>
        </div>
            <hr>
        <div class="col-md-12">
            <div class="form-group">
                {!! Form::submit('Create Flyer', array('class' => 'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}
            </div>
        </div>

@endsection