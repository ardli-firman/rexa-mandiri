<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body class="hold-transition skin-green-light sidebar-mini">

    <div class="wrapper">

        <header class="main-header">
            <?php $this->load->view('admin/_partials/navbar.php') ?>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">

                <?php $this->load->view('admin/_partials/sidebar.php') ?>

            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <h1><?= @$judul; ?></h1>
                <?php $this->load->view('admin/_partials/breadcrumb') ?>
            </section>

            <section class="content container-fluid">
                <?php $this->load->view(@$view) ?>
            </section>
        </div>

        <footer class="main-footer">
            <?php $this->load->view('admin/_partials/footer.php') ?>
        </footer>
    </div>

    <?php $this->load->view('admin/_partials/js.php') ?>

</body>

</html> 