<form id="updatePendampingan">
    <input type="hidden" value="{{ $baduta->nama }}" name="nama">
    <input type="hidden" value="{{ $baduta->nik }}" name="nik">
    <input type="hidden" value="{{ $baduta->tgl_lahir }}" name="tgl_lahir">
    <input type="hidden" value="{{ $baduta->no_tlp }}" name="no_tlp">
    <input type="hidden" value="{{ $baduta->alamat }}" name="alamat">
    <input type="hidden" name="nik_baduta" value="{{ $baduta->nik_baduta }}">
    <input type="hidden" name="nama_bayi"  value="{{ $baduta->nama_bayi }}">
    <input type="hidden" name="tgl_lahir_bayi" value="{{ $baduta->tgl_lahir_bayi }}">
    <input type="hidden" name="jenis_kelamin" value="{{ $baduta->jenis_kelamin }}">
    <input type="hidden" name="urutan_anak_ke"  value="{{ $baduta->urutan_anak_ke }}">
    <input type="hidden" name="tgl_lahir_anak_sebelum" value="{{ $baduta->tgl_lahir_anak_sebelum }}">
    <input type="hidden" name="bb_kehamilan"  value="{{ $baduta->bb_kehamilan }}">
    <input type="hidden" name="pb_saat_ini"  value="{{ $baduta->pb_saat_ini }}">
    <div class="form-group boxed">
        <div class="input-wrapper">
            <label for="kontrasepsi">Penggunaan Kontrasepsi Saat Ini</label>
            <select class="form-control custom-select" name="penggunaan_kontrasepsi">
                <option value="">--Pilih--</option>
                <option value="1" {{ $baduta->penggunaan_kontrasepsi == '1' ? 'selected' : '' }}>Ya</option>
                <option value="2" {{ $baduta->penggunaan_kontrasepsi == '2' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="minum">Akses Air Minum Yang Banyak</label>
            <select class="form-control custom-select" name="air_minum_layak">
                <option value="">--Pilih--</option>
                <option value="1" {{ $baduta->air_minum_layak == '1' ? 'selected' : '' }}>Ya</option>
                <option value="2" {{ $baduta->air_minum_layak == '2' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="bab">Buang Air Besar Ditempat Yang Layak</label>
            <select class="form-control custom-select" name="tempat_bab_layak">
                <option value="">--Pilih--</option>
                <option value="1" {{ $baduta->tempat_bab_layak == '1' ? 'selected' : '' }}>Ya</option>
                <option value="2" {{ $baduta->tempat_bab_layak == '2' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="kehadiran_posyandu">Kehadiran Pada Posyandu</label>
            <select class="form-control custom-select" name="kehadiran_posyandu">
                <option value="">--Pilih--</option>
                <option value="1" {{ $baduta->kehadiran_posyandu == '1' ? 'selected' : '' }}>Ya</option>
                <option value="2" {{ $baduta->kehadiran_posyandu == '2' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="penyuluhan_kie">Memberikan Penyuluhan/KIE</label>
            <select class="form-control custom-select" name="penyuluhan_kie">
                <option value="">--Pilih--</option>
                <option value="1" {{ $baduta->penyuluhan_kie == '1' ? 'selected' : '' }}>Ya</option>
                <option value="2" {{ $baduta->penyuluhan_kie == '2' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="pemberian_fasilitas_rujukan">Pemberian Fasilitas Pelayanan Rujukan</label>
            <select class="form-control custom-select" name="pemberian_fasilitas_rujukan">
                <option value="">--Pilih--</option>
                <option value="Ya, Sedang Dalam Proses" {{ $baduta->pemberian_fasilitas_rujukan == 'Ya, Sedang Dalam Proses' ? 'selected' : '' }}>Ya, Sedang Dalam Proses</option>
                <option value="Ya, Sudah Mendapatkan Pelayanan Rujukan" {{ $baduta->pemberian_fasilitas_rujukan == 'Ya, Sudah Mendapatkan Pelayanan Rujukan' ? 'selected' : '' }}>Ya, Sudah Mendapatkan Pelayanan Rujukan</option>
                <option value="Tidak" {{ $baduta->pemberian_fasilitas_rujukan == 'Tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="bansos">Memfasilitasi Bantuan Sosial</label>
            <select class="form-control custom-select" name="bansos">
                <option value="">--Pilih--</option>
                <option value="Ya, Sedang Dalam Proses" {{ $baduta->bansos == 'Ya, Sedang Dalam Proses' ? 'selected' : '' }}>Ya, Sedang Dalam Proses</option>
                <option value="Ya, Sudah Mendapatkan Bantuan Sosial" {{ $baduta->bansos == 'Ya, Sudah Mendapatkan Bantuan Sosial' ? 'selected' : '' }}>Ya, Sudah Mendapatkan Bantuan Sosial</option>
                <option value="Tidak, Karen Tidak Memenuhi Syarat" {{ $baduta->bansos == 'Tidak, Karen Tidak Memenuhi Syarat' ? 'selected' : '' }}>Tidak, Karen Tidak Memenuhi Syarat</option>
                <option value="Tidak, Karena Sudah Mendapatkan Bantuan Sosial" {{ $baduta->bansos == 'Tidak, Karena Sudah Mendapatkan Bantuan Sosial' ? 'selected' : '' }}>Tidak, Karena Sudah Mendapatkan Bantuan Sosial</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="tgl_kunjungan_berikutnya">Tgl Kunjungan Berikutnya</label>
            <input type="text" id="tgl_kunjungan_berikutnya" name="tgl_kunjungan_berikutnya" class="form-control" value="{{ \Carbon\Carbon::parse($baduta->tgl_kunjungan_berikutnya)->isoFormat('D MMMM YYYY') }}">
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
        <div class="form-group mb-2">
            <label for="type">Type Data</label>
            <select class="form-control" id="type" name="type_data">
              <option value="update">--pilih--</option>
              <option value="update">Update data</option>
              <option value="store">Simpan sebagai data baru</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        @include('components.btn._loading_update')
        <button id="btn_update" type="submit" class="btn btn-primary btn-block">SIMPAN</button>
    </div>
    <div class="form-group">
        <button id="btn_update" type="button" onclick="hapusRiwayatPendampingan({{ $baduta->id }})" class="btn btn-danger btn-block mt-1">HAPUS</button>
    </div>
</form>