<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index()
    {
        $highlights = Highlight::query()
            ->select('is_show', 'content', 'title')
            ->orderBy('created_at')
            ->get();

        return view('highlights.index', ['highlights' => $highlights]);
    }

    public function show($id)
    {
        //
    }
}
