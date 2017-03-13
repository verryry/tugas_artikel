<?php

try {
  $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=tugas","root","");

} catch (PDOException $e) {
  echo $e->getMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT*FROM comment WHERE id_artikel='$id'");
$data->execute();
$komen = $data->fetchAll();
?>
<br>


<?php
foreach ($komen as $key) {
?>
<link rel="stylesheet" type="text/css" href="css/komentar.css">
<div class="all-comment">
  <div class="commenters">
      <p><?= $key['komentator'];?></p>

        </div>
  <div class="comments">
      <p><?= $key['komentar'];?></p>
        <br />
  </div>
</div>

<br />
<?php
}
?>
