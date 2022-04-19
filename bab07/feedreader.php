<?php

// File RSS dari URL
$url = 'http://localhost/php_news.rss';
echo '<b>PHP dot net</b>', readFeed($url, 2);

// File RDF lokal
$file = 'c:/tmp/zend.rss';
echo '<p><b>Zend dot com</b>', readFeed($file, 5);

function readFeed($file, $count) {
   // Load file XML ke objek
   $xml = simplexml_load_file($file);

   for ($i=0; $i<$count; $i++) {
       // Untuk RSS Feed versi 1
       if (isset($xml->item)) {
       $item = $xml->item[$i];
       }
       // Untuk RSS Feed versi 0.91
	   elseif (isset($xml->channel->item)) {
	   $item = $xml->channel->item[$i];
       }

       // Tampilkan isi elemen title
       echo '<li><a href="'.$item->link.'">',
            $item->title, '</a><br>';
   }
}

?>