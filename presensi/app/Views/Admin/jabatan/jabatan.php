<?= $this->extend('Admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <!-- Button to add data -->
            <a href="<?= base_url('admin/jabatan/create') ?>" class="btn btn-primary mb-3">
                <i class="lni lni-circle-plus"></i> Tambah Data
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <!-- Table displaying Jabatan data -->
        <table id="datatables" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($jabatan as $jab) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $jab['jabatan'] ?></td>
                        <td>
                            <!-- Edit and Delete buttons -->
                            <a href="<?= base_url('Admin/jabatan/edit/' . $jab['id']) ?>" class="btn btn-warning mb-2">Edit</a>
                            <a href="<?= base_url('Admin/jabatan/delete/' . $jab['id']) ?>" class="btn btn-danger mb-2 tombol-hapus">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
