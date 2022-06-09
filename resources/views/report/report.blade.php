@extends('layouts.nav')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">

    <!--begin::Tables Widget 11-->
    <div class="card" style="background-color: #242263; border-style: none;"">
        <!--begin::Header-->

        <form action="{{ url('report') }}" method="GET">
        <div class="card-header border-0 pt-5">
            <div class="row w-100">
                <h3 class="card-title align-items-start flex-column">
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                        </svg>
                        <span class="card-label fw-bolder fs-3 mb-3" style="color: white;">Filter Data</span>
                    </span>
                </h3>
                <div class="separator separator-dashed border-light my-5"></div>
            </div>
            <div class="row mb-3 w-100">
                <div class="col-4">
                    <select class="form-select form-select-solid" aria-label="Select example">
                        <option>Pilih Daerah UPPKB</option>
                        <option value="1">Losarang</option>
                    </select>
                </div>
                <div class="col-2">
                    <select class="form-select form-select-solid" aria-label="Select example" id="tag_select" name="month">
                        <option>Bulan</option>
                            <option value="01" name="01" > Januari</option>
                            <option value="02" name="02"> Februari</option>
                            <option value="03" name="03"> Maret</option>
                            <option value="04" name="04"> April</option>
                            <option value="05" name="05"> Mei</option>
                            <option value="06" name="06"> Juni</option>
                            <option value="07" name="07"> Juli</option>
                            <option value="08" name="08"> Agustus</option>
                            <option value="09" name="09"> September</option>
                            <option value="10" name="10"> Oktober</option>
                            <option value="11" name="11"> November</option>
                            <option value="12" name="12"> Desember</option>
                    </select>
                </div>
                <div class="col-2">
                    <select class="form-select form-select-solid" aria-label="Select example" id="tag_select" name="year">
                        <option>Tahun</option>
                            <?php
                            $year = date('Y');
                            $min = $year;
                                $max = $year;
                            for( $i=$max; $i>=$min; $i-- ) {
                            echo '<option value='.$i.'>'.$i.'</option>';
                        }?>
                    </select>
                </div>
                <div class="col-2">
                    <button type="submit" href="#" class="btn btn-success mx-3">Filter</button>
                </div>
            </div>
            </form>
            <div class="row mb-3 w-100">
                <div class="col-1">
                    <form action="{{ url('exportexcel') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Export Excel</button>
                        <input type= "hidden" name= "year" value= "{{ $rawyear }}">
                        <input type= "hidden" name= "month" value= "{{ $rawmonth }}" >
                    </form>
                </div>
                <div class="col-1">
                    <form action="{{ url('exportpdf') }}" method="GET" target="_blank">
                        <button type="submit" class="btn btn-success">Export PDF</button>
                        <input type= "hidden" name= "month" value= "{{ $rawmonth }}" >
                        <input type= "hidden" name= "year" value= "{{ $rawyear }}">
                    </form>
                </div>
                {{-- <div class="col-2">
                    <input type= "hidden" name= "year" value= "{{ $rawyear }}">
                    <input type= "hidden" name= "month" value= "{{ $rawmonth }}">
                    <a href="/exportpdf/{month}/{year}" onclick="this.href='/exportpdf'+document.getElementById('month').value +
                    '/' + document.getElementById('year').value" target="_blank" class="btn btn-success">Export PDF</a>
                </div> --}}
            </div>


        </div>
    </div>
        <!--end::Header-->

    <!--begin::Tables Widget 11-->
    <div class="card" style="background-color: #242263; border-style: none;"">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">

            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-start" data-kt-customer-table-toolbar="base">
                    <form action="{{ url('report') }}" method="GET">
                        <button type="submit" href="#" class="btn btn-success mx-3" id="kt_button_1">
                            <span class="indicator-label">
                                Refresh
                            </span>
                            <span class="indicator-progress">
                                Mohon tunggu... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </form>



                </div>
                <!--end::Toolbar-->

            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <div class="separator separator-dashed border-light my-5"></div>

        <!--begin::Body-->
        <div class="card-body py-3" >
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-1" style="color: white;"">
                    <!--begin::Table head-->

                    <thead>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74; ">
                            <th rowspan="2" class="min-w-50px">#</th>
                            <th rowspan="2" class="min-w-100px">Waktu</th>
                            <th rowspan="2" class="min-w-100px">Jumlah Kendaraan</th>
                            <th colspan="2" class="mx-4">Pelanggaran</th>
                            <th rowspan="2" class="min-w-50px">Plat Nomor Tidak Ada</th>
                        </tr>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74; ">
                            <th class="min-w-50px">Berat Lebih</th>
                            <th class="min-w-50px">Dimensi Lebih</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    @foreach ($datawim as $key => $wim )
                    <tbody class="">
                        <tr>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>{{ $loop->iteration }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->WeighingDate }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total_berat }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total_dimensi }}</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total_plat }}</p>
                                </div>
                            </td>

                        </tr>

                    </tbody>
                    <!--end::Table body-->
                    @endforeach
                </table>
                <!--end::Table-->
            </div>
            <br>
            <div class="pull-right">

            </div>
            <br>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11-->


</div>
<!--end::Container-->
@endsection
