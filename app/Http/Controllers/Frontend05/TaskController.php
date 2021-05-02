<?php

namespace App\Http\Controllers\Frontend05;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::all();
        // $tasks = Task::where('status', 1)->orderBy('created_at', 'desc')->get();
        // foreach($tasks as $task){
        //     echo $task->name;
        // };
        // $id = $request->get('a');
        // echo $id;
        return view('Unit05.task.index',[
            'tasks'=>$tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Unit05.task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $all = $request->all();
        // $all = $request->only(['name','deadline']);
        // $all = $request->except(['_token','name']);
        // var_dump($all);
        $name = $request->get('name');
        $content = $request->get('content');
        $deadline = $request->get('deadline');
        $prioity = $request->get('prioity');
        $task = new Task();
        $task->name = $name;
        $task->status = 1;
        $task->content = $content;
        $task->deadline = $deadline;
        $task->prioity = $prioity;
        $task->save();
        return redirect()->route('task.index');
        // echo $name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('Unit05.task.show')->with([
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('Unit05.task.edit')->with([
            'task' => $task,
            // 'tasksall'=>$tasksall
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $deadline = $request->get('deadline');
        $content = $request->get('content');
        $prioity = $request->get('prioity');
        // Cập nhật
        $task = Task::find($id);
        $task->name = $name;
        $task->status = 1;
        $task->content = $content;
        $task->deadline = $deadline;
        $task->prioity = $prioity;
        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.index');
    }
    public function complete($id){
        $task =Task::find($id);
        $task->status = 2;
        $task->save();
        return redirect()->route('task.index');
    }
    public function reComplete($id){
        $task =Task::find($id);
        $task->status = 1;
        $task->save();
        return redirect()->route('task.index');
    }
}