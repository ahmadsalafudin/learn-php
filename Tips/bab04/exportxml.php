<?php
/* export_xml.php */

$conn = mysql_connect('localhost', 'didik', '');
mysql_select_db('mydb');
$tabel = 'buku';
$sql = 'SELECT kode, judul, pengarang FROM '.$tabel;
$res = mysql_query($sql);

if ($res != null) {
   // Menciptakan objek DomDocument
   $doc = domxml_new_xmldoc("1.0");

   // Membuat node root
   $root = $doc->add_root($tabel);

   while($row = mysql_fetch_row($res)) {
       // Membuat node item
       $record = $root->new_child("id", "");
       $record->set_attribute("Kode", $row[0]);

       // Set judul dan pengarang sebagai
       // child di node item (id)
       $record->new_child("Judul", $row[1]);
       $record->new_child("Pengarang", $row[2]);
   }

   mysql_free_result($res);

   // print result di memory
   echo $doc->dump_mem();
}
mysql_close($conn);

?>
