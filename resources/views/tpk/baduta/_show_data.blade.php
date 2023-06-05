<form id="badutaUpdate">
    <div class="form-group boxed">
        <div class="input-wrapper mb-2">
            <label for="date">Tgl Kunjungan</label>
            <input type="hidden" name="id" value="{{ $baduta->id }}">
            <input type="date" name="tgl_kunjungan" id="date" class="form-control" value="{{ $baduta->tgl_kunjungan }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <h5 class="p-1 mb-2 bg-secondary text-white rounded">BIODATA IBU</h5>
        <div class="input-wrapper mb-2">
            <label for="nik">NIK</label>
            <input type="number" name="nik" class="form-control" value="{{ $baduta->nik }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $baduta->nama }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $baduta->alamat }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="tgl_lahir_ibu">Tgl Lahir Ibu</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $baduta->tgl_lahir }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="no_hp">No HP/WhatsApp</label>
            <input type="number" name="no_tlp" class="form-control" value="{{ $baduta->no_tlp }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="kontrasepsi">Penggunaan Kontrasepsi Saat Ini</label>
            <select class="form-control custom-select" name="penggunaan_kontrasepsi">
                <option value="">--Pilih--</option>
                <option value="1">Ya</option>
                <option value="2">Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="minum">Akses Air Minum Yang Banyak</label>
            <select class="form-control custom-select" name="air_minum_layak">
                <option value="">--Pilih--</option>
                <option value="1">Ya</option>
                <option value="2">Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="bab">Buang Air Besar Ditempat Yang Layak</label>
            <select class="form-control custom-select" name="tempat_bab_layak">
                <option value="">--Pilih--</option>
                <option value="1">Ya</option>
                <option value="2">Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <h5 class="p-1 mb-2 bg-secondary text-white rounded">DATA BADUTA</h5>
            <label for="nik">NIK Anak</label>
            <input type="number" name="nik_baduta" id="nik" class="form-control" value="{{ $baduta->nik_baduta }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="nama_baduta">Nama Baduta</label>
            <input type="text" name="nama_bayi" class="form-control" value="{{ $baduta->nama_bayi }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tgl Lahir Baduta</label>
            <input type="date" name="tgl_lahir_bayi" class="form-control" value="{{ $baduta->tgl_lahir_bayi }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control custom-select" name="jenis_kelamin">
                <option value="">--Pilih--</option>
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="urutan">Urutan Anak Ke</label>
            <input type="number" name="urutan_anak_ke" class="form-control" value="{{ $baduta->urutan_anak_ke }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="tgl_lahir_anak_sebelum">Tgl Lahir Anak Sebelumnya</label>
            <input type="date" name="tgl_lahir_anak_sebelum" class="form-control" value="{{ $baduta->tgl_lahir_anak_sebelum }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="bb_kehamilan">Berat Badan Lahir (kg)</label>
            <input type="number" name="bb_kehamilan" class="form-control" value="{{ $baduta->bb_kehamilan }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="pb_lahir">Panjang Badan Lahir (cm)</label>
            <input type="number" name="pb_lahir" class="form-control" value="{{ $baduta->pb_lahir }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <h5 class="p-1 mb-2 bg-secondary text-white rounded">DATA DUKUNG LAINNYA</h5>
        <div class="input-wrapper mb-2">
            <label for="kehadiran_posyandu">Kehadiran Pada Posyandu</label>
            <select class="form-control custom-select" name="kehadiran_posyandu">
                <option value="">--Pilih--</option>
                <option value="1">Ya</option>
                <option value="2">Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="penyuluhan_kie">Memberikan Penyuluhan/KIE</label>
            <select class="form-control custom-select" name="penyuluhan_kie">
                <option value="">--Pilih--</option>
                <option value="1">Ya</option>
                <option value="2">Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="pemberian_fasilitas_rujukan">Pemberian Fasilitas Pelayanan Rujukan</label>
            <select class="form-control custom-select" name="pemberian_fasilitas_rujukan">
                <option value="">--Pilih--</option>
                <option value="Ya, Sedang Dalam Proses">Ya, Sedang Dalam Proses</option>
                <option value="Ya, Sudah Mendapatkan Pelayanan Rujukan">Ya, Sudah Mendapatkan Pelayanan Rujukan</option>
                <option value="Tidak">Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="bansos">Memfasilitasi Bantuan Sosial</label>
            <select class="form-control custom-select" name="bansos">
                <option value="">--Pilih--</option>
                <option value="Ya, Sedang Dalam Proses">Ya, Sedang Dalam Proses</option>
                <option value="Ya, Sudah Mendapatkan Bantuan Sosial">Ya, Sudah Mendapatkan Bantuan Sosial</option>
                <option value="Tidak, Karen Tidak Memenuhi Syarat">Tidak, Karen Tidak Memenuhi Syarat</option>
                <option value="Tidak, Karena Sudah Mendapatkan Bantuan Sosial">Tidak, Karena Sudah Mendapatkan Bantuan Sosial</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="tgl_kunjungan_berikutnya">Tgl Kunjungan Berikutnya</label>
            <input type="date" name="tgl_kunjungan_berikutnya" class="form-control" value="{{ $baduta->tgl_kunjungan_berikutnya }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="catatan_baduta">Catatan TPK</label>
            <textarea id="textarea4" rows="2" class="form-control"
            name="catatan_baduta">{{ $baduta->catatan_baduta }}</textarea>
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
    </div>
    <div class="form-group basic">
        @include('components.btn._loading_submit_baduta')
        <button id="btn_submit_baduta" type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
    </div>
</form>