<?php
/* HTMLRepair.php */

// File dokumen HTML
$file = './test.html';

if (file_exists($file)) {
    // Me-repair file dan return string
    $repaired = tidy_repair_file($file);
    echo 'Repairing file...[OK] <br>';

    // Membuat backup file
    rename($file, $file.'.'.time(). '.bak');

    // Menuliskan string ke original file
    file_put_contents($file, $repaired);
    echo 'Writing file...[OK]';
}

?>