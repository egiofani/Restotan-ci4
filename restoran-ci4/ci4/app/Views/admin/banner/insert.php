<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

<?php echo session()->getFlashdata('info'); ?>
 
<h1>Insert Gambar Banner</h1>

              
      
  <div class="card card-primary card-default">
    
      <div class="card-header">
                <h5 class="card-title">Tambahkan Banner</h5>
      </div>
      <div class="container-fluid ">
        <form class="m-3" action="<?= base_url() ?>/admin/banner/insert" method="post" enctype="multipart/form-data" >
          <div class="form-group"> 
            <label>Nama</label>
            <input type="text" class="form-control" name="banner" require>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Pilih Gambar banner</label>
              <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar" >
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                 </div>
              </div>
           </div>
          <div class="form-group"> 
            <label>Link</label>
            <input type="text" class="form-control" name="link" require>
          </div>
          <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>
        </div>
      </div>
    </div>
</div>


<?= $this->endSection() ?>