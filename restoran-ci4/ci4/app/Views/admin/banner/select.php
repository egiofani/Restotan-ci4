<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
<div class="m-5">

      <h1>Daftar Banner</h1>

  <a href="<?= base_url()?>/admin/banner/create"><button type="button" class="btn btn-primary btn-sm m-3">Tambah Gambar banner</button></a>

  <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title ">Data banner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 10px" >No</th>       
                    <th scope="col">Nama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Link</th>
                    <th class="text-center" style="width: 150px"  >Action</th>
                  </tr>                  
                  </thead>
                  <?php $no=1 ?>
                  <tbody>
                  <?php foreach($banner as $value) :  ?>
                  <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $value['banner'] ?></td>
                    <td class="" ><img class="col-md-4" src="<?= base_url("/upload/".$value['gambar']); ?>" alt=""></td>
                    <td><a href="<?= $value['link'] ?>"><?= $value['link'] ?></a></td>
                    <td>
                      <a style="font-size:25px;" href="<?= base_url()?>/admin/banner/find/<?=$value['id']?>"><i class="fas fa-edit text-primary m-1"></i></a>
                      <a style="font-size:25px;" href="<?= base_url()?>/admin/banner/delete/<?=$value['id']?>"><i class="fas fa-trash-alt text-danger m-1"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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