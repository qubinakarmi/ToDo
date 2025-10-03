


@extends('layouts.main')

@push('head')
<title>Update Task</title>
@endpush
@section('main-section')





<div class="container mt-5">
    <h2 class="mb-4">Update Task</h2>

    <form action="/edit-list/{{$tasks->id}}" method="POST" class="p-4 border rounded shadow-sm bg-light">
        @csrf

        <input type="hidden" name="_method" value="put">

        <div class="mb-3">
            <label for="description" class="form-label" >Task Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="e.g. Buy groceries" value="{{$tasks->description}}" required>
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Time to Complete</label>
            <input type="time" name="time" id="time" class="form-control"value="{{$tasks->time}}" required>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus"></i> Submit Task
        </button>
    </form>
</div>

@endsection
