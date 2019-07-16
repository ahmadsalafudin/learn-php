<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PT KAYU PERMATA | Tambah Data Kriteria</title>
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
                       Form Tambah Data Kriteria
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="index.php"> Dashboard</a></li>
                        <li><a href="kriteria.php"> Data Kriteria</a></li>
						<li class="active">Tambah Data</a></li>
                    </ol>
                </section>

                <section class="content">
                  
				   <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Tambah Data Kriteria</h3>                                    
                                </div>
                                <form role="form" method="post" action="add-kriteria.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kriteria</label>
                                             <input class="form-control" name="kriteria" id="kriteria">
                                            </input>
                                        </div>
										<div class="form-group">
                                          <label>Bobot Kriteria</label>
                                          <select class="form-control" name="bobot_kriteria" id="bobot_kriteria">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Bobot Kurang</label>
                                          <select class="form-control" name="kurang" id="kurang">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Bobot Cukup</label>
                                          <select class="form-control" name="cukup" id="cukup">
                                            
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Bobot Baik</label>
                                          <select class="form-control" name="baik" id="baik">
                                            
                                            <option>8</option>
                                            <option>9</option>
                                            
                                            </select>
                                        </div>

                                    </div>

                                    <div class="box-footer">
										<a href="kriteria.php" type="cancel" class="btn btn-danger">Cancel</a>
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