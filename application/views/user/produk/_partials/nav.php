<?php
$url = $this->uri->segment(2);
?>
<div class="container">

    <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
            <a href="../?rexa=home">
                <img class="logo" src="<?= base_url('assets/'); ?>image/logorexa.png" alt="logo">
            </a>
        </div>
        <!-- /Logo -->

        <!-- Collapse nav button -->
        <div class="nav-collapse">
            <span></span>
        </div>
        <!-- /Collapse nav button -->
    </div>

    <!--  Main navigation  -->
    <ul class="main-nav nav navbar-nav navbar-right">
        <li><a href="<?= base_url() ?>">Home</a></li>
        <li class="<?= ($url == 'mechanical') ? 'active' : ''; ?>"><a href="<?= base_url('produk/mechanical') ?>">Mechanical</a></li>
        <li class="<?= ($url == 'elektrik') ? 'active' : ''; ?>"><a href="<?= base_url('produk/elektrik') ?>">Electrical</a></li>
        <li class="<?= ($url == 'welding') ? 'active' : ''; ?>"><a href="<?= base_url('produk/welding') ?>">Welding</a></li>
        <li class="<?= ($url == 'safety') ? 'active' : ''; ?>"><a href="<?= base_url('produk/safety') ?>">Safety & Equipment</a></li>
        <li class="<?= ($url == 'sparepart') ? 'active' : ''; ?>"><a href="<?= base_url('produk/sparepart') ?>">Global Sparepart</a></li>
        <li class="<?= ($url == 'accessories') ? 'active' : ''; ?>"><a href="<?= base_url('produk/accessories') ?>">Power Tools & Accessories</a></li>
    </ul>
    <!-- /Main navigation -->

</div> 