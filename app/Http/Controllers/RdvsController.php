<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use App\Models\Meeting;
use App\Models\ParticipeMeeting;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RdvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rdvs_e = Rdv::where('user_id', Auth::id())->get();
        $rdvs_r = Rdv::where('receiver_id', Auth::id())->get();

        return view('rdvs.index', compact('rdvs_e','rdvs_r'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = user::get();

        return view('rdvs.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rdv = Rdv::create([
            'user_id'       => Auth::id(),
            'receiver_id'   => $request['receiver_id'],
            'date_propose'  => $request['date_propose'],
            'date_appouv'  => $request['date_propose'],
            'rdv_comment'   => $request['rdv_comment'],
            'statut_rdv'    => 0
        ]);

        if($rdv){

            $meeting = Meeting::create([
                'heureMeet'         => $request['heureMeet'],
                'heureFinMeet'      => $request['heureFinMeet'],
                'dateMeet'          => $request['date_propose'],
                'statutMeet'        => 0
            ]);

            if($meeting){

                $particite = ParticipeMeeting::create([
                    'user_id'   => Auth::id(),
                    'meeting_id'    => $meeting->id
                ]);

                return redirect()->route('rdv.index');
            }
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
        $rdv = Rdv::find($id);

        return view('rdvs.show', compact('rdv'));
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

        $rdv = Rdv::find($id);
        $rdv->statut_rdv = 1;
        $rdv->save();

        if($rdv){

            $meeting = Meeting::find($id);    
            $meeting->statutMeet = 1;
            $meeting->save();

            if($meeting){

                $particite = ParticipeMeeting::create([
                    'user_id'       => Auth::id(),
                    'meeting_id'    => $meeting->id
                ]);
        
                if($particite){
                    return redirect()->route('rdv.show', $rdv->id);
                }
            }

        }
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
