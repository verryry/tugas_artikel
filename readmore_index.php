<?php
session_start();
require_once 'core/init.php';
require_once 'tampilan/header_index.php';

$id = $_GET['id'];

if (isset($_GET['id'])) {
	$data = tampilkan_per_id($id);

	while ($row = mysqli_fetch_assoc($data)){
		$id_awal = $row['id'];
		$judul_awal = $row['judul'];
		$isi_awal = $row['isi'];
		$tag_awal = $row['tag'];
	}
}

?>
<link rel="shortcut icon" href="tampilan/aksesoris/icon/unnamed.ico">
<title>Artikel</title>
<link rel="stylesheet" type="text/css" href="css/readmore.css">
<!-- <div class="container-fluid"> -->
<div class="panel_single">
	<div class="judul_panel_single">
		<h4 id="judul_single"><?= $judul_awal;?></h4>
	</div>
	<div class="isi_panel_single">
		<p id="isi_single"><?= $isi_awal;?></p>
		<p id="tag_single">Tag : <a id="tag"> #<?= $tag_awal;?></a></p>
</div>
<?php include 'komentar.php';?>
</div>
<!-- </div> -->
<div>
<?php require_once 'tampilan/footer.php';?>
</div>
