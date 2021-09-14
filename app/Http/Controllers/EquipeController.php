<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataEquipe = Equipe::all();
        return view('backoffice.equipes.main', compact('dataEquipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipes = Equipe::all();
        $roles = Role::all();
        $joueurs = Joueur::all();
        $continents = Continent::all();
        return view('backoffice.equipes.create', compact('equipes', 'joueurs', 'roles', 'continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "nomClub"=>"required",
            "ville"=>"required",
            "pays"=>"required",
            "nbrMax"=>"required",
            "continent_id"=>"required"
        ]);

        $equipe = new Equipe;
        $equipe->nomClub = $request->nomClub;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->nbrMax = $request->nbrMax;
        $equipe->continent_id = $request->continent_id;
        $equipe->save();
        return redirect()->route("equipes.index")->with('message', 'added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view('backoffice.equipes.show', compact('equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        return view('backoffice.equipes.edit', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        request()->validate([
            "nomClub"=>"required",
            "ville"=>"required",
            "pays"=>"required",
            "nbrMax"=>"required",
            "continent_id"=>"required"
        ]);

        $equipe->nomClub = $request->nomClub;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->nbrMax = $request->nbrMax;
        $equipe->continent_id = $request->continent_id;
        $equipe->save();
        return redirect()->route("equipes.index")->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->route("equipes.index");
    }
}
