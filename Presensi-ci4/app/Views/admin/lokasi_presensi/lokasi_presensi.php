<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('admin/lokasi_presensi/create') ?>" class="btn btn-primary mb-2">
    <i class="lni lni-circle-plus"></i> Tambah Data
</a>


    <table class="table" id="datatables">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lokasi</th>
                <th>Alamat Lokasi</th>
                <th>Tipe Lokasi</th>
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
                            <a href="<?= base_url('admin/lokasi_presensi/detail/' . $lok['id']) ?>" class="badge bg-success text-decoration-sm mb-2">
                                <i class="fas fa-edit"></i> Detail
                            </a>
                            <a href="<?= base_url('admin/lokasi_presensi/edit/' . $lok['id']) ?>" class="badge bg-warning text-decoration-sm mb-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?= base_url('admin/lokasi_presensi/delete/' . $lok['id']) ?>" class="badge bg-danger text-decoration-sm mb-2 tombol-hapus">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

    </table>


<?= $this->endSection() ?>