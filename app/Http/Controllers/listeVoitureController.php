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
    
    public function supprimerVoiture(){
        $idVoiture = request('supprimerVoiture');
        $voitures = ListeVoiture::where('id', $idVoiture)->delete();;
        return back();
    }

    public function showAddVoiture(){
        $idModele = request('idModele');
        $modeles = Modele::where('id', '=', $idModele)->get();
        return view('ajouterVoiture', ['modeles' => $modeles]);
    }

    public function addVoiture(){
        if (!empty($_POST['date']) && !empty($_POST['kilometrage']) && !empty($_POST['puissance'])){
            $date = request('date');
            $kilometrage = request('kilometrage');
            $puissance = request('puissance');
            $energie = request('energie');
            $prix = request('prix');
            $idModele = request('idModele');
            $listeVoiture = new ListeVoiture();
            $listeVoiture->id_Modele = $idModele;
            $listeVoiture->date = $date;
            $listeVoiture->kilometre = $kilometrage;
            $listeVoiture->puissances = $puissance;
            $listeVoiture->energie = $energie;
            $listeVoiture->prix = $prix;
            
            $listeVoiture->save();
            $modeles = Modele::where('id', '=', $idModele)->get();
            return view('ajouterVoiture', ['modeles' => $modeles]);
        }
    }
    
    public function modifierVoiture(){
       
    }
}
