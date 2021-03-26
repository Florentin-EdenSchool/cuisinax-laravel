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

    //Enregistrer le plat
    public function store(PlatRequest $request)
    {
        try {
            Plat::create($request->all());
            return redirect()->route('admin')->with('success', 'Le plat a bien été créé');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Enregistrer l'origine
    public function storeOrigine(OrigineRequest $request)
    {
        try {
            Origine::create($request->all());
            return redirect()->route('admin')->with('success', 'L\'origine a bien été créé');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Enregistrer l'ingrédient
    public function storeIngredient(IngredientRequest $request)
    {
        try {
            Ingredient::create($request->all());
            return redirect()->route('admin')->with('success', 'L\'ingrédient a bien été créé');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Enregistrer le type du plat
    public function storeTypePlat(TypePlatRequest $request)
    {
        try {
            TypePlat::create($request->all());
            return redirect()->route('admin')->with('success', 'Le type de plat a bien été créé');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Enregistrer le type de nourriture
    public function storeTypeNourriture(TypeNourritureRequest $request)
    {
        try {
            TypeNourriture::create($request->all());
            return redirect()->route('admin')->with('success', 'Le type de nourriture a bien été créé');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Lier un plat et un ingrédient
    public function storePlatIngredient(PlatIngredientRequest $request)
    {
        try {
            $result = PlatIngredient::where('id_ingredient', $request->input('id_ingredient'))->get();
            $result = PlatIngredient::where('id_plat', $request->input('id_plat'))->get();

            if (sizeof($result) == 0) {
                PlatIngredient::create($request->all());
                return redirect()->route('admin')->with('success', 'La liaison du plat et l\'ingrédient a bien été créée');
            } else return redirect()->route('admin')->with('danger', 'Ce plat est déjà lié à cet ingrédient');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Supprimer l'origine
    public function destroyOrigine($slug = null)
    {
        try {
            Origine::destroy($slug);
            return redirect()->route('admin.list.origine')->with('success', 'L\'origine a bien été supprimée');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Supprimer l'ingrédient
    public function destroyIngredient($slug = null)
    {
        try {
            Ingredient::destroy($slug);
            return redirect()->route('admin.list.ingredient')->with('success', 'L\'ingrédient a bien été supprimée et tous les plats liés à cet ingrédient ont vu leur liaison retirée');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Supprimer le type de nourriture
    public function destroyTypeNourriture($slug = null)
    {
        try {
            TypeNourriture::destroy($slug);
            return redirect()->route('admin.list.typenourriture')->with('success', 'Le type de nourriture a bien été supprimée');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Supprimer le type de plat
    public function destroyTypePlat($slug = null)
    {
        try {
            TypePlat::destroy($slug);
            return redirect()->route('admin.list.typeplat')->with('success', 'Le type de plat a bien été supprimée');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }

    //Supprimer le plat
    public function destroyPlat($slug = null)
    {
        try {
            Plat::destroy($slug);
            return redirect()->route('admin.list.plat')->with('success', 'Le plat a bien été supprimée');
        } catch (Exception $error) {
            return redirect()->route('admin')->with('danger', 'Une erreur est survenue : ' . $error);
        }
    }
}
