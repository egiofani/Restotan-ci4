<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="container-fluid">

  <div class="m-5">
        <h1 class="mb-3">FORM INSERT PELANGGAN</h1>

            <div class="card">
                <div class="card-header bg-primary">
                  <h5 class="card-title text-white">Tambahkan Pelanggan</h5>
                </div>
                <form action="<?= base_url() ?>/admin/pelanggan/insert" method="post">
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
                                <label > Nama</label>
                                  <input type="text" class="form-control required digits"   name="pelanggan" >
                            </div>
                            <div class="form-group">
                                <label > Alamat</label>
                                  <input type="text" class="form-control required digits"   name="alamat" >
                            </div>
                            <div class="form-group">
                                <label > Telepon</label>
                                  <input type="text" class="form-control required digits"   name="telp" >
                            </div>
                            <div class="form-group">
                                <label > Email</label>
                                  <input type="email" class="form-control required digits"   name="email" >
                            </div>
                            <div class="form-group">
                                <label > Password</label>
                                  <input type="password" class="form-control required digits"   name="password" >
                            </div>
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

<div class="container-fluid">

<?php echo session()->getFlashdata('info'); ?>

</div>