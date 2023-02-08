<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Safaricom\Mpesa\MpesaServiceProvider;
use Mpesa;

class PayController extends Controller
{
    public function  stk() {
        // $mpesa = new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPaybillOnline';
        $Amount = '1';
        $PartyA = '254701091317';
        $PartyB = '174379';
        $PhoneNumber = '254701091317';
        $CallBackURL = 'https://a920-197-248-246-149.eu.ngrok.io/dir/callback.php';
        $AccountReference = 'Sunkraft';
        $TransactionDesc = 'Transaction Decs';
        $Remarks = 'Remarks';

        $stkPushSimulation = $mpesa->STKPushSimulation(
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
            $Remarks,
        );

        dd($stkPushSimulation);

    }

    public function pay()
    {
        //show create form
        return view('pay');
    }



}
