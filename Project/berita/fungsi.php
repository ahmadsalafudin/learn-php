<?php
/* ================ koleksi fungsi =================== ##
## fungsi untuk melakukan preprocessing terhadap teks  ##
##       terutama stopword removal dan stemming        ##     
## =================================================== */




function preproses($teks=null,$docId=null) {
	
	//bersihkan tanda baca, ganti dengan space
	$teks = str_replace("'", " ", $teks);
	$teks = str_replace("-", " ", $teks);
	$teks = str_replace(")", " ", $teks);
	$teks = str_replace("(", " ", $teks);
	$teks = str_replace("\"", " ", $teks);
	$teks = str_replace("/", " ", $teks);
	$teks = str_replace("=", " ", $teks);
	$teks = str_replace(".", " ", $teks);
	$teks = str_replace(",", " ", $teks);
	$teks = str_replace(":", " ", $teks);
	$teks = str_replace(";", " ", $teks);
	$teks = str_replace("!", " ", $teks);
	$teks = str_replace("?", " ", $teks);

	#a. ubah ke huruf kecil
	$teks = strtolower(trim($teks));
	
	#b. terapkan stop word removal
	$astoplist = array 
	/*
	("yang", "juga", "dari", "kami", "kamu", "ini", "atau", "tersebut", "pada","dengan", "adalah", "yaitu", "oleh");
	*/
	("apa","yang", "juga", "dari", "dia", "kami ", "kamu", "ini", "atau", "dan", "tersebut", "pada",
	"dengan", "adalah", "yaitu","yang", "juga", "dari", "dia", "kami","kamu", "ini", "atau", "dan",
	"tersebut","pada", "dengan", "adalah", "yaitu", "ke", "acara", "ada", "adalah", "adanya", "agar",
	"akan", " akhir", "akhirnya", "akibat", "aku", "anda", "antara", "apa", "apakah", "apalagi", "asal",
	"atas", "atau", "awal", "b", "badan", "bagaimana", "bagi", "bagian", "bahkan", "bahwa", "baik",
	"banyak", "barang", "barat", "baru", "bawah", "beberapa", "begitu", " belakang", "belum",
	"benar", "bentuk", "berada", "berarti", "berat", "berbagai", "berdasarkan", "berjalan",
	"berlangsung", "bersama", "bertemu", "besar", "biasa", "biasanya", "bila", "bisa", "bukan",
	"bulan", "cara", "cukup", "dalam", "dan", "dapat", "dari ", "datang", "dekat", "demikian",
	"dengan", "depan", "di", "dia", "diduga", "digunakan", "dilakukan", "diri", "dirinya",
	"ditemukan", "dua", "dulu", "empat", "gedung", "hal", "hampir", "hanya", "hari", "harus",
	"hasil", "hidup", "hingga", "hubungan", "ia", "ikut", "ingin", "ini", "itu", "jadi", "jalan", "jangan",
	"jauh", "jelas", "jenis", "jika", "juga", "jumat", "jumlah", "juni", "justru", "juta", "kalau", "kali",
	"kam", "kamis", "karena", "kata", "katanya", "ke", "kebutuhan", "kecil", "kedua", "kegiatan",
	"kehidupan", "kejadian", "keluar", "kembali", "kemudian", "kemungkinan", "kepada",
	"keputusan", "kerja", "kesempatan", "keterangan", "ketiga", "ketika", "khusus", "kini", "kita",
	"kondisi", "kurang", "lagi", "lain", "lainnya", "lalu", "lama", "langsung", "lanjut", "lebih",
	"lewat", "lima", "luar", "maka", "mampu", "mana", "mantan", "masa", "masalah", "masih",
	"masing- masing", "masuk", "mau", "maupun", "melakukan", "melalui", "melihat", "memang",
	"membantu", "membawa", "memberi", "memberikan", "membuat", "memiliki", "meminta",
	"mempunyai", "mencapai", "mencari", "mendapat", "mendapatkan", "menerima", "mengaku",
	"mengalami", "mengambil", "mengatakan", "mengenai", "mengetahui", "menggunakan",
	"menghadapi", "meningkatkan", "menjadi", "menjalani", "menjelaskan", "menunjukkan",
	"menurut", "menyatakan", "menyebabkan", "menyebutkan", "merasa", "mereka", "merupakan",
	"meski", "milik", "minggu", "misalnyas", "mulai", "muncul", "mungkin", "nama", "namun",
	"nanti", "of", "oleh", "orang", "pada", "padahal", "pagi", "paling", "panjang", "para", "pasti",
	"pekan", "penggunaan", "penting", "perlu", "pernah", "persen", "pertama", "pihak", "posisi",
	"program", "proses", "pula", "pun", "punya", "rabu", "rasa", "ribu", "ruang", "saat", "sabtu",
	"saja", "salah", "sama", "sampai", " sangat", "satu", "saya", "sebab", "sebagai", "sebagian",
	"sebanyak", "sebelum", "sebelumnya", "sebenarnya", "sebesar", "sebuah", "secara", "sedang",
	"sedangkan", "sedikit", "segera", "sehingga", "sejak", "sejumlah", "sekali", "sekarang", "sekitar",
	"selain ", "selalu", "selama", "selasa", "selatan", "seluruh", "semakin", "sementara", "sempat",
	"semua", "sendiri", "senin", "seorang", "seperti", "sering", "serta", "sesuai", "setelah", "setiap",
	"suatu", "sudah", "sumber", "tahu", "tahun", "tak", "tampil", "tanggal", "tanpa", "tapi", "telah",
	"teman", "tempat", "tengah", "tentang", "tentu", "terakhir", "terhadap", "terjadi", "terkait",
	"terlalu", "terlihat", "termasuk", "ternyata", "tersebut", "terus", "terutama", "tetapi", "the",
	"tidak", "tiga", "tinggal", "tinggi", "tingkat", "ujar", "umum", "untuk", "upaya", "usai", "utama",
	"utara", "waktu", "wib", "ya", "yaitu", "yakni", "yang");
	
	## kata lainnya
	/*
	("a", "about", "above", "acara", "across", "ada", "adalah", "adanya", "after", "afterwards",
	"again", "against", "agar", "akan" , "akhir", "akhirnya", "akibat", "aku", "all", "almost", "alone",
	"along", "already", "also", "although", "always", "am", "among", "amongst", "amoungst",
	"amount", "an", "and", "anda", "another", "antara", "any", "anyhow", "anyone", "anything",
	"anyway", " anywhere", "apa", "apakah", "apalagi", "are", "around", "as", "asal", "at", "atas",
	"atau", "awal", "b", "back", "badan", "bagaimana", "bagi", "bagian", "bahkan", "bahwa", "baik",
	"banyak", "barang", "barat", "baru", "bawah", "be", "beberapa", "became", "b ecause", "become",
	"becomes", "becoming", "been", "before", "beforehand", "begitu", "behind", "being",
	"belakang", "below", "belum", "benar", "bentuk", "berada", "berarti", "berat", "berbagai",
	"berdasarkan", "berjalan", "berlangsung", "bersama", "bertemu" , "besar", "beside", "besides",
	"between", "beyond", "biasa", "biasanya", "bila", "bill", "bisa", "both", "bottom", "bukan",
	"bulan", "but", "by", "call", "can", "cannot", "cant", "cara", "co", "con", "could", "couldnt",
	"cry", "cukup", "dalam", "dan", "dapat", "dari", "datang", "de", "dekat", "demikian", "dengan",
	"depan", "describe", "detail", "di", "dia", "diduga", "digunakan", "dilakukan", "diri", "dirinya",
	"ditemukan", "do", "done", "down", "dua", "due", "dulu", "during", "each", "eg", "eight",
	"either", "eleven", "else", "elsewhere", "empat", "empty", "enough", "etc", "even", "ever",
	"every", "everyone", "everything", "everywhere", "except", "few", "fifteen", "fify", "fill", "find",
	"fire", "first", "five", "for", "former", "formerly", "forty", "found ", "four", "from", "front", "full",
	"further", "gedung", "get", "give", "go", "had", "hal", "hampir", "hanya", "hari", "harus", "has",
	"hasil", "hasnt", "have", "he", "hence", "her", "here", "hereafter", "hereby", "herein", "hereupon",
	"hers", "herself", " hidup", "him", "himself", "hingga", "his", "how", "however", "hubungan",
	"hundred", "ia", "ie", "if", "ikut", "in", "inc", "indeed", "ingin", "ini", "interest", "into", "is", "it",
	"its", "itself", "itu", "jadi", "jalan", "jangan", "jauh", "jelas", "jenis" , "jika", "juga", "jumat",
	"jumlah", "juni", "justru", "juta", "kalau", "kali", "kami", "kamis", "karena", "kata", "katanya",
	"ke", "kebutuhan", "kecil", "kedua", "keep", "kegiatan", "kehidupan", "kejadian", "keluar",
	"kembali", "kemudian", "kemungkinan", "kepada", "keputusan", "kerja", "kesempatan",
	"keterangan", "ketiga", "ketika", "khusus", "kini", "kita", "kondisi", "kurang", "lagi", "lain",
	"lainnya", "lalu", "lama", "langsung", "lanjut", "last", "latter", "latterly", "least", "lebih", "less",
	"lewat", "lima", "ltd", "luar", "made", "maka", "mampu", "mana", "mantan", "many", "masa",
	"masalah", "masih", "masing- masing", "masuk", "mau", "maupun", "may", "me", "meanwhile",
	"melakukan", "melalui", "melihat", "memang", "membantu", "membawa", "memberi",
	"memberikan", "membuat", "memiliki", "meminta", "mempunyai", "mencapai", "mencari",
	"mendapat", "mendapatkan", "menerima", "mengaku", "mengalami", "mengambil",
	"mengatakan", "mengenai", "mengetahui", "menggunakan", "menghadapi", "meningkatkan",
	"menjadi", "menj alani", "menjelaskan", "menunjukkan", "menurut", "menyatakan",
	"menyebabkan", "menyebutkan", "merasa", "mereka", "merupakan", "meski", "might", "milik",
	"mill", "mine", "minggu", "misalnya", "more", "moreover", "most", "mostly", "move", "much",
	"mulai", "muncul", "mungkin", "must", "my", "myself", "nama", "name", "namely", "namun",
	"nanti", "neither", "never", "nevertheless", "next", "nine", "no", "nobody", "none", "noone",
	"nor", "not", "nothing", "now", "nowhere", "of", "off", "often", "oleh", "on", "once ", "one",
	"only", "onto", "or", "orang", "other", "others", "otherwise", "our", "ours", "ourselves", "out",
	"over", "own", "pada", "padahal", "pagi", "paling", "panjang", "para", "part", "pasti", "pekan",
	"penggunaan", "penting", "per", "perhaps", "perlu", "pernah", "persen", "pertama", "pihak",
	"please", "posisi", "program", "proses", "pula", "pun", "punya", "put", "rabu", "rasa", "rather",
	"re", "ribu", "ruang", "saat", "sabtu", "saja", "salah", "sama", "same", "sampai", "sangat", "satu",
	"saya", "sebab", "sebagai", "sebagian", "sebanyak", "sebelum", "sebelumnya", "sebenarnya",
	"sebesar", "sebuah", "secara", "sedang", "sedangkan", "sedikit", "see", "seem", "seemed",
	"seeming", "seems", "segera", "sehingga", "sejak", "sejumlah", "sekali", "sekarang", "sekitar",
	"selain", "selalu", "selama", "selasa", "selatan", "seluruh", "semakin", "sementara", "sempat",
	"semua", "sendiri", "senin", "seorang", "seperti", "sering", "serious", "serta", "sesuai", "setelah",
	"setiap", "several", "she", "should", "show", "side", "since", "sincere", "six", "sixty", "so",
	"some", "somehow", "someone", "something", "sometime", "sometimes", "somewhere", "still",
	"suatu", "such", "sudah", "sumber", "system", "tahu", "tahun", "tak", "take", "tampil", "tanggal",
	"tanpa", "tapi", "telah" , "teman", "tempat", "ten", "tengah", "tentang", "tentu", "terakhir",
	"terhadap", "terjadi", "terkait", "terlalu", "terlihat", "termasuk", "ternyata", "tersebut", "terus",
	"terutama", "tetapi", "than", "that", "the", "their", "them", "themselves", "then", "thence", "there",
	"thereafter", "thereby", "therefore", "therein", "thereupon", "these", "they", "thickv", "thin",
	"third", "this", "those", "though", "three", "through", "throughout", "thru", "thus", "tidak", "tiga",
	"tinggal", "tinggi", "tingkat", "to", "together", "too", "top", "toward", "towards", "twelve",
	"twenty", "two", "ujar", "umum", "un", "under", "until", "untuk", "up", "upaya", "upon", "us",
	"usai", "utama", "utara", "very", "via", "waktu", "was", "we", "well", "were", "what",
	"whatever", "when", "whence", "whenever", "where", "whereafter", "whereas", "whereby",
	"wherein", "whereupon", "wherever", "whether", "which", "while", "whither", "who",
	"whoever", "whole", "whom", "whose", "why", "wib", "will", "with", "within", "without",
	"would", "ya", "yaitu", "yakni", "yang", "yet", "you", "your", "yours", "yourself", "yourselves");
	*/
	
	$astoplist = explode(" ", trim($teks));
	//$teks = 'pertanyaannya bagaimana cara menghilangkan kata hasil stemming yang mirip/sama dengan kata yang ada pada daftar stopword list ?';
	
	foreach ($astoplist as $i => $value) {
		//hasil: pertanyaannya bagaimana cara meng***kan *** hasil stemming yang mirip/sama dengan *** yang ada *** daftar stopword list?
		//echo str_replace($stopword, '***', $text); 
		//$teks = str_replace($astoplist[$i], "", $teks);
	}
	
	$teks = trim($teks);
	// print("<br> " . $teks);
	$aberita = explode(" ", trim($teks));
	$teks3="";
	
	foreach ($aberita as $j => $value) {
		//hanya jika Term tidak null, tidak kosong
		if ($aberita[$j] != "") {
			$teks2=hapuspartikel($aberita[$j]); //print("<br />Setelah stemming hapuspartikel:<br />" .$teks2);
			$teks2=hapuspp($teks2); //print("<br />Setelah stemming hapuspp:<br />" . $teks2);
			$teks2=hapusawalan1($teks2); //print("<br />Setelah stemming hapusawalan1:<br />" .$teks2);
			$teks2=hapusawalan2($teks2); //print("<br />Setelah stemming hapusawalan2:<br />" .$teks2);
			$teks2=hapusakhiran($teks2); //print("<br />Setelah stemming hapusakhiran:<br />" .$teks2);
			//simpan ke inverted index (tbindex)
			//hanya jika Term tidak null, tidak kosong
			if ($teks2 != "") {
				//berapa baris hasil yang dikembalikan
				//query tersebut?
				$rescount = mysql_query("SELECT Count FROM tbindex WHERE Term = '$teks2' AND DocId = '$docId'");
				$num_rows = mysql_num_rows($rescount);
				//jika sudah ada DocId dan Term tersebut ,
				//naikkan Count (+1)
				if ($num_rows > 0) {
					$rowcount = mysql_fetch_array($rescount);
					$count = $rowcount['Count'];
					$count++;
					mysql_query("UPDATE tbindex SET Count = $count WHERE Term = '$teks2' AND DocId = '$docId'");
				}
				//jika belum ada, langsung simpan ke tbindex
				else {
					mysql_query("INSERT INTO tbindex (Term, DocId,Count) VALUES ('$teks2','$docId', 1)");
				}
			} 
		} //end if
		$teks3=$teks3." ".$teks2;
	}
	
	print_r("<br />");
	echo $teks3 = implode(" ",array_unique(explode(" ", $teks3)));
	#c. kembalikan teks yang telah dipreproses
	$teks = strtolower(trim($teks));
	return $teks;
	
	#d. terapkan stemming
	//buka tabel tbstem dan bandingkan dengan berita
	$restem = mysql_query("SELECT * FROM tbstem ORDER BY Id");
	while($rowstem = mysql_fetch_array($restem)) {
		$teks = str_replace($rowstem['Term'],
		$rowstem['Stem'], $teks);
	}
	//kembalikan teks yang telah dipreproses
	$teks = strtolower(trim($teks));
	return $teks;
} 
//end function preproses
//-------------------------------------------------------------------------


