<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
<div class="m-5">
      <h1>ORDER</h1>
    <!--  /.card-header
    <pre>
      
       <br>
     
    </pre> --> 
  <div class="card">
        <div class="card-header">
                <h3 class="card-title">Data Order</h3>
        </div>
              <!-- /.card-header -->
        <div class="card-body">
      <table id="example1" class="table col-md-12">
    <thead>
      <tr>
        <th scope="col">Pelanggan</th>
        <th scope="col" class="text-center">Total</th>
        <th scope="col" class="text-center">status</th>
      </tr>
    </thead>
    <tbody>
    <?php $idorder=2 ?>
    <?php foreach($order as $key => $value): ?>
      <?php 
                    if ($value['status'] == 1) {
                        $status = "<button class='btn btn-sm btn-success'>Sudah Dibayar</button>";
                    }else {
                        $status = "<a href='". base_url("/admin/order/find") . "/" . $value['idorder'] ."'><button class='btn btn-sm btn-danger'>Belum bayar</button></a>";
                    }
        ?>
       <?php 
                    if ($value['status'] == 1) {
                        $bayar = "<button class='btn btn-sm btn-success'>Sudah Dibayar</button>";
                    }else {
                        $bayar = "  <a  href='". base_url("/admin/order/find") . "/" . $value['idorder'] ."'><button type='button' class='btn btn-block btn-outline-success mb-2 '><i class='fa fa-check'></i> Bayar</button></a>
                                    <a  href=''><button  type='button' class='btn btn-block btn-outline-danger'><i class='fafa-close'></i>Batal</button></a>            
                                  ";
                        
                    }
        ?>
      <tr>
        <td colspan="3" class="col-md-12">            
          <div class="card">
                <div class="card-header"  style="background-color:#F1F1F1; ">
               
                  <h6 class="card-title" style="font-size:15px;  "> </strong> <?= $status ?> </h6>
                </div>
                <!-- -->
                <div class="card-body">                
                  <div class="row">
                      <div class="col-md-4">                   
                        <table style=" margin-top:px;">
                          <tr>
                            <td><!--<img src="" class="float-left" style=" max-height: 50px;max-width: 100%; object-fit: contain; margin-right: 3px; margin-bottom:-10px; ">-->
                            <h3><i class="fas  fa-user-circle " style="font-size:25px; color:#007bff;"></i><strong> <?= strtoupper($value['pelanggan'] )?></strong></td>
                            <!-- <td ><b></b></td>-->
                            <!--<td ><div class=""> x</div></td>
                          </tr>-->
                        </table><hr>
                        <div  class="text-center" style="margin-bottom:-10px; margin-top:-30px; ">
                         
                        </div>
                      </div>  
                  <!-- /.card -->    
                      <div class="col-md-4">                   
                        <h5 class="text-center mt-3">Rp.<?= $value['total'] ?></h5>
                      </div>  
                  <!-- /.card-header --> 
                  <?php 
                    if ($value['status'] == 1) {
                        $bayar = "<h5 style='font-size:150%; color:green;'><i class='far fa-check-circle'></i> Lunas</h5><br>
                                  <a href='". base_url("/admin/order/cetak") . "/" . $value['idorder'] ."'><button class='btn btn-block btn-sm btn-outline-primary mb-2 ' style='font-size:100%; margin-top:-20px;'><i class='fa fa-print font-primary'></i> Lihat Detail</button></a>";
                    }else {
                        $bayar = "  <a  href='". base_url("/admin/order/find") . "/" . $value['idorder'] ."'><button type='button' class='btn btn-block btn-outline-success mb-2 '><i class='fa fa-check'></i> Bayar</button></a>
                                    <a  href=''><button  type='button' class='btn btn-block btn-outline-danger'><i class='fafa-close'></i>Batal</button></a>";
                        
                    }
                  ?>
                      <div class="col-md-4 text-center mt-2">   
                        <?= $bayar ?>           
                      </div>    
                  </div>
                </div>
                <div class="card-footer" style="margin-bottom">
                    <p style="margin-bottom:-5px; margin-top:-2px;">Tanggal : <?=date("d-m-y",strtotime($value['tglorder']))  ?></p>
                </div> 
          </div>
              <!-- /.card -->
        </td>
        <td hidden><div hidden><?= $value['total'] ?></div></td>
        <td hidden ><div hidden><?= $status ?></div></td>
      </tr>
      <?php endforeach ?>
      
    </tbody>
  </table> 
   <?= $pager->makeLinks(1,$perPage,$total,'bootstrap') ?> 
  </div>      
  </div>


</div>
</div>

</div>


<?= $this->endSection() ?>

