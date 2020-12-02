<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id(); //dd($user_id);

        $compte = Compte::where('user_id', $user_id)->get()->first();

        if($compte){

            // if($compte->statut === 0){
            //     Auth::logout();
            //     \Session::flush();
            // }

            if($compte->typecompte_id == 1){
                return redirect()->route('news.index');
            }
            if($compte->typecompte_id == 2){
                return redirect()->route('annonces.index');
            }
        }
    }
}
