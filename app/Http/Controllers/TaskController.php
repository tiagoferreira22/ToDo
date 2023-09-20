<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $r)
    {
        return view('tasks.create');
    }

    public function edit(Request $r, $id)
    {
        $task = Task::find($id);

        return view('tasks.edit', compact('task'));
    }

    public function destroy(Request $r)
    {

    }
}
