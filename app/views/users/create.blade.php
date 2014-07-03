@extends('layout')

@section('content')
{{ Form::open(['route' => 'users.store', 'role' => 'form', 'class' => 'form-signup']) }}
<h2 class="form-signin-heading">Sign Up</h2>
@if(Session::has('flash_error'))
<p>{{ Session::get('flash_error') }}</p>
@endif
<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::get('name'), ['class' => 'form-control', 'required']) }}
    @if ($errors->first('name'))
    <p>{{ $errors->first('name') }}</p>
    @endif
</div>
<div class="form-group">
    {{ Form::label('username', 'User Name') }}
    {{ Form::text('username', Input::get('username'), ['class' => 'form-control', 'required']) }}
    @if ($errors->first('username'))
    <p>{{ $errors->first('username') }}</p>
    @endif
</div>
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
<div class="form-group">
    {{ Form::label('password_confirmation', 'Password Confirmation') }}
    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
    @if ($errors->first('password_confirmation'))
    <p>{{ $errors->first('password_confirmation') }}</p>
    @endif
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
{{ Form::close() }}
@stop