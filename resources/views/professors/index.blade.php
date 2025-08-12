@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center gap-2">
<h1>Professors</h1>
  <div class="d-flex justify-content-center align-items-center gap-2">
        <a href="{{ route('professors.create') }}" class="btn btn-primary">Create new professor</a>
        <a href="{{ route('welcome') }}" class="btn btn-secondary"> <- Return Home </a>
    </div>
</div>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach($professors as $professor)
            <tr>
                <td>{{ $professor->name }}</td>
                <td><a href="{{ route('professors.edit', $professor) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form method="POST" action="{{ route('professors.destroy', $professor) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td><a href="{{ route('professors.show', $professor ) }}" class="btn btn-primary">Details</a></td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection