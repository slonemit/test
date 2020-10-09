<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    public function getMessages(){

        $response = Http::get('http://localhost:9710/http/request-received-messages?username=admin&password=admin&limit=100&order=newest');


        $xml = simplexml_load_string($response->body());
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);



        $response=1;

        return $response;

        /*foreach($array['Message'] as $message){
            dump($message['From'] . ' =>  Message : '. $message['MessageText']);
        }
        die();*/
    }
}
