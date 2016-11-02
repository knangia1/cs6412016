<?php

$strFromnumber  = "+15162003322";
$strTonumber    = "+15163847700";
$strMsg         = " Hello from Kanishk Nangia";

require_once ("inc/Services/Twilio.php");

$AccountSid = "ACbab2f7a54c9abd23dd345630992a8dfa";
$AuthToken  = "53afa4e77e030d48257ed18d2951e235";

$objConnection = new Services_Twilio($AccountSid, $AuthToken);

$bSuccess = $objConnection->account->sms_messages->create(
    
    $strFromnumber,  
    $strTonumber,   
    $strMsg 
    
);   

$aryResponse["SentMsg"] = $strMsg;
$aryResponse["Success"] = true;

echo json_encode($aryResponse);
