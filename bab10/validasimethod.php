<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<body>

<form action="<?$_SERVER['PHP_SELF']?>" method="GET">
<textarea name="msg">
</textarea><br>
<input type=submit name="ok" value="Submit">
</form>

<?php

if (!valid(array('msg', 'ok'), $_GET)) {
    exit('Bad URL parameters detected!');
} else {
    echo 'Pursuant with we specify.';
}

// Untuk method POST
if (!valid(array('msg', 'ok'), $_POST)) {
    exit('Bad POST parameters detected!');
} else {
    echo 'Pursuant with we specify.';
}


function valid($param, $array) {
   $num = count($param);
   if (count($array) <= $num) {
      foreach ($array as $key => $val) {
         $found = false;
         for ($i=0; $i<$num; $i++) {
             if ($key === $param[$i]) {
                $found = true;
                break;
             }
         }
         if (!$found) {
            return false;
         }
      }
   } else {
      return false;
   }
   return true;
}

?>