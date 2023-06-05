@extends('layouts.tpk.app')
@section('content')
<div id="appCapsule">
<form id="updateProfile">
    <div class="section mt-3 text-center">
        <div class="avatar-section">
            <a href="#">
                <img src="{{ asset('assets/tpk/img/sample/avatar/avatar1.jpg') }}" alt="avatar" class="imaged w100 rounded">
            </a>
        </div>
    </div>

    <div class="section my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group boxed">
                    <div class="input-wrapper mb-2">
                        <label for="">Photo</label>
                        <input type="file" class="form-control" name="nama" required>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" required value="{{ auth()->guard('tpk')->user()->nama }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required value="{{ auth()->guard('tpk')->user()->jabatan }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Wilayah</label>
                        <input type="text" class="form-control" name="wilayah_id" required>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">ALamat</label>
                        <input type="text" class="form-control" name="alamat" required value="{{ auth()->guard('tpk')->user()->alamat }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" required value="{{ auth()->guard('tpk')->user()->email }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">No Tlp</label>
                        <input type="text" class="form-control" name="no_telp" required value="{{ auth()->guard('tpk')->user()->no_telp }}">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                    <div class="input-wrapper mb-2">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                    <div class="input-wrapper">
                        <button type="submit" class="btn btn-danger btn-block">Keluar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
@push('js')
    <script type="text/javascript">
        //
    </script>
@endpush