<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>List Makanan</h1>
<form method="get" action="<?= base_url('welcome/index') ?>">
    <div class="row mb-3">
        <input class="form-control" placeholder="cari Makanan " type="text" name="search" id="search" />
    </div>
</form>
<div class="row">
    <?php
    foreach ($records as $idx => $data) {
    ?>
        <div class="col-sm-4">
            <div class="card">
                <img src="<?= empty($data['gambar']) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 'uploads/' . $data['gambar'] ?>" class="card-img-top" alt="<?= $data['nama'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                    <p class="card-text"><?= word_limiter($data['nama_kantin'], 20) ?> <a href="<?= base_url("welcome/detail/{$data['id']}") ?>" class="btn btn-sm btn-primary">Detail</a></p>
                    <dl>
                        <dt>Nama Makanan</dt>
                        <dd><?= $data['nama'] ?></dd>
                        <dt>Harga Makanan</dt>
                        <dd><?= $data['harga'] ?></dd>
                        <dt>Nama Kantin</dt>
                        <dd><?= $data['nama_kantin'] ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
if (isset($links)) {
    echo $links;
}

include APPPATH . 'views/fragment/footer.php';
?>