function cari($kata){
	$hasil = mysql_num_rows(mysql_query("SELECT * FROM tbstem WHERE Stem='$kata'"));
	return $hasil;
}


## langkah 1 - hapus partikel
function hapuspartikel($kata){
	if(cari($kata)!=1){
		if((substr($kata, - 3) == 'kah' )||( substr($kata, - 3) == 'lah' )||( substr($kata, - 3) == 'pun' )){
			$kata = substr($kata, 0, - 3);
		}
	}
	return $kata;
}

## langkah 2 - hapus possesive pronoun
function hapuspp( $kata){
	if(cari($kata)!=1){
		if(strlen($kata) > 4){
			if((substr($kata, -2)== 'ku')||(substr($kata, -2)== 'mu')){
				$kata = substr($kata, 0, -2);
			}else if((substr($kata, - 3)== 'nya')){
				$kata = substr($kata,0, - 3);
			}
		}
	}
	return $kata;
}

## langkah 3 hapus first order prefiks (awalan pertama)
function hapusawalan1($kata){
	
	if(cari($kata)!=1){
		if(substr($kata,0,4)=="meng"){
			if(substr($kata,4,1)=="e"||substr($kata,4,1)=="u"){
				$kata = "k".substr($kata,4);
			}else{
				$kata = substr($kata,4) ;
			}
		}else if(substr($kata,0,4)=="meny"){
			$kata = "s".substr($kata,4);
		}else if(substr($kata,0,3)=="men"){
			$kata = substr($kata,3);
		}else if(substr($kata,0,3)=="mem"){
			if(substr($kata,3,1)=="a" || substr($kata,3,1)=="i" || substr($kata,3,1)=="e" || substr($kata,3,1)=="u" || substr($kata,3,1)=="o"){
				$kata = "p".substr($kata,3);
			}else{
				$kata = substr($kata,3);
			}
		}else if(substr($kata,0,2)=="me"){
			$kata = substr($kata,2);
		}else if(substr($kata,0,4)=="peng"){
			if(substr($kata,4,1)=="e" || substr($kata,4,1)=="a"){
				$kata = "k".substr($kata,4);
			}else{
				$kata = substr($kata,4);
			}
		}else if(substr($kata,0,4)=="peny"){
			$kata = "s".substr($kata,4);
		}else if(substr($kata,0,3)=="pen"){
			if(substr($kata,3,1)=="a" || substr($kata,3,1)=="i" || substr($kata,3,1)=="e" || substr($kata,3,1)=="u" || substr($kata,3,1)=="o"){
				$kata = "t".substr($kata,3);
			}else{
				$kata = substr($kata,3);
			}
		}else if(substr($kata,0,3)=="pem"){
			if(substr($kata,3,1)=="a" || substr($kata,3,1)=="i" || substr($kata,3,1)=="e" || substr($kata,3,1)=="u" || substr($kata,3,1)=="o"){
				$kata = "p".substr($kata,3);
			}else{
				$kata = substr($kata,3);
			}
		}else if(substr($kata,0,2)=="di"){
			$kata = substr($kata,2);
		}else if(substr($kata,0,3)=="ter"){
			$kata = substr($kata,3);
		}else if(substr($kata,0,2)=="ke"){
			$kata = substr($kata,2);
		}
	}
	
	return $kata;

} //end function hapusawalan1


