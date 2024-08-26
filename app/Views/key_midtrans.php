<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

    <div class="menu-main">
        <div class="row">
          <div class="col-xs-12">
            <div class="menu-main-header"><span> Setup<em><i class="fa fa-angle-right"></i></em></span></div>
            <div class="menu-main-inner">
              <ul class="inline-list">
                  <li class="">
                      <a href="<?= base_url('setup') ?>"><span>Data Event</span></a>
                  </li>
      
                  <li  class="">
                    <a href="<?= base_url('kode') ?>"><span>Kode Transaksi</span></a>
                  </li>
                  <li  class="selected">
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
                  Server Key anda untuk melakukan integrasi dengan Midtrans
                  <!-- -->
                  <div class="space-10"></div>
                 
              </div>
            </div>
          </div>
      </div>
      
      <div class="row">
          <div class="col-xs-6">
              <label class="control-label">Production:</label><br>
              <label class="control-label" for="amount">Client Key:</label>
              <input type="text" class="form-control" name="ck_p" id="ck_p" value="<?= $key->ck_p; ?>">
              <label class="control-label" for="amount">Server Key	:</label>
              <input type="text" class="form-control" name="sk_p" id="sk_p" value="<?= $key->sk_p; ?>"> 
              <label class="control-label" for="amount">Key Aktif	:</label>
              <select id="key_aktif" name="key_aktif" class="form-control">
                    <option value="<?= $key->key_aktif; ?>"><?= $key->key_aktif; ?></option>
                    <option value="Production">Production</option>
                    <option value="Sandbox">Sandbox</option>
              </select>
                    
          </div>
          <div class="col-xs-6">
              <label class="control-label">Sandbox:</label><br>
              <label class="control-label" for="amount">Client Key:</label>
              <input type="text" class="form-control" name="ck_s" id="ck_s" value="<?= $key->ck_s; ?>">
              <label class="control-label" for="amount">Server Key	:</label>
              <input type="text" class="form-control" name="sk_s" id="sk_s" value="<?= $key->sk_s; ?>">         
          </div>
          <div class="col-xs-12">
          <div class="space-30"></div>
             
             <input type="submit" value="Simpan" class="btn btn-primary"> 
          </div>

          
      
      </div>

    </div>     




<?=$this->endSection();?>