<?php
$url = $_SERVER["REQUEST_URI"];
$url = urldecode($url);
$target = array('/column/detail/1052/','/column/detail/1327/','/column/detail/1351/','/column/detail/1367/','/column/detail/13754/','/column/detail/1389/','/column/detail/1399/','/column/detail/1414/','/column/detail/1425/','/column/detail/1427/','/column/detail/1439/','/column/detail/1453/','/column/detail/1461/','/column/detail/1483/','/column/detail/1518/','/column/detail/15713/','/column/detail/1687/','/column/detail/1745/','/column/detail/1815/','/column/detail/2013/','/column/detail/2221/','/column/detail/2336/','/column/detail/2364/','/column/detail/2521/','/column/detail/2593/','/column/detail/2652/','/column/detail/2853/','/column/detail/2977/','/column/detail/2995/','/column/detail/3046/','/column/detail/30465/','/column/detail/3111/','/column/detail/3164/','/column/detail/3192/','/column/detail/3216/','/column/detail/3316/','/column/detail/3480/','/column/detail/3502/','/column/detail/3546/','/column/detail/3556/','/column/detail/3660/','/column/detail/3762/','/column/detail/3770/','/column/detail/3868/','/column/detail/3932/','/column/detail/4113/','/column/detail/4172/','/column/detail/4245/','/column/detail/4354/','/column/detail/4542/','/column/detail/4599/','/column/detail/4655/','/column/detail/4794/','/column/detail/484/','/column/detail/5146/','/column/detail/5178/','/column/detail/5286/','/column/detail/5393/','/column/detail/5463/','/column/detail/5515/','/column/detail/5713/','/column/detail/5767/','/column/detail/5919/','/column/detail/6035/','/column/detail/6237/','/column/detail/6813/','/column/detail/6910/','/column/detail/6929/','/tag/tag04/');
$max_length = count($target);
for ($i=0; $i<$max_length; $i++) {
  if ($url == $target[$i]) {
    echo "<meta name='robots' content='noindex'>";
  }
}
?>
