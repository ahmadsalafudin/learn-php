<?php
/* bufferingoutput.php */

// Me-replace string
function callback($buff) {
   return (str_replace('unjuk kerja', 'performansi', $buff));
}

// Aktifkan buffering output
ob_start('callback');
?>

<html>
<body>
<p>
Buffering output, untuk meningkatkan
unjuk kerja
</p>
</body>
</html>

<?php
echo 'ob size: ', ob_get_length(), ' byte';

// Mengirim buffer output dan disable buffering
while (ob_get_level() > 0) {
   ob_end_flush();
}

?>
