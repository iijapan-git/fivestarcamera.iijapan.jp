<?php
$url = $_SERVER["REQUEST_URI"];
$url = urldecode($url);
$target02 = array('/maker/sony/sony-03/');
$max_length = count($target02);
for ($i=0; $i<$max_length; $i++) {
  if ($url == $target02[$i]) {
    echo "<link rel='canonical' href='https://www.seohacks.net".$target02[$i]."'>";
  }
}
?>
