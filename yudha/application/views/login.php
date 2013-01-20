<html>
    <title>Login Sistem Informasi Simpan Pinjam</title>
    <head>

        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link id="bs-css" href="<?php echo base_url() ?>assets/css/bootstrap-cerulean.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='<?php echo base_url() ?>assets/css/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php echo base_url() ?>assets/css/chosen.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/opa-icons.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>assets/css/uploadify.css' rel='stylesheet'>
    </head>

    <body>

        <div class="row-fluid">
            <div class="span12 center login-header">
                <h1>Sistem Informasi Simpan Pinjam Koperasi Kopma UGM</h1>
            </div>
        </div>
        <div class="row-fluid">
            <div class="well span5 center login-box">
                <div class="alert alert-info">
                    Silahkan Login dengan Username dan Password Anda.
                </div>
                <?php
                $ss = array(
                    'class' => 'form-horizontal',
                    'name' => 'login'
                );
                echo form_open('home/login', $ss);
                ?>    
                <fieldset>
                    <div class="input-prepend" title="Username" data-rel="tooltip">
                        <span class="add-on"><i class="icon-user"></i></span><input  class="input-large span10" name="username" id="username" type="text" placeholder="Masukkan Username..." required/>
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend" title="Password" data-rel="tooltip">
                        <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="Masukkan Password..." required/>
                    </div>
                    <p class="center span5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </body>
</html>