<?php
/* ReturnByRef.php */

function &setHTMLTag($str, $tag = 'b') {
    // return value by reference
    return "<$tag>$str</$tag>";
}

$myStr = "Hello";

$bold =& setHTMLTag($myStr);
echo $bold;

// Men-set tag h1
$head =& setHTMLTag($myStr, 'h1');
echo $head;


?>
