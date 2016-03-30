@extends('layouts.master')
@section('content')
    <div class="col-md-offset-3 col-md-6">
        <h2>Login Form</h2>
        <hr>
        @include('errors.validation')
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div class="form-group">
           <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>
    </div>
@endsection