<?php
/*メインインデックステンプレート*/

if (in_category(114)) {
   include(TEMPLATEPATH . '/single-hikaku.php');
}
elseif (in_category(112)) {
   include(TEMPLATEPATH . '/single-voice.php');
}
elseif (in_category(108) || post_is_in_descendant_category(108)) {
   include(TEMPLATEPATH . '/single-column.php');
}
elseif (in_category(2) || post_is_in_descendant_category(2)) {
   include(TEMPLATEPATH . '/single-maker.php');
}
else {
   include(TEMPLATEPATH . '/single-other.php');
}


?>