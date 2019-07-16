<html>
<body>

<form action="<?$_SERVER['PHP_SELF']?>" method="post">
<!-- Nilai string biasa -->
<input type="hidden" name="id1" value="rahasia">

<?php
// Men-generate id unik
$unik_id = md5(uniqid(rand(), true));
?>

<input type="hidden" name="id2" value="<?=$unik_id ?>">
<input type="text" name="nama">
<input type="submit" name="oke">
</form>

</body>
</html>

<?php
if (isset($_POST['oke'])) {
echo 'hii, ', $_POST['nama'], '<br>';
echo 'id1, ', $_POST['id1'], '<br>';
echo 'id2, ', $_POST['id2'];

}
?>