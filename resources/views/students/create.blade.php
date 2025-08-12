@extends('layouts.admin')

@section('content')

<h1 class="mb-4">Create a New Student</h1>

<form method="POST" action="{{ route('students.store') }}" style="max-width: 500px;">
    @csrf

    <label for="fname" class="form-label">First Name:</label>
    <input 
        name="fname" 
        id="fname" 
        type="text" 
        class="form-control mb-3" 
        required
    >

    <label for="lname" class="form-label">Last Name:</label>
    <input 
        name="lname" 
        id="lname" 
        type="text" 
        class="form-control mb-3" 
        required
    >

    <label for="email" class="form-label">Email:</label>
    <input 
        name="email" 
        id="email" 
        type="email" 
        class="form-control mb-3" 
        required
    >

    <button type="submit" class="btn btn-primary">Create Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>


@endsection