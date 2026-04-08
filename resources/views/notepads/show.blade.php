@extends('layouts.app')

@section('content')

<div class="note-container">
    <h1>{{ $notepad->title }}</h1>
    <p>{{ $notepad->body }}</p>
    <a href="{{ route('notepads.index') }}">Back</a>
</div>

@endsection