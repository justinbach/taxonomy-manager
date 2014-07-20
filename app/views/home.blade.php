@extends('layout')

@section('content')
<h1>Welcome, {{ Auth::user()->name }}!</h1>
<p>Get started by editing some <a href="{{ URL::action('TaxonomiesController@index') }}">taxonomies</a>.</p>
@stop