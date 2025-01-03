<?php

namespace App\Jobs;

class NotifyTaskCreated
{
    protected $task;

    public function __construct($task)
    {
        $this->task = $task;
    }

    public function handle()
    {
        // Simulate sending a notification
        \Log::info('Notification sent for task: ' . $this->task->title);
    }
}

