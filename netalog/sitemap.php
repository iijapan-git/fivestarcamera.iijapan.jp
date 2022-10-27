<?php

/*
 * Copyright (C) 2014 Geo Code.All Rights Reserved.
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once './system/config.php';

// サイトマップの生成
$accsess = sprintf('%s/sitemap.php?key=%s', request_url, api_key);
$contents=file_get_contents($accsess);

header("Content-Type: text/xml");
echo $contents;
exit;
