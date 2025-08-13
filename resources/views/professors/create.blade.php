@extends('layouts.admin')

@section('content')

<h1 class="mb-4">Create New Professor</h1>

<form method="POST" action="{{ route('professors.store') }}" style="max-width: 500px;">
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
        name="name" 
        type="text" 
        class="form-control @error('name') is-invalid @enderror mb-3" 
        
    >

    @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror

    <button type="submit" class="btn btn-primary">Create Professor</button>
    <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancel</a>
</form>





@endsection