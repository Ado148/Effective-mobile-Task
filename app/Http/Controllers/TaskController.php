<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource. - GET ALL
     */
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    /**
     * Display the specified resource. - GET/{id}
     */
    public function show(string $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        return new TaskResource($task); // use Taskresource to format the response
    }

    /**
     * Store a newly created resource in storage. - POST
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'status' => 'required|in:pending,in_progress,completed',
        ]);

        $task = Task::create($validated);
        return new TaskResource($task);
    }


    /**
     * Update the specified resource in storage. - PUT
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        if(!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'due_date' => 'sometimes|nullable|date',
            'status' => 'sometimes|required|in:pending,in_progress,completed',
        ]);

        $task->update($validated);
        return new TaskResource($task);
    }

    /**
     * Remove the specified resource from storage. - DELETE
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        if(!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $task->delete();
        return response()->json(['message' => 'Task deleted']);
    }
}
