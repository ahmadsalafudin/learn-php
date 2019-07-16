<?php
/* getbrowser.php */

error_reporting(0);

// Definisi beberapa browser dan OS umum
$arr = array('Internet Explorer' => 'MSIE',
             'Mozilla X' => 'Gecko',
             'Mozilla 1.7' => 'rv:1.7',
             'Netscape' => 'Netscape',
             'Firefox' => 'Firefox',
             'Opera' => 'Opera');

$arr_os = array('Windows' => 'Windows',
             'Linux' => 'Linux',
             'FreeBSD' => 'FreeBSD',
             'OS/2' => 'OS/2',
             'Unix' => 'X11',
             'Macintosh' => 'MacOS');

$u_agent = $_SERVER['HTTP_USER_AGENT'];
echo $u_agent, '<br>';
echo '<p>Browser: ',getInfo($u_agent, $arr);
echo '<p> OS: ', getInfo($u_agent, $arr_os);

function getInfo($agent, $browser) {
   $b = 'Other';
   foreach ($browser as $key => $val) {
      if (preg_match("/$val/i", $agent))
         $b = $key;
      else if($agent == '')
         $b = 'Unknown';
   }
   return $b;
}

?>