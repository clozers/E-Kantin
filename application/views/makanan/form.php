<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Tambah/Ubah Makanan</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" enctype="multipart/form-data" action="<?= base_url('makanan/save') ?>">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
    <input type="hidden" name="gambar_lama" value="<?= isset($gambar) ? $gambar : '' ?>" />

    <div class="row mb-3">
        <label>Nama Makanan</label>
        <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required />
    </div>

    <div class="row mb-3">
        <label>Stok</label>
        <input class="form-control" type="number" name="Stok" id="Stok" value="<?= $Stok ?>" required />
    </div>

    <div class="row mb-3">
        <label>Harga</label>
        <input class="form-control" type="number" name="harga" id="harga" value="<?= $harga ?>" required />
    </div>


    <div class="row mb-3">
        <label>Kantin</label>
        <select class="form-control" name="id_kantin" id="id_kantin">
            <?php
            // $idx = row ke-x, $row => datanya
            foreach ($kantins as $idx => $row) {
            ?>
                <option value="<?= $row['id'] ?>" <?= $id_kantin == $row['id'] ? 'selected' : '' ?>>
                    <?= $row['nama_kantin'] ?></option>
            <?php
            }
            ?>
        </select>
    </div>

    </br>

    <div>
        <label>gambar</label>
        <input type="file" name="gambar" id="gambar" accept="image/*" onchange="loadFile(event)" />
        <img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/' . $gambar ?>" height="120" width="120" />
    </div>

    <div>
        <input class="btn btn-warning" type="button" value="Cancel" onclick="history.back()" />
        <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Simpan" />
    </div>

</form>

<script>
    var loadFile = function(event) {
        var image = document.getElementById('preview');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>