<form id="updatePendampingan">
    <input type="hidden" value="{{ $pps->nama }}" name="nama">
    <input type="hidden" value="{{ $pps->nik }}" name="nik">
    <input type="hidden" value="{{ $pps->tgl_lahir }}" name="tgl_lahir">
    <input type="hidden" value="{{ $pps->telp }}" name="telp">
    <input type="hidden" value="{{ $pps->alamat }}" name="alamat">
    <div class="form-group boxed">
    <h5 class="p-1 mb-2 bg-secondary text-white rounded">RIWAYAT PERSALINAN</h5>
        <div class="input-wrapper mb-2">
            <label for="">Tgl Melahirkan</label>
            <input type="text" class="form-control" id="tgl_melahirkan" name="tgl_melahirkan" value="{{ \Carbon\Carbon::parse($pps->tgl_melahirkan)->isoFormat('D MMMM YYYY') }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tgl Kunjungan</label>
            <input type="text" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan" value="{{ \Carbon\Carbon::parse($pps->tgl_kunjungan)->isoFormat('D MMMM YYYY') }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tempat Persalinan</label>
            <select class="form-control custom-select" name="tempat_persalinan">
                <option value="">--Pilih--</option>
                <option value="Puskesmas" {{ $pps->tempat_persalinan == 'Puskesmas' ? 'selected' : '' }}>Puskesmas</option>
                <option value="Rumah Sakit" {{ $pps->tempat_persalinan == 'Rumah Sakit' ? 'selected' : '' }}>Rumah Sakit</option>
                <option value="Bidan" {{ $pps->tempat_persalinan == 'Bidan' ? 'selected' : '' }}>Bidan</option>
                <option value="Lainya" {{ $pps->tempat_persalinan == 'Lainya' ? 'selected' : '' }}>Lainya</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Penolong Persalinan</label>
            <select class="form-control custom-select" name="penolong_persalinan">
                <option value="">--Pilih--</option>
                <option value="Dokter Spesialis Kandungan" {{ $pps->penolong_persalinan == 'Dokter Spesialis Kandungan' ? 'selected' : '' }}>Dokter Spesialis Kandungan</option>
                <option value="Dokter Umum" {{ $pps->penolong_persalinan == 'Dokter Umum' ? 'selected' : '' }}>Dokter Umum</option>
                <option value="Bidan" {{ $pps->penolong_persalinan == 'Bidan' ? 'selected' : '' }}>Bidan</option>
                <option value="Lainya" {{ $pps->penolong_persalinan == 'Lainya' ? 'selected' : '' }}>Lainya</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Cara Persalinan</label>
            <select class="form-control custom-select" name="cara_persalinan">
                <option value="">--Pilih--</option>
                <option value="Normal" {{ $pps->cara_persalinan == 'Normal' ? 'selected' : '' }}>Normal</option>
                <option value="Tindakan/Caesar" {{ $pps->cara_persalinan == 'Tindakan/Caesar' ? 'selected' : '' }}>Tindakan/Caesar</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Apakah Ibu Mengalami Komplikasi Pada Masa Nifas</label>
            <select class="form-control custom-select" name="komplikasi_nifas" onchange="selectKomplikasi(this.value)">
                <option value="">--Pilih--</option>
                <option value="1" {{ $pps->komplikasi_nifas == '1' ? 'selected' : '' }}>Ya</option>
                <option value="2" {{ $pps->komplikasi_nifas == '2' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div id="jenis_komplikasi" class="form-group basic d-none">
            <div class="input-wrapper mb-2">
                <label for="">Pilih Jenis Komplikasi</label>
                <select class="form-control custom-select" name="jenis_komplikasi">
                    <option value="">--Pilih--</option>
                    <option value="Pendarahan" {{ $pps->jenis_komplikasi == 'Pendarahan' ? 'selected' : '' }}>Pendarahan</option>
                    <option value="Infeksi" {{ $pps->jenis_komplikasi == 'Infeksi' ? 'selected' : '' }}>Infeksi</option>
                    <option value="Hipertensi" {{ $pps->jenis_komplikasi == 'Hipertensi' ? 'selected' : '' }}>Hipertensi</option>
                    <option value="Lainya" {{ $pps->jenis_komplikasi == 'Lainya' ? 'selected' : '' }}>Lainya</option>
                </select>
            </div>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Keadaan Bayi</label>
            <select class="form-control custom-select" name="keadaan_bayi">
                <option value="">--Pilih--</option>
                <option value="Sehat" {{ $pps->keadaan_bayi == 'Sehat' ? 'selected' : '' }}>Sehat</option>
                <option value="Meninggal" {{ $pps->keadaan_bayi == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
            </select>
        </div>
    <h5 class="p-1 mb-2 bg-secondary text-white rounded">PENGGUNAAN KB PASCA PERSALINAN</h5>
        <div class="input-wrapper mb-2">
            <label for="">Pengguna KB Pasca Persalinan</label>
            <select class="form-control custom-select" name="kb_pasca_persalinan" onchange="selectJenisKB(this.value)" name="kb_pasca_persalinan">
                <option value="">--Pilih--</option>
                <option value="1" {{ $pps->kb_pasca_persalinan == '1' ? 'selected' : '' }}>Ya</option>
                <option value="2" {{ $pps->kb_pasca_persalinan == '2' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
    <div class="subkb form-group basic d-none">
        <div class="input-wrapper mb-2">
            <label for="">Jenis KBPP</label>
            <select class="form-control custom-select"  name="jenis_kb">
                <option value="">--Pilih--</option>
                <option value="Implan/Susuk KB" {{ $pps->jenis_kb == 'Implan/Susuk KB' ? 'selected' : '' }}>Implan/Susuk KB</option>
                <option value="IUD/AKDR" {{ $pps->jenis_kb == 'IUD/AKDR' ? 'selected' : '' }}>IUD/AKDR</option>
                <option value="Kondom" {{ $pps->jenis_kb == 'Kondom' ? 'selected' : '' }}>Kondom</option>
                <option value="MAL(Metode Amenore Laktasi)" {{ $pps->jenis_kb == 'MAL(Metode Amenore Laktasi)' ? 'selected' : '' }}>MAL(Metode Amenore Laktasi)</option>
                <option value="MOP" {{ $pps->jenis_kb == 'MOP' ? 'selected' : '' }}>MOP</option>
                <option value="MOW" {{ $pps->jenis_kb == 'MOW' ? 'selected' : '' }}>MOW</option>
                <option value="Pil KB" {{ $pps->jenis_kb == 'Pil KB' ? 'selected' : '' }}>Pil KB</option>
                <option value="Suntik KB" {{ $pps->jenis_kb == 'Suntik KB' ? 'selected' : '' }}>Suntik KB</option>
            </select>
        </div>
    </div>
    <div class="subkb form-group basic d-none">
        <div class="input-wrapper mb-2">
            <label for="">Alasan Ber KB</label>
            <select class="form-control custom-select"  name="alasan_kb">
                <option value="">--Pilih--</option>
                <option value="Ingin Anak di Tunda" {{ $pps->alasan_kb == 'Ingin Anak di Tunda' ? 'selected' : '' }}>Ingin Anak di Tunda</option>
                <option value="Tidak Ingin Anak Lagi" {{ $pps->alasan_kb == 'Tidak Ingin Anak Lagi' ? 'selected' : '' }}>Tidak Ingin Anak Lagi</option>
            </select>
        </div>
    </div>
    <div class="subnokb form-group basic d-none">
        <div class="input-wrapper mb-2">
            <label for="">Alasan Tidak Ingin Ber KB</label>
            <select class="form-control custom-select" name="alasan_tidak_kb">
                <option value="">--Pilih--</option>
                <option value="Ingin Hamil" {{ $pps->alasan_tidak_kb == 'Ingin Hamil' ? 'selected' : '' }}>Ingin Hamil</option>
                <option value="Alasan Kesehatan" {{ $pps->alasan_tidak_kb == 'Alasan Kesehatan' ? 'selected' : '' }}>Alasan Kesehatan</option>
                <option value="Efek Samping" {{ $pps->alasan_tidak_kb == 'Efek Samping' ? 'selected' : '' }}>Efek Samping</option>
                <option value="Suami/Pasangan Menolak" {{ $pps->alasan_tidak_kb == 'Suami/Pasangan Menolak' ? 'selected' : '' }}>Suami/Pasangan Menolak</option>
                <option value="Suami Jauh" {{ $pps->alasan_tidak_kb == 'Suami Jauh' ? 'selected' : '' }}>Suami Jauh</option>
                <option value="Tidak Ada Cara KB Yang Cocok" {{ $pps->alasan_tidak_kb == 'Tidak Ada Cara KB Yang Cocok' ? 'selected' : '' }}>Tidak Ada Cara KB Yang Cocok</option>
                <option value="Alasan Agama" {{ $pps->alasan_tidak_kb == 'Alasan Agama' ? 'selected' : '' }}>Alasan Agama</option>
                <option value="Tidak Tahu Tentang KB" {{ $pps->alasan_tidak_kb == 'Tidak Tahu Tentang KB' ? 'selected' : '' }}>Tidak Tahu Tentang KB</option>
                <option value="Tempat Pelayanan Jauh" {{ $pps->alasan_tidak_kb == 'Tempat Pelayanan Jauh' ? 'selected' : '' }}>Tempat Pelayanan Jauh</option>
                <option value="Mahal" {{ $pps->alasan_tidak_kb == 'Mahal' ? 'selected' : '' }}>Mahal</option>
                <option value="Alat/Cara KB Tidak Tersedia" {{ $pps->alasan_tidak_kb == 'Alat/Cara KB Tidak Tersedia' ? 'selected' : '' }}>Alat/Cara KB Tidak Tersedia</option>
                <option value="Belum Dapat Informasi Dari Petugas KB" {{ $pps->alasan_tidak_kb == 'Belum Dapat Informasi Dari Petugas KB' ? 'selected' : '' }}>Belum Dapat Informasi Dari Petugas KB</option>
            </select>
        </div>
    </div>
    <h5 class="p-1 mb-2 bg-secondary text-white rounded">HASIL PEMERIKSAAN IBU HAMIL</h5>
    <div class="section full mt-2 mb-2">
        <div class="wide-block p-0">
            <div class="section-title">Memberikan penyuluhan/KIE</div>
            <div class="input-list">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="penyuluhan_kie" id="pps_kie.1" value="1" onclick="slectKIE()" {{ $pps->penyuluhan_kie == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pps_kie.1">Ya</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="penyuluhan_kie" id="pps_kie.2" value="2" onclick="removeSUBKIE()" {{ $pps->penyuluhan_kie == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pps_kie.2">Tidak</label>
                </div>
            </div>
            <div class="subkie d-none">                               
                <div class="section-title">Jenis Penyuluhan Yang Diberikan</div>
                <div class="input-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="penyuluhan_kie" id="pps_kie.6" value="1" {{ $pps->penyuluhan_kie == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pps_kie.6">Perseorangan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="penyuluhan_kie" id="pps_kie.7" value="2" {{ $pps->penyuluhan_kie == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pps_kie.7">Kelompk</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="wide-block p-0">
            <div class="section-title">Memfasilitasi Pelayanan Rujukan</div>
            <div class="input-list">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rujukan_pelayanan" id="pps_kie3" value="1" {{ $pps->rujukan_pelayanan == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pps_kie3">Ya</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rujukan_pelayanan" id="pps_kie4" value="2" {{ $pps->rujukan_pelayanan == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pps_kie4">Tidak</label>
                </div>
            </div>
        </div>
        <div class="wide-block p-0 mb-2">
            <div class="section-title">Memfasilitasi Bantuan Sosial</div>
            <div class="input-list">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bansos" id="pps_kie5" value="1" onclick="selectBansos()" {{ $pps->bansos == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pps_kie5">Ya</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bansos" id="pps_kie6" value="2" onclick="removeBansos()" {{ $pps->bansos == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="pps_kie6">Tidak</label>
                </div>
            </div>
        </div>
        <div class="sub-bansos form-group basic d-none">
            <div class="input-wrapper mb-2">
                <select class="form-control custom-select"  name="jenis_bansos">
                    <option value="">--Pilih Bantuan Sosial--</option>
                    <option value="Program Keluarga Harapan">Program Keluarga Harapan</option>
                    <option value="Pangan Non Tunai (BPNT)">Pangan Non Tunai (BPNT)</option>
                    <option value="Program Indonesia Pintar (PIP)">Program Indonesia Pintar (PIP)</option>
                    <option value="Kartu Indonesia Sehat (KIS)">Kartu Indonesia Sehat (KIS)</option>
                    <option value="Lainya">Lainya</option>
                </select>
            </div>
        </div>
            <div class="input-wrapper mb-2">
                <label for="">Tgl Kunjungan Berikut</label>
                <input type="text" class="form-control" id="tgl_kunjungan_berikut" name="tgl_kunjungan_berikut" value="{{ \Carbon\Carbon::parse($pps->tgl_kunjungan_berikut)->isoFormat('D MMMM YYYY') }}">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
            <div class="input-wrapper mb-2">
                <label for="">Catatan TPK</label>
                <textarea id="textarea4" rows="2" class="form-control" name="catatan_kunjungan">{{ $pps->catatan_kunjungan }}</textarea>
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
        </div>
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
        <button type="button" onclick="hapusRiwayatPendampingan({{ $pps->id }})" class="btn btn-danger btn-block">HAPUS</button>
    </div>
    </div>
</form>