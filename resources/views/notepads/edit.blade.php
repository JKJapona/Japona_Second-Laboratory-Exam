@extends('layouts.app')

@section('content')

<h1>Edit Notepad</h1>
 
<form action="{{ route('notepads.update', $notepad->id) }}" method="POST">
    @csrf
    @method('PUT')
 
    <label>Title:</label><br>
    <input type="text" name="title" value="{{ $notepad->title }}"><br><br>
 
    <label>Body:</label><br>
    <textarea name="body">{{ $notepad->body }}</textarea><br><br>
 
    <button type="submit">Update</button>
</form>

@endsection