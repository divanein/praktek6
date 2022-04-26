<?php
if (empty($_POST['nama'])) {
	header("Location:dataKosong.php");
} else if (empty($_POST['email'])) {
	header("Location:dataKosong.php");
} else {
	echo "<br><center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
	date_default_timezone_set("Asia/Jakarta");
	echo "<center>Berhasil login pada : ".date("l, d F Y - h.i A")."</center><br>";
}
?>