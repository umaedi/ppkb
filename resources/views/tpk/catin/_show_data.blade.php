<form id="catinUpdate">
    <div class="form-group boxed">
        <div class="input-wrapper mb-2">
            <h5 class="p-1 mb-2 bg-secondary text-white rounded">BIODATA CATIN PRIA</h5>
            <label for="name">Nama Lengkap</label>
            <input type="hidden" name="id" value="{{ $catin->id }}">
            <input type="text" class="form-control" id="name" name="nama_catin_pria" required value="{{ $catin->nama_catin_pria }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="nik">NIK</label>
            <input type="number" class="form-control" id="nik" name="nik_catin_pria" required value="{{ $catin->nik_catin_pria }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="alamat_catin_pria">Tempat Lahir</label>
            <input type="text" class="form-control" name="alamat_catin_pria" required value="{{ $catin->alamat_catin_pria }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="tgl_lahir_catin_pria">Tgl Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir_catin_pria" required value="{{ $catin->tgl_lahir_catin_pria }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="telp_catin_pria">No HP (WA)</label>
            <input type="number" class="form-control" name="telp_catin_pria" required value="{{ $catin->telp_catin_pria }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="textarea4">Alamat</label>
            <textarea id="textarea4" rows="2" class="form-control" name="alamat_catin_pria" required>{{ $catin->alamat_catin_pria }}</textarea>
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="wilayah">Kecamatan</label>
            <select id="wilayah" class="form-control custom-select" name="wilayah_id">
                <option value="">--Pilih--</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <h5 class="p-1 mb-2 bg-secondary text-white rounded">BIODATA CATIN WANITA</h5>
            <label for="nama_catin_wanita">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_catin_wanita" name="nama_catin_wanita" required value="{{ $catin->nama_catin_wanita }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="nik_catin_wanita">NIK</label>
            <input type="number" class="form-control" name="nik_catin_wanita" required value="{{ $catin->nik_catin_wanita }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="tempat_lahir_catin_wanita">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir_catin_wanita" required value="{{ $catin->tempat_lahir_catin_wanita }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="tgl_lahir_catin_wanita">Tgl Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir_catin_wanita" required value="{{ $catin->tgl_lahir_catin_wanita }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="telp_catin_wanita">No HP (WA)</label>
            <input type="number" class="form-control" id="telp_catin_wanita" name="telp_catin_wanita" required value="{{ $catin->telp_catin_wanita }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="textarea4">Alamat</label>
            <textarea id="textarea4" rows="2" class="form-control" name="alamat_catin_wanita"
            required>{{ $catin->alamat_catin_wanita }}</textarea>
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="#">Tgl Rencana Pernikahan</label>
            <input type="date" class="form-control" name="tgl_pernikahan" required value="{{ $catin->tgl_pernikahan }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper">
            <label for="#">Tgl Kunjungan</label>
            <input type="date" class="form-control" name="tgl_pendampingan" required value="{{ $catin->tgl_pendampingan }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="section full mt-2 mb-2">
            <h5 class="p-1 mb-2 bg-secondary text-white rounded">HASIL PEMERIKSAAN KESEHATAN CATIN PRIA</h5>
            <div class="wide-block p-0">
                <div class="section-title">Apakah Merokok</div>
                <div class="input-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="merokok_pria" id="radioList1" value="1" {{ $catin->merokok_pria == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList1">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="merokok_pria" id="radioList1.1" value="2" {{ $catin->merokok_pria == '2' ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList1.1">Tidak</label>
                    </div>
                </div>

            </div>
        </div>
            <h5 class="p-1 mb-2 bg-secondary text-white rounded">HASIL PEMERIKSAAN KESEHATAN CATIN WANITA</h5>
            <div class="input-wrapper mb-2">
                <label for="bb_catin_wanita">Berat badan (kg)</label>
                <input type="number" class="form-control" name="bb_catin_wanita" required value="{{ $catin->bb_catin_wanita }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            <div class="input-wrapper mb-2">
                <label for="tb_catin_wanita">Tinggi Badan (cm)</label>
                <input type="number" class="form-control" name="tb_catin_wanita" required value="{{ $catin->tb_catin_wanita }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            <div class="input-wrapper mb-2">
                <label for="imt">Index Masa Tumbuh</label>
                <input type="number" class="form-control" name="imt" required value="{{ $catin->imt }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            <div class="input-wrapper mb-2">
                <label for="">Kadar HB (g/dl)</label>
                <input type="number" class="form-control" name="kadar_hb" required value="{{ $catin->kadar_hb }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            <div class="input-wrapper mb-2">
                <label for="lila">Ukuran Lila (cm)</label>
                <input type="number" class="form-control" name="lila" required value="{{ $catin->lila }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            <div class="wide-block p-0">
                <div class="section-title">Apakah Terpapar Rokok</div>
                <div class="input-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList2" value="1" {{ $catin->merokok_pria == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList2">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList2.1" value="2" {{ $catin->merokok_pria == '2' ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList2.1">Tidak</label>
                    </div>
                </div>
            </div>
            <div class="section full mt-2 mb-2">
                <h5 class="p-1 mb-2 bg-secondary text-white rounded">PENDAMPINGAN CATIN PRIA</h5>
                <div class="wide-block p-0">
                    <div class="section-title">Memberikan penyuluhan/KIE</div>
                    <div class="input-list">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kie_pria" id="radioList3" value="1" {{ $catin->merokok_pria == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList3">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kie_pria" id="radioList3.1" value="2" {{ $catin->merokok_pria == '2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList3.1">Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section full mt-2 mb-2">
                <h5 class="p-1 mb-2 bg-secondary text-white rounded">PENDAMPINGAN CATIN WANITA</h5>
                <div class="wide-block p-0">
                    <div class="section-title">Memberikan penyuluhan/KIE</div>
                    <div class="input-list">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kie_wanita" id="radioList4" value="1" {{ $catin->merokok_pria == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList4">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kie_wanita" id="radioList4.1" value="2" {{ $catin->merokok_pria == '2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList4.1">Tidak</label>
                        </div>
                    </div>
                </div>
                <div class="wide-block p-0">
                    <div class="section-title">Apakah (sasaran) sudah mendapatkan suplemen makanan?</div>
                    <div class="input-list">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="supelmen_wanita" id="radioList5" value="1" {{ $catin->merokok_pria == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList5">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="supelmen_wanita" id="radioList5.1" value="2" {{ $catin->merokok_pria == '2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList5.1">Tidak</label>
                        </div>
                    </div>
                </div>
                <div class="wide-block p-0">
                    <div class="section-title">Memfasilitasi rujukan layanan</div>
                    <div class="input-list">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rujukan_wanita" id="radioList6" value="1" {{ $catin->merokok_pria == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList6">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rujukan_wanita" id="radioList6.1" value="2" {{ $catin->merokok_pria == '2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList6.1">Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-wrapper mb-2">
                <label for="catatan_pendampingan">Catatan</label>
                <textarea id="catatan_pendampingan" rows="2" class="form-control" name="catatan_pendampingan"
                required>{{ $catin->catatan_pendampingan }}</textarea>
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
        <div class="form-group">
            @include('components.btn._loading_submit')
            <button id="btn_submit" type="submit" class="btn btn-primary btn-block btn-lg"
            >Simpan</button>
        </div>
    </div>
</form>