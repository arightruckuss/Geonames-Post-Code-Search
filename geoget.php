<?php

//stores postcode input from html in a variable
$postcode=$_GET['postcode'];

//initialise curl  
$curl = curl_init();


curl_setopt_array($curl,[
    CURLOPT_URL => 'http://api.geonames.org/postalCodeSearch?maxRows=10&username=arightruckuss&format=json&postalcode='.$postcode,
    CURLOPT_USERAGENT => 'Geonames API in CURL'
]);

$result = curl_exec($curl);

//prints $result variable in JSON
echo json_encode($result);
?>