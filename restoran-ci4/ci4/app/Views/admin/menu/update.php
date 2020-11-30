<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="container-fluid">

  <div class="m-5">
        <h1 class="mb-3">Form Update Menu</h1>

            <div class="card">
                <div class="card-header bg-primary">
                  <h5 class="card-title text-white">Tambahkan Menu</h5>
                </div>
                <form action="<?= base_url() ?>/admin/menu/update" method="post"  enctype="multipart/form-data">
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
                                <label > Menu</label>
                                  <input type="text" class="form-control required digits"  value="<?=$menu['menu']?>"  name="menu" >
                            </div>
                            <div class="form-group">
                                <label > Harga</label>
                                  <input type="text" class="form-control required digits" value="<?=$menu['harga']?>"  name="harga" >
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                            <label>Kategori</label>
                              <select class="form-control select2" data-placeholder="Pilih Kategori" name="idkategori"  style="width: 100%;">
                                <option name="kategori" selected="selected"></option>
                                  <?php foreach($kategori as $key => $value): ?>
                                    <option name="idkategori" value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
                                  <?php endforeach?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Pilih Gambar Barang</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar" value="<?=$menu['gambar']?>" >
                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text" id="">Upload</span>
                                </div>
                              </div>
                            </div>
                            <input type="hidden" class="form-control" name="idmenu" value="<?=$menu['idmenu']?>" require>
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