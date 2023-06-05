<div class="modal fade modalbox" id="bumil" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TAMBAH DATA SASARAN BUMIL</h5>
                <a href="javascript:;" data-bs-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form id="bumilStore">
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <h5 class="p-1 mb-2 bg-secondary text-white rounded">A. BIODATA IBU HAMIL</h5>
                                <label for="">NIK</label>
                                <input type="number" class="form-control" name="nik" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Tgl Lahir Ibu</label>
                                <input type="date" class="form-control" name="tgl_lahir" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">No HP (WA)</label>
                                <input type="number" class="form-control" name="telp" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <h5 class="p-1 mb-2 bg-secondary text-white rounded">B. HASIL PEMERIKSAAN KESEHATAN BUMIL</h5>
                                <label for="">Tgl Kunjungan</label>
                                <input type="date" class="form-control" name="tgl_kunjungan" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Jumlah Anak</label>
                                <select class="form-control custom-select" name="jumlah_anak" required>
                                    <option value="">--Pilih--</option>
                                    <option value="0">Belum Ada Anak</option>
                                    <option value="1">Satu</option>
                                    <option value="2">Dua</option>
                                    <option value="3">Tiga</option>
                                    <option value="4">Empat</option>
                                    <option value="5">Lima</option>
                                    <option value="6">Enam</option>
                                    <option value="7">Tujuh</option>
                                    <option value="8">Delapan</option>
                                    <option value="9">Sembilan</option>
                                </select>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Usia Hamil Saat Ini (0-42 Minggu)</label>
                                <input type="number" class="form-control" name="usia_hamil" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Tinggi Fundus Uteri (cm)</label>
                                <input type="number" class="form-control" name="tfu" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control" name="tb" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Berat Badan Bumi (kg)</label>
                                <input type="number" class="form-control" name="bb" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Index Masa Tumbuh (IMT)</label>
                                <input type="number" class="form-control" name="imt" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Riwayat Penyakit</label>
                                <select class="form-control custom-select" name="riwayat_penyakit" required>
                                    <option value="">--Pilih--</option>
                                    <option value="Hipertensi">Hipertensi</option>
                                    <option value="Kencing Manis/Diabetes">Kencing Manis/Diabetes</option>
                                    <option value="Thyroid">Thyroid</option>
                                    <option value="Penyakit Jantung">Penyakit Jantung</option>
                                    <option value="TBC">TBC</option>
                                    <option value="Asma">Asma</option>
                                    <option value="Lainya">Lainya</option>
                                </select>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Kadar Hemoglobin (g/dl)</label>
                                <input type="number" class="form-control" name="kadar_hb" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Lingkar Lengan Atas (cm)</label>
                                <input type="number" class="form-control" name="lila" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Taksiran Berat Janin (gr)</label>
                                <input type="number" class="form-control" name="tbj" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="section full mt-2 mb-2">
                                <div class="wide-block p-0">
                                    <div class="section-title">Apakah Terpadar Rokok</div>
                                    <div class="input-list">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList7" value="1">
                                            <label class="form-check-label" for="radioList7">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="terpapar_rokok" id="radioList7.1" value="2">
                                            <label class="form-check-label" for="radioList7.1">Tidak</label>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
                            <h5 class="p-1 mb-2 bg-secondary text-white rounded">C. PENDAMPINGAN KEPADA IBU HAMIL</h5>
                            <div class="section full mt-2 mb-2">
                                <div class="wide-block p-0">
                                    <div class="section-title">Memberikan Penyuluhan/KIE</div>
                                    <div class="input-list">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="penyuluhan_kie" id="radioList8" value="1">
                                            <label class="form-check-label" for="radioList8">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="penyuluhan_kie" id="radioList8.1" value="2">
                                            <label class="form-check-label" for="radioList8.1">Tidak</label>
                                        </div>
                                    </div>
                    
                                </div>
                            <div class="wide-block p-0">
                                <div class="section-title">Apakah Ibu Hamil Sudah Mendapatkan Suplemen Tambahan Darah</div>
                                <div class="input-list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="suplement_darah" id="radioList9" value="1">
                                        <label class="form-check-label" for="radioList9">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="suplement_darah" id="radioList9.1" value="2">
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
                                            <input class="form-check-input" type="radio" name="rujukan_pelayanan" id="radioList10" value="1">
                                            <label class="form-check-label" for="radioList10">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rujukan_pelayanan" id="radioList10.1" value="2">
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
                                            <input class="form-check-input" type="radio" name="bansos" id="radioList11" value="1">
                                            <label class="form-check-label" for="radioList11">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="bansos" id="radioList11.1" value="2">
                                            <label class="form-check-label" for="radioList11.1">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="input-wrapper my-2">
                                    <label for="">Tanggal Kunjungan Berikut</label>
                                    <input type="date" class="form-control" name="tgl_kunjungan_berikutnya" required>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>

                                <div class="input-wrapper mb-2">
                                    <label for="">Catatan TPK</label>
                                    <textarea id="textarea4" rows="2" class="form-control" name="catatan_kunjungan"
                                    required></textarea>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                            <div class="form-group mt-2">
                                @include('components.btn._loading_submit_bumil')
                                <button id="btn_submit_bumil" type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    $('#bumilStore').submit(async function store(e) {
        e.preventDefault();

        var form 	= $(this)[0]; 
        var data 	= new FormData(form);

        var param = {
            method: 'POST',
            url: '/api/tpk/bumil/store',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
        }

            loadingsubmit(true);
            await transAjax(param).then((res) => {
                loadingsubmit(false);
                swal({text: err.message, icon: 'success', timer: 3000,});
                $('#bumil').modal('hide');
                swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/dashboard';
                });
            }).catch((err) => {
                loadingsubmit(false);
                $('#bumil').modal('hide');
                swal({text: err.message, icon: 'error', timer: 3000,});
            });

        function loadingsubmit(state){
            if(state) {
                $('#btn_loading_bumil').removeClass('d-none');
                $('#btn_submit_bumil').addClass('d-none');
            }else {
                $('#btn_loading_bumil').addClass('d-none');
                $('#btn_submit_bumil').removeClass('d-none');
            }
        }  
    });
</script>
@endpush