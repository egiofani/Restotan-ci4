<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<div class="container-fluid">

<div class="m-5">
  <h1><?= $judul;?></h1>
    <a href="<?= base_url()?>/admin/kategori/create"><button type="button" class="btn btn-primary btn-sm mb-3 ml-3">Tambah Kategori</button></a>
      <table class="table table-bordered  table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Keterangan</th>
            <th scope="col" class="text-center">Action</th>
          </tr>

        </thead>
        <tbody>      
        <?php  $no=1;
        // if (isset($_GET['page_page'])) {
        //     $page = $_GET['page_page'];
        //     $jumlah = 3;
        //     $no = ($jumlah * $page ) - $jumlah +1;
        // }else {
        //   $no = 1;
        // }
      ?>
          <?php foreach($kategori as $key => $value): ?>
              <tr>      
                <th style="width:10px;" class="text-center"><?= $no++ ?></th>
                <td><?= $value['kategori'] ?></td>
                <td><?= $value['keterangan'] ?></td>
                <td class="text-center">
                <a style="font-size:25px;" href="<?= base_url()?>/admin/kategori/find/<?=$value['idkategori']?>"><i class="fas fa-edit text-primary m-2 "></i></a>
                <a style="font-size:25px;" href="<?= base_url()?>/admin/kategori/delete/<?=$value['idkategori']?>"><i class="fas fa-trash-alt text-danger  m-2"></i></a>
                </td>
              </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

   
  <div class="pagin ">
    <?= $pager->links('page','bootstrap') ?>
  </div>

</div>
</div>


<?= $this->endSection() ?>
<a href="<?= base_url()?>/admin/kategori/delete/<?=$value['idkategori']?> "><button type="button" class="btn btn-danger btn-sm">hapus</button></a>
              <a href="<?= base_url()?>/admin/kategori/find/<?=$value['idkategori']?> "><button type="button" class="btn btn-primary btn-sm">ubah</button></a>