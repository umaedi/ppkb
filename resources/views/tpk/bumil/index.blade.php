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
                url: '/api/tpk/bumil',
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
            $('#showDataBumil').on('show.bs.modal', async function (e) {
                var id = $(e.relatedTarget).data('id');
                
                var param = {
                url: '/api/tpk/bumil/show/'+id,
                method: 'GET',
            }

            // loading(true);
            await transAjax(param).then((result) => {
                // loading(false);
                $('#dataBumilById').html(result);
                updateBumil();
            });
            });
        }

        function updateBumil()
        {
            $('#bumilUpdate').submit(async function update(e) {
            e.preventDefault();

            var form 	 = $(this)[0]; 
            var data 	 = new FormData(form);
            var id_bumil = data.get('id');

            var param = {
                method: 'POST',
                url: '/api/tpk/bumil/update/'+id_bumil,
                data: data,
                processData: false,
                contentType: false,
                cache: false,
            }

                loadingsubmit(true);
                await transAjax(param).then((res) => {
                    loadingsubmit(false);
                    $('#showDataBumil').modal('hide');
                    swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                        window.location.href = '/tpk/bumil';
                    });
                }).catch((err) => {
                    loadingsubmit(false);
                    $('#showDataBumil').modal('hide');
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
