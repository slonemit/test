<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Personne;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::get();

        return view('personnes.index', compact('personnes'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $personne = Personne::create([
            'nom'           => $request->input('nom'),
            'prenom'           => $request->input('prenom'),
            'datenaiss'           => $request->input('datenaiss'),
            'lieunaiss'           => $request->input('lieunaiss'),
            'tel'           => $request->input('tel'),
            'email'           => $request->input('email'),
            'cq'           => $request->input('cq'),
            'ville'           => $request->input('ville')
        ]);

        if($personne){

            $user = User::create([
                'personne_id'       => $personne->id,
                'name'              => $personne->nom. ' '. $personne->prenom,
                'login'             => $personne->nom. ' '. $personne->prenom,
                'email'             => $personne->email,
                'password'          => Hash::make($request->input('password')),
                'statut_user'       => 0
            ]);

            if($user){

                $compte = Compte::create([
                    'user_id'           => $user->id,
                    'structure_id'      => 0,
                    'typecompte_id'     => 1,
                ]);

                if($compte) {
                    return redirect('/login');
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
        //
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
