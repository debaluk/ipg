<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

    <div class="menu-main">
        <div class="row">
          <div class="col-xs-12">
            <div class="menu-main-header"><span> Setup<em><i class="fa fa-angle-right"></i></em></span></div>
            <div class="menu-main-inner">
              <ul class="inline-list">
                  <li class="selected">
                      <a href="<?= base_url('setup') ?>"><span>Data Event</span></a>
                  </li>
      
                  <li  class="">
                    <a href="<?= base_url('kode') ?>"><span>Kode Transaksi</span></a>
                  </li>
                  <li  class="">
                    <a href="<?= base_url('acesskeys') ?>"><span>Midtrans</span></a>
                  </li>
                  
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="space-30"></div>
      <div class="row">
          <div class="col-xs-12">
            <div class="bootstrap-table">             
              <div class="fixed-table-container table-no-bordered" style="padding-bottom: 0px;">
                  <!-- tool bar table-->
                  <div class="row domains-row">
                          
                          <div class="col-sm-2">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#formModal">
                              Tambah Event
                            </button>

                            
                          </div>

                          
                  </div>
                  <!-- -->
                  <div class="space-10"></div>
                  <div class="fixed-table-body">
                    <div class="fixed-table-loading" style="top: 42px; display: none;">Loading, please wait...</div>
                      <table id="table" data-classes="table table-no-bordered table-striped table-pointer" data-toggle="table" data-url="/api/v1/products_table_data.php" data-side-pagination="server" data-pagination="true" data-page-list="[10, 25, 50]" data-query-params="queryParams" data-toolbar="#toolbar" data-sort-name="nextduedate" data-sort-order="desc" class="table table-no-bordered table-striped table-pointer">
                        <!-- judul tabel -->
                        <thead>
                            <tr>
                              <th><div class="th-inner sortable both">Nama Event</div><div class="fht-cell"></div></th>
                              <th style="width:150px;"><div class="th-inner sortable both">Fee Bank Transer</div><div class="fht-cell"></div></th>
                              <th style="width:150px;"><div class="th-inner sortable both">Fee Credit Card</div><div class="fht-cell"></div></th>
                              <th style="width:150px;"><div class="th-inner sortable both">Admin Fee</div><div class="fht-cell"></div></th>
                              
                              <th style="width:100px;"><div class="th-inner "></div><div class="fht-cell"></div></th>
                            </tr>
                        </thead>
                        <!-- isi tabel -->
                         <?php
                        foreach ($event as $c) : ?>
                          <tr>
                             
                              <td><?= $c['nama_event']; ?></td>
                              <td align="right"><?= number_format($c['fee_bank_tf'], 2, ",", "."); ?></td>
                              <td align="right"><?= number_format($c['fee_cc'], 2, ",", "."); ?></td>
                              <td align="right"><?= number_format($c['admin_fee'], 2,",","."); ?></td>
                              <td>
                                  <div class="btn-group btn-group-xs pull-right" style="min-width: 6em">
                                    <a class="btn btn-primary" href="#">Aksi</a>
                                    <a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">   
                                      <li><a class="modalreceipt" data-toggle="modal" data-target="#edit" data-fid="316773">Edit</a></li>
                                      <li><a class="modalreceipt" data-toggle="modal" data-target="#hapus" data-fid="316773">Hapus</a></li>
                                    </ul>
                                  </div>
                              </td> 
                            </tr>
                        <?php endforeach; ?>
                        
                      </table>
                    </div>                      
                  </div>

              </div>
            </div>
          </div>
      </div>


    </div>     

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?=$this->endSection();?>