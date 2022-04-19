<?php
/* testinclude.php */

$inc = array('header.php', 'footer.php');

if (isset($_GET['page'])) {
    // Berbahaya
    // include($_GET['page']);
    cekInclude($_GET['page'], $inc);
}

function cekInclude($page, $arr) {
   if (in_array($page, $arr)) {
       include($page);
   } else {
       exit('Very Naughty...!!');
   }
}

?>