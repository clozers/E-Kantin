<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Detail makanan</h1>
</br>
<dl>
  <dt>Nama Makanan</dt>
  <dd><?= $nama ?></dd>

  <dt>Harga</dt>
  <dd><?= $harga ?></dd>

  <dt>Gambar</dt>
  <dd><img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/' . $gambar ?>" height="120" width="120" /></dd>

  <dt>Nama kantin</dt>
  <dd><?= $nama_kantin ?></dd>

  <dt>Tersedia</dt>
  <dd><?= $Stok ?></dd>


  <a class="btn btn-warning" href='#' onclick="history.back()">Back</a>
  <?php
  include APPPATH . 'views/fragment/footer.php';
  ?>