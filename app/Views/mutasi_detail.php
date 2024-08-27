<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

    <div class="menu-main">
        <div class="row">
          <div class="col-xs-12">
            <div class="menu-main-header"><span> Mutasi<em><i class="fa fa-angle-right"></i></em></span></div>
            <div class="menu-main-inner">
              <ul class="inline-list">
                  <li class="selected">
                      <a href="<?= base_url('mutasi') ?>"><span>Transfer Mutasi</span></a>
                  </li>
                  <li class="">
                      <a href="<?= base_url('riwayat') ?>"><span>Riwayat Mutasi</span></a>
                  </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
     
      <div class="row">
          <div class="col-xs-12">
            
                 <b>Detail mutasi, silahkan dilengkapi data.</b>
                  
          </div>
      </div>
      <div class="row">
          <div class="col-xs-4">
              <label class="control-label" for="amount">Nama Event</label>
              <input type="text" class="form-control" name="ck_p" id="ck_p" value="">    
          </div>
          <div class="col-xs-2">
              <label class="control-label" for="amount">Tanggal Mutasi:</label>
              <input type="date" class="form-control" name="ck_s" id="ck_s" value="">
                      
          </div>
          <div class="col-xs-2">
              <label class="control-label" for="amount">No. Mutasi:</label>
              <input type="text" class="form-control" name="ck_s" id="ck_s" value="">
                      
          </div>
          <div class="col-xs-4">
              <label class="control-label" for="amount">Keterangan:</label>
              <input type="text" class="form-control" name="ck_s" id="ck_s" value="">
                      
          </div>
          
      
      </div>
      <div class="row">
          <div class="col-xs-12">
          <div class="space-10"></div>
                 <b>Silahkan dipilih order id yang akan dimutasi didalam tabel data.</b>
                  
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12">
            <div class="bootstrap-table">             
              <div class="fixed-table-container table-no-bordered" style="padding-bottom: 0px;">
                  <!-- tool bar table-->
                  <div class="row domains-row">
                          
                  </div>
                  
                  <div class="fixed-table-body">
                    <div class="fixed-table-loading" style="top: 42px; display: none;">Loading, please wait...</div>
                      <table id="table" data-classes="table table-no-bordered table-striped table-pointer" data-toggle="table" data-url="/api/v1/products_table_data.php" data-side-pagination="server" data-pagination="true" data-page-list="[10, 25, 50]" data-query-params="queryParams" data-toolbar="#toolbar" data-sort-name="nextduedate" data-sort-order="desc" class="table table-no-bordered table-striped table-pointer">
                        <!-- judul tabel -->
                        <thead>
                            <tr>
                              <th style=""><div class="th-inner sortable both">Tanggal & waktu</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Order ID</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Metode pembayaran</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Nama Customer</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Nilai Transaksi</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Biaya IPG</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Admin Fee</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner sortable both">Nilai Transfer</div><div class="fht-cell"></div></th>
                              <th style=""><div class="th-inner "></div><div class="fht-cell">Check</div></th>
                            </tr>
                        </thead>
                        <!-- isi tabel -->
                        <tbody>
                        <tr>
                              <td style=""><div class="th-inner sortable both">23 Agt 2024, 16:12</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner sortable both">TR1-240823081153-332	</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner sortable both">Bank Transfer	</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner sortable both">chelsiaangelicawinat<br>chelsiaangelicawinata@yahoo.com</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner sortable both">7.000.000</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner sortable both">4.400</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner sortable both">50.000</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner sortable both">6.945.600</div><div class="fht-cell"></div></td>
                              <td style=""><div class="th-inner "></div><div class="fht-cell"><input class="all-input-check form-check-input all" type="checkbox" value="" name="filter1" id="filter-all" data-column="1"></div></td>
                            </tr>
                        </tbody>
                         
                        
                      </table>
                    </div>                      
                  </div>

              </div>
            </div>
          
</div>

      <div class="row">
          <div class="col-xs-12">
            
          <div class="space-30"></div>
              
              <input type="submit" value="Simpan" class="btn btn-primary"> 
              <a href="<?= base_url('mutasi') ?>" class="btn btn-success">
              Batal/Kembali
                                  </a>
          </div>
      </div>

      
      
    </div>     




<?=$this->endSection();?>