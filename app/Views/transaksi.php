<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

    <div class="menu-main">
        <div class="row">
          <div class="col-xs-12">
            <div class="menu-main-header"><span> Transaksi<em><i class="fa fa-angle-right"></i></em></span></div>
            <div class="menu-main-inner">
              <ul class="inline-list">
                  <li class="selected">
                      <a href="<?= base_url('transaksi') ?>"><span>Data Order</span></a>
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
                          <div class="col-xs-4 col-4">
                            
                            <div class="input-group">
                              <div class="input-group-addon input-group-prepend">
                                <span class="input-group-text">Nama Event</span>
                              </div>
                              <select id="id_event" name="id_event" class="form-control">
                              <option value="">Semua Event</option>
                                <?php
                                  foreach ($event as $c) : ?> 
                                      <option value="<?= $c['id_event']; ?>"><?= $c['nama_event']; ?></option>
                                      
                                <?php endforeach; ?>
                                </select>
                            </div>              
                          </div>
                          <div class="col-xs-3 col-3">
                            
                            <div class="input-group">
                              <div class="input-group-addon input-group-prepend">
                                <span class="input-group-text">Jenis Transaksi</span>
                              </div>
                              <select id="jenis" class="form-control">
                                    <option value=""></option>
                                    
                              </select>
                            </div>              
                          </div>
                          <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary btn-block">
                              Tampilkan
                            </button>
                          </div>

                          
                  </div>
                  <!-- -->
                  
                  <div class="space-10"></div>
                  <div class="fixed-table-body">
                    <div class="fixed-table-loading" style="top: 42px; display: none;">Loading, please wait...</div>
					<div class="">
                      <table id="table" name="table" class="table table-no-bordered table-striped table-pointer" style="width:100%;">
                        <!-- judul tabel -->
                        <thead>
                            <tr>
                              <th style=""><div class="th-inner sortable both">Tanggal</div><div class="fht-cell"></div></th>
                              <th style="width:150px;"><div class="th-inner sortable both">Order ID</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Channel</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Jumlah</div><div class="fht-cell"></div></th>
                              <th style="width:150px;"><div class="th-inner sortable both">Nama Customer</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Email Customer</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Produk</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both desc">Status</div><div class="fht-cell"></div></th>                                
                             
                            </tr>
                        </thead>
                        <!-- isi tabel -->
                         
                        
                      </table>
					  </div>
                    </div>                      
                  </div>

              </div>
            </div>
          </div>
      </div>


    </div>     

<script type="text/javascript">
    $(document).ready(function() {

        $('#table').DataTable({
          processing: true,
          serverSide: true,
          ajax:{
            url: '<?php echo site_url('transaksi/ajax') ?>'
          },
          columns: [
              {data: 'transaction_time', name: 'transaction_time'},
              {data: 'order_id', name: 'order_id'},
              {data: 'channel', name: 'channel'},
              {data: 'amount', name: 'amount'},
              {data: 'customer_name', name: 'customer_name'},
              {data: 'customer_email', name: 'customer_email'},
              {data: 'nama_produk', name: 'nama_produk'},
              {data: 'transaction_status', name: 'transaction_status'},
          ]
        });
    });
</script>

<?=$this->endSection();?>