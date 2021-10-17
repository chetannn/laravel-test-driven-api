<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return response($tasks);
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response([], Response::HTTP_NO_CONTENT);
    }
}
