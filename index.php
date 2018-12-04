<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Universitas Sebelas Maret">
	<meta name="description" content="Kampus Hijau dan Budaya Jawa">
	<meta name="keywords" content="uns, sebelas maret, solo, surakarta">
	<title>Universitas Sebelas Maret | UNS Surakarta</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/cek.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Asap:400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="top-menu" id="topmenu">
		<a class="a-biasa" href="https://uns.ac.id">UNS Website</a>
		<a class="a-biasa" href="https://siakad.uns.ac.id">SIAKAD</a>
		<a class="a-biasa" href="https://newsroom.uns.ac.id">Newsroom</a>
		<a class="a-biasa" href="https://sso.uns.ac.id">SSO</a>
		<a id="search-a">
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control form-control-sm" type="search" placeholder="Apa yang ingin anda cari?"><br>
				<button class="btn btn-success btn-sm" type="submit">Cari <i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</a>
		<a href="javascript:void(0);" class="icon" onclick="topMenuFunction()">
			<i class="fa fa-chevron-down"></i>
		</a>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php"><img id="uns-logo" src="img/uns-emblem.png" alt="UNSlogo"></a>
		<div id="institution-name">
			<p>Data dan Informasi</br>Universitas Sebelas Maret</p>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="#">Beranda</a>
				<a class="nav-item nav-link" href="#">Tentang Kami</a>
				<a class="nav-item nav-link" href="#">Layanan</a>
				<a class="nav-item nav-link" href="#">Agenda</a>
				<a class="nav-item nav-link" href="#">Bantuan</a>
				<a class="nav-item nav-link" href="#">Kontak</a>
			</div>
		</div>
	</nav>
	<div id="demo" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/selamat datang-uns.png" alt="selamat datang uns">
			</div>
			<div class="carousel-item">
				<img src="img/eid al fitr-03.png" alt="Idul Fitri">
			</div>
			<div class="carousel-item">
				<img src="img/slider asian games 2018 uns.png" alt="Asian Games 2018">
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div><br>
	<div class="container-fluid">
		<div class="row" >
			<div  class="col-sm-4 container-berita">
				<div class="card" style="width:100%;">
					<div style="padding-left:20px" class="judul-section">
						<h2>Berita</h2>
					</div>
					<div class="card-image">
						<img id="img-berita" class="card-img-top img-berita" src="img/berita1.jpg" alt="Please Wait ...">
					</div>
					<div class="card-body">
						<h5 id="judul-berita" class="card-title">Mahasiswa Demo Terus</h5>
						<p id="deskripsi-berita" class="card-text">UNS – Universitas Sebelas Maret (UNS) Surakarta hosted the 2018 Inter-Higher Education Pencak Silat Championship (Perti) held seven days since</p>
						<div  style="width:100%;display:flex;justify-content:flex-end;">
							<button id="berita1" style="width:auto;margin:10px;margin-top:0px;" type="button" class="button-berita btn btn-outline-primary">Baca Lebih Lanjut</button>
						</div>							
					</div>
				</div>
			</div>
			<div class="col-sm-4 container-berita"> 
				<div class="card" style="width: 100%;">
					<div style="padding-left:20px;" class="judul-section">
						<h2>Agenda</h2>
					</div>
					<div id="accordion" style="width:100%;">
						<div class="card">
							<div class="card-header btn-agenda-container" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Sambut Dies Natalis UNS ke-42, Perpustakaan UNS Gelar UNSLIB Fair 2018
							</div>
							<div style="padding:5px;" id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div style="width:100%;height:100px;overflow:hidden;">
									<img style="width:100%;transform:translateY(-50px);" src="img/agenda1.jpg" alt="">
								</div>
								<div style="width:100%;padding:5px;padding-bottom:0px;" class="card-body">
									UNS – UPT Perpustakaan Universitas Sebelas Maret (UNS) Surakarta akan menggelar acara UNSLIB Fair 2018 yang hadir pada bulan Maret 2018. 
									<button style="width:100%;" type="button" class="btn btn-outline-primary">Baca Lebih Lanjut</button>
								</div>
							</div>							
						</div>
						<div class="card">
							<div class="card-header btn-agenda-container" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							Inisiasi Kampung Kreatif, Pendidikan Seni Rupa UNS Gandeng Masyarakat Solo
							</div>
							<div style="padding:5px;" id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div style="width:100%;height:100px;overflow:hidden;">
									<img style="width:100%;transform:translateY(-50px);" src="img/agenda2.jpg" alt="">
								</div>
								<div style="width:100%;padding:5px;padding-bottom:0px;" class="card-body">
									UNS – Pameran Seni Rupa Internasional bertajuk Art Edu Care #9 akan kembali dihadir pada bulan Maret 2018. Acara yang digelar oleh Program Studi Pendidikan Seni Rupa Universitas Sebelas Maret (UNS)
								</div>
								<button style="width:100%;" type="button" class="btn btn-outline-primary">Baca Lebih Lanjut</button>
							</div>
						</div>
						<div class="card">
							<div class="card-header btn-agenda-container" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							Artefac UNS akan Hadir Meriahkan Dies Natalis UNS ke-42
							</div>

							<div style="padding:5px;" id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div style="width:100%;height:100px;overflow:hidden;">
									<img style="width:100%;transform:translateY(-50px);" src="img/agenda3.jpg" alt="">
								</div>
								<div style="width:100%;padding:5px;padding-bottom:0px;" class="card-body">
									UNS – ARTEFAC (Art and Sport Appreciation by Economic and Business Faculty of UNS)  akan kembali hadir pada bulan Maret 2018. Artefac UNS merupakan rangkaian acara yang diselenggarakan oleh Fakultas Ekonomi dan Bisnis (FEB)
								</div>
								<button style="width:100%;" type="button" class="btn btn-outline-primary">Baca Lebih Lanjut</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 container-berita">
				<div class="card" style="width: 100%;">
					<div style="padding-left:20px" class="judul-section">
						<h2>Pengumuman</h2>
					</div>
					<div style="width:100%;padding:5px;">
						<div class="card pengumuman" style="width: 100%;margin:2px;">
							<div class="card-image-pengumuman">
								<img id="img-berita" class="card-img-top img-berita" src="img/agenda3.jpg" alt="Please Wait ...">
							</div>
							<div class="card-body-pengumuman">
								<h5 id="judul-berita" class="card-title">Mahasiswa Demo Terus</h5>
								<p id="deskripsi-berita" class="card-text">UNS – Universitas Sebelas Maret (UNS) Surakarta hosted the 2018 Inter-Higher Education Pencak Silat Championship (Perti) held seven days since</p>							
							</div>
						</div>
						<div class="card pengumuman" style="width: 100%;margin:2px;">
							<div class="card-image-pengumuman">
								<img id="img-berita" class="card-img-top img-berita" src="img/berita3.jpg" alt="Please Wait ...">
							</div>
							<div class="card-body-pengumuman">
								<h5 id="judul-berita" class="card-title">Mahasiswa Demo Terus</h5>
								<p id="deskripsi-berita" class="card-text">UNS – Universitas Sebelas Maret (UNS) Surakarta hosted the 2018 Inter-Higher Education Pencak Silat Championship (Perti) held seven days since</p>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<a href="http://rb.uns.ac.id"><img src="img/new-rb-slider.jpeg" alt="tolak gratifikasi" width="100%"></a>	
			</div>
		</div></br>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h6 style="text-transform: uppercase; font-weight: 700; color: rgba(0,143,215 ,1);">Pranala 1</h6>
					<ul>
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
						<li><a href="#">Menu 3</a></li>
						<li><a href="#">Menu 4</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h6 style="text-transform: uppercase; font-weight: 700; color: rgba(0,143,215 ,1);">Pranala 2</h6>
					<ul>
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h6 style="text-transform: uppercase; font-weight: 700; color: rgba(0,143,215 ,1);">Pranala 3</h6>
					<ul>
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
						<li><a href="#">Menu 3</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<a href="index.php"><img src="img/logo-uns.png" width="120px" alt="UNS_logo" style="text-align: center; margin: 10px;"></a>
					<p>Jalan Ir. Sutami No. 36</br>Surakarta, Jawa Tengah</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div id="uns-name">
			<p>&copy; 2017 - <?php echo date("Y"); ?> | <a href="https://uns.ac.id">Universitas Sebelas Maret</a></p>
		</div>
	</div>
</body>
<script src="js/cek.js"></script>
<script type="text/javascript">
	
	/////////////////////////////////
	function topMenuFunction() {
		var x = document.getElementById("topmenu");
		if (x.className === "top-menu") {
			x.className += " responsive";
		} else {
			x.className = "top-menu";
		}
	}
	function searchFunction() {
		var x = document.getElementById("topmenu");
	}
	function navMenuFunction() {
		var x = document.getElementById("navmenu");
		if (x.className === "nav-menu") {
			x.className += " responsive";
		} else {
			x.className = "nav-menu";
		}
	}
	$(document).ready(function(){
	
	//Ganti2 Berita
	
    // Activate Carousel with a specified interval
    $("#myCarousel").carousel({interval: 2000});

    // Enable Carousel Indicators
    $(".item1").click(function(){
    	$("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
    	$("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
    	$("#myCarousel").carousel(2);
    });
    
    // Enable Carousel Controls
    $(".carousel-control-prev").click(function(){
    	$("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function(){
    	$("#myCarousel").carousel("next");
    });
});
</script>
</html>