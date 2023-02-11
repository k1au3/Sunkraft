<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class MpesaController extends Controller
{
    public function stkSimulation () 
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $BusinessShortCode = 174379;
        $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType = "CustomerPayBillOnline";
        $Amount  = "1"; 
        $PartyA  = "254701091317"; 
        $PartyB  = "174379"; 
        $PhoneNumber  = "254701091317"; 
        $CallBackURL  = "http://kimcode.co.uk"; 
        $AccountReference  = "Sunkrafts Payment"; 
        $TransactionDesc  = "Lipa na Mpesa";
        $Remarks  = "Thank you for Paying";


        $stkPushSimulation=$mpesa->STKPushSimulation
        (
            $BusinessShortCode,
            $LipaNaMpesaPasskey, 
            $TransactionType, 
            $Amount, 
            $PartyA, 
            $PartyB, 
            $PhoneNumber, 
            $CallBackURL, 
            $AccountReference, 
            $TransactionDesc, 
            $Remarks
        );

        dd($stkPushSimulation);
    }
}
