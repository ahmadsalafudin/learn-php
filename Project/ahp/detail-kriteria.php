<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PT KAYU PERMATA | Data Detail Kriteria</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="lte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <script src="lte/js/jquery.min.js"></script>
        <script src="lte/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="lte/js/AdminLTE/app.js" type="text/javascript"></script>
		<script src="lte/js/jquery.bootstrap-growl.js"></script>
      
    </head>
    <body class="skin-blue">
            <header class="header">
            <a href="home.php" class="logo">
                     PT KAYU PERMATA
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
                            <a href="kriteria.php">
                                <i class="fa fa-tasks"></i> <span>Data Kriteria</span>
                            </a>
                        </li>
                        <li>
                            <a href="detail-kriteria.php">
                                <i class="fa fa-tasks"></i> <span>Detail Kriteria</span>
                            </a>
                        </li>
                        <li>
                            <a href="alternatif.php">
                                <i class="fa fa-list"></i> <span>Nilai Alternatif</span>
                            </a>
                        </li>
                        <li>
                            <a href="penilaian.php">
                                <i class="fa fa-list"></i> <span>Proses Perhitungan AHP</span>
                            </a>
                        </li>
                        <li>
                            <a href="analisa.php">
                                <i class="fa fa-book"></i> <span>Hasil Analisa</span>
                            </a>
                        </li>
                        <li>
                            <a href="user.php">
                                <i class="fa fa-book"></i> <span>Data User</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </section>
           </aside>

            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Detail Kriteria
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"> Dashboard</a></li>
                        <li class="active">Detail Kriteria</li>
                    </ol>
                </section>

				<?php
					include 'config.php';
					$kriteria = $mysqli->query("select * from kriteria");
					if(!$kriteria){
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
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
									<table id="example1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                             <tr>
                                                <th>No.</th>
                                                <th>Detail Kriteria</th>
                                                <th>Bobot Kurang</th>
												<th>Bobot Cukup</th>
												<th>Bobot Baik</th>
                                                <!--th>Pilihan</th-->
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												$i = 1;
												while ($row = $kriteria->fetch_assoc()) {
													echo '<tr>';
													echo '<td>'.$i++.'</td>';
													echo '<td>'.$row["kriteria"].'</td>';
													echo '<td>'.$row["kurang"].'</td>';
													echo '<td>'.$row["cukup"].'</td>';
													echo '<td>'.$row["baik"].'</td>';
													
												}
											?>
                                        </tfoot>
                                    </table>
                                    <br>
									<h4>Keterangan Bobot Kriteria :</h4>
                                    <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                             <tr>
                                                <th>No.</th>
                                                <th>Nilai Bobot</th>
                                                <th>Evaluasi Kondisi Kriteria</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>8 – 9</td>
                                                <td>Tidak menemukan point temuan R1, R2, R3, R4 & R5 maka bernilai baik</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>5 – 7</td>
                                                <td>Ditemukan 1 - 2 point temuan R1, R2, R3, R4 & R5 maka bernilai cukup</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>1 – 3</td>
                                                <td>Ditemukan lebih dari 3 point temuan R1, R2, R3, R4 & R5 maka bernilai kurang</td>
                                            </tr>
                                        
                                    </table>
                                
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div>
                    </div>

                </section>
                
            </aside>
        </div>
    </body>
</html>