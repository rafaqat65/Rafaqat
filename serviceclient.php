<?php 
//including soap library
require_once('nusoap/lib/nusoap.php');
//Instantiating Soap Server


/*
$c = new nusoap_client('http://localhost/test/webservice.php');

$stockprice = $c->call('getStockQuote',
array('symbol' => 'ABC'));
echo "The stock price for 'ABC' is $stockprice.";
*/

$client = new nusoap_client("http://localhost/test/webservice.php");
$error = $client->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

$result = $client->call("getStockQuote", array("category" => "ABC"));

if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print($result);
    echo "</pre>";
}
else {
    $error = $client->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>Books</h2><pre>";
        echo (float)$result;
        echo "</pre>";
    }
}

?>