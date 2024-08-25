<?=$this->extend('layout/template');?>
<?=$this->section('content');?>

    <div class="menu-main">
        <div class="row">
          <div class="col-xs-12">
            <div class="menu-main-header"><span> Setup<em><i class="fa fa-angle-right"></i></em></span></div>
            <div class="menu-main-inner">
              <ul class="inline-list">
                  <li class="selected">
                      <a href="<?= base_url('') ?>/setup"><span>Data Event</span></a>
                    </li>
      
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="space-30"></div><div class="row">
      <div class="col-xs-12">
      <div id="toolbor" class="row">
  <div class="col-sm-8" style="margin-top: 12px;">
        <div class="clear"></div>
    
    <div class="form-check form-check-inline checkbox">
      <input class="all-input-check form-check-input all" id="check-all" type="checkbox" value="all" data-column="1">
      <label class="all" for="check-all">All</label>
    </div>
    <div class="form-check form-check-inline checkbox">
      <input class="filter-input-check form-check-input active" id="check-active" type="checkbox" checked="" value="active" name="filter" data-column="1">
      <label class="active" for="check-active">Active</label>
    </div>
    <div class="form-check form-check-inline checkbox">
      <input class="filter-input-check form-check-input pending" id="check-pending" type="checkbox" checked="" value="pending" name="filter" data-column="1">
      <label class="pending" for="check-pending">Pending</label>
    </div>
    <div class="form-check form-check-inline checkbox">
      <input class="filter-input-check form-check-input suspended" id="check-suspended" type="checkbox" value="suspended" name="filter" data-column="1">
      <label class="suspended" for="check-suspended">Suspended</label>
    </div>
    <div class="form-check form-check-inline checkbox">
      <input class="filter-input-check form-check-input expired" id="check-terminated" type="checkbox" value="terminated" name="filter" data-column="1">
      <label class="expired" for="check-terminated">Terminated</label>
    </div>
    <div class="form-check form-check-inline checkbox">
      <input class="filter-input-check form-check-input expiring" id="check-cancelled" type="checkbox" value="cancelled" name="filter" data-column="1">
      <label class="expiring" for="check-cancelled">Cancelled</label>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="input-group">
      <input id="searchKey" type="text" class="form-control search-input-txt" name="search-key" placeholder="Enter Product to Find">
      <span class="input-group-btn">
        <button id="search" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div>
  </div>
</div>



<div class="bootstrap-table"><div class="fixed-table-toolbar"><div class="bs-bars pull-left"></div></div><div class="fixed-table-container table-no-bordered" style="padding-bottom: 0px;"><div class="fixed-table-header" style="display: none;"><table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 42px; display: none;">Loading, please wait...</div><table id="table" data-classes="table table-no-bordered table-striped table-pointer" data-toggle="table" data-url="/api/v1/products_table_data.php" data-side-pagination="server" data-pagination="true" data-page-list="[10, 25, 50]" data-query-params="queryParams" data-toolbar="#toolbar" data-sort-name="nextduedate" data-sort-order="desc" class="table table-no-bordered table-striped table-pointer">
  <thead><tr><th style="" data-field="productgroup"><div class="th-inner sortable both">Product/Services</div><div class="fht-cell"></div></th><th style="" data-field="domainstatus"><div class="th-inner sortable both">Status</div><div class="fht-cell"></div></th><th style="" data-field="amount"><div class="th-inner sortable both">Price</div><div class="fht-cell"></div></th><th style="" data-field="billingcycle"><div class="th-inner sortable both">Billing Cycle</div><div class="fht-cell"></div></th><th style="" data-field="nextduedate"><div class="th-inner sortable both desc">Next Due Date</div><div class="fht-cell"></div></th><th style="" data-field="action"><div class="th-inner "></div><div class="fht-cell"></div></th></tr></thead>
<tbody><tr data-index="0"> <td style=""><strong> Kilat VM XXS</strong> <a>server.smactivation.com</a></td> <td style=""><span class="label active">Active</span></td> <td style="">Rp90.000,00</td> <td style="">Monthly</td> <td style="">Tuesday, August 20th, 2024</td> <td style="">
      <div class="btn-group btn-group-xs pull-right">
        <a class="btn btn-primary" href="clientarea?action=productdetails&amp;id=37104">Manage</a>
      </div></td> </tr></tbody></table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div></div><div class="fixed-table-pagination" style="display: block;"><div class="pull-left pagination-detail"><span class="pagination-info">Showing 1 to 1 of 1 rows</span><span class="page-list" style="display: none;"><span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li role="menuitem" class="active"><a href="#">10</a></li></ul></span> rows per page</span></div><div class="pull-right pagination" style="display: none;"><ul class="pagination"><li class="page-item page-pre"><a class="page-link" href="#">‹</a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item page-next"><a class="page-link" href="#">›</a></li></ul></div></div></div>

      </div>
    </div>
    
    <div class="space-30"></div>
     
    </div>     




<?=$this->endSection();?>