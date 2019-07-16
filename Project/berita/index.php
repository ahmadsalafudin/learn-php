<?php
include 'koneksi.php';
include 'fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>:: Yudi Proses Indexing & Klasifikasi (Retrieval) ::</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="indexing dan klasifiksi" />
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
<script src="assets/js/swfobject_modified.js" type="text/javascript"></script>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
</style>
</head>
<body>
<div class="body_wrapper">
	<div class="center">
		
		<!-- ## Bagian Header ## -->
		<?php include 'header.php'; ?>
		
		<!-- ## Bagian Menu Navigasi ## -->
		<?php include 'navigasi.php'; ?>
		
		<!--## Bagian Konten -->
		<div class="content_area">
			<div class="main_content floatleft">
				
				<?php
				//periksa apa yang diinginkan pengguna (variabel act)
				$apa = @$_GET['act'];
					
				//jika "corpus"	
				if ($apa == "corpus") {
					$result = mysql_query("SELECT * FROM tbberita ORDER BY Id");

					while($row = mysql_fetch_array($result)) {
						$id_berita = $row['Id'];
						
						echo $id_berita . ". <a href='lihatberita.php?id=$id_berita'><font color =blue>" . $row['Judul'] . "</font></a><br />" . $row['Berita'];
						echo "<hr />";
					}  		
				}
					
				//jika "buat indexing"	
				else if ($apa == "indexing") {
					buatindex();		
					print("<hr />");
				} 

				//jika "hitung bobot"
				else if ($apa == "bobot") {
					hitungbobot();		
					print("<hr />");
				} 


				/*
				//jika "hitung peluang"
				else if ($apa == "probabilitas P(vj)") {
				probabilitas();
				print("<hr />");
				}
				*/
					
				//jika "hitung panjang vektor"
				else if ($apa == "panjangvektor") {
					panjangvektor();		
					print("<hr />");
				} 

				//jika "tampilkan vektor"	
				else if ($apa == "showvektor") {
				?>
				
					<div class="table-responsive">
						<table class="table table-bordered  table-hover">
							<thead>
								<tr class="success">
									<th>Doc-ID</th>
									<th>Panjang Vektor</th>				
								</tr>
							</thead>
							<tbody>
								
					<?php
					$result = mysql_query("SELECT * FROM tbvektor");
					while($row = mysql_fetch_array($result)) {
						print("<tr>");
						print("<td>" . $row['DocId'] . "</td><td>" . $row['Panjang'] . "</td>");
						print("</tr>");
					}
					echo "</tbody></table></div>";
				} 
					
				//jika "tampilkan index"	
				else if ($apa == "showindex") {
				?>
				
					<div class="table-responsive">
						<table class="table table-bordered  table-hover">
							<thead>
								<tr class="danger">
									<th>#</th>
									<th>Term</th>				
									<th>Doc-Id</th>				
									<th>Count</th>				
									<th>Bobot</th>				
								</tr>
							</thead>
							<tbody>
					
					<?php
					$result = mysql_query("SELECT * FROM tbindex ORDER BY Id");
					while($row = mysql_fetch_array($result)) {
						print("<tr>");
						print("<td>" . $row['Id'] . "</td><td>" . $row['Term'] . "</td><td>" . $row['DocId'] . 
								"</td><td>" . $row['Count'] . "</td><td>" . $row['Bobot'] . "</td>");
						print("</tr>");
					}  		
					echo "</tbody></table></div>";
				}
					
				//jika "proses retrieve atau klsifikasi"	
				else if ($apa == "retrieve") {
				?>	
					<form action="index.php?act=retrieve" method="post" class="form-inline">
						<div class="form-group">
							<input type="search" name="keyword" placeholder="Cari Apa?" class="form-control">
						</div>
						<button name="cari!" type="submit" class="btn btn-success">
							Cari
						</button>
					</form>
					<hr/>
						
				<?php
					$cari = @$_POST['keyword'];
						
					if ($cari)  {
						$keyword = preproses($cari);		
						print ('<br/>');
						print('Hasil retrieval untuk <font color=blue><b>' . $_POST["keyword"]  . '</b></font> (<font color=blue><b>' . $keyword . '</b></font>) adalah <hr />'); 
						ambilcache($keyword);
						//hitungsim($keyword);
					}  		
				} //end retrieve 
					
				//jika "cache"	
				else if ($apa == "cache") {
				?>
					<div class="table-responsive">
						<table class="table table-bordered  table-hover">
							<thead>
								<tr class="warning">
									<th>#</th>
									<th>Query</th>				
									<th>Doc-Id</th>				
									<th>Value</th>				
								</tr>
							</thead>
							<tbody>
					
					<?php
					$result = mysql_query("SELECT * FROM tbcache ORDER BY Query ASC");
					while($row = mysql_fetch_array($result)) {
						echo "<tr>";
						print("<td>".$row['Id']."</td><td>".$row['Query']."</td><td>".$row['DocId']."</td><td>".$row['Value']."</td>");
						echo "</tr>";
					}
					echo "</tbody></table></div>";		
				}
				
				else if ($apa == "eksportdata") {
					include "pilihan_eksport.php";
				} 
				
				else if ($apa == "register") {
					include "register-form.php";
				} 
				else if ($apa == "login") {
					include "login-form.php";
				}
							
				//jika beranda atau tidak memilih apapun	
				else {
					
					include 'slider.php';	
					include 'beranda.php';
				}
				?>				
			</div>
      
      
			<!-- halaman kanan (right-content) -->
			<div class="sidebar floatright">
				<div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
				<div class="single_sidebar">
					<div class="news-letter">
						<h2>Sign Up for Newsletter</h2>
						<p>Sign up to receive our free newsletters!</p>
						<form action="#" method="post">
							<input type="text" value="Name" id="name" />
							<input type="text" value="Email Address" id="email" />
							<input type="submit" value="SUBMIT" id="form-submit" />
						</form>
						<p class="news-letter-privacy">We do not spam. We value your privacy!</p>
					</div>
				</div>
				<div class="single_sidebar">
					<div class="popular">
						<h2 class="title">Popular</h2>
						<ul>
							<li>
								<div class="single_popular">
									<p>Sept 24th 2045</p>
									<h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
								</div>
							</li>
							<li>
								<div class="single_popular">
									<p>Sept 24th 2045</p>
									<h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
								</div>
							</li>
							<li>
								<div class="single_popular">
									<p>Sept 24th 2045</p>
									<h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
								</div>
							</li>
							<li>
								<div class="single_popular">
									<p>Sept 24th 2045</p>
									<h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
								</div>
							</li>
							<li>
								<div class="single_popular">
									<p>Sept 24th 2045</p>
									<h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
								</div>
							</li>
						</ul>
						<a class="popular_more">more</a> 
					</div>
				</div>
				
				<div class="single_sidebar"> 
					<h1>
						<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="300">
						<param name="movie" value="assets/SPORT-if.swf" />
						<param name="quality" value="high" />
						<param name="wmode" value="opaque" />
						<param name="swfversion" value="6.0.65.0" />
						<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you dont want users to see the prompt. -->
						<param name="expressinstall" value="Scripts/expressInstall.swf" />
						<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
						<!--[if !IE]>-->
						<object type="application/x-shockwave-flash" data="assets/SPORT-if.swf" width="100%" height="300">
						<!--<![endif]-->
						<param name="quality" value="high" />
						<param name="wmode" value="opaque" />
						<param name="swfversion" value="6.0.65.0" />
						<param name="expressinstall" value="Scripts/expressInstall.swf" />
						<!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
						<div>
							<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
							<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
						</div>
						<!--[if !IE]>-->
						</object>
						<!--<![endif]-->
						</object>
					</h1>	 
				</div>
				
				<div class="single_sidebar">
					<h2 class="title">Big Promo</h2>
					<img src="images/add2.png" alt="" /> 
				</div>
			</div>
		</div> <!-- end content-area -->
    
		<!-- bagian footer -->
		<?php include 'footer.php'; ?>
		
	</div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
	
swfobject.registerObject("FlashID"); //untuk flash

selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});

</script>
</body>
</html>
