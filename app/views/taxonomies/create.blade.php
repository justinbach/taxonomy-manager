@extends('layout')

@section('content')
{{ Form::open(['route' => 'taxonomies.store', 'role' => 'form', 'class' => 'form-horizontal']) }}
<div class="row">
    <div class="col-md-6 col-centered">
        <h2>Create New Taxonomy</h2>
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
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', Input::get('description'), ['class' => 'form-control', 'required']) }}
            @if ($errors->first('description'))
            <p>{{ $errors->first('description') }}</p>
            @endif
        </div>
        <button class="btn btn-primary" type="submit">Create Taxonomy</button>
        {{ Form::close() }}
    </div>
</div>
@stop

