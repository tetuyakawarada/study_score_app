<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ScoreRequest;
use App\Models\Score;

class ScoreController extends Controller
{
    public function index()
    {
        // $scores = Score::all();
        $scores = Score::orderBy('date', 'desc')->latest()->get();

        return view('scores.index', ['scores' => $scores]);
    }

    public function create()
    {
        return view('scores.create');
    }

    public function store(ScoreRequest $request)
    {
        $score = new Score;

        $score->event = $request->event;
        $score->date = $request->date;
        $score->body = $request->body;

        $score->jap_sco = $request->jap_sco;
        $score->soc_sco = $request->soc_sco;
        $score->mat_sco = $request->mat_sco;
        $score->sci_sco = $request->sci_sco;
        $score->eng_sco = $request->eng_sco;
        $score->mus_sco = $request->mus_sco;
        $score->art_sco = $request->art_sco;
        $score->phy_sco = $request->phy_sco;
        $score->hom_sco = $request->hom_sco;

        $score->jap_ave = $request->jap_ave;
        $score->soc_ave = $request->soc_ave;
        $score->mat_ave = $request->mat_ave;
        $score->sci_ave = $request->sci_ave;
        $score->eng_ave = $request->eng_ave;
        $score->mus_ave = $request->mus_ave;
        $score->art_ave = $request->art_ave;
        $score->phy_ave = $request->phy_ave;
        $score->hom_ave = $request->hom_ave;

        $score->save();

        return redirect('/scores');
    }

    public function show($id)
    {
        $score = Score::find($id);
        return view('scores.show', ['score' => $score]);
    }

    public function edit($id)
    {
        $score = Score::find($id);
        return view('scores.edit', ['score' => $score]);
    }

    public function update(ScoreRequest $request, $id)
    {
        $score = Score::find($id);

        $score->event = $request->event;
        $score->date = $request->date;
        $score->body = $request->body;

        $score->jap_sco = $request->jap_sco;
        $score->soc_sco = $request->soc_sco;
        $score->mat_sco = $request->mat_sco;
        $score->sci_sco = $request->sci_sco;
        $score->eng_sco = $request->eng_sco;
        $score->mus_sco = $request->mus_sco;
        $score->art_sco = $request->art_sco;
        $score->phy_sco = $request->phy_sco;
        $score->hom_sco = $request->hom_sco;

        $score->jap_ave = $request->jap_ave;
        $score->soc_ave = $request->soc_ave;
        $score->mat_ave = $request->mat_ave;
        $score->sci_ave = $request->sci_ave;
        $score->eng_ave = $request->eng_ave;
        $score->mus_ave = $request->mus_ave;
        $score->art_ave = $request->art_ave;
        $score->phy_ave = $request->phy_ave;
        $score->hom_ave = $request->hom_ave;

        $score->save();

        return redirect('/scores');
    }

    public function destroy($id)
    {
        $score = Score::find($id);
        $score->delete();

        return redirect('/scores');
    }
}
