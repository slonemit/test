<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Personne;
use App\Models\Structure;
use Illuminate\Http\Request;

class ComptesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comptes = Compte::where('statut', 0)->get()->load("structure.grille", "user");

        return view('comptes.index', compact('comptes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function test(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compte = Compte::find($id);
        $structure = Structure::find($compte->structure_id); //dd($compte, $structure);
        $personne = Personne::where('user_id', $compte->user_id)->get()->first(); //dd($personne);

        return view('comptes.show', compact('structure', 'compte', 'personne'));
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
        $compte = Compte::find($id);

        $compte->statut = $request['statut'];
        $compte->save();

        return redirect()->route('comptes.show', $compte->id);
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
