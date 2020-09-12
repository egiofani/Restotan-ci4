

<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<div class="container-fluid">

<div class="m-5">
  <h1>Daftar Pelanggan</h1>
    <a href="<?= base_url()?>/admin/pelanggan/create"><button type="button" class="btn btn-primary btn-sm mb-3 ml-3">Tambah Pelanggan</button></a>
      <table class="table table-bordered  table-striped">
        <thead class="thead-dark">
          <tr>
              <th scope="col">No</th>
              <th scope="col">Pelanggan</th>
              <th scope="col">Alamat</th>
              <th scope="col">Email</th>
              <th scope="col">Telepon</th>
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
          <?php foreach($pelanggan as $key => $value): ?>
            <tr>
              <th style="width:10px;" class="text-center"><?= $no++ ?></th>
              <td><?= $value['pelanggan'] ?></td>
              <td><?= $value['alamat'] ?></td>
              <td><?= $value['email'] ?></td>
              <td><?= $value['telp'] ?></td>
              <td class="text-center ">
                <a style="font-size:25px;" href="<?= base_url()?>/admin/pelanggan/find/<?=$value['idpelanggan']?>"><i class="fas fa-edit text-primary m-2 "></i></a>
                <a style="font-size:25px;" href="<?= base_url()?>/admin/pelanggan/delete/<?=$value['idpelanggan']?>"><i class="fas fa-trash-alt text-danger  m-2"></i></a>
              </td>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>

   
  <div class="pagin ">
    <?= $pager->links('page','bootstrap') ?>
  </div>

</div>
</div>


<?= $this->endSection() ?>



<div class="container-fluid">
      <h1>Daftar Pelanggan</h1>

  <a href="<?= base_url()?>/admin/pelanggan/create"><button type="button" class="btn btn-primary btn-sm m-3">Tambah pelanggan</button></a>

 <div class="card">
    <!-- /.card-header -->
      <div class="card-header">
                <h3 class="card-title">Data Pelanggan</h3>
      </div>
    <!-- /.card-body -->  
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Pelanggan</th>
              <th scope="col">Alamat</th>
              <th scope="col">Email</th>
              <th scope="col">Telepon</th>
              <th scope="col" class="text-center">Action</th>


            </tr>
            <?php $no=1 ?>
          </thead>
          <tbody>
          <?php foreach($pelanggan as $key => $value): ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $value['pelanggan'] ?></td>
              <td><?= $value['alamat'] ?></td>
              <td><?= $value['email'] ?></td>
              <td><?= $value['telp'] ?></td>
              <td>
                <a href="<?= base_url()?>/admin/pelanggan/find/<?=$value['idpelanggan']?>"><i class="fas fa-edit text-primary btn-lg "></i></a>
                <a href="<?= base_url()?>/admin/pelanggan/delete/<?=$value['idpelanggan']?>"><i class="fas fa-trash-alt text-danger btn-lg "></i></a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        </div>
      </div>  
  </div>
</div>