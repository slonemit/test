<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Grille;
use App\Models\Personne;
use App\Models\Produit;
use App\Models\Salon;
use App\Models\Structure;
use App\Models\Typecompte;
use App\User;
use Illuminate\Support\Facades\Hash;
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
        $structures = Structure::join('comptes', function ($join) {
        $join->on('comptes.id', '=', 'structures.compte_id')
            ->where('comptes.statut', '=', 1);
            })->get();

        return view("structures.index", compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $grilles = Grille::orderBy('activite')->get();
        $type = Typecompte::find($id);
        $type_id = $type->id;

        if($type_id == 1){
            return view('structures.create_person', compact('type_id', 'grilles'));
        }

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

        $structure = Structure::create([
            'nom'      => $request->input('nom'),
            'form_jurid'      => $request->input('form_jurid'),
            'objet_social'      => $request->input('objet_social'),
            'raison_social'      => $request->input('raison_social'),
            'adresse'      => $request->input('adresse'),
            'tel'      => $request->input('tel'),
            'email'      => $request->input('email'),
            'grille_id'      => $request->input('grille_id'),
            'compte_id' => 0
        ]);

        $compte = Compte::create([
            'structure_id'      => $structure->id,
            'typecompte_id'     => $request->input('typecompte_id')
        ]);

        $structure->compte_id = $compte->id;
        $structure->save();

        if($structure || $compte){

            $personne = Personne::create([
                'structure_id'          => $structure->id,
                'nom'                   => $structure->nom,
                'datenaiss'             => now(),
                'email'                 => $structure->email
            ]);

            if($personne){

                $user = User::create([
                    'personne_id'       => $personne->id,
                    'name'              => $personne->nom,
                    'login'             => $personne->nom,
                    'email'             => $personne->email,
                    'password'          => Hash::make($request->input('password')),
                    'statut_user'       => 0
                ]);

                if($user){
                    $personne->user_id = $user->id;
                    $personne->save();

                    $compte->user_id = $user->id;
                    $compte->save();

                    return redirect('/home');
                }
            }
        }
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
        $grilles = Grille::orderBy('activite')->get();

        return view('structures.show', compact('structure', 'salons', 'produits','grilles'));
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

        $structure = Structure::find($id);

        $this->authorize('update', $structure);

        $structure->description = $request['description'];
        $structure->experience = $request['experience'];
        $structure->save();

        if($structure)  {

            if($request['image'] != null){
                $file = $request->file('image');
                $image = $structure->id.'.'.$file->getClientOriginalExtension();

                if (!file_exists(public_path('images/structures'))) {
                    mkdir(public_path('images/structures'));
                }
                $file->move(public_path('images/structures'), $image);
                $structure->image = "images/structures/".$image;
                $structure->save();
            }

            return redirect()->route('structures.show', $id);
        }
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
