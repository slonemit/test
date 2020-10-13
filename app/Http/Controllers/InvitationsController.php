<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationsController extends Controller
{

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
}
