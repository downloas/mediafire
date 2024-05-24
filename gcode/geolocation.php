<?php
function get_client_ip(){
    $ipaddress = '';
    if(getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    elseif(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    elseif(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    elseif(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    elseif(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    elseif(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// GEOLOCATION
$apiUrl = "https://api.gifan.id/geolocation/".get_client_ip();
$gcodeExe = curl_init();
    curl_setopt($gcodeExe, CURLOPT_URL, $apiUrl);
    curl_setopt($gcodeExe, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($gcodeExe, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($gcodeExe, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($gcodeExe, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($gcodeExe, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
    curl_setopt($gcodeExe, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
    curl_setopt($gcodeExe, CURLOPT_HEADER, 0);
    $result = curl_exec($gcodeExe);
    $gcodeExec = json_decode($result, true);
    curl_close($gcodeExe);
    
// FLAG
$apiUrl2 = "https://api.gifan.id/getFlag/new/".get_client_ip();    
$gcodeExe2 = curl_init();
    curl_setopt($gcodeExe2, CURLOPT_URL, $apiUrl2);
    curl_setopt($gcodeExe2, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($gcodeExe2, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($gcodeExe2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($gcodeExe2, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($gcodeExe2, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
    curl_setopt($gcodeExe2, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
    curl_setopt($gcodeExe2, CURLOPT_HEADER, 0);
    $result2 = curl_exec($gcodeExe2);
    $gcodeExec2 = json_decode($result2, true);
    curl_close($gcodeExe2);
    
// OPERATOR
$apiUrl3 = "https://api.gifan.id/checkPhone/".$user;    
$gcodeExe3 = curl_init();
    curl_setopt($gcodeExe3, CURLOPT_URL, $apiUrl3);
    curl_setopt($gcodeExe3, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($gcodeExe3, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($gcodeExe3, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($gcodeExe3, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($gcodeExe3, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
    curl_setopt($gcodeExe3, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
    curl_setopt($gcodeExe3, CURLOPT_HEADER, 0);
    $result3 = curl_exec($gcodeExe3);
    $gcodeExec3 = json_decode($result3, true);
    curl_close($gcodeExe3);