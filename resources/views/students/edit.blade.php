@extends('layouts.admin')

@section('content')

<h1 class="mb-4">Edit {{ $student->fname }} {{ $student->lname }}</h1>

<form method="POST" action="{{ route('students.update', $student) }}" style="max-width: 500px;">
    @csrf
    @method('PUT')

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
        value="{{ old('fname', $student->fname) }}" 
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
        value="{{ old('lname', $student->lname) }}" 
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
        value="{{ old('email', $student->email) }}" 
        class="form-control @error('email') is-invalid @enderror mb-3" 
        
    >

    @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror

    <button type="submit" class="btn btn-primary">Update Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>


@endsection