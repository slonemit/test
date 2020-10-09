<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salons = Salon::get();

        return view("salons.index", compact('salons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salon = Salon::create([
            'libelle'      => $request->input('libelle'),
            'structure_id'      => $request->input('structure_id'),
            'dateSalon'         => $request->input('dateSalon'),
            'heureSalon'         => $request->input('heureSalon'),
            'heureFinSalon'         => $request->input('heureFinSalon'),
            'statutSalon'       => 0
        ]);

        if($salon){
            return redirect()->route("structures.show", $request->input('structure_id'));
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
        $salon = Salon::find($id);

        return view('salons.show', compact('salon'));
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
