@extends('layouts.app')

@section('content')

<h1>{{ $notepad->title }}</h1>
 
<p>{{ $notepad->body }}</p>
 
<a href="{{ route('notepads.index') }}">Back</a>

@endsection