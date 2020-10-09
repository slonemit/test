<?php

namespace App\Http\Controllers;

use App\Models\Commentaire as comme ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentaire extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("ventes/Annonce");
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

        $commentaire = comme::create([
           // 'user_id'=>Auth->user()->id,
            'annonce_id'=> 1,
            'typecomment_id'=>$request->input('type'),
            'dateComment'=> now(),
            'content_com'=> $request->input('content_com'),
            'user_id'=>Auth()->user()->id,
            'statut_com'=>0,
        ]);
        return \Redirect::back();

 // return redirect()->route('annonces.show', $annonce->id);
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
    public function comment(Request $request)
    {
      // dd($request) ;//
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
