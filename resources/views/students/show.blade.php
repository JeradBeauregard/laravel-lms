@extends('layouts.admin')

@section('content')
<div class="d-flex flex-column gap-4">
    <div class="d-flex justify-content-between align-items-center gap-4">
        <h1>{{ $student->fname }} {{$student->lname }}</h1>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Return to student index</a>
    </div>

    <div class="d-flex flex-column gap-1">
        <h2> Details </h2>
        <div class="border-bottom"></div>
        <div class="mt-3">
            <p><strong>First Name: </strong>{{ $student->fname }}</p>
            <p><strong>Last Name: </strong>{{ $student->lname }}</p>
            <p><strong>Email: </strong>{{$student->email }}</p>
        </div>
    </div>

    <div class="d-flex just-content-start align-items-center gap-2">
        <a href="{{ route('students.edit', $student ) }}" class="btn btn-warning">Edit Student</a>
        <form method="POST" action="{{ route('students.destroy', $student) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Student</button>
        </form>
    </div>
</div> 
@endsection
