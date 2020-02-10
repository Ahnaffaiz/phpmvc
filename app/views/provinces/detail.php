<div class="container mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['prov']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['prov']['jml_penduduk']; ?></h6>
    <p class="card-text"><?= $data['prov']['ibukota']; ?></p>
    <a href="<?= BASEURL; ?>/provinces" class="card-link">Kembali</a>
  </div>
</div>

</div>