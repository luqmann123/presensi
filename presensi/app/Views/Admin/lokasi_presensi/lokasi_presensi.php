<?= $this->extend('Admin/layout.php') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/lokasi_presensi/create') ?>" class="btn btn-primary mb-3">
<i class="lni lni-circle-plus"></i> Tambah Data
</a>

<div class="table-responsive">
    <table id="datatables" class="table table-striped">
        <thead>
            <tr>
               <th>No</th>
               <th>Nama Lokasi</th>
               <th>Alamat Lokasi</th>
               <th>Lokasi</th>
               <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                <?php $no = 1; foreach ($lokasi_presensi as $lok) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($lok['nama_lokasi']) ?></td>
                        <td><?= esc($lok['alamat_lokasi']) ?></td>
                        <td><?= esc($lok['tipe_lokasi']) ?></td>
                        <td>
                            <!-- Edit, Delete, and Detail buttons -->
                            <a href="<?= base_url('Admin/lokasi_presensi/detail/' . $lok['id']) ?>" class="badge bg-success text-decoration-none mb-2">Detail</a>
                            <a href="<?= base_url('Admin/lokasi_presensi/edit/' . $lok['id']) ?>" class="badge bg-warning text-decoration-none mb-2">Edit</a>
                            <a href="<?= base_url('Admin/lokasi_presensi/delete/' . $lok['id']) ?>" class="badge bg-danger text-decoration-none mb-2 tombol-hapus">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
    </table>
</div>

<?= $this->endSection() ?>
