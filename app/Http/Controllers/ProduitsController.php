<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::get()->load('structure');

        return view('produits.index', compact('produits'));
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
        $produit = Produit::create([
            'structure_id'      => $request->input('structure_id'),
            'name'      => $request->input('name'),
            'price'      => $request->input('price'),
            'description'      => $request->input('description'),
        ]);

        if ($produit) {

            if($request['image'] != null){
                $file = $request->file('image');
                $image = $produit->id.'.'.$file->getClientOriginalExtension();

                if (!file_exists(public_path('images/produits'))) {
                    mkdir(public_path('images/produits'));
                }
                $file->move(public_path('images/produits'), $image);
                $produit->image = "images/produits/".$image;
                $produit->save();
            }

            return redirect()->route('structures.show', $request->input('structure_id'));
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
