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

        retutn to_route ('comic.show', ['id' => $comic->id]);
    }

    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', ['comic' => $comic]);
    }

    public function update(Request $request, $id)

    $comics request -> all();

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

public function destroy($id)
{
    $comic = Comic::find($id);
    $comic->delete();
    return redirect('/comics');
}

}

public function destroyAll()
{
    $comics = Comic::all();
    $ids = $comics->pluck('id');

    comic :: destroy($ids);

    return to_route('comics.index');
}

}