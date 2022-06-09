@extends('layouts.nav')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
<!--begin::Tables Widget 11-->
<div class="card mb-1 mb-xl-8" style="background-color: #242263;">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-3" style="color: white;">Tampil Data Haikal View</span>
        </h3>

    
           </div>
    </div>
    <!--end::Header-->
 

    <!--begin::Table-->
    <div class="card card-flush mt-6 mt-xl-9" style="background-color: #242263; color: #ffff;">

          <!--begin::Card body-->
        <div class="card-body pt-0" >
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5 yajra-datatable4 text-center" style="vertical-align: middle; background-color: #242263; color: #ffff;">
                    <thead>
                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-25px">No</th>
                            <th class="min-w-65px">Waktu</th>
                            <th class="min-w-75px">Plat Nomor</th>
                            <th>Berat</th>
                            <th>JBI</th>
                            <th>Berat Berlebih</th>
                            <th>Presentase</th>
                            <th>Kecepatan</th>
                            <th>Foto Kendaraan</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    {{-- <!--begin::Tables Widget 11-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body py-3" >
            <!--begin::Table container-->
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11--> --}}

</div>
<!--end::Container-->

@endsection
