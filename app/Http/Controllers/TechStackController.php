<?php

namespace App\Http\Controllers;

use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{

    public function index()
    {
        $stacks = TechStack::all();
        return view('tech-stack.index', [
            'stacks' => $stacks
        ]);
    }

    public function show($id)
    {
        $stack = TechStack::find($id);

        if (!$stack) {
            return view('error.not-found');
        }

        return view('tech-stack.show');
    }
}
