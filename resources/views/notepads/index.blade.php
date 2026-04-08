@extends('layouts.app')

@section('content')

<h1>Simple Notepad</h1>
 
<a href="{{ route('notepads.create') }}">Create New Notepad</a>
 
@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
 
@foreach($notepads as $notepad)
    <hr>
    <h3>{{ $notepad->title }}</h3>
    <p>{{ $notepad->body }}</p>
 
    <a href="{{ route('notepads.show', $notepad->id) }}">View</a>
    <a href="{{ route('notepads.edit', $notepad->id) }}">Edit</a>
 
    <form action="{{ route('notepads.destroy', $notepad->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach

@endsection