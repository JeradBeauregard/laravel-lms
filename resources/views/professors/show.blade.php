@extends('layouts.admin')

@section('content')

<div class="d-flex flex-column gap-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1>{{ $professor->name }}</h1>
        <a href="{{ route('professors.index') }}" class="btn btn-primary">Return to professors index</a>
    </div>

    <div class="d-flex flex-column gap-1">
        <h2>Details</h2>
        <div class="border-bottom"></div>
        <div class="mt-3">
            <p><strong>Name: </strong> {{ $professor->name }}</p>
        </div>
    </div>

    <div class="d-flex justify-content-start align-items-center gap-2">
        <a href="{{ route('professors.edit', $professor) }}" class="btn btn-warning">Edit Professor</a>
        <form method="POST" action="{{ route('professors.destroy', $professor) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Professor</button>
        </form>
    </div>
<div>
@endsection