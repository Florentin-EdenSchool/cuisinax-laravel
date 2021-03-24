<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrigineRequest;
use App\Http\Requests\IngredientRequest;
use App\Http\Requests\PlatRequest;
use App\Http\Requests\PlatIngredientRequest;
use App\Http\Requests\TypeNourritureRequest;
use App\Http\Requests\TypePlatRequest;
use App\Models\Plat;
use App\Models\Ingredient;
use App\Models\Origine;
use App\Models\TypePlat;
use App\Models\TypeNourriture;
use App\Models\PlatIngredient;
use Exception;

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
        try {
            $ingredient = Ingredient::all();
            $origine = Origine::all();
            return view('search', compact('ingredient'), compact('origine'));
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Enregistrer le plat
    public function store(PlatRequest $request)
    {
        Plat::create($request->all());
        return redirect()->route('admin')->with('success', 'Le plat a bien été créé');
    }

    //Enregistrer l'origine
    public function storeOrigine(OrigineRequest $request)
    {
        Origine::create($request->all());
        return redirect()->route('admin')->with('success', 'L\'origine a bien été créé');
    }

    //Enregistrer l'ingrédient
    public function storeIngredient(IngredientRequest $request)
    {
        Ingredient::create($request->all());
        return redirect()->route('admin')->with('success', 'L\'ingrédient a bien été créé');
    }

    //Enregistrer le type du plat
    public function storeTypePlat(TypePlatRequest $request)
    {
        TypePlat::create($request->all());
        return redirect()->route('admin')->with('success', 'Le type de plat a bien été créé');
    }

    //Enregistrer le type de nourriture
    public function storeTypeNourriture(TypeNourritureRequest $request)
    {
        TypeNourriture::create($request->all());
        return redirect()->route('admin')->with('success', 'Le type de nourriture a bien été créé');
    }

    //Lier un plat et un ingrédient
    public function storePlatIngredient(PlatIngredientRequest $request)
    {
        $result = PlatIngredient::where('id_ingredient', $request->input('id_ingredient'))->get();
        $result = PlatIngredient::where('id_plat', $request->input('id_plat'))->get();

        if (sizeof($result) == 0) {
            PlatIngredient::create($request->all());
            return redirect()->route('admin')->with('success', 'La liaison du plat et l\'ingrédient a bien été créée');
        } else return redirect()->route('admin')->with('danger', 'Ce plat est déjà lié à cet ingrédient');
    }

    //Enregistrer le plat
    public function destroyOrigine($slug = null)
    {
        Origine::destroy($slug);
        return redirect()->route('admin.list.origine')->with('success', 'L\'origine a bien été supprimée');
    }
}
