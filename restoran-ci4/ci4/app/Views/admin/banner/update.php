<?= $this->extend('template/admin')?>

<?= $this->section('content') ?>

<div class="container-fluid">

<?php echo session()->getFlashdata('info');?>

<h1>Update Gambar Banner</h1>
      <div class="container-fluid">
        <form action="<?= base_url() ?>/admin/banner/update" method="post" enctype="multipart/form-data" >
          <div class="form-group"> 
            <label>Nama</label>
            <input type="text" value="<?=$banner['banner']?>" class="form-control" name="banner" require>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Pilih Gambar banner</label>
              <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar" value="<?=$banner['gambar']?>" >
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                 </div>
              </div>
           </div>
          <div class="form-group"> 
            <label>Link</label>
            <input type="text" value="<?=$banner['link']?>" class="form-control" name="link" require>
          </div>
          <input hidden  class="form-control" name="id" value="<?=$banner['id']?>">
          <input hidden  class="form-control" name="gambar" value="<?=$banner['gambar']?>">

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>


</div>


<?= $this->endSection() ?>