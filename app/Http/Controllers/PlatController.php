<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrigineRequest;
use App\Http\Requests\IngredientRequest;
use App\Http\Requests\PlatRequest;
use App\Http\Requests\TypeNourritureRequest;
use App\Http\Requests\TypePlatRequest;
use App\Models\Plat;
use App\Models\Ingredient;
use App\Models\Origine;
use App\Models\TypePlat;
use App\Models\TypeNourriture;

class PlatController extends Controller
{
    //Toute cette classe est réservée à une personne enregistrée
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Affichage page principale de recherche
    public function index()
    {
        $ingredient = Ingredient::all();
        $origine = Origine::all();
        return view('search', compact('ingredient'), compact('origine'));
    }

    //Enregistrer le plat
    public function store(PlatRequest $request)
    {
        Plat::create($request->all());
        return redirect()->route('admin')->with('info', 'Le plat a bien été créé');
    }

    //Enregistrer l'origine
    public function storeOrigine(OrigineRequest $request)
    {
        Origine::create($request->all());
        return redirect()->route('admin')->with('info', 'L\'origine a bien été créé');
    }

    //Enregistrer l'ingrédient
    public function storeIngredient(IngredientRequest $request)
    {
        Ingredient::create($request->all());
        return redirect()->route('admin')->with('info', 'L\'ingrédient a bien été créé');
    }

    //Enregistrer le type du plat
    public function storeTypePlat(TypePlatRequest $request)
    {
        TypePlat::create($request->all());
        return redirect()->route('admin')->with('info', 'Le type de plat a bien été créé');
    }

    //Enregistrer le type de nourriture
    public function storeTypeNourriture(TypeNourritureRequest $request)
    {
        TypeNourriture::create($request->all());
        return redirect()->route('admin')->with('info', 'Le type de nourriture a bien été créé');
    }
}
