<?php

namespace App\Http\Controllers;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

use Illuminate\Http\Request;

class CEV2Controller extends Controller
{
   
    public function generated(){


  
        $IDdeARTCI ='CI0A';
        $IDcachetserver='2';
        $URL='1';
        $IDduCertificatsign='4';
        $DateSign='27042002';//A encoder
        $TypeDoc='0055565';
        $IDemettrice='ARTCI';
        $Entete=$IDdeARTCI. $IDcachetserver.$URL;
            
    if ( $IDduCertificatsign==TRUE && $DateSign==TRUE && $TypeDoc==TRUE && $IDemettrice==TRUE && $Entete==TRUE){
    
    
        $publicKey  = file_get_contents('C:\Users\samue\public.key');
        $privateKey = file_get_contents('C:\Users\samue\private.key');
    
        $messagecrypt=$IDduCertificatsign. $DateSign. $TypeDoc. $IDemettrice;
        $h= hash ( "sha256", $messagecrypt);
        openssl_private_encrypt($h, $crypted, $privateKey);
        file_put_contents("test utile.txt", $crypted);
        $decode=utf8_encode($crypted );
        $Signature=$decode;
        
    }
    else {
    
        echo 'la valeur est null';
    }
    // On décrypte avec la clé privée
    //openssl_public_decrypt($crypted, $decrypted, $publicKey);
    //echo $decrypted;
    
         
        if ($h==TRUE){
            $Condensat=$h;
            
        }
    
    
    
        $tout=$Entete.'<GS>'. $Condensat."<GS>"."<RS>" .$Signature;
        $qr = QrCode::create($tout)
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
        ->setSize(200)
        ->setMargin(0)
        ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
        ->setForegroundColor(new Color(0, 0, 0))
        ->setBackgroundColor(new Color(255, 255, 255));
        $writer = new PngWriter();
        $result = $writer->write($qr);
        
        // (C) OUTPUT QR CODE
        // (C1) SAVE TO FILE
        $result->saveToFile('C:\laragon\www\ProjetSam\public'. "/qr1.png");
        
        // (C2) DIRECT OUTPUT
        //header("Content-Type: " . $result->getMimeType());
        //echo $result->getString();
        
        // (C3) GENERATE DATA URI
        // echo "<img src='{$result->getDataUri()}'/>";
    
        return view("QRcode", compact('result'));
    
    
    }   
   
   
   
   
   
   
    //
}
