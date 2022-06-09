
                <table>
                    <!--begin::Table head-->

                    <thead>
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">Waktu</th>
                            <th rowspan="2">Jumlah Kendaraan Yang Diperiksa</th>
                            <th colspan="3">Pelanggaran</th>
                        </tr>
                        <tr>
                            <th>Berat Lebih</th>
                            <th>Dimensi Lebih</th>
                            <th>Plat Nomor Tidak Ada</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    @foreach ($datawim as $key => $wim )
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $wim->WeighingDate }}</td>
                            <td>{{ $wim->total }} <br>Kendaraan</td>
                            <td>{{ $wim->total_berat }}</td>
                            <td>{{ $wim->total_dimensi }}</td>
                            <td>{{ $wim->total_plat }}</td>

                        </tr>

                    </tbody>
                    <!--end::Table body-->
                    @endforeach
                </table>
                <!--end::Table-->

                {{-- <table class="table align-middle gs-0 gy-1" style="color: white;">
                    <!--begin::Table head-->

                    <thead>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74; ">
                            <th rowspan="2" class="min-w-50px">#</th>
                            <th rowspan="2" class="min-w-100px">Waktu</th>
                            <th rowspan="2" class="min-w-100px">Jumlah Kendaraan Yang Diperiksa</th>
                            <th colspan="3" class="mx-4">Pelanggaran</th>
                        </tr>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74; ">
                            <th class="min-w-50px">Berat Lebih</th>
                            <th class="min-w-50px">Dimensi Lebih</th>
                            <th class="min-w-50px">Plat Nomor Tidak Ada</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    @foreach ($datawim as $key => $wim )
                    <tbody class="">
                        <tr>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <p>{{ $loop->iteration }}</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->WeighingDate }}</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total }} <br>Kendaraan</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total_berat }}</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total_dimensi }}</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center text-center">
                                    <p>{{ $wim->total_plat }}</p>
                                </div>
                            </td>

                        </tr>

                    </tbody>
                    <!--end::Table body-->
                    @endforeach
                </table>
                <!--end::Table--> --}}
