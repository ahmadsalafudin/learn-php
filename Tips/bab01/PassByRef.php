<?php
/* PassByRef.php */

// passing variabel $str by reference
function setHTMLTag(&$str, $tag = 'b') {
    $str = "<$tag>$str</$tag>";
}

$myStr = "Hello";

setHTMLTag($myStr);
echo $myStr;

// Men-set tag h1
setHTMLTag($myStr, 'h1');
echo $myStr;


?>
