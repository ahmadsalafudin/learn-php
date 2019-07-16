<?php
/* InputSpesifik.php */

/**
 * Fungsi untuk verifikasi tanggal
 * dengan format tgl-bln-thn(4 digit)
 * @return true jika benar, false jika salah
 */
function isTgl($tgl) {
    if (ereg("^([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})$",
    $tgl, $part) &&
    checkdate($part[2], $part[1], $part[3])) {
        return true;
    } else {
        return false;
    }
} // end of isTgl()

/**
 * Fungsi untuk verifikasi email
 * @return true jika benar, false jika salah
 */
function isEmail($str) {
    return (ereg('^[^@]+@([a-z\-]+\.)+[a-z]{2,4}$',
    $str));
} // end of isEmail()

if (isset($_POST['oke'])) {
    if (isTgl($_POST['tgl']) &&
    isEmail($_POST['email'])) {
        echo 'input valid <br>';
        echo $_POST['tgl']. '<br>' .$_POST['email'];
    } else {
        echo 'input tidak valid';
    }
}
?>

<html>
<body>
<form action="<?$_SERVER['PHP_SELF']?>" method=POST>
<table>
<tr>
  <td>Tgl Lahir</td>
  <td><input type=text name="tgl"></td>
</tr>
<tr>
  <td>Email</td>
  <td><input type=text name="email"></td>
</tr>
</table>
<input type=submit name="oke" value="oke">
</form>
</body>
</html>