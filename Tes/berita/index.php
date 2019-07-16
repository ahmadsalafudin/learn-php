<html>
	<head>
		<title>Berita Dalam Pelita Bangsa</title>
		<!-- Bootstrap -->
    	<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    	<link href="./css/bootswatch.css" rel="stylesheet" media="screen">
    	<script type="text/javascript">
    		function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }
    	</script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="index.php">Berita Dalam Pelita Bangsa</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a class="brand" style="margin-left:85px;">by Salaph Alghibrany</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	    <div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<?php include("menuBerita.php");?>
                </div><!--/span-->
                <div class="span9">
                	<!--letak konten-->
                    <?php
						if(empty($_GET['link']))
                    		include "lihatBerita.php";
						else
							include($_GET['link']);						
					?>
				</div><!--/span-->
			</div><!--/row-->
			<hr>
			<footer>
			<p>Tekhnik Informatika(2017) &copy; Salaph Alghibrany</p>
			</footer>
	    </div><!--/.fluid-container-->
	    <script src="./js/latest.js"></script>
	    <script src="./js/bootstrap.min.js"></script>
	</body>
</html>