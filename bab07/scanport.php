<?php
/* scanport.php */

// Array layanan Internet
$services = array('http', 'https', 'ftp',
            'telnet', 'imap', 'smtp', 'www');

foreach ($services as $service) {
   // Get no port
   $port = getservbyname($service, 'tcp');
   echo $service, ': ', $port, ' => ';
   // Get layanan Internet
   $serv = getservbyport($port, 'tcp');
   echo $port, ': ', $serv, '<br>';
}

// Membuka koneksi ke layanan HTTP
$port = 80;
if ($fp = fsockopen('localhost', $port)) {
   $serv = getservbyport($port, 'tcp');
   echo "Port $port ($serv) seems open...\n";
} else {
   echo "Port $port seems to be closed...\n";
}

?>
