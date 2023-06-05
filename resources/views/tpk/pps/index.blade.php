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
                url: '/api/tpk/pps',
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
            $('#showDataPps').on('show.bs.modal', async function (e) {
                var id = $(e.relatedTarget).data('id');
                
                var param = {
                url: '/api/tpk/pps/show/'+id,
                method: 'GET',
            }

            // loading(true);
            await transAjax(param).then((result) => {
                // loading(false);
                $('#dataCatinById').html(result);
                ppsUpdate();
            });
            });

            // function loading(state) {
            // if(state) {
            //     $('#loading').removeClass('d-none');
            // } else {
            //     $('#loading').addClass('d-none');
            // }
        // }
        }

        function ppsUpdate()
        {
            $('#ppsUpdate').submit(async function store(e) {
            e.preventDefault();

            var form 	= $(this)[0]; 
            var data 	= new FormData(form);
            var id_pps = data.get('id');

            var param = {
                method: 'POST',
                url: '/api/tpk/pps/update/'+id_pps,
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
                        window.location.href = '/tpk/pps';
                    });
                }).catch((err) => {
                    loadingsubmit(false);
                    $('#showDataPps').modal('hide');
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
