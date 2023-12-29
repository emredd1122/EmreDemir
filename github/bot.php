<?php require('sorgu.php');
 include("connection.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
}?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8"/>
<title>Üretim Yönetim Sistemi</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="main.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
</head>

<body>

<header>
<div class="ustgenel">
	<div class="solust">
		<p>X<span style="font-weight:bold">Tekstil</span></P>
	</div>
	<div class="sagust">
	<div class="bosalan">
	</div>
	<div class="arama">
		<input type="text" class="searchTerm" placeholder="Ürün, Analiz veya kullanıcı arayın...">
		<div id="searchbar"><button type="submit" class="searchButton">
		</button>
		</div>
		<div class="iconlar">
		<a href="#"><img class='icon' alt="profil" src="fotolar/profil.png"></a>
		<a href="#"><img class='icon' alt="profil" src="fotolar/ayarlar.png"></a>
		<a href="cikis.php"><img class='icon' alt="profil" src="fotolar/logout.png"></a>
		</div>
	</div>
	</div>
</div>
</header>

<section>
	<div class="yanpanel">
	<div class="arakatman">
	<b>Kullanıcı Bilgileri</b>
	</div>
	<div class="kullanici">
		<div class="kullaniciresmi">
			<img alt="kullaniciresmi" src="fotolar/feru.jpg">
		</div>
		<div class="kullanicibilgileri">
			<p>Emre Demir</p>
			<p>Üretim Müdürü</p>
		</div>
	</div>
	<div class="arakatman">
	<b>Ürün Analizleri</b>
	</div>
	<div class="analizler">
		<ul>
		<li><a href="klasik.php">Klasik Ayakkabı</a></li><br>
		<li><a href="rugan.php">Rugan Ayakkabı</a></li><br>
		<li><a href="suet.php">Süet Ayakkabı</a></li><br>
		<li><a href="nubuk.php">Nubuk Ayakkabı</a></li><br>
		<li><a class="aktif" href="bot.php">Bot</a></li><br>
		</ul>
	</div>
	<div class="arakatman">
	<b>Genel Veri Analizleri</b>
	</div>
	<div class="analizler">
		<ul>
		<li><a href="satis.php">Satış Analizleri</a></li><br>
		<li><a href="trend.php">Trend Analizleri</a></li><br>
		<li><a href="iade.php">İade Analizleri</a></li><br>
		<li><a href="stok.php">Stok Analizleri</a></li><br>
		</ul>
	</div>
	</div>
	<div class="grafikler1">
		<div class="grafik1">
		<canvas id="myChart1"></canvas>
		</div>
		<div class="grafikarasi"></div>
		<div class="grafik2">
		<canvas id="myChart2"></canvas>
		</div>
	</div>
	<div class="grafikler2">
		<div class="grafik3">
		<canvas id="myChart3"></canvas>
		</div>
		<div class="grafikarasi"></div>
		<div class="grafik4">
		<canvas id="myChart4"></canvas>
	
		</div>
	
</div>
</section>

<footer>
</footer>

<script type="text/javascript">
 		var ctx = document.getElementById('myChart1').getContext('2d');
var myChart1 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
        	data: [<?php echo $satis_miktari5; ?>],
            backgroundColor: 'rgba(252,138,88,0.7)',
            borderColor: 'rgba(252,138,88,1)',
            borderWidth: 2,
            label:"Bot",
        },
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'Satış Miktarı',
        }

    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
        	data: [<?php echo $iade_miktari5; ?>],
            backgroundColor:'rgba(252,138,88,0.7)',
            borderColor: 'rgba(252,138,88,1)',
            borderWidth: 2,
            label:"Bot",
        },
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'İade Miktarı',
        }

    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart3').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
        	data: [<?php echo $stok_miktari5; ?>],
            backgroundColor:'rgba(252,138,88,0.7)',
            borderColor: 'rgba(252,138,88,1)',
            borderWidth: 2,
            label:"Bot",
        },
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'Stok Miktarı',
        }

    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart4').getContext('2d');
var myChart4 = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
        	data: [<?php echo $trend_orani5; ?>],
            backgroundColor: 'rgba(252,138,88,0.7)',
            borderColor: 'rgba(252,138,88,1)',
            borderWidth: 2,
            label:"Bot",
        },
        ]
    },
    options: {
    	title: {
            display: true,
            text: 'Trend Oranı',
        }

    }
});
	</script>
</body>
</html>