<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
 <style type="text/css">
 .error {color:red;}
 </style>
</head>
<body>

<?php
/* ProsesForm1.php */

$page = $_SERVER['PHP_SELF'];

function print_form() {
    global $page, $error, $print_again, $_POST;
    $fields = array('tgl' => 'text',
              'job' => 'text', 'email' => 'text');
    $labels = array('tgl' => 'Tgl Lahir* (tgl-bln-thn)',
              'job' => 'Pekerjaan',
              'email' => 'Email*');
    ?>
    <form action="<?$page?>"
    method="post">

    <?php
    if ($print_again) { ?>
        Koreksi kembali field berwarna
        <span class=error>merah</span>
    <?php
    } else { ?>
        Keterangan: <small>(* = required)</small>
    <?php } ?>
    <table>

    <?php
    foreach ($fields as $key => $value) { ?>
      <tr>
          <td <?php error_flag($error, $key); ?>
          <?=$labels[$key]?> </td>
          <td><input type="<?=$value?>"
          name="<?=$key?>"
          value="<? echo @$_POST[$key]; ?>"></td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="3" align=center>
        <input type="submit"
        name="oke" value="Submit"></td>
    </tr>
    </table>
    </form>

<?php
} // end of print_form()

function error_flag($error, $field) {
    if ($error[$field]) {
        echo '<td class=error bgcolor=#CCCCCC>';
    } else {
        echo '<td>';
    }
} // end of error_flag()

function check_form() {
    global $error, $print_again, $_POST;
    $print_again = false;

    //Check Required Fields Have Been Entered
    foreach($_POST as $key => $value) {
        if (($value == "") && eregi("_required$", $key)){
            $error[$key] = true;
            $print_again = true;
        } else {
            $error[$key] = false;
        }
    }

    if (!isTgl($_POST['tgl'])) {
        $error['tgl'] = true;
        $print_again = true;
    }

    if (!isEmail($_POST['email'])) {
        $error['email'] = true;
        $print_again = true;
    }

    // Print jika masih ada error
    if ($print_again) {
        print_form();
    } else {
        print("<b>Terima kasih...!!</b>");
    }
} // end of check_form()

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

// main program
if (isset($_POST['oke']) ) {
    check_form();
} else {
    print_form();
} ?>

</body>
</html>
