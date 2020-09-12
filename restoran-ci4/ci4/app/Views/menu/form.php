
<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-3">
  <div class="row">
      <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
    </div>

    <div class="row">
      <h1>Upload image</h1>

      <form action="<?= base_url() ?>/admin/menu/insert" method="post" enctype="multipart/form-data">
        <div class="form-group"> 
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar" require>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
</div>
 



<?= $this->endSection() ?>