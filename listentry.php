<html>
<head>
	<title>Membuat Buku Tamu</title>
</head>
<h2>Daftar Komentar dalam Buku Tamu</h2>

<?php

require("connectdb.php");

$sql = "select tanggal, nama, email, url, komentar".
	   "from bukutamu order by tanggal desc";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {
	?>
	<table>
		<tr bgColor="#ddcc45">
		<th width="80">Tanggal</th>
		<th width="140">Nama</th>
		<th width="200">Email</th>
		<th width="200">URL</th>
		<th width="250">Komentar</th>
		</tr>
		<?php
		while(list($tanggal,$nama,$email,$url,$komentar) = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td vAllign="top"<?php print $tanggal; ?></td>
				<td vAllign="top"<?php print $nama; ?></td>
				<td vAllign="top"<?php print $email; ?></td>
				<td vAllign="top">
					<a href="<?php print $url; ?>">
						<?php print $url; ?>
						</a>
					</td>
					<td Vallign="top"><?php print $komentar; ?></td>
				</tr>
				<?php
		}
		?>
		</table>
		<?php
}	else {
	?>
		<i>Belum ada komentar.</i>
		<?php
}   
?>
<br /><br />
<div allign="center">
[<a href="addentry.php">Isi Buku Tamu</a>]
</div>

</body>
</html>