

<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="m-5">

  <h1>Pembayaran</h1>

      <div class="row">
        <div class="col">
          <?php 
              if (!empty(session()->getFlashdata('info'))) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('info');
                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>';
                echo'</div>';
              }
            ?>
          </div>
      </div>

     <!-- Main content -->
     <div class="invoice p-3 mb-3">
              <!-- title row -->
              
              <div class="row">
              
                <div class="col-12">
                  <h3>
                    <i class="fas fa-globe"></i> 
                  </h>
                </div>
                
                <!-- /.col -->
              </div>
              <hr class="bg-success" style="height:2px;">
              <!-- info row -->
              <div class="row invoice-info">
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?= strtoupper($order[0]['pelanggan'] )?></strong><br>
                    <strong> Alamat :</strong> <?= $order[0]['alamat'] ?><br>
                    <strong>Telepon:</strong> <?= $order[0]['telp'] ?><br>
                    <strong>Email  :</strong> <?= $order[0]['email'] ?>
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                </div>
                <!-- /.col -->         
                <div class="col-sm-4 invoice-col">
                <h6 class="float-right">Tanggal Order : <?=date("d-m-y",strtotime($order[0]['tglorder']))  ?></h6>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Barang</th>
                      <th>Jumlah</th>
                      <th>Harga/item</th>
                      <th>Subtotal</th>              
                    </tr>
                    <?php $no=1; ?>
                    </thead>
                    <tbody>
                    <?php foreach($detail as $key => $value): ?>
                      <tr>
                        <th><?= $no++ ?></th>
                        <td><img src="<?= base_url("/upload/".$value['gambar']);?>" class="float-left" style=" max-height: 40px;max-width: 100%; object-fit: contain; margin:3px; margin-right:6px; margin-top:-5px;"><p><?= $value['menu'] ?></p></td>
                        <td><?= $value['jumlah'] ?></td>
                        <td><?= $value['hargajual'] ?></td>
                        <td><?= $value['jumlah'] * $value['hargajual'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                  <hr>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-6 mt-4">
                  <p class="lead">Tanggal Transaksi : <?=date("d-m-y",strtotime($order[0]['tglorder']))  ?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Total:</th>
                        <td>Rp.<?= $order[0]['total'] ?></td>
                      </tr>
                      <tr>
                        <th>Bayar</th>
                        <td>Rp.<?= $order[0]['bayar'] ?></td>
                      </tr>
                      <tr>
                        <th>Kembali</th>
                        <td>Rp.<?= $order[0]['kembali'] ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                 <!-- /.invoice <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>--> 
                  <button type="button" class="btn btn-success  mr-5" data-toggle="modal" data-target="#staticBackdrop"><i class="far fa-credit-card"></i> 
                    Pembayaran
                  </button>
                      <!--Pembayaran-->
                      
                      <!-- Modal -->
                      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                  <h3>
                                    <i class="fas fa-globe"></i>
                                  </h3>  
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form role="form" action="<?= base_url() ?>/admin/order/bayar" method="post">
                                  <div class="container-fluid">
                                        <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label class="col-form-label">Bayar</label>
                                                    <input type="number" class="form-control required digits" require  name="bayar" >
                                              </div>
                                              <input type="number " class="form-control required digits" value="<?= $order[0]['idorder'] ?>"  require  name="idorder" >
                                              <input type="text " class="form-control required digits" value="<?= $order[0]['total'] ?>" hidden require  name="total" >

                                          </div>
                                          </div>     
                                    </div>                   
                                      
                                    <div class="row">
                                      <div class="col-6 mt">

                                          <div class="table-responsive">
                                            <table class="table">
                                            <tr>
                                              <th style="width:50%">Total:</th>
                                              <td>Rp.<?= $order[0]['total'] ?></td>
                                            </tr>
                                            <tr>
                                              <th>Bayar</th>
                                              <td>Rp.<?= $order[0]['bayar'] ?></td>
                                            </tr>
                                            <tr>
                                              <th>Kembali</th>
                                              <td>Rp.<?= $order[0]['kembali'] ?></td>
                                            </tr>
                                            </table>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer ">
                                  <table class="table">
                                    <tr>
                                        <td>
                                          <button type="button" class="btn btn-blok  btn-outline-danger  col" data-dismiss="modal">Batal</button>
                                        </td>
                                        <td>
                                          <button type="submit" name="simpan" class="btn btn-successbtn-blok  btn-outline-success  col">Bayar</button>
                                        </td>
                                    </tr>
                                  </table>
                                
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                  <!-- /.col
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
                
              </div>
              
            </div>
            
          </div>
          </div>
</div>


<?= $this->endSection() ?>

