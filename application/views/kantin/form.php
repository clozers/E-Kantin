<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('kantin/save') ?>">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
    <div>
        <label></label>
        <div>
            <h3>Tambah/Ubah kantin</h3>
        </div>
    </div>
    <div class="row mb-3">
        <label>Nama kantin</label>
        <div>
            <input class="form-control" name="nama_kantin" id="nama_kantin" value="<?= $nama_kantin ?>" required />
        </div>
    </div>


    <div class="row mb-3">
        <label>Telpon</label>
        <div>
            <input class="form-control" type="tel" name="telpon" id="telpon" value="<?= $telpon ?>" required />
        </div>
    </div>


    <div>
        <input class="btn btn-warning btn-sm" type="button" value="Cancel" onclick="history.back()" />
        <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
    </div>

</form>