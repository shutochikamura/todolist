<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TodoController extends Controller
{
    public function index(Request $request)
    {

        $items = Task::all();
        return view('task.index', ['items' => $items]);
    }
    public function add(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/todo');
    }
    public function remove(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();

        return redirect('/todo');
    }

    public function state(Request $request)
    {
        $task = Task::find($request->id);
        if ($task->state === 0) {
            $task->state = 1;
            $task->save();
            return redirect('/todo');
        } elseif ($task->state === 1) {
            $task->state = 0;
            $task->save();
            return redirect('/todo');
        }
    }
}
