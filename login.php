<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div id="bg">
	<div class="kiri">
		<div class="center">
			<div class="title">Apa Aja Boleh</div>
			<div class="content">Ayoo kita ramaikan web lucknut ini, semoga web ini
			bermanfaat bagi kalian semua. Login jika anda sudah daftar.</div>
		</div>
		<div class="clear"></div>
		<div class="center" style="text-align: center;">
			<a href="ikeh.php" class="btn-kiri">LOGIN</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="kanan">
		<div class="center">
			<div class="title">Daftar Disit Kang</div>
			<form action="tampil.php" method="POST">
				<input type="text" name="ussername" size="30" placeholder="Ussername" class="input"><br/>
				<input type="password" name="password" size="30" placeholder="Password" class="input"><br/>
				<input type="name" name="nama" size="30" placeholder="Nama Lengkap" class="input"><br/>
				<input type="email" name="email" size="30" placeholder="E-mail" class="input"><br/>
				<input type="text" name="number" size="30" placeholder="Nomor HP" class="input"><br/>
				<input type="submit" value="daftar" class="submit">
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>

</body>
</html>