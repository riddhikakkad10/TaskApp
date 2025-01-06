<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="/tasks/create">Create New Task</a>
    <br><br>

    @if ($tasks->count() > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>
                    {{ $task->title }} - {{ $task->description }}
                    <form action="/tasks/{{ $task->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No tasks available.</p>
    @endif
</body>
</html>
