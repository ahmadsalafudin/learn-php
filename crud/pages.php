<?php
	error_reporting( error_reporting() & ~E_NOTICE );
	include "koneksi.php";

   
     if ($_GET['page']=="add") {
		include "add.php";
	}

	else if ($_GET['page']=="create") {
		include "create.php";
	}

	else if ($_GET['page']=="edit") {
		include "edit.php";
	}

	else if ($_GET['page']=="update") {
		include "update.php";
	}

	else if ($_GET['page']=="delete") {
		include "delete.php";
	}

	else{
		include "read.php";
	}
?>