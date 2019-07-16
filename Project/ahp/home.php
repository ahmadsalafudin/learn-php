<!DOCTYPE html>
<?php 
include('config.php');
include('session.php'); 

$result=mysqli_query($mysqli, "select * from user where id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PT. KAYU PERMATA | Dashboard</title>
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
                
                PT. KAYU PERMATA
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
                        Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                    </ol>
                </section>

                <section class="content">
				<center>
				
				<h3 class="text-primary">SISTEM PENDUKUNG KEPUTUSAN PENENTUAN DEPARTEMENT TERBAIK<br /> DALAM PROGRAM 5R PADA PT. KAYU PERMATA</h3><br/>
				<img width="200" height="200" src="img/home/5r.png"/>
                <img width="360" height="200" src="img/home/permata.png"/> <br><br>
                <h4><b>TENTANG 5R</b></h4>
                <span align="right">Setiap perusahaan pasti mengharapkan suatu lingkungan kerja yang selalu bersih, rapi, dan masing – masing orang mempunyai konsistensi dan disiplin diri, sehingga mampu mendukung terciptanya tingkat efisiensi dan produktifitas yang tinggi di perusahaan. Namun pada kenyataannya kondisi ini sulit terjadi di setiap perusahaan. Banyak perusahaan yang seringkali mengeluh begitu sulitnya dan banyak membuang waktu hanya untuk mencari data dan atau sarana yang lupa penempatannya. Tidak hanya itu, seringkali kita kurang nyaman dengan kondisi berkas kerja yang berantakan dan tidak jarang memicu kondisi emosional kita.
                Beberapa permasalahan tersebut diatas dapat kita atasi dengan melakukan penerapan program 5R (Ringkas, Rapi, Resik, Rawat dan Rajin), yang merupakan adaptasi program 5S (Seiri, Seiton, Seiso, Seiketsu dan Shitsuke) yang dikembangkan di Jepang dan sudah digunakan oleh banyak negara di seluruh penjuru dunia. Ini merupakan suatu metode sederhana untuk melakukan penataan dan pembersihan tempat kerja yang dikembangkan dan diterapkan di Jepang.
                Program 5R (Ringkas, Rapi, Resik, Rawat dan Rajin)  merupakan budaya tentang bagaimana seseorang atau pekerja memperlakukan tempat kerjanya secara benar. Bila tempat kerja tertata rapi, bersih dan tertib maka kemudahan bekerja perorangan maupun kelompok dapat diciptakan dengan baik, dan dengan demikian 4 bidang sasaran pokok industri yaitu efisiensi, produktivitas, kualitas dan keselamatan kerja dapat lebih mudah dicapai.
                Pemilihan departemen terbaik ini disesuaikan dengan kriteri-kriteria yang telah ditetapkan oleh tim penyeleksi program 5R. Dengan melihat hasil dari program 5R tersebut, maka tim penyeleksi dapat menentukan departemen mana yang menerapkan program 5R yang paling baik diantara departemen lainnya. Dan untuk predikat terbaik, tim 5R memberikan penghargaan. Sedangkan untuk predikat yang kurang baik akan dilakukan pembenahan lagi, berupa training ataupun yang lainnya.
                </span> <br>
                <h4><b>PT. KAYU PERMATA</b></h4>
                <span align="right">PT. Kayu Permata adalah pabrik tertua dan paling berpengalaman di Indonesia yang memproduksi pintu kayu berkualitas tinggi. Berbagai pilihan produk eksklusif dan berkualitas tinggi kami dibuat terutama dari kayu lokal Indonesia yang eksotis (Meranti, Nyatoh, Palapi) dan spesies kayu yang terkenal di dunia (White Oak, Walnut, Alder, Okume, Sapele). Jika Anda ingin membawa keindahan alam ke rumah atau kantor Anda, sambil peduli tentang kelestarian hutan kita, Anda telah datang ke tempat yang tepat. 
                Setiap potongan kayu yang kami gunakan untuk produk kami sesuai dengan undang-undang tentang pengelolaan hutan lestari. 
                Baik Anda menginginkan pintu masuk yang elegan,klasik atau bergaya, atau pintu lipat ganda yang lebih modern.
                </span>

							
                </section>
            </aside>
        </div>


        
    </body>
</html>