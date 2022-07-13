<form method="post" action="">
	Masukan Tahun: <input type="text" name="tahun"/><br>
	<input type="submit" name="submit" value="submit" />
</form>

<?php 
if (isset($_POST['submit'])) {
	$tahun = $_POST['tahun'];
	if ($tahun%4==0) {
		echo "$tahun Tahun Kabisat";
	}else if ($tahun%4!=0) {
		echo "$tahun Bukan Tahun Kabisat";
	}
}
?>