<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', ['comics' => $comics]);
    }

    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', ['comic' => $comic]);
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->save();
        return redirect('/comic/' . $comic->id);

        retutn to_route('comic.show', ['id' => $comic->id]);
    }

    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', ['comic' => $comic]);
    }

    public function update(Request $request, $id)

        $data = $request->all();
    {
        $comic = Comic::find($id);
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->save();
        return redirect('/comic/' . $comic->id);
    }
}