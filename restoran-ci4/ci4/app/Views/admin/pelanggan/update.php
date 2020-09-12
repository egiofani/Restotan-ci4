

<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
<div class="m-5">

<h1 class="mb-3">Update Pelanggan</h1>

<div class="card card-primary">
              <div class="card-header  bg-primary " >
                <h5 class="card-title text-white">Update Pelanggan</h5>
              </div>
              <form role="form" action="<?= base_url() ?>/admin/pelanggan/update" method="post">
                <div class="container-fluid">
                    <div class="row m-3">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label > Nama</label>
                                <input type="text" class="form-control required digits"   name="pelanggan" value="<?=$pelanggan['pelanggan']?>">
                          </div>
                          <div class="form-group">
                              <label > Alamat</label>
                                <input type="text" class="form-control required digits"   name="alamat" value="<?=$pelanggan['alamat']?>">
                          </div>
                          <div class="form-group">
                              <label > Telepon</label>
                                <input type="text" class="form-control required digits"   name="telp" value="<?=$pelanggan['telp']?>">
                          </div>
                          <div class="form-group">
                              <label > Email</label> 
                                <input type="email" class="form-control required digits"   name="email" value="<?=$pelanggan['email']?>">
                          </div>
                          <div class="form-group">
                              <label > Password</label>
                                <input type="password" class="form-control required digits"   name="password" value="<?=$pelanggan['password']?>">
                          </div>
                          <input type="hidden" class="form-control" name="idpelanggan" value="<?=$pelanggan['idpelanggan']?>" require>
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

