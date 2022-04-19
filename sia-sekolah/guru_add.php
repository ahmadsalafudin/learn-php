<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";


# MEMBUAT NILAI DATA PADA FORM
$dataKode		= buatKode("guru", "G"); 
$dataNIP		= isset($_POST['txtNIP']) ? $_POST['txtNIP'] : '';
$dataNama		= isset($_POST['txtNama']) ? $_POST['txtNama'] : '';
$dataKelamin	= isset($_POST['cmbKelamin']) ? $_POST['cmbKelamin'] : '';
$dataAlamat		= isset($_POST['txtAlamat']) ? $_POST['txtAlamat'] : '';
$dataNoTelp		= isset($_POST['txtNoTelp']) ? $_POST['txtNoTelp'] : '';
$dataAktif		= isset($_POST['rbAktif']) ? $_POST['rbAktif'] : ''; 
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table class="table-list" width="700" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <th colspan="3"><strong>TAMBAH DATA TUTOR </strong></th>
    </tr>
    <tr>
      <td width="181"><b>Kode</b></td>
      <td width="6"><b>:</b></td>
      <td width="491"><input name="textfield" type="text" value="<?php echo $dataKode; ?>" size="10" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><b>NIP </b></td>
      <td><b>:</b></td>
      <td><input name="txtNIP" type="text" value="<?php echo $dataNIP; ?>" size="40" maxlength="20" /></td>
    </tr>
    <tr>
      <td><b>Nama Tutor </b></td>
      <td><b>:</b></td>
      <td><input name="txtNama" type="text" value="<?php echo $dataNama; ?>" size="80" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b> Kelamin </b></td>
      <td><b>:</b></td>
      <td><select name="cmbKelamin">
        <option value="KOSONG">....</option>
        <?php
		   $pilihan = array("Laki-laki", "Perempuan");
          foreach ($pilihan as $kelamin) {
            if ($dataKelamin==$kelamin) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$kelamin' $cek>$kelamin</option>";
          }
          ?>
      </select> </td>
    </tr>
    <tr>
      <td><b>Alamat Tinggal </b></td>
      <td><b>:</b></td>
      <td><input name="txtAlamat" type="text" value="<?php echo $dataAlamat; ?>" size="80" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b>No. Telepon </b></td>
      <td><b>:</b></td>
      <td><input name="txtNoTelp" type="text" value="<?php echo $dataNoTelp; ?>" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <td><b>Status Aktif </b></td>
      <td><b>:</b></td>
      <td><input name="rbAktif" type="radio" value="Aktif" checked="checked" />
        Aktif
          <input name="rbAktif" type="radio" value="Tidak" />
      Tidak Aktif </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btnSimpan" type="submit" value=" Simpan " /></td>
    </tr>
  </table>
 </form>
