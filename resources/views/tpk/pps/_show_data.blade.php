<form id="ppsUpdate">
    <div class="form-group boxed">
        <div class="input-wrapper mb-2">
            <label for="">NIK</label>
            <input type="hidden" name="id" value="{{ $pps->id }}">
            <input type="number" class="form-control" name="nik" required value="{{ $pps->nik }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $pps->nama }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tgl Lahir</label>
            <input type="date" class="form-control" id="ttl" name="tgl_lahir" value="{{ $pps->tgl_lahir }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Alamat</label>
            <textarea id="textarea4" rows="2" class="form-control" name="alamat">{{ $pps->alamat }}</textarea>
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">No HP (WA)</label>
            <input type="number" class="form-control" name="no_tlp" value="{{ $pps->no_tlp }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
    <h5 class="p-1 mb-2 bg-secondary text-white rounded">RIWAYAT PERSALINAN</h5>
        <div class="input-wrapper mb-2">
            <label for="">Tgl Melahirkan</label>
            <input type="date" class="form-control" name="tgl_melahirkan" value="{{ $pps->tgl_melahirkan }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tgl Kunjungan</label>
            <input type="date" class="form-control" name="tgl_kunjungan" value="{{ $pps->tgl_kunjungan }}">
            <i class="clear-input">
                <ion-icon name="close-circle"></ion-icon>
            </i>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Tempat Persalinan</label>
            <select class="form-control custom-select" name="tempat_persalinan">
                <option value="">--Pilih--</option>
                <option value="Puskesmas">Puskesmas</option>
                <option value="Rumah Sakit">Rumah Sakit</option>
                <option value="Bidan">Bidan</option>
                <option value="Lainya">Lainya</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Penolong Persalinan</label>
            <select class="form-control custom-select" name="penolong_persalinan">
                <option value="">--Pilih--</option>
                <option value="Dokter Spesialis Kandungan">Dokter Spesialis Kandungan</option>
                <option value="Dokter Umum">Dokter Umum</option>
                <option value="Bidan">Bidan</option>
                <option value="Lainya">Lainya</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Cara Persalinan</label>
            <select class="form-control custom-select" name="cara_persalinan">
                <option value="">--Pilih--</option>
                <option value="Normal">Normal</option>
                <option value="Tindakan/Caesar">Tindakan/Caesar</option>
            </select>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Apakah Ibu Mengalami Komplikasi Pada Masa Nifas</label>
            <select class="form-control custom-select" name="komplikasi_nifas" onchange="selectKomplikasi(this.value)">
                <option value="">--Pilih--</option>
                <option value="1">Ya</option>
                <option value="2">Tidak</option>
            </select>
        </div>
        <div id="jenis_komplikasi" class="form-group basic d-none">
            <div class="input-wrapper mb-2">
                <label for="">Pilih Jenis Komplikasi</label>
                <select class="form-control custom-select" name="jenis_komplikasi">
                    <option value="">--Pilih--</option>
                    <option value="Pendarahan">Pendarahan</option>
                    <option value="Infeksi">Infeksi</option>
                    <option value="Hipertensi">Hipertensi</option>
                    <option value="Lainya">Lainya</option>
                </select>
            </div>
        </div>
        <div class="input-wrapper mb-2">
            <label for="">Keadaan Bayi</label>
            <select class="form-control custom-select" name="keadaan_bayi">
                <option value="">--Pilih--</option>
                <option value="Sehat">Sehat</option>
                <option value="Meninggal">Meninggal</option>
            </select>
        </div>
    <h5 class="p-1 mb-2 bg-secondary text-white rounded">PENGGUNAAN KB PASCA PERSALINAN</h5>
        <div class="input-wrapper mb-2">
            <label for="">Pengguna KB Pasca Persalinan</label>
            <select class="form-control custom-select" name="kb_pasca_persalinan" onchange="selectJenisKB(this.value)" name="kb_pasca_persalinan">
                <option value="">--Pilih--</option>
                <option value="1">Ya</option>
                <option value="2">Tidak</option>
            </select>
        </div>
    <div class="subkb form-group basic d-none">
        <div class="input-wrapper mb-2">
            <label for="">Jenis KBPP</label>
            <select class="form-control custom-select"  name="jenis_kb">
                <option value="">--Pilih--</option>
                <option value="Implan/Susuk KB">Implan/Susuk KB</option>
                <option value="IUD/AKDR">IUD/AKDR</option>
                <option value="Kondom">Kondom</option>
                <option value="MAL(Metode Amenore Laktasi)">MAL(Metode Amenore Laktasi)</option>
                <option value="MOP">MOP</option>
                <option value="MOW">MOW</option>
                <option value="Pil KB">Pil KB</option>
                <option value="Suntik KB">Suntik KB</option>
            </select>
        </div>
    </div>
    <div class="subkb form-group basic d-none">
        <div class="input-wrapper mb-2">
            <label for="">Alasan Ber KB</label>
            <select class="form-control custom-select"  name="alasan_kb">
                <option value="">--Pilih--</option>
                <option value="Ingin Anak di Tunda">Ingin Anak di Tunda</option>
                <option value="Tidak Ingin Anak Lagi">Tidak Ingin Anak Lagi</option>
            </select>
        </div>
    </div>
    <div class="subnokb form-group basic d-none">
        <div class="input-wrapper mb-2">
            <label for="">Alasan Tidak Ingin Ber KB</label>
            <select class="form-control custom-select" name="alasan_tidak_kb">
                <option value="">--Pilih--</option>
                <option value="Ingin Anak di Tunda">Ingin Hamil</option>
                <option value="Tidak Ingin Anak Lagi">Alasan Kesehatan</option>
                <option value="Tidak Ingin Anak Lagi">Efek Samping</option>
                <option value="Tidak Ingin Anak Lagi">Suami/Pasangan Menolak</option>
                <option value="Tidak Ingin Anak Lagi">Suami Jauh</option>
                <option value="Tidak Ingin Anak Lagi">Tidak Ada Cara KB Yang Cocok</option>
                <option value="Tidak Ingin Anak Lagi">Alasan Agama</option>
                <option value="Tidak Ingin Anak Lagi">Tidak Tahu Tentang KB</option>
                <option value="Tidak Ingin Anak Lagi">Tempat Pelayanan Jauh</option>
                <option value="Tidak Ingin Anak Lagi">Mahal</option>
                <option value="Tidak Ingin Anak Lagi">Alat/Cara KB Tidak Tersedia</option>
                <option value="Tidak Ingin Anak Lagi">Belum Dapat Informasi Dari Petugas KB</option>
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
                        <input class="form-check-input" type="radio" name="penyuluhan_kie" id="pps_kie.6" value="Perseorangan" {{ $pps->penyuluhan_kie == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="pps_kie.6">Perseorangan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="penyuluhan_kie" id="pps_kie.7" value="Kelompk" {{ $pps->penyuluhan_kie == 2 ? 'checked' : '' }}>
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
                <input type="date" class="form-control" name="tgl_kunjungan_berikut" value="{{ $pps->tgl_kunjungan_berikut }}">
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
    <div class="form-group basic">
        @include('components.btn._loading_submit_pps')
        <button id="btn_submit_pps" type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
    </div>
    </div>
</form>