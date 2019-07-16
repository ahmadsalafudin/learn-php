<?php
/* fflushfile.php */

$fp = fopen('c:/tmp/test.txt', 'w');
fwrite($fp, 'Test flushing output');
// Flushing output ke file
fflush($fp);
fclose($fp);

?>