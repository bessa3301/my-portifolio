<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechStackController extends Controller
{

    public function index()
    {
        return view('tech-stack.index');
    }

    public function show($id)
    {
        return $id;
    }
}
