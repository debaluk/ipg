
<!DOCTYPE html>
  <!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
  <head>
    <meta charset="UTF-8">
    <title>Dashboard - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="" />
    <!-- icon -->
    <link rel="shortcout icon" href="<?= base_url('hexa') ?>/assets/img/favicon_ori.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('hexa') ?>/assets/img/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('hexa') ?>/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('hexa') ?>/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('hexa') ?>/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" href="<?= base_url('hexa') ?>/assets/img/apple-touch-icon.png">
    <!-- Styling -->
    <link rel="stylesheet" href="<?= base_url('hexa') ?>/assets/css/combined.css">
    <link rel='stylesheet' href="<?= base_url('hexa') ?>/assets/css/style5.css?v=06092022">
    <!-- <link href="/assets/css/fontawesome-all.min.css" rel="stylesheet"> -->
    <link rel='stylesheet' href="<?= base_url('hexa') ?>/assets/css/style-login.css">
    <link href="<?= base_url('hexa') ?>/css/override.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('plugins/toastr/toastr.min.css') ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('plugins/sweetalert2/bootstrap-4.min.css') ?>">
    <!-- jQuery -->
    <script src="<?= base_url('hexa') ?>/assets/js/jquery.min.js"></script>

</head>


<body  >
    <div class="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 box">      
                    <div class="content-wrap">
                        <h3 class="page-header">Dashboard Login</h3>
                        <div class="space-20"></div>          
                        <div class="providerLinkingFeedback"></div>

                        <?= form_open(base_url('auth/proses')); ?>
                        <div id="base-url" data-url="<?= base_url(); ?>"></div>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                <span class="input-group-addon"><span aria-hidden="true" class="icon icon-user"></span></span>
                                <input class="form-control" id="username" name="username" placeholder="Nama User" autofocus>
                                </div>
                                <small class="invalid-feedback"></small>
                            </div>  
                            <div class="space-10"></div>           
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                <span class="input-group-addon"><span aria-hidden="true" class="icon icon-lock"></span></span>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Password" autocomplete="off">
                                </div>
                                <small class="invalid-feedback"></small>
                            </div>  
                            <div class="space-10"></div>  
                            
                            <div class="space-20"></div>

                            <input type="submit" class="btn btn-primary btn-lg full-width" name="submit" value="Masuk" id="login" >
                        <?= form_close(); ?>
                        <div class="space-20"></div>
                    </div>
            </div><!--/.content-->
        </div>
    </div>
</div>
</div>

<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Toastr -->
<script src="<?= base_url('plugins/toastr/toastr.min.js') ?>"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?= base_url('js/script.js') ?>"></script>
<script src="<?= base_url('js/auth.js') ?>"></script>

</body>
</html>