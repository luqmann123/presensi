<?= $this->extend('Admin/layout.php') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/jabatan/create') ?>" class="btn btn-primary mb-2">
    <i class="lni lni-circle-plus"></i> Tambah Data
</a>

<div class="table-responsive">
    <table id="datatables" class="table table-striped">
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
                    <td><?= esc($jab['jabatan']) ?></td>
                    <td>
                        <a href="<?= base_url('admin/jabatan/edit/' . $jab['id']) ?>" class="badge bg-warning mb-1">Edit</a>
                        <a href="<?= base_url('admin/jabatan/delete/' . $jab['id']) ?>" class="badge bg-danger mb-1 tombol-hapus">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
