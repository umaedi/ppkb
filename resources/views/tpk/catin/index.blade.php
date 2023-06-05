@extends('layouts.tpk.app')
@section('content')
<div id="appCapsule">
    <div class="section my-3">
        <div class="card">
            <div class="card-body">
                    <div class="row">
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <input type="text" class="form-control"  id="search" placeholder="Cari berdasarkan nama..." name="q">
                            </div>
                        </div>
                        <div class="form-group boxed">
                            <select class="form-control custom-select"  id="perPage">
                                <option value="">--Perhalaman--</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
            @include('components._loading')
            <div class="table-responsive" id="data-table">
                
            </div>
        </div>
        {{-- <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Pria Berdasarkan Keterpaparan Merokok
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Status
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Usia
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Index Masa Tumbuh (IMT)
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Lingkar Lengan Atas (LiLA)
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Kadar HB
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Keterpaparan Merokok
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Calon Pengantin Wanita Berdasarkan Status Pernikahan
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Pendampingan Calon Pengantin Wanita
            </div>
            <div class="card-body">
                data
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header">
                Pendampingan Calon Pengantin Pria
            </div>
            <div class="card-body">
                data
            </div>
        </div> --}}
    </div>
</div>
@endsection
@push('js')
{{-- <script src="{{ $catinChart->cdn() }}"></script>
{{ $catinChart->script() }} --}}

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
                url: '/api/tpk/catin',
                method: 'GET',
                data: {
                    load: 'table',
                    page: page,
                    paginate: paginate,
                    search: search,
                }
            }

            loading(true);
            await transAjax(param).then((result) => {
                loading(false);
                $('#data-table').html(result);
                showData();
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
            $('#showDataCatin').on('show.bs.modal', async function (e) {
                var id = $(e.relatedTarget).data('id');
                
                var param = {
                url: '/api/tpk/catin/show/'+id,
                method: 'GET',
            }

            // loading(true);
            await transAjax(param).then((result) => {
                // loading(false);
                $('#dataCatinById').html(result);
                getWilayah();
            });
            });

            // function loading(state) {
            // if(state) {
            //     $('#loading').removeClass('d-none');
            // } else {
            //     $('#loading').addClass('d-none');
            // }
        // }

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
                    updateCatin();
                });
            });
            }
        }

        function updateCatin()
        {
            $('#catinUpdate').submit(async function store(e) {
            e.preventDefault();

            var form 	= $(this)[0]; 
            var data 	= new FormData(form);
            var id_catin = data.get('id');

            var param = {
                method: 'POST',
                url: '/api/tpk/catin/update/'+id_catin,
                data: data,
                processData: false,
                contentType: false,
                cache: false,
            }

                loadingsubmit(true);
                await transAjax(param).then((res) => {
                    loadingsubmit(false);
                    $('#showDataCatin').modal('hide');
                    swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                        window.location.href = '/tpk/catin';
                    });
                }).catch((err) => {
                    loadingsubmit(false);
                    $('#showDataCatin').modal('hide');
                    swal({text: err.message, icon: 'error', timer: 3000,})
                });

            function loadingsubmit(state){
                if(state) {
                    $('#btn_loading').removeClass('d-none');
                    $('#btn_submit').addClass('d-none');
                }else {
                    $('#btn_loading').addClass('d-none');
                    $('#btn_submit').removeClass('d-none');
                }
            }  
            });
        }
</script>
@endpush
