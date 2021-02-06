<?php
/* ProsesForm2.php */

$required = array('tgl'  => 'Tgl Lahir ',
                  'email' => 'Alamat Email');

foreach ($required as $key => $value) {
    if (!@$_POST[$key]) {
        $warnings[$key] = '<small>Required*';
    }
}

// Verifikasi tgl
if (@$_POST['tgl'] && !isTgl($_POST['tgl']))
    $warnings['tgl'] = '<small>Tanggal Invalid';

// Verifikasi email
if (@$_POST['email'] && !isEmail($_POST['email']))
    $warnings['email'] = '<small>Email Invalid';

// Jika jumlah(count) warnings lebih dari 0
if (count(@$warnings) > 0) {
?>

<form action="<?$_SERVER['PHP_SELF']?>" method=POST>
<table>
<tr>
  <td>Tgl Lahir</td>
  <td><input type=text name="tgl"
     value="<?=@$_POST['tgl']?>"></td>
  <td><?=@$warnings['tgl']?></td>
</tr>
<tr>
  <td>Pekerjaan</td>
  <td><input type=text name="job"
     value="<?=@$_POST['job']?>"></td>
  <td></td>
</tr>
<tr>
  <td>Email</td>
  <td><input type=text name="email"
     value="<?=@$_POST['email']?>"></td>
  <td><?=@$warnings['email']?></td>
</tr>
</table>
<input type=submit value="Submit">
</form>

<?php
} else {    // count < 0
    echo "Terima kasih...";
}

function isTgl($tgl) {
    if (ereg("^([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})$",
    $tgl, $part) &&
    checkdate($part[2], $part[1], $part[3])) {
        return true;
    } else {
        return false;
    }
}

function isEmail($str) {
    return (ereg('^[^@]+@([a-z\-]+\.)+[a-z]{2,4}$',
    $str));
}

?>

