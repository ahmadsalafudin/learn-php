<?php
include 'koneksi.php';
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
    <!-- jQuery 2.1.3 -->
    <script src="AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- loading halaman -->
    <link href="assets/loader.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
		$(window).load(function() {$(".preload-wrapper").delay(1000).fadeOut("slow"); })
	</script>
	
	<script type="text/javascript" src="AdminLTE/plugins/js/jssor.slider.debug.js"></script>
    <!-- use jssor.slider.min.js instead for release -->
    <script>
        jssor_1_slider_init = function () {

            var jssor_1_SlideshowTransitions = [
              { $Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5 } },
              { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5 } },
              { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5 } },
              { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5 } },
              { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $Jease$.$InOutSine, $Top: $Jease$.$OutWave, $Clip: $Jease$.$InOutQuad }, $Outside: true, $Round: { $Top: 1.3 } },
              { $Duration: 1000, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $Jease$.$OutQuad },
              { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $Jease$.$OutQuad },
              { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12 } },
              { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $Jease$.$InOutExpo, $Opacity: $Jease$.$InOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 } },
              { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $Jease$.$OutJump, $Round: { $Top: 1.5 } }
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }

            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }

            .jssorb01 div {
                background-color: gray;
            }

                .jssorb01 div:hover, .jssorb01 .av:hover {
                    background-color: #d3d3d3;
                }

            .jssorb01 .av {
                background-color: #fff;
            }

            .jssorb01 .dn, .jssorb01 .dn:hover {
                background-color: #555555;
            }

        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('') no-repeat;
            overflow: hidden;
        }

        .jssora05l {
            background-position: -10px -40px;
        }

        .jssora05r {
            background-position: -70px -40px;
        }

        .jssora05l:hover {
            background-position: -130px -40px;
        }

        .jssora05r:hover {
            background-position: -190px -40px;
        }

        .jssora05l.jssora05ldn {
            background-position: -250px -40px;
        }

        .jssora05r.jssora05rdn {
            background-position: -310px -40px;
        }
    </style>
	
 </head>

 <body class="skin-blue">
<div class="preload-wrapper">
   	  <div id="preloader_7"></div>
 	    <div class="loader-section section-left"></div>
 	     <div class="loader-section section-right"></div>
	</div>
    <div class="wrapper">
      <header class="main-header">
        <a href="_menu_manager.php" class="logo"><b>PT. STEP</b></a>
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
          
		  
		  <!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
			<li><a href="_menu_manager.php"><i class="fa fa-home"></i>HOME</a></li>
   			<li><a href="approval.php"><i class="fa fa-paperclip"></i>Approval Cuti</a></li>
			<li><a href="logout.php"><i class="fa fa-rotate-left"></i>LOGOUT</a></li>				
        </section>
        <!-- /.sidebar -->
      </aside>
 
      <!-- Content Wrapper. Contains page content -->
       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        
        <!-- Main content -->
		<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
              
                <div class="box-body">
				<div class="module_content">
				
		  <div class="row">
  <div class="col-lg-12">
    <center><h3>Selamat Datang <b><?php echo "".$_SESSION['nama_lengkap']."";?></h3></center>
  
  </div>
</div>
    <div class="row" style="padding-top: 50px; font-size: 40px; font-family:cambria;">
	  <div>
              <center><img src="manager.png" class="img-circle" alt="User Image" /></center>
            </div>
      <div>
         <p><center><h4>SISA CUTI ANDA</h4></center></p>
		 <?php
			mysql_connect("localhost","root","");
			mysql_select_db("skripsi_nikmah");

			$query = "select * from _sisa_cuti WHERE nama = '".$_SESSION['nama_lengkap']."'"; 
			$hasil = mysql_query($query);
			$data=mysql_fetch_array($hasil);
			$jml = $data['jml_cuti'];

			?>
		 <p><center><h1><strong><?php echo $jml;?></strong></h1></center></p>
      </div>
    </div>
	
			
		</div>		
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col --> 
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		
		
     	</div><!-- /.content-wrapper -->
      <footer class="main-footer">
              
      </footer>
    </div><!-- ./wrapper -->
    
    <script>
        jssor_1_slider_init();
    </script>
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="AdminLTE/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='AdminLTE/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE/dist/js/app.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="AdminLTE/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="AdminLTE/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="AdminLTE/dist/js/demo.js" type="text/javascript"></script>
    
  </body>
  </html>
<?php }?>  