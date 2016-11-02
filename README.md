# cs6412016

// sms twilio project
<?php
$sid = "ACbab2f7a54c9abd23dd345630992a8dfa"; // Account SID
$token = "53afa4e77e030d48257ed18d2951e235"; // Auth Token

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '5163847700', // reciever
  array(
    'from' => '5162003322', // sender
    'body' => 'Hello from Kanishk Nangia!'
  )
);

print $message->sid;
