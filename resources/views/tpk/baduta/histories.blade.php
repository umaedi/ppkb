@extends('layouts.tpk.app')
@section('content')
<div id="appCapsule">
    <div class="section my-3" id="badutaHistories">
        <button class="btn btn-primary btn-block btn-lg mb-2 d-none" id="loading" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Tunggu sebentar yah...
        </button>
    </div>
</div>
</div>
@endsection
@push('js')

<script type="text/javascript">
    var page = 1;
    var paginate = 5;
    var search = '';

    $(document).ready(function() {
        loadData();

        $('#search').on('keypress', function (e) {
            if (e.which == 13) {
                filterTable()
                return false;
            }
        });

        $('#perPage').change(() => {
            filterTable();
        });
    });

    function filterTable() {
        paginate = $('#perPage').val(); 
        search = $('input[name=q]').val();
        loadData();
    }

    async function loadData()
        {
            var param = {
                url: "/api/tpk/baduta/histories/{{ request('kode_baduta') }}",
                method: 'GET',
            }

            loading(true);
            await transAjax(param).then((result) => {
                loading(false);
                $('#badutaHistories').html(result);
                showData();
                updateBaduta();
            });
        }

        function loading(state) {
            if(state) {
                $('#loading').removeClass('d-none');
            } else {
                $('#loading').addClass('d-none');
            }
        }

        function loadPaginate(to) {
            page = to
            loadData();
        }

        function showData()
        {
            $('#showDataBaduta').on('show.bs.modal', async function (e) {
                var id = $(e.relatedTarget).data('id');
                
                var param = {
                url: '/api/tpk/baduta/show/'+id,
                method: 'GET',
            }

            await transAjax(param).then((result) => {
                $('#dataBadutaById').html(result);
                getWilayah();
                updatePendampingan(id);
            });
            });

        function getWilayah()
        {
            $(document).ready(async function wilayah() {
                var param = {
                    method: 'GET',
                    url: '/api/tpk/wilayah',
                }

                await transAjax(param).then((res) => {
                    res.data.forEach(el => {
                        $('#wilayah').append(`
                            <option value="${el.id}">${el.nama}</option>      
                        `);
                    });
                });
            });
            }
        }

        function updateBaduta()
        {
            $('#badutaUpdate').submit(async function store(e) {
            e.preventDefault();

            var form 	= $(this)[0]; 
            var data 	= new FormData(form);

            var param = {
                method: 'POST',
                url: '/api/tpk/baduta/update/{{ request('kode_baduta') }}',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
            }

                loadingsubmit(true);
                await transAjax(param).then((res) => {
                    loadingsubmit(false);
                    $('#showDataBaduta').modal('hide');
                    swal({text: res.message, icon: 'success', timer: 3000,});
                }).catch((err) => {
                    loadingsubmit(false);
                    $('#showDataBaduta').modal('hide');
                    swal({text: err.message, icon: 'error', timer: 3000,})
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

            var _input = $('#tgl_lahir');
            _input.on('click', function() {
                _input.attr('type', 'date');
            });

            var __input = $('#tgl_lahir_bayi');
            __input.on('click', function() {
                __input.attr('type', 'date');
            });

            var ___input = $('#tgl_lahir_anak_sebelum');
            ___input.on('click', function() {
                ___input.attr('type', 'date');
            });
        }

        function updatePendampingan(id)
        {
            $('#updatePendampingan').submit(async function update(e) {
            e.preventDefault();
            
            var form 	= $(this)[0]; 
            var data 	= new FormData(form);
            var _typeData = data.get('type_data');

            if(_typeData == 'update') {
                var _url = '/api/tpk/baduta/update/'+id;
            }else {
                var _url = '/api/tpk/baduta/store';
            }

            var param = {
                method: 'POST',
                url: _url,
                data: data,
                processData: false,
                contentType: false,
                cache: false,
            }

                loadingsubmit(true);
                await transAjax(param).then((res) => {
                    loadingsubmit(false);
                    $('#showDataBaduta').modal('hide');
                    swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/baduta/histories?kode_baduta={{ request('kode_baduta') }}';
                });
                }).catch((err) => {
                    loadingsubmit(false);
                    $('#showDataBaduta').modal('hide');
                    swal({text: err.message, icon: 'error', timer: 3000,})
                });

            function loadingsubmit(state){
                if(state) {
                    $('#btn_loading_update').removeClass('d-none');
                    $('#btn_update').addClass('d-none');
                }else {
                    $('#btn_loading_udate').addClass('d-none');
                    $('#btn_update').removeClass('d-none');
                }
            }  
            });

            var _input = $('#tgl_kunjungan_berikutnya');
            _input.on('click', function() {
                _input.attr('type', 'date');
            });
        }

        async function hapusRiwayatPendampingan(id)
        {
            var param = {
                method: 'POST',
                url: '/api/tpk/baduta/histories/destroy/'+id
            }

            const willDelete = await swal({
            title: "Hapus data ini?",
            text: "Yakin ingin menghapus data ini?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                await transAjax(param).then((res) => {
                    swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/baduta/histories?kode_baduta={{ request('kode_baduta') }}';
                });
                }).catch((err) => {
                    swal({text: 'Internal Server Error!', icon: 'warning', timer: 3000,});
                });
            }
        }

        async function hapusBaduta(kode_baduta)
        {
            var param = {
                method: 'POST',
                url: '/api/tpk/baduta/histories/destroy/'+kode_baduta,
            }

            const willDelete = await swal({
            title: "Hapus data ini?",
            text: "Yakin ingin menghapus data ini?",
            icon: "warning",
            dangerMode: true,
            });

            if (willDelete) {
                await transAjax(param).then((res) => {
                    swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/baduta';
                });
                }).catch((err) => {
                    swal({text: 'Internal Server Error!', icon: 'warning', timer: 3000,});
                });
            }
        }
</script>
@endpush
