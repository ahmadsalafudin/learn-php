<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/daihatsu.ico">
        <meta charset="UTF-8">
        <title>Daihtsu Purworejo | Tambah Data Produk</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="lte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <script src="lte/js/jquery.min.js"></script>
        <script src="lte/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="lte/js/AdminLTE/app.js" type="text/javascript"></script>
		<script src="lte/js/jquery.bootstrap-growl.js"></script>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
                       Form Tambah Data Produk
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="index.php"> Dashboard</a></li>
                        <li><a href="produk.php"> Data Produk</a></li>
						<li class="active">Tambah Data</a></li>
                    </ol>
                </section>

                <section class="content">
                  
				   <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Tambah Data Produk</h3>                                    
                                </div>
                                <form role="form" method="post" action="add-produk.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Produk</label>
                                             <input class="form-control" placeholder="Nama Produk" name="nama_produk" id="nama_produk">
                                            </input>
                                        </div>
										<div class="form-group">
                                          <label for="exampleInputEmail1">Deskripsi</label>
                                             <textarea class="form-control" placeholder="Deskripsi" name="deskripsi" id="deskripsi"></textarea>
                                            </input>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Harga</label>
                                             <input class="form-control" placeholder="Harga" name="harga" id="harga">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                           <label class="col-sm-3 control-label">Pilih Foto</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="gambar" id="gambar" >
                                        </div>
                                    </div>
                                    </div>
                                      <div class="box-footer">
                                           <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                <a href="produk.php" class="btn btn-default pull-right" style="margin-right:3%">Batal</a>
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