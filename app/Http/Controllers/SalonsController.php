<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Personne;
use App\Models\Salon;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $person = Personne::where('user_id', Auth::id())->get()->first();


        $salon = Salon::create([
            'libelle'      => $request->input('libelle'),
            'description'      => $request->input('description'),
            'structure_id'      => $person->structure_id,
            'dateSalon'         => $request->input('dateSalon'),
            'heureSalon'         => $request->input('heureSalon'),
            'heureFinSalon'         => $request->input('heureFinSalon'),
            'statutSalon'       => 0
        ]);

        if($salon){
            return redirect()->route("salons.show", $salon->id);
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
        $structures = Structure::orderBy('nom')->get();
        $invitations = Invitation::where('salon_id', $id)->get()->load('structure');

        return view('salons.show', compact('salon', 'structures', 'invitations'));
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
