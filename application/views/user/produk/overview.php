<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('user/produk/_partials/head') ?>
</head>

<body style="background-color:#fbfbfb">

    <!-- Header -->
    <!-- Nav -->
    <nav id="nav" class="navbar">
        <?php $this->load->view('user/produk/_partials/nav'); ?>
    </nav>
    <!-- /Nav -->
    <?php $this->load->view(@$view); ?>
    <!-- Footer -->
    <footer id="footer" class="sm-padding bg-dark">
        <?php $this->load->view('user/produk/_partials/footer'); ?>
    </footer>
    <!-- jquery plugin -->
    <?php $this->load->view('user/produk/_partials/js') ?>
</body>

</html> 