<form id="updatePendampingan">
    <input type="hidden" value="{{ $bumil->nama }}" name="nama">
    <input type="hidden" value="{{ $bumil->nik }}" name="nik">
    <input type="hidden" value="{{ $bumil->tgl_lahir }}" name="tgl_lahir">
    <input type="hidden" value="{{ $bumil->telp }}" name="telp">
    <input type="hidden" value="{{ $bumil->alamat }}" name="alamat">
    <div class="form-group boxed">
        <div class="input-wrapper mb-2">
            <h5 class="p-1 mb-2 bg-secondary text-white rounded">A. HASIL PEMERIKSAAN KESEHATAN BUMIL</h5>
            <label for="">Tgl Kunjungan</label>
            <input type="text" id="tgl_kunjungan" class="form-control" name="tgl_kunjungan" required value="{{ \Carbon\Carbon::parse($bumil->tgl_kunjungan)->isoFormat('D MMMM YYYY') }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Jumlah Anak</label>
            <select class="form-control custom-select" name="jumlah_anak">
                <option value="">--Pilih--</option>
                <option value="0" {{ $bumil->jumlah_anak == '0' ? 'selected' : '' }}>Belum Ada Anak</option>
                <option value="1" {{ $bumil->jumlah_anak == '1' ? 'selected' : '' }}>Satu</option>
                <option value="2" {{ $bumil->jumlah_anak == '2' ? 'selected' : '' }}>Dua</option>
                <option value="3" {{ $bumil->jumlah_anak == '3' ? 'selected' : '' }}>Tiga</option>
                <option value="4" {{ $bumil->jumlah_anak == '4' ? 'selected' : '' }}>Empat</option>
                <option value="5" {{ $bumil->jumlah_anak == '5' ? 'selected' : '' }}>Lima</option>
                <option value="6" {{ $bumil->jumlah_anak == '6' ? 'selected' : '' }}>Enam</option>
                <option value="7" {{ $bumil->jumlah_anak == '7' ? 'selected' : '' }}>Tujuh</option>
                <option value="8" {{ $bumil->jumlah_anak == '8' ? 'selected' : '' }}>Delapan</option>
                <option value="9" {{ $bumil->jumlah_anak == '9' ? 'selected' : '' }}>Sembilan</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Usia Hamil Saat Ini (0-42 Minggu)</label>
            <input type="number" class="form-control" name="usia_hamil" required value="{{ $bumil->usia_hamil }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tinggi Fundus Uteri (cm)</label>
            <input type="number" class="form-control" name="tfu" required value="{{ $bumil->tfu }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tinggi Badan (cm)</label>
            <input type="number" class="form-control" name="tb" required value="{{ $bumil->tb }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Berat Badan Bumi (kg)</label>
            <input type="number" class="form-control" name="bb" required value="{{ $bumil->bb }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Index Masa Tumbuh (IMT)</label>
            <input type="number" class="form-control" name="imt" required value="{{ $bumil->imt }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Riwayat Penyakit</label>
            <select class="form-control custom-select" name="riwayat_penyakit">
                <option value="">--Pilih--</option>
                <option value="Hipertensi" {{ $bumil->riwayat_penyakit == 'Hipertensi' ? 'selected' : '' }}>Hipertensi</option>
                <option value="Kencing Manis/Diabetes" {{ $bumil->riwayat_penyakit == '0' ? 'selected' : '' }}>Kencing Manis/Diabetes</option>
                <option value="Thyroid" {{ $bumil->riwayat_penyakit == 'Kencing Manis/Diabetes' ? 'selected' : '' }}>Thyroid</option>
                <option value="Penyakit Jantung" {{ $bumil->riwayat_penyakit == 'Penyakit Jantung' ? 'selected' : '' }}>Penyakit Jantung</option>
                <option value="TBC" {{ $bumil->riwayat_penyakit == 'TBC' ? 'selected' : '' }}>TBC</option>
                <option value="Asma" {{ $bumil->riwayat_penyakit == 'Asma' ? 'selected' : '' }}>Asma</option>
                <option value="Lainya" {{ $bumil->riwayat_penyakit == 'Lainya' ? 'selected' : '' }}>Lainya</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Kadar Hemoglobin (g/dl)</label>
            <input type="number" class="form-control" name="kadar_hb" required value="{{ $bumil->kadar_hb }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Lingkar Lengan Atas (cm)</label>
            <input type="number" class="form-control" name="lila" required value="{{ $bumil->lila }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Taksiran Berat Janin (gr)</label>
            <input type="number" class="form-control" name="tbj" required value="{{ $bumil->tbj }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="section full mt-2 mb-2">
            <div class="wide-block p-0">
                <div class="section-title">Apakah Terpadar Rokok</div>
                <div class="input-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList7" value="1" {{ $bumil->terpapar_rokok == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList7">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList7.1" value="2" {{ $bumil->terpapar_rokok == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList7.1">Tidak</label>
                    </div>
                </div>

            </div>
        </div>
        <h5 class="p-1 mb-2 bg-secondary text-white rounded">B. PENDAMPINGAN KEPADA IBU HAMIL</h5>
        <div class="section full mt-2 mb-2">
            <div class="wide-block p-0">
                <div class="section-title">Memberikan Penyuluhan/KIE</div>
                <div class="input-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="penyuluhan_kie" id="radioList8" value="1" {{ $bumil->penyuluhan_kie == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList8">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="penyuluhan_kie" id="radioList8.1" value="2" {{ $bumil->penyuluhan_kie == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList8.1">Tidak</label>
                    </div>
                </div>

            </div>
        <div class="wide-block p-0">
            <div class="section-title">Apakah Ibu Hamil Sudah Mendapatkan Suplemen Tambahan Darah</div>
            <div class="input-list">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="suplement_darah" id="radioList9" value="1" {{ $bumil->suplement_darah == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="radioList9">Ya</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="suplement_darah" id="radioList9.1" value="2" {{ $bumil->suplement_darah == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="radioList9.1">Tidak</label>
                </div>
            </div>
        </div>
        </div>
        <div class="section full mt-2 mb-2">
            <div class="wide-block p-0">
                <div class="section-title">Memfasilitasi Pelayanan Rujukan</div>
                <div class="input-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rujukan_pelayanan" id="radioList10" value="1" {{ $bumil->rujukan_pelayanan == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList10">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rujukan_pelayanan" id="radioList10.1" value="2" {{ $bumil->rujukan_pelayanan == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList10.1">Tidak</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="section full mt-2 mb-2">
            <div class="wide-block p-0">
                <div class="section-title">Memfasilitasi Bantuan Sosial</div>
                <div class="input-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bansos" id="radioList11" value="1" {{ $bumil->bansos == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList11">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bansos" id="radioList11.1" value="2" {{ $bumil->bansos == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="radioList11.1">Tidak</label>
                    </div>
                </div>
            </div>
    
            <div class="input-wrapper my-2">
                <label for="">Tanggal Kunjungan Berikut</label>
                <input id="tgl_kunjungan_berikutnya" type="text" class="form-control" name="tgl_kunjungan_berikutnya" required value="{{ \Carbon\Carbon::parse($bumil->tgl_kunjungan_berikutnya)->isoFormat('D MMMM YYYY')}}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>

            <div class="input-wrapper mb-2">
                <label for="">Catatan TPK</label>
                <textarea id="textarea4" rows="2" class="form-control" name="catatan_kunjungan"
                required>{{ $bumil->catatan_kunjungan }}</textarea>
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
            <div class="form-group mt-2">
                @include('components.btn._loading_update')
                <button id="btn_update" type="submit" class="btn btn-primary btn-block">SIMPAN</button>
            </div>
            <div class="form-group mt-1">
                <button type="button" onclick="hapusRiwayatPendampingan({{ $bumil->id }})" class="btn btn-danger btn-block">HAPUS</button>
            </div>
    </div>
</div>
</form>