
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/daihatsu.ico">
        <meta charset="UTF-8">
        <title>Daihasu Purworejo| Edit Data User</title>
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
                Daihasu Purworejo
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
                        Form Data User
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"> Dashboard</a></li>
                        <li><a href="user.php"> Data User</a></li>
                        <li class="active">Form</a></li>
                    </ol>
                </section>

                <section class="content">
                  
                   <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Update Data User</h3>                                    
                                </div>
                                <?php
                                    include('config.php');
                                    $result = $mysqli->query("select * from user where id = ".$_GET['id']."");
                                    if(!$result){
                                        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
                                        exit();
                                    }
                                    while($row = $result->fetch_assoc()){
                                ?>
                                                         
                                <form role="form" method="post" action="upd-user.php?id=<?php echo $_GET['id'];?>"> 
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                             <input class="form-control" placeholder="Nama" name="nama" id="nama">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                          <label>Username</label>
                                         <input class="form-control" placeholder="Username" type="textarea" name="username" id="username">
                                            </input>
                                        </div>
                                        <div class="form-group">
                                          <label>Password</label>
                                         <input class="form-control" type="password" name="password" id="password">
                                            </input>
                                        </div>
                                       </div>
                                   </div>
                                    <div class="box-footer">
                                        <a href="user.php" type="cancel" class="btn btn-danger">Cancel</a>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                <?php
                                    }
                                ?>
                            </div>
                          </div>
                     </div>
               </section>
            </aside>
        </div>
    </body>
</html>