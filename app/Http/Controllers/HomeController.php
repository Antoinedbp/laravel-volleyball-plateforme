<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $equipes = new Equipe;
        $joueurs = new Joueur;
        $count = 0;
        $allTeam = Equipe::all();
        $joueursRandom = joueur::all()->random()->where('equipe_id','=',NULL)->get();
       
        return view('pages.index',compact('equipes', 'joueurs', 'count','allTeam','joueursRandom'));
    }
}
