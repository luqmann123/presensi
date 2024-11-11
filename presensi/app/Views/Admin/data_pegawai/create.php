<?= $this->extend('Admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card col-md-6">
    <div class="card-body">
        <form action="<?= base_url('admin/data_pegawai/store') ?>" enctype="multipart/form-data">
            <!-- Nama Lokasi -->
            <div class="input-style-1">
                <label for="nama">Nama Lokasi</label>
                <input type="text" id="nama" class="form-control <?= ($validation->getError('nama')) ? 'is-invalid' : '' ?>" name="nama" placeholder="Nama" required />
                <div class="invalid-feedback"><?= $validation->getError('nama') ?></div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="input-style-1">
                <label for="jenis_kelamin">--Jenis Kelasmin--</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?>">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="WIB">Laki-Laki</option>
                    <option value="WITA">Perempaun</option>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('jenis_kelamin') ?></div>
            </div>

            <!-- Alamat -->
            <div class="input-style-1">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control <?= ($validation->getError('alamat')) ? 'is-invalid' : '' ?>" cols="30" rows="5" placeholder="Alamat Lokasi"></textarea>
                <div class="invalid-feedback"><?= $validation->getError('alamat') ?></div>
            </div>

            <!-- NO Handphone -->
            <div class="input-style-1">
                <label for="no_handphone">No. Handphone</label>
                <textarea id="no_handphone" name="no_handphone" class="form-control <?= ($validation->getError('no_handphone')) ? 'is-invalid' : '' ?>" placeholder="No. Handphone"></textarea>
                <div class="invalid-feedback"><?= $validation->getError('no_handphone') ?></div>
            </div>

            <!-- Jabatan -->
            <div class="input-style-1">
                <label for="jabatan">--Jabatan--</label>
                <select id="jabatan" name="jabatan" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : '' ?>">
                    <option value="">Pilih Jabatan</option>
                    <?php foreach ($jabatan as $jab) : ?>
                        <option value="<?= $jab['jabatan']?>"><?= $jab['jabatan']?></option>
                        <?php endforeach ?>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('jabatan') ?></div>
            </div>

            <!-- Lokasi Presensi -->
<div class="input-style-1">
    <label for="lokasi_presensi">--Pilih Lokasi Presensi--</label>
    <select id="lokasi_presensi" name="lokasi_presensi" class="form-control <?= ($validation->hasError('lokasi_presensi')) ? 'is-invalid' : '' ?>">
        <option value="">Pilih lokasi_presensi</option>
        <?php foreach ($lokasi_presensi as $lok) : ?>
    <option value="<?= $lok['nama_lokasi'] ?>"><?= $lok['nama_lokasi'] ?></option>
<?php endforeach ?>

    </select>
    <div class="invalid-feedback"><?= $validation->getError('lokasi_presensi') ?></div>
</div>


            <!-- Latitude -->
            <div class="input-style-1">
                <label for="latitude">Latitude</label>
                <input type="text" id="latitude" class="form-control <?= ($validation->hasError('latitude')) ? 'is-invalid' : '' ?>" name="latitude" placeholder="Latitude" required />
                <div class="invalid-feedback"><?= $validation->getError('latitude') ?></div>
            </div>

            <!-- Longitude -->
            <div class="input-style-1">
                <label for="longitude">Longitude</label>
                <input type="text" id="longitude" class="form-control <?= ($validation->hasError('longitude')) ? 'is-invalid' : '' ?>" name="longitude" placeholder="Longitude" required />
                <div class="invalid-feedback"><?= $validation->getError('longitude') ?></div>
            </div>

            <!-- Radius -->
            <div class="input-style-1">
                <label for="radius">Radius</label>
                <input type="number" id="radius" class="form-control <?= ($validation->hasError('radius')) ? 'is-invalid' : '' ?>" name="radius" placeholder="Radius" required />
                <div class="invalid-feedback"><?= $validation->getError('radius') ?></div>
            </div>

            

            <!-- Jam Masuk -->
            <div class="input-style-1">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="time" id="jam_masuk" class="form-control <?= ($validation->hasError('jam_masuk')) ? 'is-invalid' : '' ?>" name="jam_masuk" required />
                <div class="invalid-feedback"><?= $validation->getError('jam_masuk') ?></div>
            </div>

            <!-- Jam Pulang -->
            <div class="input-style-1">
                <label for="jam_pulang">Jam Pulang</label>
                <input type="time" id="jam_pulang" class="form-control <?= ($validation->hasError('jam_pulang')) ? 'is-invalid' : '' ?>" name="jam_pulang" required />
                <div class="invalid-feedback"><?= $validation->getError('jam_pulang') ?></div>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
