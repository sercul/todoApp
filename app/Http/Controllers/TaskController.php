<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return response()->json($tasks);
    }


    public function store(Request $request)
    {
        Task::create($request->all());

        return response()->json(array('success' => true));
    }


    public function destroy($id)
    {
        Task::destroy($id);

        return response()->json(array('success' => true));
    }

    public function done($id)
    {
        Task::done($id);

        return response()->json(array('success' => true));
    }

}
