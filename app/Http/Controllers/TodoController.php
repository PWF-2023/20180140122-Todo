<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        //$todos = Todo::all();
        $todos = Todo::where('user_id', auth()->user()->id)->get();
        //colection
        dd($todos);
        //array
        dd($todos->toArray());

        return view('todo.index');

        return view('todo.index', compact('todos'));

    }

    public function create()
    {
        return view('todo.create');
    }

    public function edit()
    {
        return view('todo.edit');
    }
}
