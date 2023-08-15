<?php
if ($page == 'dashboard') {
?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo  $judul; ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBarang">
                        Tambah
                    </button>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Gudang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($barang as $brg) {
                            ?>
                                <tr>

                                    <td><?= $no ?></td>
                                    <td><?= $brg['id_barang'] ?></td>
                                    <td><?= $brg['nama_barang'] ?></td>
                                    <td><?= $brg['jumlah'] ?></td>
                                    <td><?= $brg['nama_gudang'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editBarang<?= $brg['id_barang'] ?>">Edit</button> <a href="<?= base_url("admin/hapus") ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>

                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="addBarang" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="<?php echo base_url('admin/add_barang'); ?> " class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h4 class="modal-title">Tambahkan Alat</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" placeholder="Masukkan jumlah barang" required>
                        </div>
                        <div class="form-group">
                            <label>Gudang</label>
                            <select class="form-control" name="id_gudang">
                                <option value="">Pilih Gudang</option>
                                <?php foreach ($barang as $brg) { ?>
                                    <option value="<?= $brg['id_gudang']; ?>"><?= $brg['nama_gudang']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php foreach ($barang as $brg) { ?>
        <div class="modal fade" id="editBarang<?= $brg['id_barang'] ?>" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="POST" action="<?= base_url("admin/edit_barang/") . $brg['id_barang']; ?>" class="needs-validation" novalidate>
                        <div class="modal-header">
                            <h4 class="modal-title">Tambahkan Alat</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang" value="<?= $brg['nama_barang'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Masukkan jumlah barang" value="<?= $brg['jumlah'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Gudang</label>
                                <select class="form-control" name="id_gudang">
                                    <option value="<?= $brg['id_gudang'] ?>"><?= $brg['nama_gudang'] ?></option>
                                    <?php foreach ($barang as $brg) { ?>
                                        <option value="<?= $brg['id_gudang']; ?>"><?= $brg['nama_gudang']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

<?php } ?>