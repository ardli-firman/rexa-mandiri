<div class="section-header text-center">
    <h2 class="title" style="padding-top: 5vh;">Global Sparepart</h2>
</div>

<div class="container-fluid" style=" min-height: 500px;">
    <div class="row">

        <?php if ($barang !== false) : ?>
        <?php $i = 0 ?>
        <?php foreach ($barang as $b) : ?>
        <div class="col-sm-4 col-md-3">
            <div class="thumbnail" id="res" style="box-shadow:2px 2px 3px gray;border:none !important;">
                <h3 class="text-center" style="padding:1em;"><?= $b->nama_barang ?></h3>
                <img class="img-responsive img-rounded center-block" src="<?= base_url('assets/'); ?>img/<?= $b->foto_barang ?>" alt="">
                <div class="caption">

                    <button type="button" class="btn btn-success btn-md btn-sm btn-xs" data-toggle="modal" data-target="#myModal<?= $i ?>" style="margin:0.8em;">Lihat Deskripsi</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?= $i ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?= ucfirst($b->nama_kategori) ?></h4>
                                </div>
                                <div class="modal-body">
                                    <h4 class="modal-title"><?= $b->nama_barang ?></h4><br>
                                    <img class="img-responsive img-rounded center-block" src="<?= base_url('assets/'); ?>img/<?= $b->foto_barang ?>" alt="">
                                    <div class="caption prores">
                                        <h3><b>Deskripsi</b></h3>
                                        <p><?= $b->deskripsi_barang ?></p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-md btn-sm btn-xs" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div> 