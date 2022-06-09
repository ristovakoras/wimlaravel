@extends('layouts.layouts_user.navuser_chart')

@section('content')

<!--begin::Row-->
<div class="row g-5 g-xl-12">
    <div class="col-xl-12">
        <!--begin::Statistics Widget 5-->
        <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body" style="background-color: #242263; ">
                 <h1 class="d-flex justify-content-center" style="color: white;">WELCOME TO WIM MONITORING SYSTEM</h1><hr>
            </div>
            <!--end::Body-->
        </a>
    </div>
</div>

<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <div class="col-xl-6">
        <div class="card card-xl-stretch mb-5 mb-xl-8" style="background-color: #242263; ">
             <!--begin::Header-->
             <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1 text-light" >UPPKB LOSARANG</span>
                </h3>
                <!--begin::Toolbar-->
                {{-- <div class="card-toolbar" data-kt-buttons="true">
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_2_year_btn">Day</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_2_month_btn">Week</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_2_week_btn">Month</a>
                </div> --}}
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="chartNilai" style="height: 350px" ></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card card-xl-stretch mb-5 mb-xl-8" style="background-color: #242263; ">
             <!--begin::Header-->
             <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1 text-light" >UPPKB KULWARU</span>
                </h3>
                <!--begin::Toolbar-->
                {{-- <div class="card-toolbar" data-kt-buttons="true">
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_2_year_btn">Day</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_2_month_btn">Week</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_2_week_btn">Month</a>
                </div> --}}
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="chartNilai2" style="height: 350px" ></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>


@endsection

