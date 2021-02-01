<div class="box box-success">
    <div class="box-header">
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-success modal-tambah" type="button" data-toggle="modal" data-target="#modal-tambah">
                    <i class="fa fa-plus"></i>
                    Tambah barang</button>
            </div>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <table id="list-barang" class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Barang</th>
                            <th>Kategori Barang</th>
                            <th>Deskripsi Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($barang == true) : ?>
                        <?php $i = 1;
                        foreach ($barang as $brg) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td>
                                <img width="200px" height="200px" class="img-responsive" src="<?= base_url('assets/img/') ?><?= $brg->foto_barang ?>" alt="">
                            </td>
                            <td><?= $brg->nama_barang ?></td>
                            <td><?= $brg->nama_kategori ?></td>
                            <td><?= $brg->deskripsi_barang ?></td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a class="btn bg-olive btn-flat modal-edit" data-toggle="modal" href="#modal-edit" data-id="<?= base64_encode(base64_encode($brg->id_barang)); ?>"><i class="fa fa-edit"></i> Edit</a>
                                        <a onclick="if (confirm('Hapus Barang ?')==false) {
                                            return false;
                                        }" class="btn bg-maroon btn-flat" href="<?= base_url('admin/manajemen/hapus?id=') . base64_encode(base64_encode($brg->id_barang)); ?>"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $i++;
                    endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="judul-modal" class="modal-title">Tambah Barang</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger"></div>
                <form action="" id="form-tambah">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input id="nama" type="text" class="form-control" name="nama" placeholder="Masukkan nama barang">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Barang</label>
                        <textarea id="deskripsi" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi barang"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Barang</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="1">Elektrik</option>
                            <option value="3">Mechanical</option>
                            <option value="4">Welding</option>
                            <option value="5">Global Sparepart</option>
                            <option value="6">Safety & Equipment</option>
                            <option value="7">Power Tools & Accessories</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Barang</label>
                        <input type="file" class="form-control" name="foto">
                        <small>Note : Ukuran maksimal 10MB, ekstensi .jpg/.jpeg/.png</small>
                    </div>
                    <button class="btn btn-primary tbh" type="submit">Tambahkan</button>
                    <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="judul-modal" class="modal-title">Edit Barang</h3>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger"></div>
                <form id="form-edit">
                    <input type="hidden" name="id_brg" id="e_id_brg">
                    <input type="hidden" name="nm_foto" id="e_nm_foto">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input id="e_nama" type="text" class="form-control" name="nama" placeholder="Masukkan nama barang">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Barang</label>
                        <textarea id="e_deskripsi" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi barang"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Barang</label>
                        <select name="kategori" id="e_kategori" class="form-control">
                            <option value="1">Elektrik</option>
                            <option value="3">Mechanical</option>
                            <option value="4">Welding</option>
                            <option value="5">Global Sparepart</option>
                            <option value="6">Safety & Equipment</option>
                            <option value="7">Power Tools & Accessories</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Barang</label>
                        <input type="file" class="form-control" name="foto">
                        <small class="info">Abaikan jika tidak ingin mengedit foto</small><br>
                        <small>Note : Ukuran maksimal 10MB, ekstensi .jpg/.jpeg/.png</small>
                    </div>
                    <button class="btn btn-primary" type="submit" id="edit">Simpan</button>
                    <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div> 