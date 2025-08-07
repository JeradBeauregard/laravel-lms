@extends('layouts.admin')

@section('content')




    <h1>Students</h1>

    <a href="{{ route('students.create') }}">Create new student</a>

    <ul>
        @foreach($students as $student)
            <li>
                <a href="{{ route('students.show', $student->id) }}">{{ $student->fname }} {{ $student->lname }}</a>
            </li>
        @endforeach
    </ul>
@endsection

