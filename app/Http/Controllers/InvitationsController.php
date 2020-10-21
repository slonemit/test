<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\ParticipeSalon;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personne = Personne::find(Auth::user()->personne_id);  //dd($personne->structure_id);

        $invitations = Invitation::where([['structure_id', $personne->structure_id], ['statut', 0]])->get()->load('structure', 'salon');

        return view('invitations.index', compact('invitations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invitation = Invitation::create([
            'structure_id'      => $request->input('structure_id'),
            'salon_id'      => $request->input('salon_id'),
            'date_invit'      => date('y-m-d'),
            'motif_invit'   => 1
        ]);

        if($invitation){
            return redirect()->route("salons.show", $request->input('salon_id'));
        }

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
        $invitation = Invitation::find($id);

        $invitation->statut = 1;
        $invitation->save();

        if($invitation){
            ParticipeSalon::create([
                'user_id'   => Auth::id(),
                'salon_id'  => $invitation->salon_id,
                'moderateur'    => 0,
                'statut'        =>0
            ]);

        }

        return redirect()->route('invitations.show', $invitation->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invitation = Invitation::find($id)->load('structure', 'salon');

        return view('invitations.show', compact('invitation'));
    }
}
