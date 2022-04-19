<?php
session_start(1);
		include 'config.php';
	
			$nama_produk = $_POST['nama_produk'];
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['produk']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['produk']['size'];
			$file_tmp = $_FILES['produk']['tmp_name'];	
			  $acak           = rand(1,99);
			  $nama_file_unik = $acak.$nama; 

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
			{
				if($ukuran < 1044070)
				{			
					move_uploaded_file($file_tmp, 'produk/'.$nama_file_unik);
					$query = "insert INTO produk SET
													gambar = '$nama_file_unik',
													nama_produk = '$nama_produk'
													";

					mysqli_query($config, $query)
					or die ("Gagal Perintah SQL".mysql_error());
					if($query){								
									$_SESSION['pesan'] = 'Foto berhasil di simpan';
									header('location:produk.php');
								}
								else
								{								
									$_SESSION['pesan'] = 'Gagal Upload Gambar';
									header('location:form-produk.php');
								}
				}
				else
				{		
					$_SESSION['pesan'] = 'Ukuran file terlalu besar';
					header('location:form-produk.php');
				}
			}
			else
			{		
				$_SESSION['pesan'] = 'Ekstensi file tidak di perbolehkan';
				header('location:form-produk.php');
			}
		?>
