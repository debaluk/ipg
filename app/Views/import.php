<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

    <div class="menu-main">
        <div class="row">
          <div class="col-xs-12">
            <div class="menu-main-header"><span> Import<em><i class="fa fa-angle-right"></i></em></span></div>
            <div class="menu-main-inner">
              <ul class="inline-list">
                  <li class="selected">
                      <a href="<?= base_url('import') ?>"><span>Import Transaksi</span></a>
                  </li>
      
                  <li  class="">
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
					Import file data transaksi dalam bentuk excell, format dan kolom harus sesuai dengan template import.
					<form id="form-upload-user" method="post" autocomplete="off">
						<input type="hidden" id="token" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
						<div class="sub-result"></div>
						<div class="form-group">
							<label class="control-label">Upload File <small class="text-danger">*</small></label>
							<input type="file" class="form-control form-control-sm" id="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
							<small class="text-danger">Upload hanya file excell.</small>
							</div>
						<div class="form-group">
							<div class="text-center">
								<div class="user-loader" style="display: none; ">
									<i class="fa fa-spinner fa-spin"></i> Sedang proses ...
								</div>
								<div class="selesai alert alert-primary" role="alert" style="display: none; ">
									<i class="fa fa-info"></i>Upload dan import data berhasil,silakan buka halaman transaksi.
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" id="btnUpload">Upload</button>
						</div>
					</form>
				  
				  
				  
                  
              </div>
            </div>
          </div>
      </div>


    </div> 
<script>
    $(document).ready(function() {
        $("body").on("submit", "#form-upload-user", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url('import/importTransaksi') ?>",
                data: data,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function() {
                    $("#btnUpload").prop('disabled', true);
                    $(".user-loader").show();
					$(".selesai").hide();
                }, 
                success: function(result) {
                    $("#btnUpload").prop('disabled', false);
                    if($.isEmptyObject(result.error_message)) {
                        $(".result").html(result.success_message);
                    } else {
                        $(".sub-result").html(result.error_message);
                    }
                    $(".user-loader").hide();
					$(".selesai").show();
					$("form")[0].reset();
					;
					
                }
            });
        });
    });
</script>
<?=$this->endSection();?>
