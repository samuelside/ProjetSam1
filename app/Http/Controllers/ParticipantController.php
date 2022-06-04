<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ParticipantController extends Controller
{
    //

    public function afficher(){
        return view ('EspaceParticipant');
    }

    public function Authentification_Utilisateur(Request $request ){
        //Validation des données entrantes.
        $validate_data=Validator::make($request->all(),[
            'emailParticipant'=> "bail | required | email| max:35",
            'passwordParticipant'=>"bail | required | min:6 | max:20",

        ]);

        //Authentification_des_utilisateurs
        if(Auth::guard('participant')->attempt(['EmailParticipant'=>$request->input('emailParticipant'), 'PasswordParticipant'=>$request->input('passwordParticipant') ])){

            $request->session()->regenerate();
            return redirect()->intended('');
        }
        return back()->withErrors([
            'emailParticipant'=>"Votre email est incorrect",
            'passwordParticipant'=>"Votre mot de passe est incorrect",
        ]);

        }

     public function Ajouter_un_Certificat(){


     }  
     
     public function Supprimer_un_Certificat(){


     }

     public function Envoyer_un_mail(){


     }

     public function Mettre_la_clé_publique(){

        
     }
}
