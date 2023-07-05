<!doctype html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#6236FF">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'PPKB' }}</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <link rel="icon" type="image/png" href="assets/tpk/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/tpk/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/tpk/css/style.css') }}">
</head>

<body>
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <img src="{{ asset('assets/tpk/img/logo.png') }}" alt="logo" width="75px">
        </div>
        <div class="section mb-5 p-2">
            <div id="alert" class="alert alert-danger d-none mb-2">Email Atau Password Salah!</div>
            <form id="login">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="pass">Password</label>
                                <input type="password" class="form-control" id="pass" name="password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-links mt-2">
                    <div><a href="app-forgot-password.html" class="text-muted">Lupa Password?</a></div>
                </div>
                <div class="form-button-group  transparent">
                    @include('components._loading')
                    <button id="btn_login" type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('assets/tpk/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/tpk/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/tpk/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        async function transAjax(data) {
            html = null;
            data.headers = {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            await $.ajax(data).done(function(res) {
                html = res;
            })
                .fail(function() {
                    return false;
                })
            return html
        }

        $('#login').submit(async function login(e) {
            e.preventDefault();

            var form 	= $(this)[0]; 
            var data 	= new FormData(form);

            var param = {
                url: '/api/tpk/signin',
                method: 'POST',
                data: data,
                processData:false,
                contentType: false,
                cache: false,
            };

            loading(true);
            await transAjax(param).then((res) => {
                loading(false);

                var expirationDate = new Date();
                expirationDate.setDate(expirationDate.getDate() + 7);

                var cookieString = 'access_tokenku' + "=" + encodeURIComponent(res.access_token) + "; expires=" + expirationDate.toUTCString() + "; path=/";
                document.cookie = cookieString;

                swal({text: 'Anda berhasil login', icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/dashboard';
                });
            }).catch((err) => {
                $('#alert').removeClass('d-none');
                loading(false);
            });

            function loading(state) {
                if(state) {
                    $('#btn_login').addClass('d-none');
                    $('#loading').removeClass('d-none');
                } else {
                    $('#btn_login').removeClass('d-none');
                    $('#loading').addClass('d-none');
                }
            }
        });
    </script>
</body>
</html>