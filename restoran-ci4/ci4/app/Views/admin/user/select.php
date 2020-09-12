<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

  <div class="m-5">
      <h1>Daftar User</h1>

  <a href="<?= base_url()?>/admin/user/create"><button type="button" class="btn btn-primary btn-sm m-3">Tambah User</button></a>


    <!-- /.card-body -->  
      
        <table id="example1" class="table table-bordered table-striped ">
          <thead class="thead-dark">
            <tr>
              <th scope="col" style="width: 10px">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col" class="text-center" style="width:100px">Status</th>
              <th scope="col" class="text-center" style="width:100px">Aksi</th>



            </tr>
            <?php $no=1 ?>
          </thead>
          <tbody>
          <?php foreach($user as $key => $value): ?>
            <?php 
                    if ($value['aktif'] == 1) {
                        $status = "<button class='btn  btn-success'>Aktif</button>";
                    }else {
                        $status = "<button class='btn btn-danger'>Tidak</button>";
                    }
            ?>      
            <tr>
              <th class=""><?= $no++ ?></th>
              <td class=""><?= $value['user'] ?></td>
              <td class=""><?= $value['email'] ?></td>
              <td class="text-center">
                  <a href="<?= base_url()?>/admin/user/status/<?=$value['iduser']?>/<?=$value['aktif']?>"><?= $status ?></a>
              </td>
              <td>
                <a style="font-size:25px;"  href="<?= base_url()?>/admin/user/find/<?=$value['iduser']?>"><i class="fas fa-edit text-primary m-1"></i></a>
                <a style="font-size:25px;"  href="<?= base_url()?>/admin/user/delete/<?=$value['iduser']?>"><i class="fas fa-trash-alt text-danger m-1 "></i></a>
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

<a href="<?= base_url()?>/admin/user/delete/<?=$value['iduser']?>"><i class="fas fa-trash-alt text-danger btn-lg "></i></a>