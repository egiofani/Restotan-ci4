<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="container-fluid">


<h1>Form Update User</h1>
<div class="row">
        <div class="col">
          <?php 
              // if (!empty(session()->getFlashdata('info'))) {
              //   echo '<div class="alert alert-danger" role="alert">';
              //   $error = session()->getFlashdata('info');
              //   foreach($error as $key => $value){
              //     echo  " * " . $value ;
                  
              //   }
              //   echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              //           <span aria-hidden="true">&times;</span>
              //           </button>';
              //   echo'</div>';
              // }
            ?>
          </div>
      </div>


<div class="card card-primary">
              <div class="card-header">
                <h5 class="card-title">Update User</h5>
              </div>
              <form role="form" action="<?= base_url() ?>/admin/user/update" method="post">
                <div class="container-fluid">
                    <div class="row m-3">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label > Nama</label>
                                <input type="text" class="form-control required digits"   name="user" value="<?=$user['user']?>"  >
                          </div>
                          <div class="form-group">
                              <label > Email</label>
                                <input type="email" class="form-control required digits"   name="email"  value="<?=$user['email']?>"  >
                          </div>
                          <input type="hidden" class="form-control" name="iduser" value="<?=$user['iduser']?>" require>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                      </div>     
                  </div>                 
              </form> 
            </div>   
</div>

<?= $this->endSection() ?>

<div class="container-fluid">

<?php// echo session()->getFlashdata('info'); ?>
<h1>FORM INSERT</h1>

<form action="<?= base_url() ?>/admin/pelanggan/insert" method="post">
  <div class="form-group"> 
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" require>
  </div>
  <div class="form-group"> 
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat" require>
  </div>
  <div class="form-group"> 
    <label>Telepon</label>
    <input type="text" class="form-control" name="telp" require>
  </div>
  <div class="form-group"> 
    <label>Email</label>
    <input type="email" class="form-control" name="email" require>
  </div>
  <div class="form-group"> 
    <label>password</label>
    <input type="password" class="form-control" name="password" require>
  </div>
  <div class="form-group"> 
    <label>Tanggal lahir</label>
    <input type="date" class="form-control" name="tgllahir" require>
  </div>
  <div class="form-group"> 
    <label>Jenis kelamin</label>
    <input type="text" class="form-control" name="jk" require>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>