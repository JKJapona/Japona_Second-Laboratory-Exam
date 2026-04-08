@extends('layouts.app')

@section('content')

<div class="note-container">
    <h1>Edit Notepad</h1>
    
    <form action="{{ route('notepads.update', $notepad->id) }}" method="POST" class="note-form">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ $notepad->title }}">
        </div>

        <div>
            <label>Body:</label>
            <textarea name="body">{{ $notepad->body }}</textarea>
        </div>

        <button type="submit">Update</button>
        <a href="{{ route('notepads.index') }}">
            <button type="button">Back</button>
        </a>
    </form>
</div>

@endsection