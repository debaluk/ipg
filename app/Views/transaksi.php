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
                                <span class="input-group-text">Event</span>
                              </div>
                              <select id="registertld" class="form-control">
                                    <option value="">PIT</option>
                                    
                              </select>
                            </div>              
                          </div>
                          <div class="col-xs-3 col-3">
                            
                            <div class="input-group">
                              <div class="input-group-addon input-group-prepend">
                                <span class="input-group-text">Transaksi</span>
                              </div>
                              <select id="registertld" class="form-control">
                                    <option value="">PIT</option>
                                    
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
                      <table id="table" data-classes="table table-no-bordered table-striped table-pointer" data-toggle="table" data-url="/api/v1/products_table_data.php" data-side-pagination="server" data-pagination="true" data-page-list="[10, 25, 50]" data-query-params="queryParams" data-toolbar="#toolbar" data-sort-name="nextduedate" data-sort-order="desc" class="table table-no-bordered table-striped table-pointer">
                        <!-- judul tabel -->
                        <thead>
                            <tr>
                              <th style=""><div class="th-inner sortable both">Tanggal</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Order ID</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Jenis transaksi</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Channel</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Nama Customer</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Email Customer</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Jumlah</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both desc">Status</div><div class="fht-cell"></div></th>                                
                              <th style=""><div class="th-inner "></div><div class="fht-cell"></div></th>
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




<?=$this->endSection();?>