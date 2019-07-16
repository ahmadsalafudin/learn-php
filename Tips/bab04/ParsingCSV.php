<?php
/* ParsingCSV.php */

$file = 'C:\\temp\\data.csv';

$fp = fopen($file,'r') or die('Tidak dapat membuka file');
echo '<table border=1>';

if ($fp != null) {
   while ($line = fgetcsv($fp,1024,';')) {
      echo '<tr>';
      for ($i=0,$j=count($line); $i<$j; $i++) {
           echo '<td>'.$line[$i].'</td>';
      }
      echo '</tr>';
   }
echo '</table>';
}

fclose($fp);

?>