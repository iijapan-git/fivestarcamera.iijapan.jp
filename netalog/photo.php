<?php
/*
 * Copyright (C) 2014 Geo Code.All Rights Reserved.
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once './system/config.php';
$log_file_path = './system/log/';
$log_file_name = date('Y-m-d').'.log';

file_put_contents($log_file_path.$log_file_name, date("H:i:s").' : '."access.\n", FILE_APPEND|LOCK_EX);

if(isset($_GET['id']))
    $id = $_GET['id'];
else
    exit;

file_put_contents($log_file_path.$log_file_name, date("H:i:s").' : '.'$id = '."$id\n", FILE_APPEND|LOCK_EX);

if(isset($_GET['n']))
    $n = $_GET['n'];
else
    exit;

file_put_contents($log_file_path.$log_file_name, date("H:i:s").' : '.'$n = '."$n\n", FILE_APPEND|LOCK_EX);

if(isset($_GET['extension']))
    $extension = $_GET['extension'];
else
    exit;

file_put_contents($log_file_path.$log_file_name, date("H:i:s").' : '.'$extension = '."$extension\n", FILE_APPEND|LOCK_EX);

if(isset($_GET['action']) and $_GET['action'] == 'delete'){
    //画像の削除
    foreach(glob('./img/'.$id.'*') as $filename){
        unlink($filename);
        file_put_contents($log_file_path.$log_file_name, date("H:i:s").' : '.$filename." removed.\n", FILE_APPEND|LOCK_EX);
    }
}else{
    //画像の取得
    $img_url = sprintf('%s/photo.php?key=%s&id=%s&n=%s', request_url, api_key, $id, $n);
    $img_data = file_get_contents($img_url);

    //画像の保存
    $filename = './img/'.$id.'_'.$n.'.'.$extension;
    file_put_contents($filename, $img_data);

    chmod($filename, 0777);
    file_put_contents($log_file_path.$log_file_name, date("H:i:s").' : '.$filename." saved.\n", FILE_APPEND|LOCK_EX);
}

$logfile = glob('./system/log/*.log');
while(count($logfile) > 7){
    unlink($logfile[0]);
    $logfile = glob('./log/*.log');
}
