<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plat;
use App\Models\Ingredient;
use App\Models\Origine;
use App\Models\TypePlat;
use App\Models\TypeNourriture;

class HomeController extends Controller
{
    //Toute cette classe est réservée à une personne enregistrée
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Affichage de la page principale
    public function index()
    {
        return view('home');
    }

    //Affichage page Administrateur
    public function adminIndex()
    {
        $ingredient = Ingredient::all();
        $origine = Origine::all();
        $typeNourriture = TypeNourriture::all();
        $typePlat = TypePlat::all();
        return view('admin.index', compact('ingredient', 'origine', 'typeNourriture', 'typePlat'));
    }
}
