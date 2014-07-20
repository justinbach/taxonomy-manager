@extends('layout')

@section('content')
<h1>Taxonomies index</h1>
@if (count($taxonomies) === 0)
<p>There are currently no taxonomies in the system.</p>
@else
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($taxonomies as $taxonomy)
        <tr>
            <td>{{{ $taxonomy->id }}}</td>
            <td>{{{ $taxonomy->name }}}</td>
            <td>{{{ $taxonomy->description }}}</td>
            <td>Edit</td>
        </tr>
        @endforeach
        </tbody>
    </table>
 </div>
@endif
@stop