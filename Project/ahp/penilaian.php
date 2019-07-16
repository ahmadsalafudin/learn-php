<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PT KAYU PERNATA| Proses Perhitungan AHP</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="lte/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="lte/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="lte/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="lte/css/AdminLTE.css" rel="stylesheet" type="text/css" />

      	<script src="lte/js/jquery.min.js"></script>
        <script src="lte/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="lte/js/AdminLTE/app.js" type="text/javascript"></script>
		<script src="lte/js/jquery.bootstrap-growl.js"></script>
    </head>
    <body class="skin-blue">
        <header class="header">
            <a href="home" class="logo">
                PT KAYU PERMATA
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
                        Proses perhitungan AHP
                        <small>Detail Proses</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
						<li><a href="analisa.php">Proses perhitungan AHP</a></li>
                    </ol>
                </section>

              
                <section class="content">
				<div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>                                    
                                </div>
                                <div class="box-body table-responsive">
								
				<?php
				include 'config.php';

					$arl = 5;	
					$alternatif = 0;
					$kriteria = get_kri_name();
					$alt_name = get_alt_name();
					$kri = get_kriteria();
					$detailkri = get_detailkriteria();
					$alt = get_alternatif();
					$mb = create_mx($kri);
					end($alt); $arl2 = key($alt)+1; //new
					for($i=0;$i<$arl;$i++){
						@$mbs[$i] = create_mx($detailkri[$i]);
					}
					echo "<center>";
					//print_ar($mb);
					$k = print_art($mb,$arl,0);   //print kriteria
					$sk = array(
						0 => print_art($mbs[0],$arl,2),   //
						1 => print_art($mbs[1],$arl,2),   //
						2 => print_art($mbs[2],$arl,2),   //
						3 => print_art($mbs[3],$arl,2),   //
						4 => print_art($mbs[4],$arl,2),   //
					);
					echo "<b><i class='text-light-blue'>Matrix Hasil</b></i><table id='example1' class='table table-bordered table-striped'><tr>";
					for($i=0; $i<$arl; $i++){ //new
						echo "<td>".$kriteria[$i]."</td>";
					}
					echo "</tr><tr>";
					for($i=0; $i<$arl; $i++){ //new
						echo "<td>".$k[$i]."</td>";
					}
					echo "</tr>";
					for($i=0; $i<3; $i++){ //new
						if($i==0) echo "<tr><td>Kurang</td><td>Kurang</td><td>Kurang</td><td>Kurang</td><td>Kurang</td></tr>";
						if($i==1) echo "<tr><td>Cukup</td><td>Cukup</td><td>Cukup</td><td>Cukup</td><td>Cukup</td></tr>";
						if($i==2) echo "<tr><td>Baik</td><td>Baik</td><td>Baik</td><td>Baik</td><td>Baik</td></tr>";
						echo "<tr><td>".$sk[0][$i+3]."</td><td>".$sk[1][$i+3]."</td><td>".$sk[2][$i+3]."</td><td>".$sk[3][$i+3]."</td><td>".$sk[4][$i+3]."</td></tr>";
					}
					echo "</table></br>";
					echo "<b><i class='text-light-blue'>Hasil Akhir</b></i><table id='example1' class='table table-bordered table-striped'><tr>";
					echo "<td>Nama</td>";
					for($i=0; $i<$arl; $i++){ //new
						echo "<td>".$kriteria[$i]."</td>";
					}
					echo "<td>Total</td></tr>";
					for($i=0; $i<$arl2; $i++){
						$jml = 0;
						echo "<tr><td>".$alt_name[$i]."</td>";
						for($j=0; $j<$arl; $j++){
							$jml = $jml + round((($sk[$j][$alt[$i][$j]+3])*$k[$j]),3);
							echo "<td>".round((($sk[$j][$alt[$i][$j]+3])*$k[$j]),3)."</td>";
						}
						echo "<td>".$jml."</td></tr>";
						$hsl[$i] = $jml; 
					}
					echo "</table></br>";
					uasort($hsl,'cmp');
					for($i=0;$i<$arl2;$i++){ 
											if($i==0)
												echo "</br></center><div class='callout callout-info'><h4>Kesimpulan :</h4>
												<i>Dari tabel tersebut dapat disimpulkan bahwa <b>".$alt_name[array_search((end($hsl)), $hsl)]."</b> mempunyai hasil paling tinggi, yaitu <b>".current($hsl)."</b>. ";
											elseif($i==$arl2-1)
												echo "</br>Dan terakhir <b>".$alt_name[array_search((prev($hsl)), $hsl)]."</b> dengan nilai <b>".current($hsl)."</b>.</i></div>";
											else
												echo "</br>Lalu diikuti dengan <b>".$alt_name[array_search((prev($hsl)), $hsl)]."</b> dengan nilai <b>".current($hsl)."</b>. ";
					}
					 
				function cmp($a, $b) {		
					if ($a == $b) {
						return 0;
					}
					return ($a < $b) ? -1 : 1;
				}
						 
				function print_art(array $x,$arl,$type){	
					$kriteria = get_kri_name();
					$sko = 0;
					echo "<b><i class='text-light-blue'>Matrix Berpasangan ";
					global $alternatif;
					end($x); $arl = key($x)+1; //new
					if($alternatif!=0)
						echo "detail Kriteria ".$kriteria[$alternatif-1];
					echo "</b></i><table id='example1' class='table table-bordered table-striped'><tr><td>Matrix</td>";	
					for($i=0; $i<$arl; $i++){
						echo "<td>";
							if($type==0) echo $kriteria[$i];
							if($type==1) echo "A".($i+1);
							if($type==2){
								if($sko==0) echo "Kurang";
								if($sko==1) echo "Cukup";
								if($sko==2) echo "Baik";
								$sko++;
							}
						echo "</td>";
					}
					echo "</tr>";
					$sko = 0;
					for($i=0; $i<$arl; $i++){
						echo "<tr>";
							echo "<td>";
								if($type==0) echo $kriteria[$i];
								if($type==1) echo "A".($i+1);
								if($type==2){
									if($sko==0) echo "Kurang";
									if($sko==1) echo "Cukup";
									if($sko==2) echo "Baik";
									$sko++;
								}
							echo "</td>";
							for($j=0; $j<$arl; $j++){
								echo "<td>".$x[$i][$j]."</td>";
							}
						echo "</tr>";
					}
					echo "<tr><td>Jumlah</td>";
					for($i=0; $i<$arl; $i++){	
						for($j=0; $j<$arl; $j++){
								@$jml[$i] = $jml[$i] + $x[$j][$i];
						}
						echo "<td>".$jml[$i]."</td>";
					}
					echo "</tr>";
					echo "</table>";
					
					echo "</br> <img src='img/sh.ico'/> </br></br>";
					
					echo "<b><i class='text-light-blue'>Matrix Nilai Kriteria</b></i><table id='example1' class='table table-bordered table-striped'><tr><td>Matrix</td>"; //for print array table, or criterian matrix dimension
					$sko = 0;
					for($i=0; $i<$arl; $i++){
						echo "<td>";
							if($type==0) echo $kriteria[$i];
								if($type==1) echo "A".($i+1);
								if($type==2){
									if($sko==0) echo "Kurang";
									if($sko==1) echo "Cukup";
									if($sko==2) echo "Baik";
									$sko++;
								}
							echo "</td>";
					}
					echo "<td>Jumlah</td><td>Prioritas</td>";
					if($type==2) echo "<td>Prioritas detail Kriteria</td>";
					echo "</tr>";
					$sko = 0;
					for($i=0; $i<$arl; $i++){  
							for($j=0; $j<$arl; $j++){
								$mnk[$i][$j]=round(($x[$i][$j]/$jml[$j]),3);
								@$jmlnk[$i] = $jmlnk[$i] + $mnk[$i][$j]; 	
							}
							$prio[$i] = round(($jmlnk[$i]/$arl),3);
					}
					$mprio = max($prio);
					for($i=0; $i<$arl; $i++){
						echo "<tr>";
							echo "<td>";
								if($type==0) echo $kriteria[$i];
								if($type==1) echo "A".($i+1);
								if($type==2){
									if($sko==0) echo "Kurang";
									if($sko==1) echo "Cukup";
									if($sko==2) echo "Baik";
									$sko++;
								}
							echo "</td>";
							for($j=0; $j<$arl; $j++){
								echo "<td>".$mnk[$i][$j]."</td>";
							}
							echo "<td>".$jmlnk[$i]."</td>";
							echo "<td>".$prio[$i]."</td>";
							if($type==2){
								$prio[$i+$arl] = round(($prio[$i]/($mprio)),3);   
								echo "<td>".$prio[$i+$arl]."</td>";
							}
						echo "</tr>";
					}
					echo "</table>";
					
					echo "</br> <img src='img/sh.ico'/> </br></br>";
					
					echo "<b><i class='text-light-blue'>Matrix Penjumlahan</b></i><table id='example1' class='table table-bordered table-striped'><tr><td>Matrix</td>"; //for print array table, or summary matrix dimension
					$sko = 0;
					for($i=0; $i<$arl; $i++){
						echo "<td>";
							if($type==0) echo $kriteria[$i];
								if($type==1) echo "A".($i+1);
								if($type==2){
									if($sko==0) echo "Kurang";
									if($sko==1) echo "Cukup";
									if($sko==2) echo "Baik";
									$sko++;
								}
							echo "</td>";
					}
					echo "<td>Bobot Konsistensi</td></tr>";
					$sko = 0;
					for($i=0; $i<$arl; $i++){
						echo "<tr>";
							echo "<td>";
								if($type==0) echo $kriteria[$i];
								if($type==1) echo "A".($i+1);
								if($type==2){
									if($sko==0) echo "Kurang";
									if($sko==1) echo "Cukup";
									if($sko==2) echo "Baik";
									$sko++;
								}
							echo "</td>";
							for($j=0; $j<$arl; $j++){
								$mp[$i][$j]=round(($x[$i][$j]*$prio[$i]),3);
								@$jmlp[$i] = $jmlp[$i] + $mp[$i][$j]; 
								echo "<td>".$mp[$i][$j]."</td>";
							}
							echo "<td>".$jmlp[$i]."</td>";
						echo "</tr>";
					}
					echo "</table>";
					
					echo "</br> <img src='img/sh.ico'/> </br></br>";
					
					echo "<b><i class='text-light-blue'>Perhitungan Rasio Konsistensi</b></i><table id='example1' class='table table-bordered table-striped'><tr><td>Matrix</td>"; //for print array table, or consistency rasio summary
					echo "<td>Bobot Konsistensi</td><td>Prioritas</td><td>Hasil</td></tr>";
					$sko = 0;
					for($i=0; $i<$arl; $i++){
						echo "<tr>";
							echo "<td>";
								if($type==0) echo $kriteria[$i];
								if($type==1) echo "A".($i+1);
								if($type==2){
									if($sko==0) echo "Kurang";
									if($sko==1) echo "Cukup";
									if($sko==2) echo "Baik";
									$sko++;
								}
							echo "</td>";
							echo "<td>".$jmlp[$i]."</td>";
							echo "<td>".$prio[$i]."</td>";
							@$hasil[$i] = round(($jmlp[$i] + $prio[$i]),3);
							@$hsl = $hsl + $hasil[$i]; 
							echo "<td>".$hasil[$i]."</td>";
						echo "</tr>";	
					}
					echo "<tr><td>Hasil</td><td></td><td></td><td>".$hsl."</td><tr>";
					echo "</table>";
					
					echo "</br> <img src='img/sh.ico'/> </br></br>";
					$nmax = round(($hsl/$arl),3);
					$ci = round((($nmax-$arl)/($arl-1)),3);
					$ri = round(((1.98*($arl-2))/$arl),3);
					@$cr = round(($ci/$ri),3); //new
					echo "<div class='alert alert-info'><i class='fa fa-check'></i><b>^Max</b> = Hasil/n = ".$hsl."/".$arl." = ".$nmax."</br>";
					echo "<b>CI</b> = (^Max-n)/(n-1) = (".$nmax."-".$arl.")/(".$arl."-1) = ".$ci."</br>";
					echo "<b>RI</b> = (1.98*(n-2))/n = (1.98*(".$arl."-2))/".$arl." = ".$ri."</br>";
					echo "<b>CR</b> = CI/RI = ".$ci."/".$ri." = ".$cr."</br>";
					if($cr<0.1)
						echo "<b><i>Karena CR < 0.1 , maka rasio konsistensi dari perhitungan tersebut bisa diterima.</i></b></div>";
					else
						echo "<b><i>Karena CR > 0.1 , maka rasio konsistensi dari perhitungan tersebut tidak bisa diterima.</i></b></div>";
					echo "<hr>";
					$alternatif++;
					return $prio;
				}

				function create_mx(array $input){
					end($input); $l = key($input);
					for($i=0;$i<=$l;$i++){
						for($j=0;$j<=$l;$j++){
							@$hsl[$i][$j] = round(($input[$j]/$input[$i]),3);
						}
					}
				
					return($hsl);
				}

				function get_kriteria(){
					include 'config.php';
					$kriteria = $mysqli->query("select * from kriteria");
					if(!$kriteria){
						echo $mysqli->connect_errno." - ".$mysqli->connect_error;
						exit();
					}
					$i=0;
					while ($row = $kriteria->fetch_assoc()) {
						@$kri[$i] = $row["bobot_kriteria"];
						$i++;
					}
					
					return $kri;
				}
				
				function get_detailkriteria(){
					include 'config.php';
					$kriteria = $mysqli->query("select * from kriteria");
					if(!$kriteria){
						echo $mysqli->connect_errno." - ".$mysqli->connect_error;
						exit();
					}
					$i=0;
					while ($row = $kriteria->fetch_assoc()) {
						@$kri[$i][0] = $row["kurang"];
						@$kri[$i][1] = $row["cukup"];
						@$kri[$i][2] = $row["baik"];
						$i++;
					}
					
					return $kri;
				}

				function get_kri_name(){
					include 'config.php';
					$kriteria = $mysqli->query("select * from kriteria");
					if(!$kriteria){
						echo $mysqli->connect_errno." - ".$mysqli->connect_error;
						exit();
					}
					$i=0;
					while ($row = $kriteria->fetch_assoc()) {
						@$kri[$i] = $row["kriteria"];
						$i++;
					}
					
					return $kri;
				}

				function get_alternatif(){
					include 'config.php';
					$alternatif = $mysqli->query("select * from alternatif");
					if(!$alternatif){
						echo $mysqli->connect_errno." - ".$mysqli->connect_error;
						exit();
					}
					$i=0;
					while ($row = $alternatif->fetch_assoc()) {
						@$alt[$i][0] = $row["k1"];
						@$alt[$i][1] = $row["k2"];
						@$alt[$i][2] = $row["k3"];
						@$alt[$i][3] = $row["k4"];
						@$alt[$i][4] = $row["k5"];
						
						$i++;
					}
					
					return $alt;
				}

				function get_alt_name(){
					include 'config.php';
					$alternatif = $mysqli->query("select * from alternatif");
					if(!$alternatif){
						echo $mysqli->connect_errno." - ".$mysqli->connect_error;
						exit();
					}
					$i=0;
					while ($row = $alternatif->fetch_assoc()) {
						@$alt[$i] = $row["alternatif"];
						$i++;
					}
				
					return $alt;
				}

				function print_ar(array $x){	
					echo "<pre>";
					print_r($x);
					echo "</pre></br>";
				}

				
				?>
				
				 </div>
                            </div>
                        </div>
                    </div>
				
				
                </section>
            </aside>
        </div>


        
    </body>
</html>