<?= $this->extend('Admin/layout.php') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/data_pegawai/create') ?>" class="btn btn-primary mb-3">
    <i class="lni lni-circle-plus"></i> Tambah Data
</a>

<div class="table-responsive">
    <table id="datatables" class="table table-striped">
        <thead>
            <tr>
               <th>No</th>
               <th>NIP</th>
               <th>Nama</th>
               <th>Jabatan</th>
               <th>Lokasi Presensi</th>
               <th>Foto</th>
               <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($pegawai as $peg) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= esc($peg['nip']) ?></td>
                    <td><?= esc($peg['nama']) ?></td>
                    <td><?= esc($peg['jabatan']) ?></td>
                    <td><?= esc($peg['lokasi_presensi']) ?></td>
                    <td><img src="<?= base_url('uploads/' . $peg['foto']) ?>" alt="Foto Pegawai" width="50"></td>
                    <td>
                        <!-- Edit, Delete, and Detail buttons -->
                        <a href="<?= base_url('admin/data_pegawai/detail/' . $peg['id']) ?>" class="badge bg-success text-decoration-none mb-2">Detail</a>
                        <a href="<?= base_url('admin/data_pegawai/edit/' . $peg['id']) ?>" class="badge bg-warning text-decoration-none mb-2">Edit</a>
                        <a href="<?= base_url('admin/data_pegawai/delete/' . $peg['id']) ?>" class="badge bg-danger text-decoration-none mb-2 tombol-hapus">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
