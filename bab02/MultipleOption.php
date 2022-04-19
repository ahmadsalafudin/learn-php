<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<body>
<form action="<?$_SERVER['PHP_SELF'] ?>" method="post">
Makanan kesukaan Anda: <br>
<input type="checkbox" name="cek[]" value="Bakso"> Bakso
<input type="checkbox" name="cek[]" value="Gule"> Gule
<input type="checkbox" name="cek[]" value="Soto"> Soto
<input type="checkbox" name="cek[]" value="Sate"> Sate
<br>
<input type=submit value="ok" name="ok">
</form>
</body>
</html>

<?php

if (isset($_POST['ok']) && ($_POST['ok'] === 'ok')) {
    if (isset($_POST['cek']))  {
    $num = count($_POST['cek']);
    echo 'Jumlah option yang dipilih: ' .$num;
    echo '<br>Anda memilih: <br>';

	for ($i=0; $i < $num; $i++)
		 echo '<li>',$_POST['cek'][$i],'<br>';
    } else {
        echo 'Anda tidak memilih';
    }
}

?>