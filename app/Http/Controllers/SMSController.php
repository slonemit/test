<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Compte;
use App\Models\Annonce;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    public function index(){

        // $response = Http::get('http://localhost:9710/http/request-received-messages?username=admin&password=admin&limit=100&order=newest');


        // $xml = simplexml_load_string($response->body());
        // $json = json_encode($xml);
        // $messages = json_decode($json,TRUE); //dd($messages);
        // $messages = $messages["Message"];

        // return view('sms.index', compact('messages'));
    }

    public function callbackSms(Request $request){

        $message = $request['message'];

        $tab = explode("#", $message);

        if( count($tab) > 1 ){

            if($tab[0] == 1){

                $nom = explode('*', $tab[1]);

                $personne = Personne::create([
                    'nom' => strtoupper($nom[0]),
                    'prenom'    => $nom[1],
                    'datenaiss' => $tab[2],
                    'ville'     => $tab[3],
                    'tel'       => $request['from'],
                    'email'     => $nom[0].$nom[1]."@email.com"
                ]);

                if($personne){
        
                    $user = User::create([
                        'personne_id'       => $personne->id,
                        'name'              => $personne->nom. ' '. $personne->prenom,
                        'login'             => $personne->nom. ' '. $personne->prenom,
                        'email'             => $personne->email,
                        'password'          => Hash::make('1234'),
                        'statut_user'       => 0
                    ]);
        
                    if($user){
        
                        $compte = Compte::create([
                            'user_id'           => $user->id,
                            'structure_id'      => 0,
                            'typecompte_id'     => 1,
                        ]);
        
                        if($compte) {
                            $personne->user_id = $user->id;
                            $personne->save();
                            
                            return redirect('/login');
                        }
                    }
        
                }

            }elseif ($tab[0] == 2){

                $personne = Personne::where("tel", $request['from'])->get()->first();
                if($personne){
                    $personne_id = $personne->id;
                }

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

        return response('result=1')->header('Content-Length', 12);

    }
}
