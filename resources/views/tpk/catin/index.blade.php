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

            await transAjax(param).then((result) => {
                $('#dataCatinById').html(result);
                getWilayah();
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
</script>
@endpush
