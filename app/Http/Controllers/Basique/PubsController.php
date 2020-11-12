<?php

namespace App\Http\Controllers\Basique;

use App\Models\Pack;
use App\Models\AcheterPack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = Pack::get();
        $achatpacks = AcheterPack::where('user_id', Auth::id())->get();

        return view('basique.packs.index', compact('packs', 'achatpacks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achatpack = AcheterPack::create([
            'user_id'           => Auth::id(),
            'pack_id'           => $request['pack_id'],
            'date_achat'        => $request['date_achat'],
            'date_fin'          => $request['date_fin'],
            'statut_pack'       => 0
        ]);
        if($achatpack){
            return redirect()->route('pubs.index');
        }
    }
}
