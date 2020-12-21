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
        return redirect('/index');
    }
}
