<?php

namespace App\Http\Controllers;
use App\Http\Models\Certificat;

use Illuminate\Http\Request;


class CertificatController extends Controller
{
    //

    public function Afficher_Annuaire(){

        return view('FormulaireCertificat');
    }


//Ajouter un certificat numérique
    public function Ajouter_un_certificat(Request  $request){
        $validated=$request->validate([
            'NomDeAC'=>"bail | required | max:35",
            'NumDeSerie' => "bail | required |  max:1000",
            'DuréeValidate' => "bail | required | max:35",
            'ParametreClée' => "bail |required| number |max:5",
            
            
         ]);

$Mon_Certificat= new CertificatController;
$Mon_Certificat->NomDeAC = $request->NomDeAC;
$Mon_Certificat->NumDeSerie = $request->NumDeSerie;
$Mon_Certificat->DuréeValidate = $request->DuréeValidate;
$Mon_Certificat->ParametreClée = $request->ParametreClée;
 
$Mon_Certificat->save();



    }


}

   
