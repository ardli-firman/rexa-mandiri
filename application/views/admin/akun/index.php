<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="box box-success">
            <div class="box-header text-center">
                <h3>Edit akun admin</h3>
            </div>
            <form action="" method="post" action="<?= base_url('admin/Akun') ?>">
                <input type="hidden" name="id" id="id" value="<?= base64_encode(base64_encode($akun->id)) ?>">
                <div class="box-body">
                    <?php if (validation_errors()) : ?>
                    <div class="alert alert-error"><?= validation_errors(); ?></div>
                    <?php else : ?>
                    <?= $this->session->flashdata('pesan') ?>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $akun->nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $akun->username ?>">
                    </div>
                    <div class="form-group">
                        <label for="sebelum">Password sebelumnya</label>
                        <input type="password" name="sebelum" id="sebelum" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label for="password">Password baru</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label for="cpassword">Konfirmasi password</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 