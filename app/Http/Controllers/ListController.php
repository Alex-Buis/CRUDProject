<?php

namespace App\Http\Controllers;

use App\Models\Liste;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return view("liste/index",[
        'liste' => Liste::all(),
        ]);
    }
    public function destroy($id)
    {
        $liste = Liste::findOrFail($id);

        Liste::destroy($id);
        
        return redirect('/index');
    }
    public function update(Request $request,$id)
        {
            $liste = Liste::findOrFail($id);

        $request->validate([
            'title' => 'required|min:2',
            'synopsis' => 'required|min:10',
            'duration' => 'required|integer|min:1',
            'youtube' => 'nullable|string',
            'released_at' => 'nullable|date',
            'category' => 'nullable|exists:categories,id',
        ]);

        $liste = Liste::findOrFail($id);
        $liste->title = $request->title;
        $liste->synopsis = $request->synopsis;
        $liste->duration = $request->duration;
        $liste->youtube = $request->youtube;
        //$movie->cover = 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg';
        $liste->released_at = $request->released_at;
        $liste->save();

        return redirect('/index');
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {

    $request->validate([
        'title' => 'required|min:2',
        'synopsis' => 'required|min:10',
        'duration' => 'required|integer|min:1',
        'youtube' => 'nullable|string',
        'released_at' => 'nullable|date',
        'category' => 'nullable|exists:categories,id',
    ]);

    $liste = new Liste();
    $liste->title = $request->title;
    $liste->synopsis = $request->synopsis;
    $liste->duration = $request->duration;
    $liste->youtube = $request->youtube;
    $liste->cover = 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg';
    $liste->released_at = $request->released_at;
    $liste->save();

    return redirect('/index');
    }
    public function show($id)
    {
        $liste = Liste ::findOrFail($id);
        return view('show',[
            'list'=> $liste,
        ]);
        
    }
}
