<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <h1>Create Task</h1>

    <form action="/tasks" method="POST">
        @csrf
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" required>
        <br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br><br>
        <button type="submit">Add Task</button>
    </form>

    <a href="/tasks">Back to Task List</a>
</body>
</html>
