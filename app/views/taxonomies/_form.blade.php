@if($new)
{{ Form::open(['route' => 'taxonomies.store', 'role' => 'form', 'class' => 'form-horizontal']) }}
@else
{{ Form::open(['route' => ['taxonomies.update', $taxonomy->id], 'method' => 'put', 'role' => 'form', 'class' => 'form-horizontal']) }}
@endif
<div class="row">
    <div class="col-md-6 col-centered">
        <h2>
            @if($new)
            Create New Taxonomy
            @else
            Edit Taxonomy
            @endif
        </h2>
        @if(Session::has('flash_error'))
        <p>{{ Session::get('flash_error') }}</p>
        @endif
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $taxonomy->name, ['class' => 'form-control', 'required']) }}
            @if ($errors->first('name'))
            <p>{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', $taxonomy->description, ['class' => 'form-control', 'required']) }}
            @if ($errors->first('description'))
            <p>{{ $errors->first('description') }}</p>
            @endif
        </div>
        <button class="btn btn-primary" type="submit">
            @if($new)
            Create Taxonomy
            @else
            Submit Changes
            @endif
        </button>
        {{ Form::close() }}
    </div>
</div>