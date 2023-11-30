@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')

    <nav class="mb-4">
        <a class="link" href="{{ route('tasks.create') }}">Create Task</a>
    </nav>


    @forelse ($tasks as $task)
        <div>
            <a @class(['line-through'=> $task->completed])
                href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>

    @empty
        <div>there are no tasks.</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif

@endsection
