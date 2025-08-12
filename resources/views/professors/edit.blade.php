@extends('layouts.admin')

@section('content')
<h1 class="mb-4">Edit {{ $professor->name }}</h1>

<form method="POST" action="{{ route('professors.update', $professor) }}" style="max-width: 500px;">
    @csrf
    @method('PUT')

    <label for="name" class="form-label">Name: </label>
    <input 
        id="name" 
        name="name" 
        value="{{ old('name', $professor->name) }}" 
        type="text" 
        class="form-control mb-3" 
        required
    >

    <button type="submit" class="btn btn-primary">Update Professor</button>
    <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancel</a>
</form>


@endsection