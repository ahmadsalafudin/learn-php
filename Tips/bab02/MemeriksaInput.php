<?php
/* MemeriksaInput.php */

if (isset($_POST['oke'])) {

    // casting tipe data nilai
    $id = (int) trim($_POST['id']);
    $name = (string) trim($_POST['name']);

    $_i = false;
    $_n = false;

    // Jika tidak kosong, dan berupa angka
    if (!empty($id) && is_numeric($id)) {
        $_i = true;
    } else {
        echo 'Id harus angka [0-9] <br>';
    }

    // Jika tidak kosong, dan berupa huruf
    if (!empty($name) && ctype_alpha($name)) {
        $_n = true;
    } else {
        echo 'Nama harus huruf [A-Z] atau [a-z] <br>';
    }

    // id dan nama oke
    if ($_i && $_n) {
        echo 'Id Anda= ' .$id. '<br>';
        echo 'Nama Anda ' .$name;
    } else {
        echo 'Maaf, belum kami proses...';
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

