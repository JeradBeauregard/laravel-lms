@extends('layouts.admin')

@section('content')
<h1 class="mb-4">Class Assessment LMS</h1>

<div class="d-flex flex-wrap gap-3">
    <div class="card flex-fill" style="max-width: 22rem;">
        <div class="card-body">
            <h2 class="card-title h5">Students</h2>
            <p class="card-text">Manage CRUD operations for students</p>
            <a href="{{ route('students.index') }}" class="btn btn-primary">Student Index</a>
        </div>
    </div>

    <div class="card flex-fill" style="max-width: 22rem;">
        <div class="card-body">
            <h2 class="card-title h5">Courses</h2>
            <p class="card-text">Manage CRUD operations for courses</p>
            <a href="{{ route('courses.index') }}" class="btn btn-primary">Course Index</a>
        </div>
    </div>

    <div class="card flex-fill" style="max-width: 22rem;">
        <div class="card-body">
            <h2 class="card-title h5">Professors</h2>
            <p class="card-text">Manage CRUD operations for professors</p>
            <a href="{{ route('professors.index') }}" class="btn btn-primary">Professor Index</a>
        </div>
    </div>
</div>

@endsection
