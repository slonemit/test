<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Personne;
use App\Models\Salon;
use App\Models\Structure;
use App\Models\Message;
use App\Models\ParticipeSalon;
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
        

        if ($salon) {

            if($request['image'] != null){
                $file = $request->file('image');
                $image = $salon->id.'.'.$file->getClientOriginalExtension();

                if (!file_exists(public_path('images/salons'))) {
                    mkdir(public_path('images/salons'));
                }
                $file->move(public_path('images/salons'), $image);
                $salon->image = "images/salons/".$image;
                $salon->save();
            }

            ParticipeSalon::create([
                'user_id'       => Auth::id(),
                'salon_id'      => $salon->id,
                'moderateur'    => 0,
                'statut'        => 1
            ]);

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
        $confirm = [];
        $salon = Salon::find($id);
        $own_structure = Personne::where('user_id', Auth::id())->get()->first();
        $confirm[] = $own_structure->structure_id;

        $invitations = Invitation::where('salon_id', $id)->get()->load('structure');
        
        foreach($invitations as $invitation){
            $confirm[] = $invitation->structure_id;
        }
        $structures = Structure::whereNotIn('id', $confirm)->orderBy('nom')->get();

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

    /**
     * Display the salon's chat
     */

    public function chats() {

        $messages = [];
        $salons = [];

        $user_salons = ParticipeSalon::where('user_id', Auth::id())->get()->load('salon');
        foreach($user_salons as $p){
            $salons[] = $p->salon_id;
        }

        $messages = Message::whereIn('salon_id', $salons)->get();
        $messages = $messages->groupBy('salon_id');
        $messages = $messages->toArray();
        $messages = json_encode($messages);
        $user_salons = json_encode($user_salons);

        return view('salons.chats', compact('messages', 'user_salons'));
    }
}
