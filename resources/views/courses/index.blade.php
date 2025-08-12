@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center gap-2">
<h1>Courses</h1>

<div class="d-flex justify-content-center align-items-center gap-2">
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Create a new course</a>
        <a href="{{ route('welcome') }}" class="btn btn-secondary"> <- Return Home </a>
    </div>
</div>


<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td><a href="{{ route('courses.edit', $course ) }}" class="btn btn-primary">Edit</a></td>
                <td>
                     <form method="POST" action="{{ route('courses.destroy', $course) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Course</button>
                    </form>
                </td>
                <td><a href="{{ route('courses.show', $course) }}" class="btn btn-primary">Details</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
