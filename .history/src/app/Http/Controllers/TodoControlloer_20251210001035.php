<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoControlloer extends Controller
{
    public function index()
    {
        return view('index');
    }
}
