<?php

//start here

 	header("Content-Type: application/json");

     $response = '{
         "ResultCode": 0, 
         "ResultDesc": "Confirmation Received Successfully"
     }';
 
     // DATA
     $mpesaResponse = file_get_contents('php://input');
 
     // log the response
     $logFile = "M_PESAConfirmationResponse.txt"; // THE TRANSACTION RESPONSE WILL BE LOGGED HERE.
    
 
     // write to file
     $log = fopen($logFile, "a");
 
     fwrite($log, $mpesaResponse);
     fclose($log);

     //Processing the Mpesa json response Data
     $mpesaResponse = file_get_contents('M_PESAConfirmationResponse.txt');
     $callbackContent = json_decode($mpesaResponse);

     $Resultcode = $callbackContent->Body->stkCallback->ResultCode;
     $CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
     $Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
     $MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
     $PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;
     $formatedPhone  = str_replace("254", "0" , $PhoneNumber); 
     
     if ($Resultcode == 0) {
  
//ENTER YOUR LOGIC HERE ONCE PAYMENT IS SUCCESSFUL  
  }

     
//YOU CAN USE THESE VALUES AS RESULTCODE RESPONSES TO SET OTHER LOGIC PROCESSES 1 = insufficient balance; 2001 wrong mpesa pin; 1032 cancelled by user 
 
     //echo $response;
