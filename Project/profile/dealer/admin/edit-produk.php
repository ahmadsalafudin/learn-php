<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/daihatsu.ico">
        <meta charset="UTF-8">
        <title>Daihatsu Purworejo</title>
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
                            <a href="#">
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
                       Form Ubah Data Produk
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="index.php"> Dashboard</a></li>
                        <li><a href="produk.php"> Data Produk</a></li>
                        <li class="active">Ubah Data</a></li>
                    </ol>
                </section>

                <section class="content">
                    
                   <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Ubah Data Produk</h3>                                    
                                </div>
                              
                                <form role="form" method="post" action="upd-produk.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Produk</label>
                                             <input class="form-control" placeholder="Nama Produk" name="nama_produk" id="nama_produk">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Deskripsi</label>
                                             <textarea class="form-control" placeholder="Deskrpsi" name="deskripsi" id="deskripsi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Harga</label>
                                             <input class="form-control" placeholder="Harga" name="harga" id="harga">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                         <p>Pilih File Gambar : <br/><input type='file' name='gambar' id='gambar'></p>
                                    </div>
                                    </div>
                                      <div class="box-footer">
               						<a href="produk.php" type="cancel" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Update</button>
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