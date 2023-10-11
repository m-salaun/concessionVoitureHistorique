<?php

namespace App\Http\Controllers;
use App\Models\ListeVoiture;
use App\Models\Modele;

use Illuminate\Http\Request;

class listeVoitureController extends Controller
{
    public function show($id){
        $voitures = ListeVoiture::where('id_Modele', '=', $id)->get();
        $modeles = Modele::where('id', '=', $id)->get();
        return view('listeVoiture',['modeles' => $modeles],
        [
            'voitures' => $voitures
        ],);
    }
}
