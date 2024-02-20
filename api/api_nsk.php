<?php

//работа с api 309ff714e909a3685772485a881e0f83

$url = "https://api.openweathermap.org/data/2.5/weather";

$options_nsk = array(
"q"=> 'Novosibirsk',
"APPID"=> "309ff714e909a3685772485a881e0f83",
"units"=> "metric",
"leng"=> "en",
);


$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options_nsk));



$respons_nsk = curl_exec($ch);
$data_nsk = json_decode($respons_nsk, true);
curl_close($ch);



// echo '
// <pre>';
//  print_r($data_nsk);

$dt_nsk = $data_nsk['name'];
$dt_temp_nsk = $data_nsk['main']['temp'];
$dt_sky_nsk = $data_nsk['weather'][0]['description'];