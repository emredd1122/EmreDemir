<?php require('sorgu.php');
require('connection.php');?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8"/>
<title>Üretim Yönetim Sistemi</title>
<link rel="stylesheet" href="giris.css">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="main.css">
</head>

<body>

<header>
</header>

<section>
<div class="genelgirisdiv">
<div class="giriskutusu">
	<h2>Giriş Yap</h2>
</div>
<form method="post" action="giris.php">
	<div class="inputalani">
		<label>Kullanıcı Adı</label>
		<input type="text" name="username" value="">
	</div>
	<div class="inputalani">
		<label>Şifre</label>
		<input type="password" name="password">
	</div>
	<div class="inputalani">
		<button type="submit" class="girisbuton" name="register_btn">GİRİŞ</button>
	</div>
</form>
</div>	
</section>

<footer>
</footer>


</body>
</html>