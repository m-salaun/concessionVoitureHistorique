<?php

namespace App\Http\Controllers;
use App\Models\Modele;
use App\Models\Car;
use App\Models\ListeVoiture;


use Illuminate\Http\Request;

class modeleController extends Controller
{
    public function show($id){
        $modeles = Modele::where('idMarque', '=', $id)->get();
        $cars = Car::where('id', '=', $id)->get();
        return view('detailCar', [
            'modeles' => $modeles
        ],
        [
            'cars' => $cars
        ]);
    }

    public function add(){
        if (!empty($_POST['modele'])){
            $nomModele = request('modele');
            $idMarque = request('idMarque');
            $modele = new Modele();
            $modele->modele = $nomModele;
            $modele->idMarque = $idMarque;
            $modele->nombreEnStock = 0;
            $modele->save();
            return back();
        }
     }

     public function deleteMarque()
     {
         $id = request('idMarque');
         $modeles = Modele::where('idMarque', $id)->get();
              foreach ($modeles as $modele) {
             ListeVoiture::where('id_Modele', $modele->id)->delete();
             Modele::where('id', $modele->id)->delete();
         }     
         Car::where('id', $id)->delete();
         return redirect()->route('home');
     }

    public function deleteModele()
    {
        $id = request('modele');
        $modele = Modele::find($id);
        ListeVoiture::where('id_Modele', $id)->delete();
        Modele::where('id', $id)->delete();
        return back();
    }

    /*public function incrementationModele()
    {
        $id = request('id');
        $modele = Modele::find($id);
        $modele->nombreEnStock += 1;    
        $modele->save();
        return back();
    }

    public function decrementationModele()
    {
        $id = request('id');
        $modele = Modele::find($id);
        $modele->nombreEnStock -= 1;    
        $modele->save();
        return back();
    }*/

    public function showModifier(){
        $idModele = request('modifier');
        $modeles = Modele::where('id', '=', $idModele)->get();
        return view('modifierModele',
        [
            'modeles' => $modeles
        ],
        );
    }

    public function modifierCaracteristiqueModele(){
        $idModele = request('idModele');
        $nom = request('nom');
        $modele = Modele::find($idModele);
        $modele->modele = $nom;
        $modele->save();
        $idMarque = $modele->idMarque;
        $car = Car::where('id', '=', $idMarque)->get();
        $modele = Modele::where('idMarque', '=', $idMarque)->get();
        return redirect()->route('modele.show', ['id' => $idMarque]);    
    }
}