## langkah 4 hapus second order prefiks (awalan kedua)
function hapusawalan2($kata){

	if(cari($kata)!=1){
		if(substr($kata,0,3)=="ber"){
			$kata = substr($kata,3);
		}else if(substr($kata,0,3)=="bel"){
			$kata = substr($kata,3);
		}else if(substr($kata,0,2)=="be"){
			$kata = substr($kata,2);
		}else if(substr($kata,0,3)=="per" && strlen($kata) > 5){
			$kata = substr($kata,3);
		}else if(substr($kata,0,2)=="pe" && strlen($kata) > 5){
			$kata = substr($kata,2);
		}else if(substr($kata,0,3)=="pel" && strlen($kata) > 5){
			$kata = substr($kata,3);
		}else if(substr($kata,0,2)=="se" && strlen($kata) > 5){
			$kata = substr($kata,2);
		}
	}
	return $kata;

} // end hapusawalan2


## langkah 5 hapus suffiks
function hapusakhiran($kata){
	if(cari($kata)!=1){
		if (substr($kata, - 3)== "kan" ){
			$kata = substr($kata, 0, - 3);
		}
		else if(substr($kata, - 1)== "i" ){
			$kata = substr($kata, 0, - 1);
		}else if(substr($kata, -2)== "an"){
			$kata = substr($kata, 0, -2);
		}
	}
	return $kata;
} // end function hapusakhiran



