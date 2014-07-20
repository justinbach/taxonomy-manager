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
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($taxonomies as $taxonomy)
        <tr>
            <td>{{{ $taxonomy->name }}}</td>
            <td>{{{ $taxonomy->description }}}</td>
            <td>Edit</td>
        </tr>
        @endforeach
        </tbody>
    </table>
 </div>
<a href="{{ URL::action('TaxonomiesController@create') }}" class="btn btn-primary btn-lg active" role="button">Add New Taxonomy</a>
@endif
@stop