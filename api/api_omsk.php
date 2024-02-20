<?php

//работа с api 309ff714e909a3685772485a881e0f83

$url = "https://api.openweathermap.org/data/2.5/weather";

$options_omsk = array(
"q"=> 'Omsk',
"APPID"=> "309ff714e909a3685772485a881e0f83",
"units"=> "metric",
"leng"=> "en",
);


$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options_omsk));



$respons_omsk = curl_exec($ch);
$data_omsk = json_decode($respons_omsk, true);
curl_close($ch);



// echo '
// <pre>';
//  print_r($data_omsk);

$dt_omsk = $data_omsk['name'];
$dt_temp_omsk = $data_omsk['main']['temp'];
$dt_sky_omsk = $data_omsk['weather'][0]['description'];