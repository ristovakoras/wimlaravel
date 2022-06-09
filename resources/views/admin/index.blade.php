@extends('layouts.nav_chart')

@section('content')

{{-- <!--begin::Row-->
<div class="row g-5 g-xl-12">
    <div class="col-xl-12">
        <!--begin::Statistics Widget 5-->
        <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8" style="border-style: none;">
            <!--begin::Body-->
            <div class="card-body" style="background-color: #242263; border-style: none;">
                 <h1 class="d-flex justify-content-center" style="color: white;">WELCOME TO WIM MONITORING SYSTEM</h1><hr>
            </div>
            <!--end::Body-->
        </a>
    </div>
</div> --}}

<!--begin::Row-->
<div class="row">
    <div class="col-xl-12">
        <div class="card card-xl-stretch mb-1 mb-xl-4" style="background-color: #242263; border-style: none;">
             <!--begin::Header-->
             {{-- <div class="card-header border-0 g-10">
                <h3 class="card-title align-items-center flex-column">
                </h3>
            </div> --}}
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <span class="card-label fw-bolder fs-3 text-light d-flex justify-content-center" >Periode 2022 - Jumlah Kendaraan Yang Diperiksa</span>
                <!--begin::Chart-->
                <div id="kt_apexcharts_1" style="height: 190px" ></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>

<!--begin::Row-->
<div class="row">
    <div class="col-xl-6">
        <div class="card card-xl-stretch mb-1 mb-xl-4" style="background-color: #242263; border-style: none;">
            <!--begin::Body-->
            <div class="card-body">
                <span class="card-label fw-bolder fs-3 text-light" >UPPKB LOSARANG</span>
              <!--begin::Wrapper-->
			<div class="d-flex flex-wrap mt-3">
				<!--begin::Chart-->
				<div class="d-flex flex-center h-150px w-150px me-5">
					<canvas id="kt_project_list_chart"></canvas>
				</div>
				<!--end::Chart-->
				<!--begin::Labels-->
				<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11">
					<!--begin::Label-->
					<div class="d-flex fs-4 fw-bold align-items-center mb-3">
						<div class="bullet bg-success me-3"></div>
						<div class="text-gray-100">Berat Lebih</div>
						<div class="ms-auto fw-bolder text-gray-100">{{ number_format($datawim) }}</div>
					</div>
					<!--end::Label-->
														<!--begin::Label-->
					<div class="d-flex fs-4 fw-bold align-items-center mb-3">
						<div class="bullet bg-warning me-3"></div>
						<div class="text-gray-100">Dimensi Lebih</div>
						<div class="ms-auto fw-bolder text-gray-100">{{ $datalidar }}</div>
					</div>
					<!--end::Label-->
					<!--begin::Label-->


                    <div class="d-flex fs-4 fw-bold align-items-center mb-3">
						<div class="bullet bg-gray-300 me-3"></div>
						<div class="text-gray-100">Tidak Ada Plat Nomor</div>
						<div class="ms-auto fw-bolder text-gray-100">{{ $datawim2 }}</div>
					</div>
					<!--end::Label-->
				</div>
				<!--end::Labels-->
			</div>
			<!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card card-xl-stretch mb-5 mb-xl-8" style="background-color: #242263; border-style: none;">
            <!--begin::Body-->
            <div class="card-body">
                <span class="card-label fw-bolder fs-3 text-light" >UPPKB KULWARU</span>
			<!--begin::Wrapper-->
			<div class="d-flex flex-wrap mt-3">
				<!--begin::Chart-->
				<div class="d-flex flex-center h-150px w-150px me-5">
					<canvas id="kt_project_list_chart2"></canvas>
				</div>
				<!--end::Chart-->
				<!--begin::Labels-->
				<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11">
					<!--begin::Label-->
					<div class="d-flex fs-5 fw-bold align-items-center mb-3">
						<div class="bullet bg-success me-3"></div>
						<div class="text-gray-100">Berat Lebih</div>
						<div class="ms-auto fw-bolder text-gray-100">{{ number_format($datawim) }}</div>
					</div>
					<!--end::Label-->
														<!--begin::Label-->
					<div class="d-flex fs-5 fw-bold align-items-center mb-3">
						<div class="bullet bg-warning me-3"></div>
						<div class="text-gray-100">Dimensi Lebih</div>
						<div class="ms-auto fw-bolder text-gray-100">{{ $datalidar }}</div>
					</div>
					<!--end::Label-->
					<!--begin::Label-->
					<div class="d-flex fs-5 fw-bold align-items-center">
						<div class="bullet bg-gray-300 me-3"></div>
						<div class="text-gray-100">Tidak Ada Plat Nomor</div>
						<div class="ms-auto fw-bolder text-gray-100">{{ $datawim2 }}</div>
					</div>
					<!--end::Label-->
				</div>
				<!--end::Labels-->
			</div>
			<!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>


@endsection

