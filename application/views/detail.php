<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<div class="card col-sm-8 container d-flex align-items-center justify-content-center">
  <img src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS .
              'uploads/' . $gambar ?>" class="card-img-top" alt="<?= $nama ?>">
  <div class="card-body">
    <h5 class="card-title"><?= $nama ?></h5>
    <p class="card-text"><?= $harga ?>
    <dl>
      <dt>Nama Kantin</dt>
      <dd><?= $nama_kantin ?></dd>
      <dt>Harga Makanan</dt>
      <dd><?= $harga ?></dd>
      <dt>Tersedia</dt>
      <dd><?= $Stok ?></dd>
    </dl>
  </div>
</div>
<a class="btn btn-warning btn-sm" href='#' onclick="history.back()">Back</a>
<?php
include APPPATH . 'views/fragment/footer.php';
?>