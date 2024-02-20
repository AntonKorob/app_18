<?php
//работа с api 309ff714e909a3685772485a881e0f83

$options_msk = array(
    "q"=> 'Moscow',
    "APPID"=> "309ff714e909a3685772485a881e0f83",
    "units"=> "metric",
    "leng"=> "en",
    );
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options_msk));

$respons_msk = curl_exec($ch);
$data_msk = json_decode($respons_msk, true);
curl_close($ch);

// echo '
// <pre>';
// echo '<pre>';
// print_r($data_msk);
    
$dt_msk = $data_msk['name'];
$dt_temp_msk = $data_msk['main']['temp'];
$dt_sky_msk = $data_msk['weather'][0]['description'];