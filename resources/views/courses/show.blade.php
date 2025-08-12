@extends('layouts.admin')

@section('content')

<div class="d-flex flex-column gap-4">
    <div class="d-flex justify-content-between align-items-center gap-2">
        <h1>{{ $course->name }}</h1>
        <a href="{{ route('courses.index') }}" class="btn btn-primary">Return to course index</a>
    </div>

    <div class="d-flex flex-column gap-1">
        <h2 class="h5 mb-2">Details</h2>
        <div class="border-bottom"></div>
        <div class="mt-3">
        <p><strong>Course Name:</strong> {{ $course->name }}</p>
        <p><strong>Description:</strong> {{ $course->description }}</p>
        </div>
    </div>


    <div class="d-flex justify-content-start align-items-center gap-2">
        <a href="{{ route('courses.edit', $course ) }}" class="btn btn-warning">Edit Course</a>
        <form method="POST" action="{{ route('courses.destroy', $course) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Course</button>
        </form>
    </div>
<div>



@endsection