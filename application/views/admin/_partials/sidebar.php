<?php $data = $this->session->userdata('admin') ?>
<!-- Sidebar user panel (optional) -->
<!-- <div class="user-panel">
    <div class="pull-left image">
        <img src="<?= base_url('assets/img/profile/') . $data->photoprofile ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p><?= $data->nama ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div> -->

<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Main menu</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="<?= ($this->uri->segment(2) == '') ? 'active' : ''; ?>"><a href="<?= base_url('admin') ?>"><i class="fa fa-archive"></i><span>Manajemen Barang</span></a></li>
    <li class="<?= ($this->uri->segment(2) == 'Akun') ? 'active' : ''; ?>"><a href="<?= base_url('admin/Akun') ?>"><i class="fa fa-user"></i><span>Akun admin</span></a></li>
</ul>
<!-- /.sidebar-menu --> 