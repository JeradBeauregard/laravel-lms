@extends('layouts.admin')

@section('content')
<h1 class="mb-4">Create a New Course</h1>

<form method="POST" action="{{ route('courses.store') }}" style="max-width: 500px;">
    @csrf

    <label for="name" class="form-label">Name:</label>
    <input 
        id="name" 
        type="text" 
        name="name" 
        class="form-control mb-3" 
        required
    >

    <label for="description" class="form-label">Description:</label>
    <input 
        id="description" 
        type="text" 
        name="description" 
        class="form-control mb-3" 
        required
    >

    <button type="submit" class="btn btn-primary">Create Course</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
</form>


@endsection