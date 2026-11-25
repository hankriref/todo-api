<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() { return Task::all(); }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_done' => 'boolean'
        ]);
        $task = Task::create($validated);
        return response()->json($task, 201);
    }

    public function show(Task $task) { return $task; }

    public function update(Request $request, Task $task) {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'is_done' => 'boolean'
        ]);
        $task->update($validated);
        return $task;
    }

    public function destroy(Task $task) {
        $task->delete();
        return response()->json(null, 204);
    }
}