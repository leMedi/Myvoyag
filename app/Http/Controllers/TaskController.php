<?php

namespace App\Http\Controllers;

use Validator;
use App\Task;
use App\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'date'  => 'required|date_format:Y-m-d',
            'start' => 'required|date_format:H:i',
            'end'   => 'date_format:H:i|after:start',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 400], 200);
        }

        $task               = new Task();
        $task->demande_id   = $id;
        $task->date        = Input::get('date');
        $task->start        = Input::get('start');
        $task->end          = Input::get('end');
        $task->name          = Input::get('name');

        $task->save();

        return response()->json([
                'status' => 200,
                'task' => [
                    'id'    => $task->id,
                    'name'  => $task->name,
                    'date'  => $task->date,
                    'start' => $task->start,
                    'end'   => $task->end
                ]
            ], 200);
        // return response()->json(['id' => $task->id, 'status' => 200], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $users =User::find('type', 'directeur');
        
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        // $task->delete();
        
        return response()->json(['status' => 200], 200);
    }
}
