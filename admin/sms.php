<?php

$string = <<<EOD
Announcement! This is from the MAO Jimenez Office. 
When: Meeting 
Where: Jimenez Gymnasium
EOD;

$ch = curl_init();
$parameters = array(
    'apikey' => 'cda2b7bcdab4a6ab448b7618c4721f59', //Your API KEY
    'number' => '09457664949',
    'message' => $string ,
    'sendername' => 'CabTom'
);
curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
curl_setopt( $ch, CURLOPT_POST, 1 );

//Send the parameters set above with the request
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

// Receive response from server
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close ($ch);

//Show the server response
echo $output;

?>