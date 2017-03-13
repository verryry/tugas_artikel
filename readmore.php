<?php
session_start();
require_once 'core/init.php';
require_once 'tampilan/header.php';

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
<title>Artikel</title>
<link rel="stylesheet" type="text/css" href="css/readmore.css">
<!-- <div class="container-fluid">
 --><div class="panel_single">
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
<div class="comment">
	<form action="postcomment.php" method="POST">
	<h4 id="comment">Comment</h4>
		<input type="hidden" name="id_artikel" value="<?=$id_awal;?>">
		<input type="hidden" name="komentator" value="<?=$_SESSION['username'];?>">
		<textarea name="komentar" class="komentar" rows="3" cols="182" placeholder="Comment This Artikel" required /></textarea>
		<input type="submit" name="submit" value="Submit" style="color: white;">
	</form>
</div><br><br>
<div>
<?php require_once 'tampilan/footer.php';?>
</div>
