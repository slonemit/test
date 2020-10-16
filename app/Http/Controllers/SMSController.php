<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    public function index(){

        $response = Http::get('http://localhost:9710/http/request-received-messages?username=admin&password=admin&limit=100&order=newest');


        $xml = simplexml_load_string($response->body());
        $json = json_encode($xml);
        $messages = json_decode($json,TRUE); //dd($messages);
        $messages = $messages["Message"];

        return view('sms.index', compact('messages'));
    }

    public function callbackSms(Request $request){

        echo 'result=1';

        $message = $request['message'];

        $tab = explode("#", $message);

        if( count($tab) > 1 ){

            if($tab[0] == 1){

                $nom = explode('*', $tab[1]);

                Personne::create([
                    'nom' => strtoupper($nom[0]),
                    'prenom'    => $nom[1],
                    'datenaiss' => $tab[2],
                    'ville'     => $tab[3],
                    'tel'       => $request['from'],
                    'email'     => 'mn@email.com'
                ]);

            }elseif ($tab[0] == 2){

                $personne_id = 0;

                /*$personne = Personne::where("tel", $request['from'])->get()->first();
                if($personne){
                    $personne_id = $personne->id;
                }*/

                Annonce::create([
                    'user_id'       => $personne_id,
                    'categ_annonce_id'       => 1,
                    'titre'       => $tab[1],
                    'description'       => 'Vente des '. $tab[1],
                    'date_pub'       => now(),
                    'cout'       => $tab[2],
                    'quantite'       => $tab[3],
                    'disponibilite'       => now(),
                    'statut_ann'       => 0,
                ]);

            }

        }

    }
}
