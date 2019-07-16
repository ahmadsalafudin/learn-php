<?php
/* myprofiler.php */

// Eksekusi fungsi ketika pemrosesan kode selesai
register_shutdown_function('testSummary');

$timing = array();

function startTest($label, $fungsi, $iter=1) {
    global $timing;
    echo 'Testing ', $label, '<br>';
    // Flushing output buffer
    ob_flush();
    $start = currTime();
    // Memanggil fungsi yang dispesifikasikan
    call_user_func($fungsi, $iter);
    $timing[$label] = currTime() - $start;
    return $timing[$label];
}

function testSummary() {
  global $timing;
  if (empty($timing)) {
      return;
  }
  arsort($timing); // sort balik elemen array
  // Set pointer ke elemen pertama
  reset($timing);
  $slowest = current($timing);
  // Set pointer ke elemen terakhir
  end($timing);

  echo '<h4>The Winner is: ', key($timing), '</h4>';
  echo '<table border=1> <tr><td>Contestants</td>';

  foreach ($timing as $label => $time1) {
     echo '<th>', $label, '</th>';
  }
  echo '</tr>';

  $copy = $timing;
  foreach ($copy as $label => $time1) {
    echo '<tr><td><b>', $label, '</b><br>';
    printf("%.3f seconds</td>\n", $time1);

    foreach ($timing as $label2 => $time2) {
      $percent = (($time2 / $time1) - 1) * 100;
      if ($percent > 0) {
         printf("<td>%.3f seconds<br>%.1f%% slower",
                $time2, $percent);
      } elseif ($percent < 0) {
         printf("<td>%.3f seconds<br>%.1f%% faster",
                $time2, -$percent);
      } else { // sama dengan 0
         echo '<td align=center> -';
      }
      echo '</td>';
    }
    echo '</tr>';
  }
  echo '</table>';
}

// Get current time (format Unix)
function currTime() {
   list($usec, $sec) = explode(' ', microtime());
   return ((float)$usec + (float)$sec);
}

?>