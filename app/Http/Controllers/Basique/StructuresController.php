<?php

namespace App\Http\Controllers\Basique;

use App\Models\Salon;
use App\Models\Compte;
use App\Models\Grille;
use App\Models\Annonce;
use App\Models\Produit;
use App\Models\Structure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StructuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structures = Structure::join('comptes', function ($join) {
        $join->on('comptes.id', '=', 'structures.compte_id')
            ->where('comptes.statut', '=', 1);
            })->get();

        return view("basique.structures.index", compact('structures'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $structure = Structure::find($id);
        $salons = Salon::where("structure_id", $id)->get();
        $produits = Produit::where("structure_id", $id)->get();

        $compte = Compte::where("structure_id", $id)->get()->first();
        $annonces = Annonce::where('user_id', $compte->user_id)->get();

        return view('basique.structures.show', compact('structure', 'salons', 'produits','annonces'));
    }
}

