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

            // loading(true);
            await transAjax(param).then((result) => {
                // loading(false);
                $('#dataBadutaById').html(result);
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
                    updateBaduta();
                });
            });
            }
        }

        function updateBaduta()
        {
            $('#catinUpdate').submit(async function store(e) {
            e.preventDefault();

            var form 	= $(this)[0]; 
            var data 	= new FormData(form);
            var id_catin = data.get('id');

            var param = {
                method: 'POST',
                url: '/api/tpk/baduta/update/'+id_catin,
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
                        window.location.href = '/tpk/baduta';
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
