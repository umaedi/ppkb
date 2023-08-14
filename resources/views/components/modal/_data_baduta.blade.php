<div class="modal fade modalbox" id="baduta" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">DATA SASARAN BADUTA</h5>
                <a href="javascript:;" data-bs-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form id="badutaStore">
                        <div class="form-group boxed">
                            <div class="input-wrapper mb-2">
                                <label for="date">Tgl Kunjungan</label>
                                <input type="date" name="tgl_kunjungan" id="date" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <h5 class="p-1 mb-2 bg-secondary text-white rounded">BIODATA IBU</h5>
                            <div class="input-wrapper mb-2">
                                <label for="nik">NIK</label>
                                <input type="number" name="nik" class="form-control" maxlength="16">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="alamat">Alamat</label>
                                <textarea type="text" name="alamat" class="form-control"></textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            {{-- <div class="input-wrapper mb-2">
                                <label for="wBaduta">Kecamatan</label>
                                <select id="wBaduta" class="w-catin form-control custom-select" name="wilayah_id" required onclick="getWilayah('wBaduta')">
                                    <option value="0">--Pilih--</option>
                                </select>
                            </div> --}}
                            <div class="input-wrapper mb-2">
                                <label for="tgl_lahir_ibu">Tgl Lahir Ibu</label>
                                <input type="date" name="tgl_lahir" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="no_hp">No HP/WhatsApp</label>
                                <input type="number" name="no_tlp" class="form-control">
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
                                <input type="number" name="nik_baduta" id="nik" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="nama_baduta">Nama Baduta</label>
                                <input type="text" name="nama_bayi" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="">Tgl Lahir Baduta</label>
                                <input type="date" name="tgl_lahir_bayi" class="form-control">
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
                                <input type="number" name="urutan_anak_ke" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="tgl_lahir_anak_sebelum">Tgl Lahir Anak Sebelumnya</label>
                                <input type="date" name="tgl_lahir_anak_sebelum" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="bb_kehamilan">Berat Badan Lahir (kg)</label>
                                <input type="number" name="bb_kehamilan" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="pb_saat_ini">Panjang Badan Lahir (cm)</label>
                                <input type="number" name="pb_saat_ini" class="form-control">
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
                                <input type="date" name="tgl_kunjungan_berikutnya" class="form-control">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                            <div class="input-wrapper mb-2">
                                <label for="catatan_baduta">Catatan TPK</label>
                                <textarea id="textarea4" rows="2" class="form-control"
                                name="catatan_baduta"></textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            @include('components.btn._loading_submit_baduta')
                            <button id="btn_submit_baduta" type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    $('#badutaStore').submit(async function store(e) {
        e.preventDefault();

        var form 	= $(this)[0]; 
        var data 	= new FormData(form);

        var param = {
            method: 'POST',
            url: '/api/tpk/baduta/store',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
        }

            loadingsubmit(true);
            await transAjax(param).then((res) => {
                loadingsubmit(false);
                swal({text: res.message, icon: 'success', timer: 3000,});
                $('#baduta').modal('hide');
                swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/dashboard';
                });
            }).catch((err) => {
                loadingsubmit(false);
                $('#baduta').modal('hide');
                swal({text: err.responseJSON.message.errorInfo[2], icon: 'error', timer: 3000,});
            });

        function loadingsubmit(state){
            if(state) {
                $('#btn_loading_baduta').removeClass('d-none');
                $('#btn_submit_baduta').addClass('d-none');
            }else {
                $('#btn_loading_baduta').addClass('d-none');
                $('#btn_submit_baduta').removeClass('d-none');
            }
        }  
    });
</script>
@endpush