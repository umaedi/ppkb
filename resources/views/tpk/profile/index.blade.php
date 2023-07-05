@extends('layouts.tpk.app')
@section('content')
<div id="appCapsule">
<form id="updateProfile">
    <div class="section mt-3 text-center">
        <div class="avatar-section">
            <a href="#">
                <img src="{{ asset('assets/tpk/img/avatar.png') }}" alt="avatar" class="imaged w100 rounded">
            </a>
        </div>
    </div>

    <div class="section my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group boxed">
                    <div class="input-wrapper mb-2">
                        <label for="">Photo</label>
                        <input type="file" class="form-control" name="nama">
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ auth()->guard('tpk')->user()->nama }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" value="{{ auth()->guard('tpk')->user()->jabatan }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">ALamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ auth()->guard('tpk')->user()->alamat }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email"  value="{{ auth()->guard('tpk')->user()->email }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">No Tlp</label>
                        <input type="text" class="form-control" name="no_telp" value="{{ auth()->guard('tpk')->user()->no_telp }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        @include('components._loading')
                        <button id="btn_submit" type="submit" class="btn btn-primary btn-block">SIMPAN</button>
                    </div>
                    <div class="input-wrapper">
                        @include('components._loading_logout')
                        <a href="javascript:void(0)" id="btn_logout" onclick="logOut()" class="btn btn-danger btn-block">KELUAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{ asset('assets/tpk/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('#updateProfile').submit(async function update(e) {
            e.preventDefault();

            var form = $(this)[0];
            var data = new FormData(form);

            var param = {
                method: 'POST',
                url: '/api/tpk/profile/update',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
            }

            loading(true);
            await transAjax(param).then((res) => {
                loading(false);
                swal({text: 'Profile Berhasil Di Update', icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/profile';
                });
            }).catch((err) => {
                loading(false);
                swal({text: 'Internal Server Error!', icon: 'error', timer: 3000,});
            });

            function loading(state) {
                if(state) {
                    $('#btn_submit').addClass('d-none');
                    $('#loading').removeClass('d-none');
                } else {
                    $('#btn_submit').removeClass('d-none');
                    $('#loading').addClass('d-none');
                }
            }
        });

        //logout
        async function logOut() {
            var param = {
                method: 'POST',
                url: '/api/tpk/destroy',
            }

            loading(true);
            await transAjax(param).then((res) => {
                loading(false);
                document.cookie = 'access_tokenku' + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                swal({text: 'Anda berhasil logout!', icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/login';
                });
            }).catch((err) => {
                loading(false);
                swal({text: 'Internal Server Error!', icon: 'error', timer: 3000,});
            });

            function loading(state) {
                if(state) {
                    $('#btn_logout').addClass('d-none');
                    $('#loading_logout').removeClass('d-none');
                } else {
                    $('#btn_logout').removeClass('d-none');
                    $('#loading_logout').addClass('d-none');
                }
            }
        }
    </script>
@endpush