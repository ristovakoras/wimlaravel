@extends('layouts.nav')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">

    <!--begin::Tables Widget 11-->
    <div class="card" style="background-color: #242263; border-style: none;"">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-3" style="color: white;">Tampil Data Losarang</span>
            </h3>


        </div>
        </div>
        <!--end::Header-->

    <!--begin::Tables Widget 11-->
    <div class="card" style="background-color: #242263; border-style: none;"">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6 ">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <form action="{{ url('losarang') }}" method="GET">
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->

                            <input type="search" name="search" data-kt-customer-table-filter="search" class="form-control form-control-solid w-205px ps-15" placeholder="Search Plat Nomor" />
                            {{-- <button href="#" class="btn btn-icon btn-primary mx-3"><i class="las la-search fs-2 "></i></button> --}}
                    </div>
                    <!--end::Search-->
            </form>

            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-start" data-kt-customer-table-toolbar="base">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Pilih Tanggal</button>
                    <!--begin::Modal-->
                    <form action="{{ url('losarang') }}" method="GET">
                        <div class="modal fade" tabindex="-1" id="kt_modal_1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Pilih Tanggal</h5>

                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-light-success ms-2" data-bs-dismiss="modal" aria-label="Close">
                                            <span class="svg-icon svg-icon-2x"></span>
                                        </div>
                                        <!--end::Close-->
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-0">
                                            <label for="" class="form-label">Tanggal Awal :</label>
                                            <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_3" name="start_date"/>
                                        </div>
                                        <div class="mb-0">
                                            <label for="" class="form-label mt-3">Tanggal Akhir :</label>
                                            <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_4" name="end_date"/>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-success">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Modal-->
                    </form>

                    <form action="{{ url('losarang') }}" method="GET">
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
            <div class="table-responsive" style="height: 600px">
                <!--begin::Table-->
                <table class="table table-head m-grid-col-middle gs-0 gy-0 " style="color: white; font-size: 15px; overflow: auto;">
                    <!--begin::Table head-->
                    <thead class="table-los h-35px m-grid-col-middle" style="position: sticky; top: 0;" id="table-head">
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74; ">
                            <th class="min-w-10px">#</th>
                            <th class="min-w-150px">Waktu</th>
                            <th class="min-w-130px">Plat Nomor</th>
                            <th class="min-w-50px"></th>
                            <th class="min-w-100px">Standar</th>
                            <th class="min-w-80px">Pengukuran</th>
                            <th class="min-w-100px">Kelebihan</th>
                            <th class="min-w-80px">Persen</th>
                            <th class="min-w-30px" style="background-color: #302e74;"></th>
                            <th class="min-w-140px">Berat</th>
                            <th class="min-w-150px">JBI</th>
                            <th class="min-w-100px">Kecepatan</th>
                            <th class="min-w-85px">Foto Kendaraan</th>
                            {{-- <th rowspan="2" class="min-w-125px">Foto Lidar</th> --}}
                            <th class="min-w-500px">Axle</th>
                            {{-- <th rowspan="2" class="min-w-125px">Foto Plat Nomor</th> --}}
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    @foreach ($datawim as $key => $wim )
                    <!--begin::Table body-->
                    <tbody class="m-grid-col-middle" style="vertical-align: middle">
                        <tr>
                            <th rowspan="4">
                                <div class="d-flex justify-content-center">
                                    {{ $datawim->firstItem() + $key }}
                                </div>
                            </th>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->WeighingDateTime }}</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->LicencePlate }}</p>
                                </div>
                            </td>

                            <tr>
                                <th class="fw-bolder text-muted text-center">
                                    <div class="d-flex justify-content-center" style="background-color: #302e74;">
                                        <p class="m-1">Panjang</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarLimitLength)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarReadingLength)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarOverLength)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ number_format($wim->LidarPercentageLength) }} %</p>
                                    </div>
                                </td>
                                <td style="background-color: #302e74;">
                                    <div class="d-flex justify-content-center">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->Weight_wim),2)) }} Kg</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ $wim->LimitWeight }} Kg</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ $wim->Speed }} Km/j</p>
                                    </div>
                                </td>
                                <td rowspan="4">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn{{ $wim->id }}" style="background-color: transparent;">
                                            <img src="{{ $wim->Image }}" width="140" style="background-color: transparent;">
                                          </button>
                                          <!--begin::Modal - Share & Earn-->
                                            <div class="modal fade" id="kt_modal_share_earn{{ $wim->id }}" tabindex="-1" aria-hidden="true" style="background-color: transparent; ">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <img src="{{ $wim->Image }}" width="650">
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>
                                            <!--end::Modal - Share & Earn-->
                                    </div>
                                </td>
                                <td style="color: white;">
                                    <div class="d-flex justify-content-center text-center">
                                        <p class="m-1">
                                            @if($wim->AxleWeight_5 > '0')
                                            {{ str_replace('.',',',round(($wim->AxleWeight_1)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_2)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_3)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_4)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_5)/1000,2)) }} m
                                        </p>
                                        <p class="m-1">
                                            @elseif($wim->AxleWeight_4 > '0')
                                            {{ str_replace('.',',',round(($wim->AxleWeight_1)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_2)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_3)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_4)/1000,2)) }} m
                                        </p>
                                        <p class="m-1">
                                            @elseif($wim->AxleWeight_3 > '0')
                                            {{ str_replace('.',',',round(($wim->AxleWeight_1)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_2)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_3)/1000,2)) }} m
                                        </p>
                                        <p class="m-1">
                                            @else
                                            {{ str_replace('.',',',round(($wim->AxleWeight_1)/1000,2)) }} m -
                                            {{ str_replace('.',',',round(($wim->AxleWeight_2)/1000,2)) }} m
                                        </p>
                                        @endif
                                        {{-- <p>{{ $wim->AxleWeight_1 }}</p> --}}
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-bolder text-muted text-center">
                                    <div class="d-flex justify-content-center" style="background-color: #302e74;">
                                        <p class="m-1">Lebar</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarLimitWidth)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarReadingWidth)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarOverWidth)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ number_format($wim->LidarPercentageWidth) }} %</p>
                                    </div>
                                </td>
                                <td style="background-color: #302e74;">
                                    <div class="d-flex justify-content-center">
                                    </div>
                                </td>
                                <th class="fw-bolder text-muted text-center" style="background-color: #302e74;">
                                    <div class="d-flex justify-content-center min-w-140px">
                                        <p class="m-1">Kelebihan</p>
                                    </div>
                                </th>
                                <th class="fw-bolder text-muted text-center" style="background-color: #302e74; ">
                                    <div class="d-flex justify-content-center min-w-140px">
                                        <p class="m-1">Persen</p>
                                    </div>
                                </th>
                                <td rowspan="2">
                                    <div class="d-flex justify-content-center" style="vertical-align: middle;">
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn{{ $wim->id }}" style="background-color: transparent;">
                                            <img src="{{ $wim->Image }}" width="80" style="background-color: transparent;">
                                          </button>

                                          <!--begin::Modal - Share & Earn-->
                                            <div class="modal fade" id="kt_modal_share_earn{{ $wim->id }}" tabindex="-1" aria-hidden="true" style="background-color: transparent; ">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <img src="{{ $wim->Image }}" width="650">
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>
                                            <!--end::Modal - Share & Earn-->
                                    </div>
                                </td>
                                <td style="color: white;">
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">
                                            @if(($wim->AxleWeight_5) > 0)
                                            <img src="{{ asset('image/5_axle.png') }}" width="180">
                                        </p>
                                        <p class="m-1">
                                            @elseif(($wim->AxleWeight_4) > 0)
                                            <img src="{{ asset('image/4_axle.png') }}" width="140">
                                        </p>
                                        <p class="m-1">
                                            @elseif(($wim->AxleWeight_3) > 0)
                                            <img src="{{ asset('image/3_axle.png') }}" width="110">
                                        </p>
                                        <p class="m-1">
                                            @else
                                            <img src="{{ asset('image/2_axle.png') }}" width="60">
                                        </p>
                                        @endif
                                        {{-- <p>{{ $wim->AxleWeight_1 }}</p> --}}
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <th class="fw-bolder text-muted text-center">
                                    <div class="d-flex justify-content-center" style="background-color: #302e74;">
                                        <p class="m-1">Tinggi</p>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarLimitHeight)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarReadingHeight)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ str_replace('.',',',round(($wim->LidarOverHeight)/1000,2)) }} m</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ number_format($wim->LidarPercentageHeight) }} %</p>
                                    </div>
                                </td>
                                <td style="background-color: #302e74;">
                                    <div class="d-flex justify-content-center">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                       <p class="m-1">{{ str_replace('.',',',round(($wim->OverWeight),2)) }} Kg</p>                                
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <p class="m-1">{{ number_format($wim->OverPercentage) }} %</p>
                                    </div>
                                </td>
                                <td style="color: white;">
                                    <div class="d-flex justify-content-center text-center">
                                        <p class="m-1">
                                            @if($wim->AxleWeight_5 > '0')
                                            {{ $wim->Distance_1 }}  -
                                            {{ $wim->Distance_2 }}  -
                                            {{ $wim->Distance_3 }}  -
                                            {{ $wim->Distance_4 }}
                                        </p>
                                        <p class="m-1">
                                            @elseif($wim->AxleWeight_4 > '0')
                                            {{ $wim->Distance_1 }}  -
                                            {{ $wim->Distance_2 }}  -
                                            {{ $wim->Distance_3 }}
                                        </p>
                                        <p class="m-1">
                                            @elseif($wim->AxleWeight_3 > '0')
                                            {{ $wim->Distance_1 }}  -
                                            {{ $wim->Distance_2 }}
                                        </p>
                                        <p class="m-1">
                                            @else
                                            {{ $wim->Distance_1 }}
                                        </p>
                                        @endif
                                        {{-- <p>{{ $wim->AxleWeight_1 }}</p> --}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="14">
                                    <div class="separator separator-dashed border-light my-5"></div>
                                </td>
                            </tr>
                        </tr>

                        {{-- <tr>
                            <th>
                                <div class="d-flex justify-content-left">
                                    Lebar
                                </div>
                            </th>
                        </tr>

                        <tr>
                            <th>
                                <div class="d-flex justify-content-left">
                                    Tinggi
                                </div>
                            </th>
                        </tr> --}}
                    </tbody>
                    <!--end::Table body-->
                    @endforeach
                </table>
                <!--end::Table-->
            </div>
            <br>
            <div class="pull-right">
            {{ $datawim->onEachSide(3)->links() }}
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
