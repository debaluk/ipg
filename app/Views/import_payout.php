<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

    <div class="menu-main">
        <div class="row">
          <div class="col-xs-12">
            <div class="menu-main-header"><span> Import<em><i class="fa fa-angle-right"></i></em></span></div>
            <div class="menu-main-inner">
              <ul class="inline-list">
                  <li class="">
                      <a href="<?= base_url('import') ?>"><span>Import Transaksi</span></a>
                  </li>
      
                  <li  class="selected">
                    <a href="<?= base_url('import') ?>/payout"><span>Import Payout</span></a>
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
                  Import file data payout dalam bentuk excell, format dan kolom harus sesuai dengan template import.
                  <!-- -->
                  <div class="space-10"></div>
                  <div class="input-group">
                    <label class="input-group-text" for="inputGroupFile01">Upload File </label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                    
                  </div>
                  <div class="space-30"></div>

                  <input type="submit" value="PROSES" class="btn btn-primary"> 
                 
              </div>
            </div>
          </div>
      </div>


    </div> 

<?=$this->endSection();?>