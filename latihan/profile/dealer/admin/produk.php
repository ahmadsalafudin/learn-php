<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/daihatsu.ico">
        <meta charset="UTF-8">
        <title>Daihatsu Purworejo | Data Produk</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="lte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <script src="lte/js/jquery.min.js"></script>
        <script src="lte/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="lte/js/AdminLTE/app.js" type="text/javascript"></script>
		<script src="lte/js/jquery.bootstrap-growl.js"></script>
        <script src="lte/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="lte/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>


    </head>
    <body class="skin-blue">
        
        <header class="header">
            <a href="home.php" class="logo">
           
                 Daihatsu Purworejo
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
                         <aside class="left-side sidebar-offcanvas">                
              
                <section class="sidebar">
                                     <ul class="sidebar-menu">
                        <li class="active">
                            <a href="home.php">
                                <i class="fa fa-windows"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="produk.php">
                                <i class="fa fa-tasks"></i> <span>Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="blog.php">
                                <i class="fa fa-list"></i> <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="pelanggan.php">
                                <i class="fa fa-tasks"></i> <span>Pelanggan</span>
                            </a>
                        </li>
                        <li>
                            <a href="service.php">
                                <i class="fa fa-list"></i> <span>Pendaftaran Service</span>
                            </a>
                        </li>
                        <li>
                            <a href="pesan.php">
                                <i class="fa fa-book"></i> <span>Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="tanggapan.php">
                                <i class="fa fa-book"></i> <span>Tanggapan</span>
                            </a>
                        </li>
                        <li>
                            <a href="user.php">
                                <i class="fa fa-book"></i> <span>User</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-book"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>

                </section>
           </aside>
     
        <aside class="right-side">                
                   <section class="content-header">
                    <h1>
                        Data produk
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="home.php"> Dashboard</a></li>
                        <li class="active">Data produk</li>
                    </ol>
                </section>

				<?php
					include 'config.php';
					$produk = $mysqli->query("select * from produk");
					if(!$produk){
						echo $mysqli->connect_errno." - ".$mysqli->connect_error;
						exit();
					}
					$i=0;
					
				?>
	
            <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>                                    
                                </div>
                                <div class="box-body table-responsive">
									<table id="example1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Produk</th>
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                                <th>Haga</th>
                                                <th>Pilihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												$i = 1;
												while ($row = $produk->fetch_assoc()) {
													echo '<tr>';
													echo '<td>'.$i++.'</td>';
													echo '<td>'.$row["nama_produk"].'</td>';
                                                    echo '<td>'.$row["gambar"].'</td>';
                                                    echo '<td>'.$row["deskripsi"].'</td>';
                                                    echo '<td>'.$row["harga"].'</td>';
                                                    echo '<td><!--a href="#"><i class="fa fa-search"></i></a-->';
                                                    ?>
                                                    <a class='btn btn-sm btn-primary' href="edit-produk.php?id=<?php echo $row['id_produk'];?>"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a class='btn btn-sm btn-danger' href="del-produk.php?id=<?php echo $row['id_produk'];?>" onClick="return confirm('Anda yakin akan DELETE data <?php echo $i-1;?> atas nama <?php echo $row['id_produk'];?> ?');"><i class="fa fa-times"></i> Del</a></td>
                                                    <?php
                                                    echo '</tr>';
                                        
												}
											?>
                                        </tfoot>
                                    </table><br>
								<a class='btn btn-primary' href='form-produk.php'><i class='fa fa-plus-square'></i> Tambah Data Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
        </aside>
        </div>
         <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>