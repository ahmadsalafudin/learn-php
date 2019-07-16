<?php
/* cachingrss.php */

require_once 'XML/RSS.php';

$host = 'http://localhost/php_news.rss';
$file = 'cache.rss';
$expire = 43200;

if (!file_exists($file) || (filemtime($file) < time() - $expire)) {
   // Copy file RSS/RDF ke cache file
   @copy($host, $file) or
   die('Could not copy file');
}

// Parsing dan membaca file lokal
$r =& new XML_RSS($file);
$r->parse();
foreach ($r->getItems() as $val) {
   $link = $val['link'];
?>

   <p><li><b> <?=$val['title']?> </b><br>
   <ul> <?=$val['description']?> </ul>
   <ul><a href="<?=$link?>"> <?=$link?> </a></ul>

<?php
}
?>