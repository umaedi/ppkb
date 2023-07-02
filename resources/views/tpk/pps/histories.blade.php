@extends('layouts.tpk.app')
@section('content')
<div id="appCapsule">
    <div class="section my-3" id="ppsHistories">
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
                url: "/api/tpk/pps/histories/{{ request('kode_pps') }}",
                method: 'GET',
            }

            loading(true);
            await transAjax(param).then((result) => {
                loading(false);
                $('#ppsHistories').html(result);
                showData();
                updatePps();
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
            $('#showDataPps').on('show.bs.modal', async function (e) {
                var id = $(e.relatedTarget).data('id');
                
                var param = {
                url: '/api/tpk/pps/show/'+id,
                method: 'GET',
            }

            await transAjax(param).then((result) => {
                $('#dataPpsById').html(result);
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

        function updatePps()
        {
            $('#ppsUpdate').submit(async function store(e) {
            e.preventDefault();

            var form 	= $(this)[0]; 
            var data 	= new FormData(form);

            var param = {
                method: 'POST',
                url: '/api/tpk/pps/update/{{ request('kode_pps') }}',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
            }

                loadingsubmit(true);
                await transAjax(param).then((res) => {
                    loadingsubmit(false);
                    $('#showDataPps').modal('hide');
                    swal({text: res.message, icon: 'success', timer: 3000,});
                }).catch((err) => {
                    loadingsubmit(false);
                    $('#showDataPps').modal('hide');
                    swal({text: err.message, icon: 'error', timer: 3000,})
                });

            function loadingsubmit(state){
                if(state) {
                    $('#btn_loading_pps').removeClass('d-none');
                    $('#btn_update_pps').addClass('d-none');
                }else {
                    $('#btn_loading_pps').addClass('d-none');
                    $('#btn_update_pps').removeClass('d-none');
                }
            }  
            });

            var _input = $('#tgl_lahir');
            _input.on('click', function() {
                _input.attr('type', 'date');
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
                var _url = '/api/tpk/pps/update/'+id;
            }else {
                var _url = '/api/tpk/pps/store';
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
                    $('#showDataPps').modal('hide');
                    swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                    window.location.href = '/tpk/pps/histories?kode_pps={{ request('kode_pps') }}';
                });
                }).catch((err) => {
                    loadingsubmit(false);
                    $('#showDataPps').modal('hide');
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

            var _input = $('#tgl_kunjungan_berikut');
            _input.on('click', function() {
                _input.attr('type', 'date');
            });

            var __input = $('#tgl_kunjungan');
            __input.on('click', function() {
                __input.attr('type', 'date');
            });

            var tgl_melahirkan = $('#tgl_melahirkan');
            tgl_melahirkan.on('click', function() {
                tgl_melahirkan.attr('type', 'date');
            });
        }

        async function hapusRiwayatPendampingan(id)
        {
            var param = {
                method: 'POST',
                url: '/api/tpk/pps/histories/destroy/'+id
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
                    window.location.href = '/tpk/pps/histories?kode_pps={{ request('kode_pps') }}';
                });
                }).catch((err) => {
                    swal({text: 'Internal Server Error!', icon: 'warning', timer: 3000,});
                });
            }
        }

        async function hapusPps(kode_pps)
        {
            var param = {
                method: 'POST',
                url: '/api/tpk/pps/histories/destroy/'+kode_pps,
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
                    window.location.href = '/tpk/pps';
                });
                }).catch((err) => {
                    swal({text: 'Internal Server Error!', icon: 'warning', timer: 3000,});
                });
            }
        }
</script>
@endpush
