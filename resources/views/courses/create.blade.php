@extends('layouts.admin')

@section('content')
<h1 class="mb-4">Create a New Course</h1>

<form method="POST" action="{{ route('courses.store') }}" style="max-width: 500px;">
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

    <label for="name" class="form-label">Name:</label>
    <input 
        id="name" 
        type="text" 
        name="name" 
        class="form-control @error('name') is-invalid @enderror mb-3" 
        
    >

     @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="description" class="form-label">Description:</label>
    <input 
        id="description" 
        type="text" 
        name="description" 
        class="form-control @error('description') is-invalid @enderror mb-3" 
        
    >

    @error('description')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror


    <button type="submit" class="btn btn-primary">Create Course</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
</form>


@endsection