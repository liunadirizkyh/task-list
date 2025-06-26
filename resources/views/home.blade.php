@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <x-container>
        <h1 class="text-3xl font-bold mb-6">Welcome to the Task List</h1>
        <p class="text-gray-700 mb-4">This is a simple project for your task list.</p>
        <a href="{{ route('tasks.index') }}">Here's your task</a>
    </x-container>
@endsection