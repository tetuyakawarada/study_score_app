<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        return view('scores.index', ['scores' => $scores]);
    }

    public function show($id)
    {
        $score = Score::find($id);
        return view('scores.show', ['score' => $score]);
    }
}
