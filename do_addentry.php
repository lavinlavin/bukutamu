<html>
<head>
	<title>Membuat Buku Tamu</title>
</head>
<body>
<?php
if (isset($_POST['kirim'])) {
	$nama 		= 	$_POST['nama'];
	$email		= 	$_POST['email'];
	$url		= 	$_POST['url'];
	$komentar	=	$_POST['komentar'];
	
	require("connectdb.php");
	
	date_default_timezone_get('Asia/Jakarta');
	$tanggal = date('Y/m/d');
	
	$sql = "insert into bukutamu(tanggal, nama, email, ". "url, komentar)".
		   "values('$tanggal','$nama','$email','$url',"."'$komentar')";
		   
	mysqli_query($conn, $sql);
	$num = mysqli_affected_rows($conn);
	
	if ($num > 0) {
		?>
		<h2>Terima Kasih</h2>
		<strong><?php print $nama; ?></strong>,
		Komentar Anda telah terkirim ke server kami.<br />
		[<a href="listentry.php">Lihat Daftar Komentar</a>]
		<br /><br />
		<?php
	} else {
		?>
		<h2>Error</h2>
		Proses pencatatan bukutamu gagal. Silahkan ulangi!
		<br />
		[<a href="addentry.php">Kembali ke Form Pencatatan Buku Tamu</a>]
		<?php
	}
}
?>
</body>
</html>