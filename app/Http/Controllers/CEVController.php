<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CEV;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;

class CEVController extends Controller

{

    

//Afficher le formulaire 
public function create(){

return view('Formulaire');
   }  

   /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
   
// Valider les données du formulaire et les envoyer dans le formulaire 

public function store (Request $request){

$validated=$request->validate([
   'NomOrga'=>['required','max:255'],
   'IDARTCI' => ['required ', 'max: 255'],
   'LienDoc' => ['required ', 'max: 255'],
   'NumDoc' => ['required',  'max:255'],
   'EmailUsager' => ['required', 'max:255'],
   


]);

Storage::disk('public')->putFileAs('2D-doc',$request->file('Document'),'side.pdf');
$filePdf=fopen(Storage::disk('public')->path('2D-doc/side.pdf'), 'r');
$filePdf1=fread($filePdf,filesize(Storage::disk('public')->path('2D-doc/side.pdf')));

$Mon_CEV= new CEV;
$Mon_CEV->NomOrga = $request->NomOrga;
$Mon_CEV->IDARTCI = $request->IDARTCI;
$Mon_CEV->LienDoc = $request->LienDoc;
$Mon_CEV->NumDoc = $request->NumDoc;
$Mon_CEV->EmailUsager = $request->EmailUsager;
 
$Mon_CEV->save();
$id= $Mon_CEV->id;
$Mon_CEV= CEV::find($id);

$data = json_decode($Mon_CEV, true);
        //var_dump ($data);
        //echo $data['Typedoc'];


        $lire = fopen('C:\Users\samue\device2.pem', 'rb');
        $lire1 = fread($lire, filesize('C:\Users\samue\device2.pem'));
        $voir1 = openssl_x509_parse($lire1, true);

        $lire2 = fopen('C:\Users\samue\privée.pem', 'rb');
        $lire3 = fread($lire2, filesize('C:\Users\samue\privée.pem'));
        $voir3 = openssl_x509_parse($lire3, true);
        //echo $voir['issuer']['CN'];



        $NomOrga = $data['NomOrga'];
        $IDARTCI = $data['IDARTCI'];
        $LienDoc = $data['LienDoc'];
        $NumDoc = $data['NumDoc'];
        $IDdecachet = $voir3['serialNumberHex'];
        $IDsign = $voir1['serialNumberHex'];
        $EmailUsager = $data['EmailUsager'];
        $Entete = $IDARTCI . "<GS>" . $IDdecachet . "<GS>" . "<GS>" . $LienDoc . "<GS>" . $NomOrga;


        if ($NumDoc == TRUE && $NomOrga == TRUE && $Entete == TRUE) {

            //$publicKey  = file_get_contents('C:\Users\samue\public.key');
            $privateKey = file_get_contents('C:\Users\samue\privée.key');

            $messagecrypt = $IDsign . $NumDoc . $NomOrga;

            // On crypte avec la clé publique
            $h = hash("sha256", $messagecrypt);
            openssl_private_encrypt($h, $crypted, $privateKey);
            $decode = utf8_encode($crypted);
            $voir = base64_encode($crypted);
        }


        // On décrypte avec la clé privée
        //openssl_public_decrypt($crypted, $decrypted, $publicKey);
        //echo $decrypted;


        if ($voir == TRUE && $Entete == TRUE && $h == TRUE) {
            $qrcode = Qrcode::size(200)
                 
                
                ->generate($Entete . $h . "<US>" . $voir);
                //return view ('2D-doc', compact('qrcode'));
           
            //->format("png")
        $var='J';    //->saveToFile(__DIR__ . "/qr.png")
        $fpdi = new Fpdi();
        $fpdi->AddPage();
        $fpdi->setSourceFile(Storage::disk('public')->path('2D-doc/side.pdf'));
        $file4=$fpdi->importPage(1);
        $fpdi->useTemplate($file4,0,0);

        $fpdi->SetFont('Arial','B',14);
        $fpdi->Image('qr.png',170,260,25);       
        
        $fpdi->Output();
        exit;
           
           
          
           
        
    }








    


}









}