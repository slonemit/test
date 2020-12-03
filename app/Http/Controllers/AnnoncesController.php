<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Annonce;
use App\Models\AcheterPack;
use App\Models\Commentaire;
use App\Models\CategAnnonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::orderBy('created_at', 'desc')->where('statut_ann', 1)->get()->load('user');
        $categ = CategAnnonce::get();

        $pubs = AcheterPack::where([['date_achat', '<=', now()],['date_fin', '>=', now()]])->get();
        $pubs = json_encode($pubs);

        return view("annonces.index", compact('annonces', 'categ', 'pubs'));
    }

    public function validatedAnnonces()
    {
        $annonces = Annonce::where('statut_ann', 0)->get()->load('user');

        return view('annonces.validations', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categ = CategAnnonce::get();

        return view("annonces.create", compact("categ"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request->all());*/
        $annonce = Annonce::create([
            'user_id'       => Auth::id(),
            'fichier_id'       => 1,
            'categ_annonce_id'       => $request->input('categ_annonce_id'),
            'titre'       => $request->input('titre'),
            'description'       => $request->input('description'),
            'date_pub'       => now(),
            'cout'       => $request->input('cout')??0,
            'quantite'       => $request->input('quantite')??0,
            'disponibilite'       => $request->input('disponibilite')??now(),
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
        $annonce = Annonce::find($id);
        $commentaires = Commentaire::where('annonce_id', $id)->get();

        return view("annonces.show", compact('annonce', 'commentaires'));
    }
    public function comment(Request $request)
    {
       dd($request) ;//
    }

    /**
     * Show the form for editing the specified resource                                       .
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
        $annonce = Annonce::find($id);

        $annonce->statut_ann = 1;
        $annonce->save();

        return redirect()->route('annonces.show', $annonce->id);
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
