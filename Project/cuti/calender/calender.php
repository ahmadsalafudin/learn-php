<?php
session_start();
	//cek apakah user sudah login 
	if(!isset($_SESSION['username'])){ 
		header ('location:../index.php');//jika belum login jangan lanjut.. 
		}
include "../koneksi.php";
$row = 50;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$sql = "SELECT * FROM bagian";
$mySql = mysql_query($sql, $conn) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($mySql);
$max	 = ceil($jml/$row);

?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title>Penggajian Karyawan</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../AdminLTE/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar 2.2.5-->
    <link href="../AdminLTE/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="../AdminLTE/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
    <!-- Theme style -->
    <link href="../AdminLTE/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../AdminLTE/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    
    <!-- jQuery 2.1.3 -->
    <script src="../AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- loading halaman -->
    <link href="../assets/loader.css" rel="stylesheet" type="text/css" />
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
        <a href="../dashboard/addashboard.php" class="logo"><b>PT. MAKMUR</b>JAYA</a>
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
                  					Selamat datang,  <?php ;?>					
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
              <img src="../AdminLTE/dist/img/engineer-icon2.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><p><?php echo "".$_SESSION['username']."";?></p></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <?php if($_SESSION['level']!="user"){ ?>
            <li class="treeview">
              <a href="../user/datauser.php">
                <i class="fa fa-users"></i>
                <span>Data User</span>
                <i class=""></i>
              </a>
   			</li>
   			<?php }?>
            <li class="treeview">            
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Master Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>  
              <ul class="treeview-menu">              	
              	<li><a href="../bagian/databagian.php"><i class="fa fa-files-o"></i> Data Bagian</a></li>
              	<li><a href="../karyawan/datakaryawan.php"><i class="fa fa-files-o"></i> Data Karyawan</a></li>
              	<li><a href="../lembur/datalembur.php"><i class="fa fa-files-o"></i> Data Lembur</a></li>
                <li><a href="../pinjaman/datapinjaman.php"><i class="fa fa-files-o"></i> Data Pinjaman</a></li>              
       		</ul>

   			</li>
            <li class="treeview">
 			<a href="../penggajian/penggajiankaryawan.php">
                <i class="fa fa-th-large"></i>
                <span>Penggajian Karyawan</span>  
        	</a>
            </li>
            <li class="treeview">
 			<a href="../absensi/absensikaryawan.php">
                <i class="fa fa-th-large"></i>
                <span>Absensi Karyawan</span>  
        	</a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Master Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="../laporan/lapdatauser.php"><i class="fa fa-files-o"></i> Data User</a></li>
              	<li><a href="../laporan/lapdatakaryawan.php"><i class="fa fa-files-o"></i> Data Karyawan</a></li>
              	<li><a href="../laporan/lapdatabagian.php"><i class="fa fa-files-o"></i> Data Bagian</a></li>
              	<li><a href="../laporan/lapdatalembur.php"><i class="fa fa-files-o"></i> Data Lembur</a></li>
                <li><a href="../laporan/lapdatapinjaman.php"><i class="fa fa-files-o"></i> Data Pinjaman</a></li>
                <li><a href="../laporan/lapdatapenggajian.php"><i class="fa fa-files-o"></i> Data Penggajian</a></li>
                <li><a href="../laporan/lapdataabsensi.php"><i class="fa fa-files-o"></i> Data Absensi</a></li>
       		</ul>
   			</li>
   			<li class="treeview">
             <a href="../calender/calender.php">
                <i class="fa fa-calendar"></i>
                <span>Kalender Kerja</span>
              </a>
            </li>
            <li class="treeview">
             <a href="../logout.php" id="logout" onclick="return confirm('Apakah Anda yakin?')">
                <i class="fa fa-unlock-alt"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            PenggajianAPPS
            <small>Calender Kerja</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-laptop"></i> Calender Kerja</a></li>
            <li><a href="#">Jadwal Calender Kerja</a></li>
          </ol>
        </section>

        <!-- Main content -->
		<section class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Pindahkan Event</h4>
                </div>
                <div class="box-body">
                  <!-- the events -->
                  <div id='external-events'>
                    
                    <div class="checkbox">
                      <label for='drop-remove'>
                        <input type='checkbox' id='drop-remove' />
                        Hapus setelah memindahkan
                      </label>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Buat Jadwal</h3>
                </div>
                <div class="box-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>																						
                      <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                    </ul>
                  </div><!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                    <div class="input-group-btn">
                      <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Buat</button>
                    </div><!-- /btn-group -->
                  </div><!-- /input-group -->
                </div>
              </div>
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-body no-padding" >
                  <!-- THE CALENDAR -->
                  <div id="calendar" ></div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016 - Aplikasi Penggajian Karyawan.</strong> All rights reserved.
      </footer>

    
    <!-- jQuery 2.1.3 -->
    <script src="../AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../AdminLTE/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- jQuery UI 1.11.1 -->
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="../AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../AdminLTE/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../AdminLTE/dist/js/demo.js" type="text/javascript"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js" type="text/javascript"></script>
    <script src="../AdminLTE/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <!-- Page specific script -->
    <script type="text/javascript">
      $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
          ele.each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
              title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
              zIndex: 1070,
              revert: true, // will cause the event to go back to its
              revertDuration: 0  //  original position after the drag
            });

          });
        }
        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'Hari ini',
            month: 'Bulan',
            week: 'Minggu',
            day: 'Hari'
          },
          
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar !!!
          drop: function (date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.backgroundColor = $(this).css("background-color");
            copiedEventObject.borderColor = $(this).css("border-color");

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              $(this).remove();
            }

          }
        });

        /* ADDING EVENTS */
        var currColor = "#0FFAF8"; //Red by default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function (e) {
          e.preventDefault();
          //Save color
          currColor = $(this).css("color");
          //Add color effect to button
          $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });
        $("#add-new-event").click(function (e) {
          e.preventDefault();
          //Get value and make sure it is not null
          var val = $("#new-event").val();
          if (val.length == 0) {
            return;
          }

          //Create events
          var event = $("<div />");
          event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
          event.html(val);
          $('#external-events').prepend(event);

          //Add draggable funtionality
          ini_events(event);

          //Remove event from text input
          $("#new-event").val("");
        });
      });
    </script>
  </body>
</html>
