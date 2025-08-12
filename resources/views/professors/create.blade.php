@extends('layouts.admin')

@section('content')

<h1 class="mb-4">Create New Professor</h1>

<form method="POST" action="{{ route('professors.store') }}" style="max-width: 500px;">
    @csrf

    <label for="name" class="form-label">Name:</label>
    <input 
        id="name" 
        name="name" 
        type="text" 
        class="form-control mb-3" 
        required
    >

    <button type="submit" class="btn btn-primary">Create Professor</button>
    <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancel</a>
</form>





@endsection