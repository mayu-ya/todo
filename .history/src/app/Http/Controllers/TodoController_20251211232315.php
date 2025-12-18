<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
        $todo = $request->only(['content']);
        Todo::create($todo);
        return redirect('/');
    }
}
