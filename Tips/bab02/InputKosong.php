<?php
/* InputKosong.php */

if (isset($_POST['oke'])) {

    $name = trim($_POST['name']);

    // Jika field tidak kosong
    if (!empty($name)) {
        echo 'hii, ' .$name;
    } else {
        echo 'isikan nama Anda...';
    }

/*  menggunakan strlen()
    if (strlen($name)==0) {
	    echo 'isikan nama Anda...';
    } else {
	    echo 'okkay, ' .$name;
    }
*/

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<body>
<form action="<?=$_SERVER['PHP_SELF']?>" method=POST>
<table>
<tr>
  <td>Your Name</td>
  <td><input type=text name="name"></td>
</tr>
</table>
<input type=submit name="oke" value="oke">
</form>
</body>
</html>

