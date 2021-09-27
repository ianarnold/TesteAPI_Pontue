<?php

namespace App\Http\Controllers;
use App\Models\Filmes;

use Illuminate\Http\Request;
use App\Http\Requests\PostFilmesRequest;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Filmes::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFilmesRequest $request)
    {
        return Filmes::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Filmes::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostFilmesRequest $request, $id)
    {
        $filme = Filmes::find($id);
        $filme->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Filmes::destroy($id);
    }

    /**
     * Search a movie by the name
     *
     * @param  str  $nome
     * @return \Illuminate\Http\Response
     */
    public function search($nome)
    {
        return Filmes::where('nome', $nome)->get();
    }

}
