<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UtilisateurController extends Controller
{

    public function afficher(){
        return view ('EspaceUtilisateur');
    }

    public function Authentification_Utilisateur(Request $request ){
        //Validation des données entrantes.
        $validate_data=Validator::make($request->all(),[

            'idUtilisateur'=>  "bail | required | number | max:10",
            'emailUtilisateur'=> "bail | required | email| max:35",
            'passwordUtilisateur'=>"bail | required | min:6 | max:20",

        ]);

        //Authentification_des_utilisateurs
        if(Auth::guard('utilisateur')->attempt(['idUtilisateur' => $request->input('idUtilisateur'),'EmailUtilisateur'=>$request->input('emailUtilisateur'), 'PasswordUtilisateur'=>$request->input('passwordUtilisateur') ])){

            $request->session()->regenerate();
            return redirect()->intended('');
        }
        return back()->withErrors([
            'emailUtilisateur'=>"Votre email est incorrect",
            'passwordlUtilisateur'=>"Votre mot de passe est incorrect",
        ]);

        }
    public function Consulter_annuaire(){

      

    }

    public function Recupérer_la_clé_publique(){

        
    }
       

 }
    //