//-------------------------------------------------------------------------
## fungsi untuk membuat index
function buatindex() {
	
	//hapus index sebelumnya
	mysql_query("TRUNCATE TABLE tbindex");
	//ambil semua berita (teks)
	$resBerita = mysql_query("SELECT * FROM tbberita ORDER BY Id");
	$num_rows = mysql_num_rows($resBerita);
	print("Mengindeks sebanyak " . $num_rows . " berita. <br />");
	
	while($row = mysql_fetch_array($resBerita)) {
		$docId = $row['Id'];
		$berita = $row['Berita'];
		//terapkan preprocessing
		$berita = preproses($berita, $docId);
	
		//simpan ke inverted index (tbindex)
		$aberita = explode(" ", trim($berita));
		
		foreach ($aberita as $j => $value) {
			//hanya jika Term tidak null, tidak kosong
			if ($aberita[$j] != "") {
				//berapa baris hasil yang dikembalikan
				//query tersebut?
				$rescount = mysql_query("SELECT Count FROM tbindex WHERE Term = '$aberita[$j]' AND DocId = $docId");
				$num_rows = mysql_num_rows($rescount);
				//jika sudah ada DocId dan Term tersebut
				//naikkan Count (+1)
				if ($num_rows > 0) {
					$rowcount = mysql_fetch_array($rescount);
					$count = $rowcount['Count'];
					$count++;
					mysql_query("UPDATE tbindex SET Count = $count WHERE Term = '$aberita[$j]' AND DocId = $docId");
				}
				//jika belum ada, langsung simpan ke tbindex
				else {
					mysql_query("INSERT INTO tbindex (Term, DocId, Count) VALUES ('$aberita[$j]', $docId, 1)");
				}
			} //end if
		} //end foreach
		
	} //end while
	
} //end function buatindex()
//--------------------------------------------------------------


