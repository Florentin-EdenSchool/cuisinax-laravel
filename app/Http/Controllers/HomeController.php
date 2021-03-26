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

    //Affichage page Administrateur listage origine
    public function adminIndexListOrigine()
    {
        $origine = Origine::paginate(10);
        return view('admin.list.origine', compact('origine'));
    }

    //Affichage page Administrateur listage ingrédient
    public function adminIndexListIngredient()
    {
        $ingredient = Ingredient::paginate(10);
        return view('admin.list.ingredient', compact('ingredient'));
    }

    //Affichage page Administrateur listage type nourriture
    public function adminIndexListTypeNourriture()
    {
        $typeNourriture = TypeNourriture::paginate(10);
        return view('admin.list.typenourriture', compact('typeNourriture'));
    }

    //Affichage page Administrateur listage
    public function adminIndexListTypePlat()
    {
        $typePlat = TypePlat::paginate(10);
        return view('admin.list.typeplat', compact('typePlat'));
    }

    //Affichage page Administrateur listage
    public function adminIndexListPlat()
    {
        $plat = Plat::paginate(10);
        return view('admin.list.plat', compact('plat'));
    }
}
