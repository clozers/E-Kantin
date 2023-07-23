<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Detail kantin</h1>
<dl>
  <dt>Nama Kantin</dt>
  <dd><?= $nama_kantin ?></dd>

  <dt>Telpon</dt>
  <dd><?= $telpon ?></dd>

</dl>

<a class="btn btn-warning" href='#' onclick="history.back()">Back</a>