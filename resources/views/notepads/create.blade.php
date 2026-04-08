@extends('layouts.app')

@section('content')

<h1>Create Notepad</h1>
 
<form action="{{ route('notepads.store') }}" method="POST">
    @csrf
 
    <label>Title:</label><br>
    <input type="text" name="title"><br><br>
 
    <label>Body:</label><br>
    <textarea name="body"></textarea><br><br>
 
    <button type="submit">Save</button>
</form>

@endsection