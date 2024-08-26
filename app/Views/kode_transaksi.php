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
      
                  <li  class="selected">
                    <a href="<?= base_url('kode') ?>/data"><span>Kode Transaksi</span></a>
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
          Kode transaksi event 
          <div class="space-10"></div>
            <label class="control-label" for="amount">Nama Event</label>
            <select id="id_event" name="id_event" class="form-control">
            <?php
              foreach ($event as $c) : ?> 
                  <option value="<?= $c['id_event']; ?>"><?= $c['nama_event']; ?></option>
                  
            <?php endforeach; ?>
            </select>
            <label class="control-label" for="amount">Jenis Transaksi	</label>
            <select id="id_jenis" name="id_jenis" class="form-control">
            <?php
            foreach ($jenis as $c) : ?> 
                  <option value="<?= $c['id_jenis']; ?>"><?= $c['nama_jenis']; ?></option>
                  
            <?php endforeach; ?>
                  
            </select>
            <label class="control-label" for="amount">Kode (3 digit depan):</label>
            <input type="text" class="form-control" name="ck_p" id="ck_p" value="">
            <div class="space-10"></div>
            <input type="submit" value="Simpan" class="btn btn-primary"> 
            <input type="reset" value="Batal" class="btn btn-success"> 
        </div>
      </div>

      <div class="row">
          <div class="col-xs-12">
            <div class="bootstrap-table">             
              <div class="fixed-table-container table-no-bordered" style="padding-bottom: 0px;">                  
                  <div class="space-10"></div>
                  <div class="fixed-table-body">
                    <div class="fixed-table-loading" style="top: 42px; display: none;">Loading, please wait...</div>
                      <table id="table" data-classes="table table-no-bordered table-striped table-pointer" data-toggle="table" data-url="/api/v1/products_table_data.php" data-side-pagination="server" data-pagination="true" data-page-list="[10, 25, 50]" data-query-params="queryParams" data-toolbar="#toolbar" data-sort-name="nextduedate" data-sort-order="desc" class="table table-no-bordered table-striped table-pointer">
                        <!-- judul tabel -->
                        <thead>
                            <tr>
                              <th style=""><div class="th-inner sortable both">Nama Event</div><div class="fht-cell"></div></th>
                              <th  style="width:150px;"><div class="th-inner sortable both">Jenis Transaksi</div><div class="fht-cell"></div></th>
                              <th  style="width:150px;"><div class="th-inner sortable both">Kode Transaksi</div><div class="fht-cell"></div></th>
                              
                              <th  style="width:100px;"><div class="th-inner "></div><div class="fht-cell"></div></th>
                            </tr>
                        </thead>
                        <!-- isi tabel -->
                        <?php
                        foreach ($kode as $c) : ?>
                          <tr>
                             
                              <td><?= $c->nama_event; ?></td>
                              <td><?= $c->nama_jenis; ?></td>
                              <td><?= $c->kode; ?></td>
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




<?=$this->endSection();?>