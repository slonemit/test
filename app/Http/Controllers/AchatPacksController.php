<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pack;
use App\Models\AcheterPack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchatPacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pack = Pack::find($request['pack_id']);
        $interval = $pack->jour;        

        $achatpack = AcheterPack::create([
            'user_id'           => Auth::id(),
            'pack_id'           => $request['pack_id'],
            'date_achat'        => $request['date_achat'],
            'date_fin'          => date('Y-m-d', strtotime($request['date_achat']. ' + ' . $interval .' days')),
            'statut_pack'       => 0
        ]);
        if($achatpack){

            if($request['fichier'] != null){
                
                $file = $request->file('fichier');

                $mime = mime_content_type($file->getPathName());

                if(strstr($mime, "video/")){
                    $video = $achatpack->id.'.'.$file->getClientOriginalExtension();

                    if (!file_exists(public_path('images/achatpacks'))) {
                        mkdir(public_path('images/achatpacks'));
                    }
                    $file->move(public_path('images/achatpacks'), $video);
                    $achatpack->video = "images/achatpacks/".$video;
                    $achatpack->save();

                }else if(strstr($mime, "image/")){

                    $image = $achatpack->id.'.'.$file->getClientOriginalExtension();

                    if (!file_exists(public_path('images/achatpacks'))) {
                        mkdir(public_path('images/achatpacks'));
                    }
                    $file->move(public_path('images/achatpacks'), $image);
                    $achatpack->image = "images/achatpacks/".$image;
                    $achatpack->save();
                }
            }

            return redirect()->route('packpubs.index');
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
