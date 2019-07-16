<?php
/* CastingInput.php */

if (isset($_POST['oke'])) {

    // casting tipe data nilai
    $id = (int) trim($_POST['id']);
    $name = (string) trim($_POST['name']);

    // Jika field tidak kosong
    if (!empty($name) && !empty($id)) {
        echo 'hii, ' .$name. '<br>';
        echo 'your id= ' .$id;

    } else {
        echo 'isikan id dan nama Anda...';
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<body>
<form action="<?$_SERVER['PHP_SELF']?>" method=POST>
<table>
<tr>
  <td>Your Id</td>
  <td><input type=text name="id"></td>
</tr>
<tr>
  <td>Your Name</td>
  <td><input type=text name="name"></td>
</tr>
</table>
<input type=submit name="oke" value="oke">
</form>
</body>
</html>

