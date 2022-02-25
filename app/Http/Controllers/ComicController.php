<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    protected $ruleValidation = [
        'title' => 'required|max:100',
        'description' => 'required',
        'thumb' => 'required',
        'price' => 'required',
        'series' => 'required|max:150',
        'type' => 'required|max:150',
        'sale_date' => 'required',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(20);
        $data = [
            'comics' => $comics,
        ];
        return view('admin.comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate($this->ruleValidation);

        $saveData = $request->all();
        $newComic = new Comic();
        $newComic->title = $saveData['title'];
        $newComic->description = $saveData['description'];
        $newComic->thumb = $saveData['thumb'];
        $newComic->price = $saveData['price'];
        $newComic->series = $saveData['series'];
        $newComic->type = $saveData['type'];
        $newComic->sale_date = $saveData['sale_date'];

        $save = $newComic->save();

        if (!$save) {
            dd('salvataggio non riuscito');
        }

        return redirect()->route('admin.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = [
            'comic' => $comic,
        ];
        return view('admin.comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validateData = $request->validate($this->ruleValidation);
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('status', "Comic $comic->id deleted!");
    }
}
