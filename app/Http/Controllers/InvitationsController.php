<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Personne;
use App\Models\Invitation;
use Illuminate\Http\Request;
use App\Models\ParticipeSalon;
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
        $invit_confirm = Invitation::where([['structure_id', $personne->structure_id], ['statut', 1]])->get()->load('structure', 'salon');

        return view('invitations.index', compact('invitations','invit_confirm'));
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

            Message::create([
                'meeting_id'        => 0,
                'salon_id'          => $request->input('salon_id'),
                'user_id'           => Auth::id(),
                'date_message'      => now(),
                'statut_mess'       => -1,
                'content_mess'      => ' '
            ]);

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
