

<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

<div class="m-5">
      <h1 class="mb-3">Update Kategori</h1>

          <div class="card">
              <div class="card-header bg-primary">
                <h5 class="card-title text-white">Update Kategori</h5>
              </div>
              <form  action="<?= base_url() ?>/admin/kategori/update" method="post">
                <div class="container-fluid">
                    <div class="row m-3">
                      <div class="col-md-12">
                      <?php 
                        if (!empty(session()->getFlashdata('info'))) {
                          echo '<div class="alert alert-danger" role="alert">';
                          echo session()->getFlashdata('info');
                          echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>';
                          echo'</div>';
                        }
                      ?>
                      <div class="form-group"> 
                      <label>Kategori</label>
                          <input type="text" class="form-control" name="kategori" value="<?=$kategori['kategori']?>" require>
                        </div>
                        <div class="form-group">
                          <label>Keterangan</label>
                          <input type="text" class="form-control" name="keterangan" value="<?=$kategori['keterangan']?>" require>
                        </div>
                        <input type="hidden" class="form-control" name="idkategori" value="<?=$kategori['idkategori']?>" require>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-danger">kembali</button>
                      </div>
                      </div>     
                  </div>                 
              </form> 
            </div> 
  </div>  
</div>

<?= $this->endSection() ?>

