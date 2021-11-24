<?php

/*
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("ACa49837530c855c536ba8796e1450697a");
$token = getenv("b3eb3006563108f7dd3e4835d7143bd7");
$twilio = new Client($sid, $token);

$call = $twilio->calls
               ->create("+2347084060020", // to
                        "+17409486428", // from
                        ["url" => "http://demo.twilio.com/docs/voice.xml"]
               );

print($call->sid);
//

//phpinfo();

$con = new mysqli ('localhost', 'bulangu', '101010', 'project');

if(!$con){
echo 'error in connection';
}
//  	id 	name 	email 	pass 	date
$datee = date('D M Y H:s l');

$sql = "INSERT INTO `users` (`name`, `email`, `pass`, `date`) VALUES('A B','ab@email.com','123456', '$datee')";

$in = $con->query($sql);
if(!$in){
echo 'not save';
}else{
echo 'successfully save to db';
}
*/

// require __DIR__ . '/vendor/autoload.php';
require_once 'src/Twilio/autoload.php';
use \Twilio\Rest\Client;

// $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
// $dotenv->load();
$sid = getenv("ACa49837530c855c536ba8796e1450697a");
$token = getenv("b3eb3006563108f7dd3e4835d7143bd7");


// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
// require __DIR__ . '/src/Twilio/autoload.php';

// // Use the REST API Client to make requests to the Twilio REST API
// use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACa49837530c855c536ba8796e1450697a';
$token = 'b3eb3006563108f7dd3e4835d7143bd7';
$client = new Client($sid, $token);

$userPhone = "+2347084060020";
$TWILIO_NUMBER = "+17409486428" ; 

// Use the client to do fun stuff like send text messages!
// $client->messages->create(
//     // the number you'd like to send the message to
//     '+15558675309',
//     [
//         // A Twilio phone number you purchased at twilio.com/console
//         'from' => '+15017250604',
//         // the body of the text message you'd like to send
//         'body' => "Hey Jenny! Good luck on the bar exam!"
//     ]
// );

$call = $client->calls->create(
    "+2348099575767", "+2347084060020",
    ["url" => "http://demo.twilio.com/docs/voice.xml"]
);

echo $call->sid;
/*
function twilio_create_call($client, $userPhone, $TWILIO_NUMBER, $salesPhone, $host) {
    $encodedSalesPhone = urlencode($salesPhone);
    $outboundUri = "http://$host/outbound.php?sales_phone=$encodedSalesPhone";

    $sid = getenv("ACa49837530c855c536ba8796e1450697a");
    $token = getenv("b3eb3006563108f7dd3e4835d7143bd7");


    //$userPhone = "+2347084060020";
    //$TWILIO_NUMBER = "+17409486428" ;  
    try {
        $client->calls->create(
            $userPhone,                 // The visitor's phone number
            $TWILIO_NUMBER,    // A Twilio number in your account
            array(
                "url" => $outboundUri   // public URL TwiML that handles the call
            )
        );
    } catch (Exception $e) {
        // Failed calls will throw
        return 'ERROR:' . $e;
    }
    return 'Call Incoming !';
}

// if (!empty($_POST) ){
    // Create authenticated REST client using account credentials in
    // <project root dir>/.env
    // $client = new Client(
    //     getenv('TWILIO_ACCOUNT_SID'),
    //     getenv('TWILIO_AUTH_TOKEN')
    // );
    $client = new Client($sid, $token);


    // Get form input
    // $userPhone = $_POST['userPhone'];
    // $TWILIO_NUMBER = getenv('TWILIO_NUMBER');
    $salesPhone = '+2348099575767';

    // Set URL for outbound call - this should be your public server URL
    $host = $_SERVER['HTTP_HOST'];
    $userPhone = "+2347084060020";
    $TWILIO_NUMBER = "+17409486428" ;  
    print_r(twilio_create_call($client, $userPhone, $TWILIO_NUMBER, $salesPhone, $host));
//}
*/