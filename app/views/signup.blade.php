@extends('layout')

@section('content')
{{ Form::open(['url' => 'signup', 'role' => 'form', 'class' => 'form-signup']) }}
<h2 class="form-signin-heading">Sign Up</h2>
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
    @if(Session::has('flash_error'))
    {{ Session::get('flash_error') }}
    @endif
</p>
{{ Form::text('name', Input::old('name'),
['placeholder' => 'Name', 'class' => 'form-control name', 'type' => 'text', 'required', 'autofocus']) }}
{{ Form::text('email', Input::old('email'),
['placeholder' => 'Email Address', 'class' => 'form-control middle', 'type' => 'email', 'required']) }}
{{ Form::password('password', ['class' => 'form-control middle', 'placeholder' => 'Password', 'required']) }}
{{ Form::password('password_confirm', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'id' => 'password-confirm', 'required']) }}
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
{{ Form::close() }}
@stop