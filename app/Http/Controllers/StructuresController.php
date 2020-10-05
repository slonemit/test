<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Grille;
use App\Models\Salon;
use App\Models\Structure;
use App\Models\Typecompte;
use Illuminate\Http\Request;

class StructuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structures = Structure::all();
        return view("structures.index", compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $grilles = Grille::all();
        $type = Typecompte::find($id);
        $type_id = $type->id;
        return view('structures.create', compact('type_id', 'grilles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());


        /*$structure = Structure::create([
            'nom'      => $nom,
            'compte_id' => 0
        ]);

        $compte = Compte::create([
            'structure_id'      => $structure->id,
            'compteLib'        => $compte_lib,
            'montantCotis'     => $montant
        ]);

        $structure->compte_id = $compte->id;
        $structure->save();*/

        /*return redirect()->route("structures.show", $compte->id);*/
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

        return view('structures.show', compact('structure', 'salons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
