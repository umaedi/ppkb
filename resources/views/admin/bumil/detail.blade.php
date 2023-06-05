@extends('layouts.admin.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/administrator/dist/js/datatables.min.css') }}">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	  <div class="page">
	  @include('layouts.admin.navbar')
	  <div class="page-wrapper">
        <!-- Page header -->
		<div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title">
				{{ $data['title'] }}
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                 <div class="btn-list">
                 
                  <a onclick="goBack()" href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l14 0"></path><path d="M5 12l6 6"></path><path d="M5 12l6 -6"></path></svg>
					Kembali
                  </a>
                  <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="page-body">
          <div class="container-xl">
		   <div class="row row-cards pb-4">
			  <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="subheader">Ticket Kunjungan</div>
                    <div class="h3 m-0 kode_bumil">--</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="subheader">Kunjungan Terakhir</div>
                    <div class="h3 m-0 kunjungan_terakhir">--</div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="subheader">Jumlah Kunjungan</div>
                    <div class="h3 m-0 jumlah_kunjungan">-</div>
                  </div>
                </div>
              </div>
             </div>
			  
            <div class="card">
              <div class="row g-0">
                 
                <div class="col d-flex flex-column">
                  <div class="card-body">
                    <h2 class="mb-4 "> </h2>
                    <h3 class="card-title nama">--</h3>
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(static/avatars/000m.jpg)"></span>
                      </div>
                       
                    </div>
                    <h3 class="card-title mt-4">Data Pribadi</h3>
                    <div class="row g-3">
                      <div class="col-md">
                        <div class="form-label">NIK</div>
                        <div class="form-label nik">--</div>
                      </div>
                      <div class="col-md">
                        <div class="form-label">Alamat</div>
                        <div class="form-label alamat">--</div>
                      </div>
                      <div class="col-md">
                        <div class="form-label">No. Telp/Hp</div>
                        <div class="form-label telp">--</div>
                      </div> 
					  <div class="col-md">
                        <div class="form-label">Tgl. Lahir</div>
                        <div class="form-label tgl_lahir">--</div>
                      </div>
					  
					  
                    </div>
                    <h3 class="card-title mt-4">Hasil Screening</h3>
                    <p class="card-subtitle">This data will be shown to others publicly, so choose it carefully.</p>
                    <div>
                      <div class="row g-2">
                       <table id="table-intervensi" class="table table-striped table-bordered detail-view">
							<tbody>
								 
								<tr><th width="30%">Kunjungan Ke</th><td><span class="kunjungan"></span></td></tr>
								<tr><th>Pendamping TPK</th><td><span class="pendamping_id"></span></td></tr>
								<tr><th>Tgl. Kunjungan</th><td><span class="tgl_kunjungan"></span></td></tr>
								<tr><th>Kampung</th><td><span class="wilayah_id"></span></td></tr>
								<tr><th> </th><td><span class=" "></span></td></tr>
								<tr><th>Jumlah Anak</th><td><span class="jumlah_anak"></span></td></tr>
								<tr><th>Status Jumlah Anak</th><td><span class="status_jumlah_anak"></span></td></tr>
								<tr><th>Usia Hamil</th><td><span class="usia_hamil"></span></td></tr>
								<tr><th>Tinggi Fundus Uteri (TFU)</th><td><span class="tfu"></span></td></tr>
								<tr><th>Status TFU</th><td><span class="status_tfu"></span></td></tr>
								<tr><th>Berat Badan</th><td><span class="bb"></span></td></tr>
								<tr><th>Tinggi Badan</th><td><span class="tb"></span></td></tr>
								<tr><th>Indeks Massa Tubuh (IMT)</th><td><span class="status_imt"></span></td></tr>
								<tr><th>Status IMT</th><td><span class="imt"></span></td></tr>								
								<tr><th>Riwayat Penyakit</th><td><span class="riwayat_penyakit"></span></td></tr>								
								<tr><th>Status Riwayat Penyakitn</th><td><span class="status_riwayat_penyakit"></span></td></tr> 
								<tr><th>Kadar Hemoglobin (HB)</th><td><span class="kadar_hb"></span></td></tr> 
								<tr><th>Status HB</th><td><span class="status_hb"></span></td></tr>
								<tr><th>Lingkar Lengan Atas (LILA) </th><td><span class="lila"></span></td></tr>
								<tr><th>Status LILA</th><td><span class="status_lila"></span></td></tr>
								<tr><th>Taksiran berat janin (TBJ)</th><td><span class="tbj"></span></td></tr>
								<tr><th>Status TBJ</th><td><span class="status_tbj"></span></td></tr>
								<tr><th>Terpapar Rokok</th><td><span class="terpapar_rokok"></span></td></tr>
								<tr><th>Suplement Darah</th><td><span class="suplement_darah"></span></td></tr>
								<tr><th>Rujukan Pelayanan</th><td><span class="rujukan_pelayanan"></span></td></tr>
								<tr><th>BANSOS</th><td><span class="bansos"></span></td></tr>
								<tr><th>Catatan Kunjungan</th><td><span class="catatan_kunjungan"></span></td></tr>
							 
							</tbody>
						</table>
                      </div>
                    </div>
                    
                  </div>
                  <div class="card-footer bg-transparent mt-auto">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
		<!-- Page body -->
        
        @include('layouts.admin.footer')
		
      </div>
    </div>
   
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js"></script>
<script>
$('body').addClass('sidebar-xs');
	var param = 'data_intervensi';
	var id = window.location.pathname.split('/').pop();
	
	
	 
	
	function loadData(){
		
		
		$.ajax({
					data: {},
					url: BaseUrl+"/api/v1/bumil/view_id/"+id,
                    crossDomain: false,
                   
                    method: 'GET',
                    complete: function(response){ 		
                        if(response.status == 200){
							 $(".nama").html(response.responseJSON.data.nama);
							 $(".nik").html(response.responseJSON.data.nik);
							 $(".alamat").html(response.responseJSON.data.alamat);
							 $(".telp").html(response.responseJSON.data.telp);
							 $(".tgl_lahir").html(response.responseJSON.data.tgl_lahir);
							 $(".wilayah_id").html(response.responseJSON.data.wilayah_id);
							 $(".pendamping_id").html(response.responseJSON.data.pendamping_id);
							 $(".tgl_kunjungan").html(response.responseJSON.data.tgl_kunjungan);
							 $(".kunjungan").html(response.responseJSON.data.kunjungan);
							 $(".catatan_kunjungan").html(response.responseJSON.data.catatan_kunjungan);
							 
							 $(".jumlah_anak").html(response.responseJSON.data.jumlah_anak);
							 $(".status_jumlah_anak").html(response.responseJSON.data.status_jumlah_anak);
							 $(".usia_hamil").html(response.responseJSON.data.usia_hamil+' Bulan');
							 $(".tfu").html(response.responseJSON.data.tfu);
							 $(".status_tfu").html(response.responseJSON.data.status_tfu);
							 $(".bb").html(response.responseJSON.data.bb);
							 $(".tb").html(response.responseJSON.data.tb);
							 $(".imt").html(response.responseJSON.data.imt);
							 $(".status_imt").html(response.responseJSON.data.status_imt);
							 $(".riwayat_penyakit").html(response.responseJSON.data.riwayat_penyakit);
							 $(".status_riwayat_penyakit").html(response.responseJSON.data.status_riwayat_penyakit);
							 $(".kadar_hb").html(response.responseJSON.data.kadar_hb);
							 $(".status_hb").html(response.responseJSON.data.status_hb);
							 $(".lila").html(response.responseJSON.data.lila);
							 $(".status_lila").html(response.responseJSON.data.status_lila);
							 $(".tbj").html(response.responseJSON.data.tbj);
							 $(".status_tbj").html(response.responseJSON.data.status_tbj);
							 $(".terpapar_rokok").html(response.responseJSON.data.terpapar_rokok);
							 $(".suplement_darah").html(response.responseJSON.data.suplement_darah);
							 $(".rujukan_pelayanan").html(response.responseJSON.data.rujukan_pelayanan);
							 $(".bansos").html(response.responseJSON.data.bansos);
							 $(".jumlah_kunjungan").html(response.responseJSON.data.jumlah_kunjungan+' <a class="text-info small ps-4" href="'+BaseUrl+'/administrator/data_bumil/kode_bumil/'+response.responseJSON.data.kode_bumil+'">Lihat Riwayat</a>');
							 $(".kunjungan_terakhir").html(response.responseJSON.data.kunjungan_terakhir);
							 
							 $(".kode_bumil").html('<a class="text-info" href="'+BaseUrl+'/administrator/data_bumil/kode_bumil/'+response.responseJSON.data.kode_bumil+'">'+response.responseJSON.data.kode_bumil+'</a>');
							 
							 
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 404){
							 
							 //window.location.replace(BaseUrl+'/skpd/'+param);
						}
                    },
					dataType:'json'
                })
	}
	
	loadData();

	
	function nullToDash(obj){
			if(obj===null){
				return "";
			}else{
				return obj;
			} 
	}
	
	function prints() {
		$('td:nth-child(11), th:nth-child(11)').hide();
		$('td:nth-child(10), th:nth-child(10)').hide();
		$('#datatable-intervensi thead').removeClass('bg-teal-700');
		$(".datatable-scroll").printArea({ mode: 'popup', popClose: true });
	};

	
	 
</script>

@endsection