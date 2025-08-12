@extends('layouts.admin')

@section('content')

<h1 class="mb-4">Edit Course: {{ $course->name }}</h1>

<form method="POST" action="{{ route('courses.update', $course) }}" style="max-width: 500px;">
    @csrf
    @method('PUT')

    <label for="name" class="form-label">Name: </label>
    <input 
        id="name" 
        type="text" 
        name="name" 
        value="{{ old('name', $course->name) }}" 
        class="form-control mb-3" 
        required
    >

    <label for="description" class="form-label">Description: </label>
    <input 
        id="description" 
        type="text" 
        name="description" 
        value="{{ old('description', $course->description) }}" 
        class="form-control mb-3" 
        required
    >

    <button type="submit" class="btn btn-primary">Update Course</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
</form>



@endsection