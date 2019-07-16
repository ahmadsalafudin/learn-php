<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PT KAYU PERMATA | Input Nilai Alternatif</title>
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
            
            PT. KAYU PERMATA
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
                       Form Input Nilai Alternatif
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="index.php"> Dashboard</a></li>
                        <li><a href="alternatif.php"> Nilai Alternatif</a></li>
						<li class="active">Input Nilai</a></li>
                    </ol>
                </section>

                <section class="content">
                  
				   <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Input Nilai Alternatif</h3>                                    
                                </div>
                                <form role="form" method="post" action="add-alternatif.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Departement</label>
                                             <select class="form-control" name="alternatif" id="alternatif">
                                            <option>Dept. Assembling</option>
                                            <option>Dept. Finishing</option>
                                            <option>Dept. Gudang</option>
                                            <option>Dept. Incoming</option>
                                            <option>Dept. List</option>
                                            <option>Dept. Milling</option>
                                            <option>Dept. Maintenance</option>
                                            <option>Dept. Office</option>
                                            <option>Dept. Packaging</option>
                                            <option>Dept. Painting</option>
                                            <option>Dept. QAS</option>
                                            <option>Dept. Roughmill</option>
                                            <option>Dept. Wood Centre</option>
                                          </select>
                                        </div>
										<div class="form-group">
                                          <label>(R1) Ringkas</label>
                                          <select class="form-control" name="k1" id="k1">
                                            <option value='0' >Ditemukan > 3 poin temuan R1</option>
                                            <option value='1' >Ditemukan 1 -2 poin temuan R1</option>
                                            <option value='2' >Tidak ditemukan temuan R1</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label>(R2) Rawat</label>
                                          <select class="form-control" name="k2" id="k2">
                                            <option value='0' >Ditemukan > 3 poin temuan R2</option>
                                            <option value='1' >Ditemukan 1 -2 poin temuan R2</option>
                                            <option value='2' >Tidak ditemukan temuan R2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label>(R3) Resik</label>
                                          <select class="form-control" name="k3" id="k3">
                                            <option value='0' >Ditemukan > 3 poin temuan R3</option>
                                            <option value='1' >Ditemukan 1 -2 poin temuan R3</option>
                                            <option value='2' >Tidak ditemukan temuan R3</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label>(R4) Rawat</label>
                                          <select class="form-control" name="k4" id="k4">
                                            <option value='0' >Ditemukan > 3 poin temuan R4</option>
                                            <option value='1' >Ditemukan 1 -2 poin temuan R4</option>
                                            <option value='2' >Tidak ditemukan temuan R4</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label>(R5) Rajin</label>
                                          <select class="form-control" name="k5" id="k5">
                                            <option value='0' >Ditemukan > 3 poin temuan R5</option>
                                            <option value='1' >Ditemukan 1 -2 poin temuan R5</option>
                                            <option value='2' >Tidak ditemukan temuan R5</option>
                                          </select>
										</div>
                                    </div>

                                    <div class="box-footer">
										<a href="alternatif.php" type="cancel" class="btn btn-danger">Cancel</a>
										<button type="reset" class="btn btn-warning">Reset</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
						  </div>
					 </div>
				
				
                </section>
            </aside>
        </div>

        
    </body>
</html>