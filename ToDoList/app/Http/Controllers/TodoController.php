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
    public function remove(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();

        return redirect('/index');
    }

    public function state(Request $request)
    {
        $task = Task::find($request->id);
        if ($task->state === 0) {
            $task->state = 1;
            $task->save();
            return redirect('/index');
        } elseif ($task->state === 1) {
            $task->state = 0;
            $task->save();
            return redirect('/index');
        }
    }
    /*
    public function formSwitch(Request $request)
    {
        $stateList = $request->stateList;
        if ($stateList === 'all') {
            $items = Task::all();
            return view('task.index', ['items' => $items]);
        } elseif ($stateList === 'progress') {
            $items = Task::where('state', 0)->get();
            return view('task.index', ['items' => $items]);
        } elseif ($stateList === 'done') {
            $items = Task::where('state', 1)->get();
            return view('task.index', ['items' => $items]);
        }
        return redirect('/index');
    }
    */
}
