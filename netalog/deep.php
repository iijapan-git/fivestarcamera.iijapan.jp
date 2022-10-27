<?php
/*
 * Copyright (C) 2014 Geo Code.All Rights Reserved.
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once './system/config.php';

$ua = $_SERVER['HTTP_USER_AGENT'];
if((strpos($ua, 'iPhone') !== false) or
        (strpos($ua, 'iPod') !== false) or
        (strpos($ua, 'Android') !== false)
)
    $smp = 1;
else
    $smp = 0;

// カテゴリページの取得
$accsess = sprintf('%s/deep.php?key=%s&dir=%s&smp=%s', request_url, api_key, $_GET['dir'], $smp);
if(function_exists("curl_init")){
    $ch = curl_init($accsess);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $contents = curl_exec($ch);
    curl_close($ch);
}else{
    $contents = file_get_contents($accsess);
}
if(!$contents){
    $forZeroFor = '<!DOCTYPE html><html><head><meta name="robots" content="noindex" /><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p><hr></body></html>';
    header("HTTP/1.1 404 Not Found");
    echo $forZeroFor;
    exit;
}

echo $contents;
exit;
