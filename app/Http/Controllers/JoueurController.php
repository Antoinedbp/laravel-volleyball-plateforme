<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJoueur = Joueur::all();
        return view('backoffice.joueurs.main', compact('dataJoueur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $equipes = Equipe::all();
        return view('backoffice.joueurs.create', compact('roles', 'equipes'));
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
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "telephone"=>"required",
            "email"=>"required",
            "genre"=>"required",
            "paysOrigine"=>"required",
            "role_id"=>"required",
            "equipe_id"=>"required"
        ]);

        $joueur = new Joueur;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->paysOrigine = $request->paysOrigine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->save();

        $request->file("url")->storePublicly("img","public");
        $photo = new Photo;
        $photo->url = $request->file('url')->hashName();
        $photo->joueur_id = $joueur->id;
        $photo->save();
        return redirect()->route("joueurs.index")->with('message', 'added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view('backoffice.joueurs.show', compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $roles = Role::all();
        $equipes = Equipe::all();
        return view('backoffice.joueurs.edit', compact('joueur', 'roles', 'equipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        request()->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "telephone"=>"required",
            "email"=>"required",
            "genre"=>"required",
            "paysOrigine"=>"required",
            "role_id"=>"required",
            "equipe_id"=>"required"
        ]);

        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->paysOrigine = $request->paysOrigine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;

        Storage::disk("public")->delete("img/".$joueur->url);
        $joueur->url =  $request->file('url');
        $joueur->url->save();
        $joueur->save();

        $request->file("url")->storePublicly("img","public");
        return redirect()->route("joueurs.index")->with('message', 'added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        Storage::disk("public")->delete("img/".$joueur->url);
        $joueur->url->delete();
        $joueur->delete();
        return redirect()->route('joueurs.index');
    }
}
