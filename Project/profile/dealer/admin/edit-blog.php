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
                       Form Ubah Artikel
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="home.php"> Dashboard</a></li>
                        <li><a href="blog.php"> Blog | Artikel</a></li>
                        <li class="active">Ubah Artikel</a></li>
                    </ol>
                </section>

                <section class="content">
                   <?php 
                                    $edit= $mysqli->query("select * from user id='$_GET[id]'");
                                    $e=mysqli_fetch_array($edit);
                                ?>
                   <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Ubah Artikel</h3>                                    
                                </div>
                                <form role="form" method="post" action="upd-blog.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                             <input class="form-control" placeholder="Judul" name="title_blog" id="title_blog" value="<?= $e['title_blog'];?>">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Isi</label>
                                             <textarea class="ckeditor" placeholder="Isi Artikel" name="isi_blog" id="isi_blog"></textarea>
                                            </input>
                                        </div>

                                        <div class="form-group">
                                           <label class="col-sm-3 control-label">Pilih Tumbnail</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="gambar" id="gambar" >
                                        </div>
                                    </div>
                                       <div class="box-footer">
                                           <button type="submit" class="btn btn-primary pull-right">Update</button>
                                <a href="blog.php" class="btn btn-default pull-right" style="margin-right:3%">Batal</a>
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