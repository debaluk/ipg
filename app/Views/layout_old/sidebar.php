
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
        <span class="brand-text font-weight-light">
       <div align="center">
       Kesatria Keris Bali
        </div>
        </span>
    </a>

    <!-- Sidebar -->
  
    <div class="sidebar">
       
        <!-- Sidebar Menu -->
       
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

               
                <li class="nav-item active">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p> Master <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>Wilayah
                            <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: block;">
                           
                                <li class="nav-item">
                                <a href="<?= base_url('master/propinsi') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Propinsi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('master/kabupaten') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kabupaten</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('master/kecamatan') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kecamatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('master/desa') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Desa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('master/banjar') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Banjar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('master/korwilprovinsi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Korwil Provinsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('master/korwilkabupaten') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Korwil Kabupaten</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('master/korwilkecamatan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Korwil Kecamatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('master/korwildesa') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Korwil Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('master/korwilbanjar') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Korwil Banjar</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                
                <li class="nav-item active">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p> Transaksi <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('transaksi/relawan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Relawan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('transaksi/tps') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data TPS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('transaksi/saksi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Saksi</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
   
</aside>