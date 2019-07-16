<?php
include 'koneksi.php';

?>
<?php
session_start();
if(empty($_SESSION['username'])&&empty($_SESSION['level'])&&empty($_SESSION['nama_lengkap'])){
header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
     <title>SIM Pengajuan Cuti</title>
	<link rel="icon" type="ico" href="icon.ico">
	<link rel="icon" type="ico" href="logo.png">
	<link rel="icon" type="ico" href="localhost/pmb/logo.ico">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="AdminLTE/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="AdminLTE/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="AdminLTE/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />  
    <link href="AdminLTE/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="AdminLTE/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="AdminLTE/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="AdminLTE/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  
    <!-- jQuery 2.1.3 -->
    <script src="AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- loading halaman -->
    <link href="assets/loader.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
		$(window).load(function() {$(".preload-wrapper").delay(1000).fadeOut("slow"); })
	</script>
 </head>

 <body class="skin-blue">
<div class="preload-wrapper">
   	  <div id="preloader_7"></div>
 	    <div class="loader-section section-left"></div>
 	     <div class="loader-section section-right"></div>
	</div>
    <div class="wrapper">
      <header class="main-header">
        <a href="_menu_admin.php" class="logo"><b>PT. STEP</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div style="margin-top:13px;margin-left:10px;float:left;color:white;font-size:16px">
	         <script type="text/javascript">
                   var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                   var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum`at', 'Sabtu'];
                   var date = new Date();
                   var day = date.getDate();
                   var month = date.getMonth();
                   var thisDay = date.getDay(),
                   thisDay = myDays[thisDay];
                   var yy = date.getYear();
                   var year = (yy < 1000) ? yy + 1900 : yy;
                   document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
             </script>             
       	</div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="fa fa-user">
                  								
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
         <div class="user-panel">
            <div class="pull-left image">
              <img src="AdminLTE/dist/img/engineer-icon2.png" class="img-circle" alt="User Image" />
            </div>
            <div class="">
              <p style= "color: #FFFFFF;"><b><?php echo "".$_SESSION['level']."";?></b></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
			<li><a href="_menu_admin.php"><i class="fa fa-home"></i>HOME</a></li>
			 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-chevron-circle-right"></i> Data Master <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="karyawan_tambah.php"><i class="fa fa-files-o"></i>Karyawan</a></li> 
				<li><a href="departemen.php"><i class="fa fa-files-o"></i>Departemen</a></li> 
				<li><a href="user_tambah.php"><i class="fa fa-files-o"></i>User Akses</a></li> 
              </ul>
            </li>
				<li><a href="cuti_awal.php"><i class="fa fa-paperclip"></i>Cuti Awal</a></li>
				<li><a href="laporan.php"><i class="fa fa-files-o"></i>Laporan</a></li>
				<li><a href="logout.php"><i class="fa fa-rotate-left"></i>LOGOUT</a></li>	
        </section>
        <!-- /.sidebar -->
      </aside>
 
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            INPUT DATA CUTI AWAL KARYAWAN
          </h1>
         </section>

        <!-- Main content -->
		<section class="content">
          <div class="row">
            <div class="col-xs-12">
               <div class="box">
			 
			   <div class="box-body">	
			   <table id="example1" class="table table-condensed">
     					<form class="form-horizontal" role="form" method="post" action="cuti_awal_simpan.php">
     					<tr><td>
    						<div class="form-group">
        						<label for="name" class="col-sm-2 control-label">Pilih Karyawan</label>
        						<div class="col-sm-4">
           						 <select class="form-control" name="idx" required oninvalid="this.setCustomValidity">
                     				
                       					<?php 
                						//tampil data ke combo
											$tampil=mysql_query("SELECT * FROM karyawan where status = 'TETAP'");
											while($w=mysql_fetch_array($tampil))
											{
												echo "<option value=$w[idx] selected>$w[nik] - $w[nama]</option>";   
																								
											}										
                						?>
                      				</select>   </div>
    					   </div>
    					</td></tr>	
						<tr><td>
    						<div class="form-group">
        						<label for="name" class="col-sm-2 control-label">Jml Cuti Update</label>
								<small>Masukkan jumlah cuti sebelum ada sistem ini</small>
        						<div class="col-sm-1">
           						 	<input type="text" class="form-control" id="jml_cuti" name="jml_cuti" required oninvalid="this.setCustomValidity">
        						</div>
    					   </div>
    					</td></tr>
    					<tr><td>
    						<div class="form-group">
        						<div class="col-sm-10 col-sm-offset-2">
            						<button type="submit" class="btn btn-primary" name="tombol">SIMPAN DATA CUTI</button> 
        						</div>
    						</div>
    					</td></tr>	
							<div class="col-lg-9 col-md-8 col-sm-12">
        <div class="middle_content">
		<table  class="box table-condensed" border="1">
		 <h4>Data Cuti Awal Karyawan</h4>
			<form class="form-horizontal" role="form" method="post">
			<thead>
                      <tr>
						<th width="80">NIK</th>
                      	<th width="250">Nama Karyawan</th>
						<th width="250">Departemen</th>
						<th width="150">Sisa Cuti</th>
						
						</tr>	
                    </thead>
                        <tbody> 
                    <?php
						$mySql 	= "SELECT * FROM _sisa_cuti";
						$myQry 	= mysql_query($mySql)  or die ("Query  salah : ".mysql_error());
						
						while ($myData = mysql_fetch_array($myQry)) {
							
						?>  
						<tr>
        					<td> <?php echo $myData['nik']; ?> </td>
      					  	<td> <?php echo $myData['nama']; ?> </td>
      					  	<td> <?php echo $myData['nm_departemen']; ?> </td>
							<td> <?php echo $myData['jml_cuti']; ?> </td>
							
							<?php } ?>
                    </tbody>      
                  </table>
				  </div>
					</div>
					</form>
                  </table>		

				  </div>				  
                </div><!-- /.box-body -->
				</div><!-- /.box -->
            </div><!-- /.col --> 
          </div><!-- /.row -->
		 </section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 1.0-->
        </div>
    
      </footer>
    </div><!-- ./wrapper -->
    
    <script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(kode_kategori){ 
    document.getElementById('nama_kategori').value = kategori_sparepart[kode_kategori].nama_kategori; 
    
    }; 
    </script>
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="AdminLTE/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="AdminLTE/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="AdminLTE/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <script src="AdminLTE/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <script src="AdminLTE/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="AdminLTE/dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
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
<?php }?>   