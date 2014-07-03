@extends('layout')

@section('content')
{{ Form::open(['route' => 'sessions.store', 'role' => 'form', 'class' => 'form-signin']) }}
    <h2 class="form-signin-heading">Please sign in</h2>
    @if(Session::has('flash_error'))
    <p>{{ Session::get('flash_error') }}</p>
    @endif
    <div class="form-group">
        {{ Form::label('email', 'Email Address') }}
        {{ Form::email('email', Input::get('email'), ['class' => 'form-control', 'required']) }}
        @if ($errors->first('email'))
        <p>{{ $errors->first('email') }}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['class' => 'form-control', 'required']) }}
        @if ($errors->first('password'))
        <p>{{ $errors->first('password') }}</p>
        @endif
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
{{ Form::close() }}
@stop
