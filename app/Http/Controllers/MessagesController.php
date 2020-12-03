<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\ParticipeMeeting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::where('salon_id', 0)->get()->load('user');
        $messages = $messages->groupBy('meeting_id');
        $messages = $messages->toArray();

        $participants = [];

        $meetings = ParticipeMeeting::where('user_id', Auth::id())->get();

        foreach($meetings as $meeting){

            $participant = ParticipeMeeting::where([
                ['meeting_id', $meeting->meeting_id],
                ['user_id', '!=', Auth::id()]
                ])->get()->first()->load('user');

            $participants[] = $participant;
        }

        //dd($messages);
        return view('messages.index', [
            'messages'      => json_encode($messages),
            'participants'      => json_encode($participants)
        ]);
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
        $meeting_id = 0;
        $salon_id = 0;

        if($request['meeting_id']){
            $meeting_id = $request['meeting_id'];
        }

        if($request['salon_id']){
            $salon_id = $request['salon_id'];
        }

        $message = Message::create([
            'meeting_id'        => $meeting_id,
            'salon_id'          => $salon_id,
            'user_id'           => Auth::id(),
            'content_mess'        => $request['content_mess'],
            'date_message'      => now(),
            'statut_mess'       => 0
        ]);

        return response()->json([
            'code'      => 200,
            'message'   => $message
        ]);
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
