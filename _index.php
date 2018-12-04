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
		<a href="https://uns.ac.id">UNS Website</a>
		<a href="https://siakad.uns.ac.id">SIAKAD</a>
		<a href="https://newsroom.uns.ac.id">Newsroom</a>
		<a href="https://sso.uns.ac.id">SSO</a>
		<p id="demo" style="display:none">Hello JavaScript!</p>
		<a href="javascript:void(0);" class="icon" onclick="topMenuFunction()">
			<i class="fa fa-chevron-down"></i>
		</a>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php"><img id="uns-logo" src="img/uns-emblem.png" alt="UNSlogo"></a>
		<div id="institution-name">
			<p>Bagian Akademik</br>Biro Akademik & Administrasi Kerja Sama</br>Universitas Sebelas Maret</p>
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
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control form-control-sm" type="search" placeholder="Apa yang ingin anda cari?"><br>
					<button class="btn btn-success btn-sm" type="submit">Cari <i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
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
		<div class="row">
			<div class="col-sm-4">
				<p style="font-size: 32px; font-weight: 700;"><img id="uns-icon" src="img/uns-icon.png" alt="icon">Berita</p>
				<div class="fakeimg">Featured Image</div>
				<h3>Tulis Judul Berita</h3>
				<h6>Meta Data</h6>
				<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<br>
			</div>
			<div class="col-sm-4"> 
				<p style="font-size: 32px; font-weight: 700;"><img id="uns-icon" src="img/uns-icon.png" alt="icon">Agenda</p>
				<h4>Nama Agenda</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<h4>Nama Agenda</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<h4>Nama Agenda</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
			</div>
			<div class="col-sm-4">
				<p style="font-size: 32px; font-weight: 700;"><img id="uns-icon" src="img/uns-icon.png" alt="icon">Pengumuman</p>
				<h4>Nama Pengumuman</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<h4>Nama Pengumuman</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<h4>Nama Pengumuman</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
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
<script type="text/javascript">
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