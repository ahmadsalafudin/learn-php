<?php
/* getfile.php */

$dir = './download/';
$dh = opendir($dir) or die('error');
while (($f = readdir($dh)) !== false) {
    if (is_file($dir.$f)) {
       echo '<li>', $f, '</li>';
    }
}
closedir($dh);


?>