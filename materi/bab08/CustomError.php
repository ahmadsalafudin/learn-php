<font face="arial" color="red" size=2>
<?php
/* CustomError.php */

set_error_handler('myErrHandler');

if ($file) echo '$file';
$fp = fopen('xxx', 'r');

// Jika warning/notice, ini tetap dieksekusi
echo 'hii...';

function myErrHandler($num, $str, $file, $line) {
   $halt = false;
   if (error_reporting() == 0) {
       echo 'Error Reporting Off <br>';
       return;
   }

   switch ($num) {

      case E_WARNING: case E_USER_WARNING:
           $type = 'Warning';
           break;
      case E_NOTICE: case E_USER_NOTICE:
           $type = 'Notice';
           break;
      case E_ERROR:
           $halt = true;
           $type = 'Fatal Error';
           break;
      case E_PARSE:
           $halt = true;
           $type = 'Parse Error';
           break;
      default:
           $type = 'Unknown Error';
           break;
   }
   $msg = "<b>Tipe: $type</b>\n";
   $msg .= "<b>Pesan:</b> $str\n";
   $msg .= "<b>File:</b> $file\n";
   $msg .= "<b>Baris: $line</b>\n\n";
   echo nl2br($msg);

   $date = date('d/m/Y H:i:s');
   $file = basename($file);
   $msg = '['.$date.'] '. $str;
   // Logging error ke file
   error_log($msg."\n", 3, 'C:/tmp/err_log.log');

   if($halt) exit -1;
}


?>