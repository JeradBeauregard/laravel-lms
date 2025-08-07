@extends('layouts.admin')

@section('content')
    <a href="{{ route('students.index') }}">Return to student index</a>
    <h1>{{ $student->fname }} {{$student->lname }}</h1>

    <h2> Details </h2>
    <p><b>First Name: </b>{{ $student->fname }}</p>
    <p><b>Last Name: </b>{{ $student->lname }}</p>
    <p><b>Email: </b>{{$student->email }}</p>

    <a href="{{ route('students.edit', $student ) }}">Edit Student</a>
    
    <form method="POST" action="{{ route('students.destroy', $student) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Student</button>
    </form>
   
@endsection