//-------------------------------------------------------------------------
//fungsi hitungbobot, menggunakan pendekatan tf.idf
function hitungbobot() {
	//berapa jumlah DocId total?, n
	$resn = mysql_query("SELECT DISTINCT DocId FROM tbindex");
	$n = mysql_num_rows($resn);
	
	//ambil setiap record dalam tabel tbindex
	//hitung bobot untuk setiap Term dalam setiap DocId
	$resBobot = mysql_query("SELECT * FROM tbindex ORDER BY Id");
	$num_rows = mysql_num_rows($resBobot);
	print("Terdapat " . $num_rows ." Term yang diberikan bobot. <br />");
	
	while($rowbobot = mysql_fetch_array($resBobot)) {
		//$w = tf * log (n/N)
		$term = $rowbobot['Term'];
		$tf = $rowbobot['Count'];
		$id = $rowbobot['Id'];
		//berapa jumlah dokumen yang mengandung term itu?, N
		$resNTerm = mysql_query("SELECT Count(*) as N
		FROM tbindex WHERE Term = '$term'");
		$rowNTerm = mysql_fetch_array($resNTerm);
		$NTerm = $rowNTerm['N'];
		$w = $tf * log($n/$NTerm);
		
		//probabilitas
		//update bobot dari term tersebut
		$resUpdateBobot = mysql_query("UPDATE tbindex SET Bobot = $w WHERE Id = $id");
	} //end while $rowbobot
} 
//end function hitungbobot
//-------------------------------------------------------------------------
	
	
//-------------------------------------------------------------------------
//fungsi panjangvektor, jarak euclidean
//akar(penjumlahan kuadrat dari bobot setiap Term)
function panjangvektor() {
	
	//hapus isi tabel tbvektor
	mysql_query("TRUNCATE TABLE tbvektor");
	
	//ambil setiap DocId dalam tbindex
	//hitung panjang vektor untuk setiap DocId tersebut
	//simpan ke dalam tabel tbvektor
	$resDocId = mysql_query("SELECT DISTINCT DocId FROM tbindex");
	$num_rows = mysql_num_rows($resDocId);

	print("Terdapat " . $num_rows ." dokumen yang dihitung panjang vektornya. <br />");

	while($rowDocId = mysql_fetch_array($resDocId)) {
		$docId = $rowDocId['DocId'];
		$resVektor = mysql_query("SELECT Bobot FROM tbindex WHERE DocId = $docId");
		//jumlahkan semua bobot kuadrat
		$panjangVektor = 0;
		while($rowVektor = mysql_fetch_array($resVektor)) {
			$panjangVektor = $panjangVektor + $rowVektor['Bobot'] * $rowVektor['Bobot'];
		}
		//hitung akarnya
		$panjangVektor = sqrt($panjangVektor);
		//masukkan ke dalam tbvektor
		$resInsertVektor = mysql_query("INSERT INTO tbvektor (DocId, Panjang) VALUES ($docId, $panjangVektor)");
	} //end while $rowDocId
	
} //end function panjangvektor
//---- ------------------------------------------------------------



// ####----------------------------------------------------------------
//fungsi hitungsim - kemiripan antara query
//setiap dokumen dalam database (berdasarkan bobot di tbindex)

function hitungsim($query) {
	
	//ambil jumlah total dokumen yang telah diindex
	//(tbindex atau tbvektor), n
	$resn = mysql_query("SELECT Count(*) as n FROM tbvektor");
	$rown = mysql_fetch_array($resn);
	$n = $rown['n'];
	//terapkan preprocessing terhadap $query
	$aquery = explode(" ", $query);
	
	//hitung panjang vektor query
	$panjangQuery = 0;
	$aBobotQuery = array();
	for ($i=0; $i<count($aquery); $i++) {
		//hitung bobot untuk term ke- i pada query, log(n/N);
		//hitung jumlah dokumen yang mengandung term tersebut
		$resNTerm = mysql_query("SELECT Count(*) as N FROM tbindex WHERE Term = '$aquery[$i]'");
		$rowNTerm = mysql_fetch_array($resNTerm);
		$NTerm = $rowNTerm['N'];
		$idf = log($n/$NTerm);
		//simpan di array
		$aBobotQuery[] = $idf;
		$panjangQuery = $panjangQuery + $idf * $idf;
	}
	$panjangQuery = sqrt($panjangQuery);
	$jumlahmirip = 0;
	//ambil setiap term dari DocId, bandingkan dengan Query
	$resDocId = mysql_query("SELECT * FROM tbvektor ORDER BY DocId");
	
	while ($rowDocId = mysql_fetch_array($resDocId)) {
		$dotproduct = 0 ;
		$docId = $rowDocId['DocId'];
		$panjangDocId = $rowDocId['Panjang'];
		$resTerm = mysql_query("SELECT * FROM tbindex WHERE DocId = $docId");
		
		while ($rowTerm = mysql_fetch_array($resTerm)) {
			for ($i=0; $i<count($aquery); $i++) {
				//jika term sama
				if ($rowTerm ['Term'] == $aquery[$i]) {
					$dotproduct = $dotproduct + $rowTerm['Bobot'] * $aBobotQuery[$i];
				} //end if
			} //end for $i
		} //end while ($rowTerm)
		if ($dotproduct > 0) {
			$sim = $dotproduct / ($panjangQuery * $panjangDocId);
			//simpan kemiripan > 0 ke dalam tbcache
			$resInsertCache = mysql_query("INSERT INTO tbcache (Query, DocId, Value) VALUES ('$query', $docId, $sim)");
			$jumlahmirip++;
		}
	} //end while $rowDocId
	
	if ($jumlahmirip == 0) {
		$resInsertCache = mysql_query("INSERT INTO tbcache (Query, DocId, Value) VALUES ('$query', 0, 0)");
	}

} //end hitungSim()
//-----------------------------------------------------------------


//-----------------------------------------------------------------
function ambilcache($keyword) {
	$resCache = mysql_query("SELECT * FROM tbcache WHERE Query = '$keyword' ORDER BY Value DESC");
	$num_rows = mysql_num_rows($resCache);
	
	if ($num_rows >0) {
		//tampilkan semua berita yang telah terurut
		while ($rowCache = mysql_fetch_array($resCache)) {
			$docId = $rowCache['DocId'];
			$sim = $rowCache['Value'];
			if ($docId != 0) {
				//ambil berita dari tabel tbberita, tampilkan
				$resBerita = mysql_query("SELECT Id, Judul, Berita FROM tbberita WHERE Id = $docId");
				$rowBerita = mysql_fetch_array($resBerita);
				$id_berita= $rowBerita['Id'];
				$judul = $rowBerita['Judul'];
				$berita = $rowBerita['Berita'];
				print($docId . ". (" . $sim . ") <a href='lihatberita.php?id=$id_berita'><font color=blue><b>". $judul . "</b></font></a><br />");
				print($berita . "<hr />");
			} else {
				echo "<b>Tidak ada... </b><hr />";
			}
		}//end while (rowCache = mysql_fetch_array($resCache))
	}//end if $num_rows>0
	else {
		hitungsim($keyword);
		//pasti telah ada dalam tbcache
		$resCache = mysql_query("SELECT * FROM tbcache WHERE Query = '$keyword' ORDER BY Value DESC");
		$num_rows = mysql_num_rows($resCache);
		while ($rowCache = mysql_fetch_array($resCache)) {
			$docId = $rowCache['DocId'];
			$sim = $rowCache['Value'];
			if ($docId != 0) {
				//ambil berita dari tabel tbberita, tampilkan
				$resBerita = mysql_query("SELECT * FROM tbberita WHERE Id = $docId");
				$rowBerita = mysql_fetch_array($resBerita);
				$id_berita= $rowBerita['Id'];
				$judul = $rowBerita['Judul'];
				$berita = $rowBerita['Berita'];
				print($docId . ". (" . $sim .") <a href='lihatberita.php?id=$id_berita'><font color=blue><b>". $judul . "</b></font></a><br />");
				print($berita . "<hr />");
			} else {
				echo "<b>Tidak ada... </b><hr />";
			}
		} //end while
	}
	
	
} //end function ambilcache
//-------------------------------------------------------------------------

//function konver php ke word
function phpkeword ($id_berita){
	// sintak untuk konvers ke word
	$nama_file = "berita".$id_berita.".doc";
	header("Content-Type: application/vnd.ms-word");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Content-Disposition: attachment; filename=".$nama_file);
}
//fungsi konver php to excel
function phpkeexcel($id_berita){
	// sintak untuk konver ke excel
	$nama_file = "berita".$id_berita.".xls";
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=".$nama_file);
	header("Pragma: no-cache");
	header("Expires: 0");
}

?>
