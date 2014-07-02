@extends('layout')

@section('content')
{{ Form::open(['url' => 'login', 'role' => 'form', 'class' => 'form-signin']) }}
<!--<form class="form-signin" role="form">-->
    <h2 class="form-signin-heading">Please sign in</h2>
    <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
        @if(Session::has('flash_error'))
        {{ Session::get('flash_error') }}
        @endif
    </p>
    {{ Form::text('email', Input::old('email'),
        ['placeholder' => 'Email Address', 'class' => 'form-control', 'type' => 'email', 'required', 'autofocus']) }}
    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required']) }}
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
{{ Form::close() }}
@stop
