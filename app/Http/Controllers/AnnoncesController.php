<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\CategAnnonce;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categ = CategAnnonce::get();

        return view("ventes/Annonce", compact("categ"));
    }

    public function validatedAnnonces()
    {
        $annonces = Annonce::get()->load('user');

        return view('annonces.validations', compact('annonces'));
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
        $dispo = $request->input('disponibilite');

        if(!$dispo){
            $dispo = now();
        }

        /*dd($request->all());*/
        $annonce = Annonce::create([
            'user_id'       => 1,
            'fichier_id'       => 1,
            'categ_annonce_id'       => $request->input('categ_annonce_id'),
            'titre'       => $request->input('titre'),
            'description'       => $request->input('description'),
            'date_pub'       => $request->input('date_pub'),
            'cout'       => $request->input('cout'),
            'quantite'       => $request->input('quantite'),
            'disponibilite'       => $dispo,
            'statut_ann'       => 0,
        ]);

        if ($annonce) {

            if($request['image'] != null){
                $file = $request->file('image');
                $image = $annonce->id.'.'.$file->getClientOriginalExtension();

                if (!file_exists(public_path('images/annonces'))) {
                    mkdir(public_path('images/annonces'));
                }
                $file->move(public_path('images/annonces'), $image);
                $annonce->image = "images/annonces/".$image;
                $annonce->save();
            }

            return redirect()->route('annonces.show', $annonce->id);
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
