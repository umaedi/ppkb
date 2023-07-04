<form id="updatePendampingan">
    <input type="hidden" name="id_pendampingan" value="{{ $catin->id }}">
    <input type="hidden" name="nik_catin_pria" value="{{ $catin->nik_catin_pria }}">
    <input type="hidden" value="{{ $catin->nama_catin_pria }}" name="nama_catin_pria">
    <input type="hidden" value="{{ $catin->nik_catin_pria }}" name="nik_catin_pria">
    <input type="hidden" value="{{ $catin->tgl_lahir_catin_pria }}" name="tgl_lahir_catin_pria">
    <input type="hidden" value="{{ $catin->telp_catin_pria }}" name="telp_catin_pria">
    <input type="hidden" name="alamat_catin_pria" value="{{ $catin->alamat_catin_pria }}">
    
    <input type="hidden" value="{{ $catin->nama_catin_wanita }}" name="nama_catin_wanita">
    <input type="hidden" value="{{ $catin->nik_catin_wanita }}" name="nik_catin_wanita">
    <input type="hidden" value="{{ $catin->tgl_lahir_catin_wanita }}" name="tgl_lahir_catin_wanita">
    <input type="hidden" value="{{ $catin->tempat_lahir_catin_wanita }}" name="tempat_lahir_catin_wanita">
    <input type="hidden" value="{{ $catin->telp_catin_wanita }}" name="telp_catin_wanita">
    <input type="hidden" value="{{ $catin->tgl_pernikahan }}" name="tgl_pernikahan">
    <input type="hidden" value="{{ $catin->tgl_pendampingan }}" name="tgl_pendampingan">
    <input type="hidden" name="alamat_catin_wanita" value="{{ $catin->alamat_catin_wanita }}">

    <div class="form-group boxed">
        <div class="section full mb-2">
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
                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList2" value="1" {{ $catin->terpapar_rokok == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList2">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList2.1" value="2" {{ $catin->terpapar_rokok == '2' ? 'checked' : '' }}>
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
                            <input class="form-check-input" type="radio" name="kie_pria" id="radioList3" value="1" {{ $catin->kie_pria == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList3">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kie_pria" id="radioList3.1" value="2" {{ $catin->kie_pria == '2' ? 'checked' : '' }}>
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
                            <input class="form-check-input" type="radio" name="kie_wanita" id="radioList4" value="1" {{ $catin->kie_wanita == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList4">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kie_wanita" id="radioList4.1" value="2" {{ $catin->kie_wanita == '2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList4.1">Tidak</label>
                        </div>
                    </div>
                </div>
                <div class="wide-block p-0">
                    <div class="section-title">Apakah (sasaran) sudah mendapatkan suplemen makanan?</div>
                    <div class="input-list">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="supelmen_wanita" id="radioList5" value="1" {{ $catin->supelmen_wanita == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList5">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="supelmen_wanita" id="radioList5.1" value="2" {{ $catin->supelmen_wanita == '2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList5.1">Tidak</label>
                        </div>
                    </div>
                </div>
                <div class="wide-block p-0">
                    <div class="section-title">Memfasilitasi rujukan layanan</div>
                    <div class="input-list">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rujukan_wanita" id="radioList6" value="1" {{ $catin->rujukan_wanita == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList6">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rujukan_wanita" id="radioList6.1" value="2" {{ $catin->rujukan_wanita == '2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioList6.1">Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-wrapper mb-2">
                <label class="label" for="tgl_kunjungan">Tgl Kunjungan</label>
                <input type="text" class="form-control" id="tgl_kunjungan" value="{{ \Carbon\Carbon::parse($catin->tgl_pendampingan)->isoFormat('D MMMM YYYY') }}" name="tgl_pendampingan">
            </div>
            <div class="input-wrapper mb-2">
                <label for="catatan_pendampingan">Catatan</label>
                <textarea id="catatan_pendampingan" rows="2" class="form-control" name="catatan_pendampingan"
                required>{{ $catin->catatan_pendampingan }}</textarea>
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
        <div class="form-group">
            @include('components.btn._loading_update')
            <button id="btn_update" type="submit" class="btn btn-primary btn-block" data-btn="store">SIMPAN</button>
        </div>
        <div class="form-group">
            <button id="btn_update" type="button" onclick="hapusRiwayatPendampingan({{ $catin->id }})" class="btn btn-danger btn-block mt-1">HAPUS</button>
        </div>
    </div>
</form>