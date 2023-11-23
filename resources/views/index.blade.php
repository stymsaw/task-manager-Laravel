<h1>Hello I'am a blade template.</h1>


<div>
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>

    @empty
        <div>there are no tasks.</div>
    @endforelse


    {{-- @endif --}}


</div>
