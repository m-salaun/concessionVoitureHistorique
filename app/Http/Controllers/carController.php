<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Modele;

use Illuminate\Http\Request;

class carController extends Controller
{
    public function index(){
        return view('welcome',[
            'cars' => Car::orderBy('marque', 'desc')->get()
        ]);
    }

    public function add(){
        if (!empty($_POST['marque'])){
            $marque = request('marque');
            $car = new Car();
            $car->marque = $marque;
            $car->save();
            return back();
        }
        else{
            echo '<script>alert("Veuillez remplir le champ marque.");</script>';  
            return view('home');
        }
    }
}
