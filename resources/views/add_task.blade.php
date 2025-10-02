


@extends('layouts.main')

@push('head')
<title>Add Task</title>
@endpush
@section('main-section')

<h1>Add Task</h1>

<div class="container">

<form action="add" method="post">
@csrf
<input type="text" name="description" placeholder="description"><br>

<button>submit</button>

</form>
</div>

@endsection
