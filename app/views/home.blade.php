@extends('layout')

@section('content')
<h1>Welcome, {{ Auth::user()->name }}!</h1>
@stop