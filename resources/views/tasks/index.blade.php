@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <x-container>
        <div class="items-center mb-5">
            <a href="{{ route('home') }}" class="mr-5">Back to home</a>
            <div class="flex">
                <h1 class="text-3xl font-bold">Here's your Task</h1>
                <a href="{{ route('tasks.create') }}">
                    <button>Add data</button>
                </a>
            </div>
        </div>
        @forelse ($tasks as $task)
            <div class="my-4">
                <p>{{$task->title}}</p>
                <p>{{$task->description}}</p>
            </div>
        @empty
            <p>No data</p>
        @endforelse
    </x-container>
@endsection