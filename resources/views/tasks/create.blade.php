@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <x-container>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" class="w-100 border-2 border-blue-300 focus:border-blue-800 rounded-md py-1 px-2">
            </div>
            <div class="mt-5">
                <label for="">Description</label>
                <input type="text" class="w-100 border-2 border-blue-300 focus:border-blue-800 rounded-md py-1 px-2">
            </div>


            <button type="submit">Submit</button>
        </form>
    </x-container>
@endsection