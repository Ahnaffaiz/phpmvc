<div class="container mt-3">
    <div class="row">
        <div class="col-6">

        <div class="row">
          <div class="col-lg-6">
            <?php Flasher::flash(); ?>
          </div>
        </div>
        <!-- menambahkan modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
        Tambah data Provinsi
        </button>
            <h3>Daftar Province</h3>
            <ul class="list-group">
            <?php foreach($data['province'] as $prov) : ?>
                <li class="list-group-item ">
                <?= $prov['nama'] ?>
                <a href="<?= BASEURL; ?>/Provinces/hapus/<?= $prov['id'];  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');"> hapus </a>
                <a href="<?= BASEURL; ?>/Provinces/detail/<?= $prov['id'];  ?>" class="badge badge-primary float-right ml-1"> details </a>
                </li>
            <?php endforeach; ?>
            </ul>
            
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal " aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Provinsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <!-- form -->
        <form action="<?= BASEURL; ?>/Provinces/tambah" method="post">
        <div class="form-group">
            <label for="nama">Nama Provinsi</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="ibukota">Ibu Kota</label>
            <input type="text" class="form-control" id="ibukota" name="ibukota">
        </div>
        <div class="form-group">
            <label for="jml_penduduk">Jumlah Penduduk</label>
            <input type="number" class="form-control" id="jml_penduduk" name="jml_penduduk">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>