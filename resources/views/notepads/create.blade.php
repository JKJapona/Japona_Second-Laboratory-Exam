@extends('layouts.app')

@section('content')


<div class="note-container">
    <h1>Create Notepad</h1>

    <form action="{{ route('notepads.store') }}" method="POST" class="note-form">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Body:</label>
            <textarea name="body" required></textarea>
        </div>
        <button type="submit">Save</button>
        <a href="{{ route('notepads.index') }}">
            <button type="button">Back</button>
        </a>
    </form>
</div>
@endsection
