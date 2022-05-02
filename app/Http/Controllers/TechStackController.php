<?php

namespace App\Http\Controllers;

use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{

    public function index()
    {
        $stacks = TechStack::query()
            ->select('id', 'name', 'description', 'file_path', 'expertise')
            ->get();
        return view('tech-stack.index', ['stacks' => $stacks]);
    }

    public function show($id)
    {
        $stack = TechStack::find($id);

        if (!$stack) {
            return abort(404);
        }

        return view('tech-stack.show', ['stack' => $stack]);
    }
}
