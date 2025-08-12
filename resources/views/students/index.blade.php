@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center gap-2">
    <h1>Students</h1>
    <div class="d-flex justify-content-center align-items-center gap-2">
        <a href="{{ route('students.create') }}" class="btn btn-primary">Create new student</a>
        <a href="{{ route('welcome') }}" class="btn btn-secondary"> <- Return Home </a>
    </div>
</div>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->fname }}</td>
                    <td>{{ $student->lname }}</td>
                    <td><a href="{{ route('students.edit', $student ) }}" class="btn btn-primary">Edit</a></td>
                    <td> 
                        <form method="POST" action="{{ route('students.destroy', $student) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td><a href="{{ route('students.show', $student) }}" class="btn btn-primary">Details</a>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection

