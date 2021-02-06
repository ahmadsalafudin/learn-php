<!DOCTYPE html>
<?php 
include('config.php');
include('session.php'); 

$result=mysqli_query($mysqli, "select * from user where id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
    <head>
        <link rel="shortcut icon" href="img/daihatsu.ico">
        <meta charset="UTF-8">
        <title>Daihatsu Purworejo | Dashboard</title>
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
            <a href="#" class="logo">
                
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
                        Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                    </ol>
                </section>

        <section class="content">
			<center>
		    <article>
                  Website ini telah dikunjungi
                      <?php 
                         include ("counter.php");
                          echo "<p style='color:red; font-weight:enchant_broker_list_dicts(broker)'> $kunjungan[0] </p>";
                    ?>
                  kali
            </article>
            </center>
        </section>
    </body>
</html>