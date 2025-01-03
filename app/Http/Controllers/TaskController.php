<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create the task
        $task = Task::create($validated);

        // Dispatch the job
        NotifyTaskCreated::dispatch($task);

        return response()->json(['message' => 'Task created successfully!', 'task' => $task], 201);
    }


    // Fetch all tasks
    public function index()
    {
        return Task::all();
    }

    // Upload a file
    public function upload(Request $request)
    {
        $path = $request->file('attachment')->store('attachments');
        return response()->json(['message' => 'File uploaded', 'path' => $path]);
    }

    // Simulate a payment gateway
    public function gateway()
    {
        return response()->json(['message' => 'Payment processed']);
    }
}

