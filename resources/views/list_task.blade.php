@extends('layouts.main')

@push('head')
    <title>list task</title>
@endpush

@section('main-section')


@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

    <div class="mx-3 my-2">
        <a href="add" class="btn btn-outline-info "><i class="bi bi-plus-square"></i></a>
    </div>


    <div class="table-responsive">
        <table class="table table-striped  table-hover table-sm">

            <tr class="table-dark">
                <td>

                    Description
                </td>
                <td>Task to be done by</td>



                <td>Action</td>
            </tr>


            @foreach ($tasks as $task)
                <tr class="table-dark">
                    <td>
                        {{ $task->description }}
                    </td>

                    <td>{{ $task->time }}</td>
                    <td><a href="delete/{{ $task->id }}" class="btn btn-outline-danger"
                            onclick="return confirm('Have you completed the task ?')"><i class="bi bi-trash-fill"></i></a>
                        <a href="modify/{{ $task->id }}" class="btn btn-outline-warning  mx-2 my-2"   onclick="return confirm('Do you want to make update on task ?')"><i class="bi bi-pencil-square"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
