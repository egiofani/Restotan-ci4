<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="m-5">
      <h1>Daftar Menu</h1>

  <a href="<?= base_url()?>/admin/menu/create"><button type="button" class="btn btn-primary btn-sm m-3">Tambah Gambar menu</button></a>           
                <table id="example1" class="table table-bordered  table-striped">
                  <thead class="thead-dark">
                  <tr>
                    <th style="width: 10px" >No</th>       
                    <th scope="col">Gambar</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Harga</th>
                    <th class="text-center" style="width: 150px"  >Action</th>
                  </tr>                  
                  </thead>
                  <?php $no=1 ?>
                  <tbody>
                  <?php foreach($menu as $value) :  ?>
                  <tr>
                    <th><?= $no++ ?></th>
                    <td style="width:150px" ><img class="col-12" src="<?= base_url("/upload/".$value['gambar']); ?>" alt=""></td>
                    <td><?= $value['menu'] ?></td>
                    <td><a href="<?= $value['harga'] ?>"><?= $value['harga'] ?></a></td>
                    <td class="text-center">
                      <a style="font-size:25px;" href=" <?= base_url()?>/admin/menu/find/<?=$value['idmenu']?>"><i class="fas fa-edit text-primary m-1  "></i></a>
                      <a style="font-size:25px;" href="<?= base_url()?>/admin/menu/delete/<?=$value['idmenu']?>"><i class="fas fa-trash-alt text-danger m-1 "></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>   
                <div class="pagin ">
                  <?= $pager->links('page','bootstrap') ?>
                </div>         
            </div>

           
</div>


<?= $this->endSection() ?> 

<table class="table table-bordered">
      <div class="card card-primary">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Gambar</th>
            <th scope="col">Link</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
          <?php $no=1 ?>
        </thead>
        <tbody>
        
          <tr>

            <th scope="row"><?= $no++ ?></th>
            <td></td>       
            <td>        
              <a href=""><i class="fas fa-edit text-primary btn-lg  "></i></a>
              <a href=""><i class="fas fa-trash-alt text-danger btn-lg  "></i></a>
            </td>
          </tr>
          
        </tbody>
    </div>
  </table>