<?php

namespace App\Http\Controllers;

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

    //Affichage page Administrateur d'ajout
    public function adminIndex()
    {
        $plat = Plat::all();
        $ingredient = Ingredient::all();
        $origine = Origine::all();
        $typeNourriture = TypeNourriture::all();
        $typePlat = TypePlat::all();
        return view('admin.index', compact('ingredient', 'origine', 'plat', 'typeNourriture', 'typePlat'));
    }

    //Affichage page Administrateur listage
    public function adminIndexList()
    {
        return view('admin.list.index');
    }

    //Affichage page Administrateur listage
    public function adminIndexListOrigine()
    {
        $plat = Plat::paginate(10);
        $ingredient = Ingredient::paginate(10);
        $origine = Origine::paginate(10);
        $typeNourriture = TypeNourriture::paginate(10);
        $typePlat = TypePlat::paginate(10);
        return view('admin.list.origine', compact('ingredient', 'origine', 'plat', 'typeNourriture', 'typePlat'));
    }
}
