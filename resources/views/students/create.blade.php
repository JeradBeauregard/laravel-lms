@extends('layouts.admin')

@section('content')

<h1 class="mb-4">Create a New Student</h1>

<form method="POST" action="{{ route('students.store') }}" style="max-width: 500px;">
    @csrf

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <label for="fname" class="form-label">First Name:</label>
    <input 
        name="fname" 
        id="fname" 
        type="text" 
        class="form-control @error('fname') is-invalid @enderror mb-3" 
       
    >
    @error('fname')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="lname" class="form-label">Last Name:</label>
    <input 
        name="lname" 
        id="lname" 
        type="text" 
        class="form-control @error('lname') is-invalid @enderror mb-3" 
        
    >

     @error('lname')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="email" class="form-label">Email:</label>
    <input 
        name="email" 
        id="email" 
        type="email" 
        class="form-control @error('email') is-invalid @enderror mb-3" 
        
    >

     @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror

    <button type="submit" class="btn btn-primary">Create Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>


@endsection