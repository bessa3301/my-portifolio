<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index()
    {
        $highlights = Highlight::query()
            ->select('id', 'content', 'title', 'banner_path')
            ->where('is_show', true)
            ->orderBy('created_at')
            ->get();

        return view('highlights.index', ['highlights' => $highlights]);
    }

    public function show($id)
    {
        $highl = Highlight::find($id);

        if (!$highl) {
            return abort(404);
        }

        return view('highlights.show', ['hishlight' => $highl]);
    }
}
