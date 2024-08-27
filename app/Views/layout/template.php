<!DOCTYPE html>
<html lang="en">
<?= $this->include('layout/header'); ?>
<?= $this->renderSection('header') ?>
<body  >
            
<body  >
            
    <div class="container nav-small">
        <div class="row">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="clientarea">
                    <span class="">
                        <img  src="logo.png">
                    </span>  
                    </a>
                </div>
                <i class="fa fa-bars fa-lg btn-nav-toggle-responsive"></i>
                </div>
            </nav>
        </div>
    </div>
      
    <div class="site-holder container ">
        <div class="box-holder">
            <div class="left-sidebar">
                <div class="sidebar-holder" data-original-title="" title="">
                    <ul class="nav  nav-list">
                        <li class="primary ">
                        <a href="<?= base_url('dashboard') ?>" data-original-title="Dashboard"><img src="<?= base_url('') ?>/logo.png"></a>
                        </li>
                        <li >
                        <a href="<?= base_url('transaksi') ?>" data-original-title="Transaksi"><span aria-hidden="true" class="icon icon-basket"></span><span class="hidden-minibar  sidebar-label"> Transaksi</span></a>
                        </li>                    
                        <li >
                        <a href="<?= base_url('saldo') ?>" data-original-title="Saldo"><span aria-hidden="true" class="icon icon-layers"></span><span class="hidden-minibar  sidebar-label"> Saldo</span></a>
                        </li>
                        <li >
                        <a href="<?= base_url('mutasi') ?>" data-original-title="Mutasi"><span aria-hidden="true" class="icon icon-credit-card"></span><span class="hidden-minibar  sidebar-label"> Mutasi</span></a>
                        </li>
                        <li >
                        <a href="<?= base_url('setup') ?>" data-original-title="Setup"><span aria-hidden="true" class="icon icon-support"></span><span class="hidden-minibar  sidebar-label"> Setup</span></a>
                        </li> 
						<li >
                        <a href="<?= base_url('import') ?>" data-original-title="Import"><span aria-hidden="true" class="icon icon-rocket"></span><span class="hidden-minibar  sidebar-label"> Import</span></a>
                        </li> 						
                        <li>
                        <a href="auth/logout"><span aria-hidden="true" class="icon icon-logout"></span> Logout</a>
                        </li>
    
                    </ul>                    
                </div>
            </div>    
            
            <div class="content onload">
                <div class="row">   
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row navbar-container">
                                <div class="navbar-left">
                                    <nav class="navbar" role="navigation">
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav user-menu" id="user-menu">
                                            <li><a href="#" class="user">        
                                                <span class="username"> <?= esc(get_user('nama')); ?> </span></a>
                                                
                                            </li>            
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
        
                                <div class="navbar-right">
                                    <nav class="navbar" role="navigation">
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav user-menu navbar-right" id="user-menu" style="display:flex;justify-content:flex-end">               
                                    
                                                <li><a href="auth/logout" class="settings"><span aria-hidden="true" class="icon icon-logout"></span></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                        <?= $this->renderSection('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    <?= $this->include('layout/js'); ?>
    <?= $this->renderSection('js'); ?>
</body>

</html>
