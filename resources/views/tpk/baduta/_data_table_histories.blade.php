<form id="badutaUpdate">
    <div class="card">
        <div class="card-body">
            <h4>BIODATA IBU DAN BADUTA</h4>
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="label" for="nama">Nama Lengkap Ibu</label>
                    <input type="text" class="form-control" id="nama" value="{{ $baduta->nama }}" name="nama">
                </div>
                <div class="input-wrapper mt-2">
                    <label class="label" for="nik">NIK Ibu</label>
                    <input type="number" class="form-control" id="nik" value="{{ $baduta->nik }}" name="nik">
                </div>
                <div class="input-wrapper mt-2">
                    <label class="label" for="tgl_lahir">Tanggal Lahir Ibu</label>
                    <input type="text" class="form-control" id="tgl_lahir" value="{{ \Carbon\Carbon::parse($baduta->tgl_lahir)->isoFormat('D MMMM YYYY') }}" name="tgl_lahir">
                </div>
                <div class="input-wrapper mt-2">
                    <label class="label" for="no_tlp">No Tlp (WA) Ibu</label>
                    <input type="text" class="form-control" id="no_tlp" value="{{ $baduta->no_tlp }}" name="no_tlp">
                </div>
                <div class="input-wrapper mt-2">
                    <label class="label" for="alamat">Alamat Ibu</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat">{{ $baduta->alamat }}</textarea>
                </div>
                <div class="input-wrapper mt-2">
                    <h5 class="p-1 mt-2 bg-secondary text-white rounded">DATA BADUTA</h5>
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
                    <input type="text" name="tgl_lahir_bayi" id="tgl_lahir_bayi" class="form-control" value="{{ \Carbon\Carbon::parse($baduta->tgl_lahir_bayi)->isoFormat('D MMMM YYYY') }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                <div class="input-wrapper mb-2">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control custom-select" name="jenis_kelamin">
                        <option value="">--Pilih--</option>
                        <option value="1" {{ $baduta->jenis_kelamin == '1' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="2" {{ $baduta->jenis_kelamin == '2' ? 'selected' : '' }}>Perempuan</option>
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
                    <input type="text" name="tgl_lahir_anak_sebelum" id="tgl_lahir_anak_sebelum" class="form-control" value="{{ \Carbon\Carbon::parse($baduta->tgl_lahir_anak_sebelum)->isoFormat('D MMMM YYYY') }}">
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
                    <label for="pb_saat_ini">Panjang Badan Lahir (cm)</label>
                    <input type="number" name="pb_saat_ini" class="form-control" value="{{ $baduta->pb_saat_ini }}">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
                </div>
                <div class="input-wrapper mt-2">
                    @include('components.btn._loading_submit_baduta')
                    <button id="btn_submit_baduta" type="submit" class="btn btn-primary btn-block">UPDATE DATA BADUTA</button>
                </div>
                <div class="input-wrapper mt-1">
                    <button class="btn btn-danger btn-block" type="button" onclick="hapusBaduta('{{ $baduta->kode_baduta }}')">HAPUS DATA BADUTA</button>
                </div>
            </div>
        </div>
    </div>  
</form>  
<div class="card mt-2">
    <div class="card-body">
        <h4>RIWAYAT PENDAMPINGAN</h4>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kunjungan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col" class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @forelse ($table as $tb)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>Ke {{ $tb->kunjungan }}</td>
                    <td>{{ \Carbon\Carbon::parse($tb->tgl_kunjungan_berikutnya)->isoFormat('D MMMM YYYY') }}</td>
                    <td class="text-end"><button data-bs-toggle="modal" data-bs-target="#showDataBaduta" data-id="{{ $tb->id }}" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg></button>
                    </td>
                </tr> 
                @empty
                <tr>
                    <td colspan="8" class="text-center">
                        <div class="empty">
                            <div class="empty-img">
                                <svg  style="width: 96px; height: 96px" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12.983 8.978c3.955 -.182 7.017 -1.446 7.017 -2.978c0 -1.657 -3.582 -3 -8 -3c-1.661 0 -3.204 .19 -4.483 .515m-2.783 1.228c-.471 .382 -.734 .808 -.734 1.257c0 1.22 1.944 2.271 4.734 2.74"></path>
                                    <path d="M4 6v6c0 1.657 3.582 3 8 3c.986 0 1.93 -.067 2.802 -.19m3.187 -.82c1.251 -.53 2.011 -1.228 2.011 -1.99v-6"></path>
                                    <path d="M4 12v6c0 1.657 3.582 3 8 3c3.217 0 5.991 -.712 7.261 -1.74m.739 -3.26v-4"></path>
                                    <line x1="3" y1="3" x2="21" y2="21"></line>
                                </svg>
                            </div>
                            <p class="empty-title">Tidak ada data yang tersedia</p>
                            <div class="empty-action">
                                <button onclick="loadData()" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                     </svg>
                                     Refresh
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="modal fade modalbox" id="showDataBaduta" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">DATA DUKUNG BADUTA</h5>
                        <a href="javascript:;" data-bs-dismiss="modal">Close</a>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content" id="dataBadutaById">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  