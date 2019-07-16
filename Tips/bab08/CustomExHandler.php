<?php
/* CustomExHandler.php */

// Set UDF exception handler
set_error_handler('myExHandler');

try {
    $fp = fopen('xxx', 'r');
} catch (Exception $e) {
    echo 'Exception catched...!!';
}

function myExHandler($code, $str, $file, $line) {
    $msg = "Error handled...!!\n";
    $msg .= "Error Code: $code \n";
    $msg .= "Message: $str \n";
    $msg .= "File: $file \n";
    $msg .= "Line: $line \n";
    echo nl2br($msg);

    throw new Exception($str, $code);
}

?>
