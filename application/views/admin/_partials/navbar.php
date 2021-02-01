<?php $data = $this->session->userdata('admin') ?>
<!-- Logo -->
<a href="<?= base_url('admin') ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>RM</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>PT Rexa Mandiri</b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span class="hidden-xs"><?= $data->nama ?></span>
                    <span class="hidden-lg"><?= $data->nama ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                        <p>
                            <?= $data->nama ?>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-right">
                            <a href="<?= base_url('./auth/logout') ?>" class="btn btn-default btn-flat">Keluar</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav> 