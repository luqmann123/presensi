<?= $this->extend('Admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card col-md-6">
    <div class="card-body">
        <form method="POST" action="<?= base_url('Admin/lokasi_presensi/update/' . $lokasi_presensi['id']) ?>">
            <!-- Nama Lokasi -->
            <div class="input-style-1">
                <label for="nama_lokasi">Nama Lokasi</label>
                <input type="text" 
                       value="<?= old('nama_lokasi', $lokasi_presensi['nama_lokasi'] ?? '') ?>" 
                       id="nama_lokasi" 
                       class="form-control <?= ($validation->getError('nama_lokasi')) ? 'is-invalid' : '' ?>" 
                       name="nama_lokasi" 
                       placeholder="Nama Lokasi" 
                       required />
                <div class="invalid-feedback"><?= $validation->getError('nama_lokasi') ?></div>
            </div>

            <!-- Alamat Lokasi -->
            <div class="input-style-1">
                <label for="alamat_lokasi">Alamat Lokasi</label>
                <textarea id="alamat_lokasi" 
                          name="alamat_lokasi" 
                          class="form-control <?= ($validation->getError('alamat_lokasi')) ? 'is-invalid' : '' ?>" 
                          cols="30" rows="5" 
                          placeholder="Alamat Lokasi"><?= old('alamat_lokasi', $lokasi_presensi['alamat_lokasi'] ?? '') ?></textarea>
                <div class="invalid-feedback"><?= $validation->getError('alamat_lokasi') ?></div>
            </div>

            <!-- Tipe Lokasi -->
            <div class="input-style-1">
                <label for="tipe_lokasi">Tipe Lokasi</label>
                <textarea id="tipe_lokasi" 
                          name="tipe_lokasi" 
                          class="form-control <?= ($validation->getError('tipe_lokasi')) ? 'is-invalid' : '' ?>" 
                          placeholder="Tipe Lokasi"><?= old('tipe_lokasi', $lokasi_presensi['tipe_lokasi'] ?? '') ?></textarea>
                <div class="invalid-feedback"><?= $validation->getError('tipe_lokasi') ?></div>
            </div>

            <!-- Latitude -->
            <div class="input-style-1">
                <label for="latitude">Latitude</label>
                <input type="text" 
                       id="latitude" 
                       class="form-control <?= ($validation->hasError('latitude')) ? 'is-invalid' : '' ?>" 
                       name="latitude" 
                       placeholder="Latitude" 
                       value="<?= old('latitude', $lokasi_presensi['latitude'] ?? '') ?>" 
                       required />
                <div class="invalid-feedback"><?= $validation->getError('latitude') ?></div>
            </div>

            <!-- Longitude -->
            <div class="input-style-1">
                <label for="longitude">Longitude</label>
                <input type="text" 
                       id="longitude" 
                       class="form-control <?= ($validation->hasError('longitude')) ? 'is-invalid' : '' ?>" 
                       name="longitude" 
                       placeholder="Longitude" 
                       value="<?= old('longitude', $lokasi_presensi['longitude'] ?? '') ?>" 
                       required />
                <div class="invalid-feedback"><?= $validation->getError('longitude') ?></div>
            </div>

            <!-- Radius -->
            <div class="input-style-1">
                <label for="radius">Radius</label>
                <input type="number" 
                       id="radius" 
                       class="form-control <?= ($validation->hasError('radius')) ? 'is-invalid' : '' ?>" 
                       name="radius" 
                       placeholder="Radius" 
                       value="<?= old('radius', $lokasi_presensi['radius'] ?? '') ?>" 
                       required />
                <div class="invalid-feedback"><?= $validation->getError('radius') ?></div>
            </div>

            <!-- Zona Waktu -->
            <div class="input-style-1">
                <label for="zona_waktu">Zona Waktu</label>
                <select id="zona_waktu" 
                        name="zona_waktu" 
                        class="form-control <?= ($validation->hasError('zona_waktu')) ? 'is-invalid' : '' ?>">
                    <option value="">Pilih Zona Waktu</option>
                    <option value="WIB" <?= old('zona_waktu', $lokasi_presensi['zona_waktu'] ?? '') == 'WIB' ? 'selected' : '' ?>>WIB</option>
                    <option value="WITA" <?= old('zona_waktu', $lokasi_presensi['zona_waktu'] ?? '') == 'WITA' ? 'selected' : '' ?>>WITA</option>
                    <option value="WIT" <?= old('zona_waktu', $lokasi_presensi['zona_waktu'] ?? '') == 'WIT' ? 'selected' : '' ?>>WIT</option>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('zona_waktu') ?></div>
            </div>

            <!-- Jam Masuk -->
            <div class="input-style-1">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="time" 
                       id="jam_masuk" 
                       class="form-control <?= ($validation->hasError('jam_masuk')) ? 'is-invalid' : '' ?>" 
                       name="jam_masuk" 
                       value="<?= old('jam_masuk', $lokasi_presensi['jam_masuk'] ?? '') ?>" 
                       required />
                <div class="invalid-feedback"><?= $validation->getError('jam_masuk') ?></div>
            </div>

            <!-- Jam Pulang -->
            <div class="input-style-1">
                <label for="jam_pulang">Jam Pulang</label>
                <input type="time" 
                       id="jam_pulang" 
                       class="form-control <?= ($validation->hasError('jam_pulang')) ? 'is-invalid' : '' ?>" 
                       name="jam_pulang" 
                       value="<?= old('jam_pulang', $lokasi_presensi['jam_pulang'] ?? '') ?>" 
                       required />
                <div class="invalid-feedback"><?= $validation->getError('jam_pulang') ?></div>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>