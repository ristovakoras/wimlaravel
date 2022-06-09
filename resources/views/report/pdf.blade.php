<!DOCTYPE html>
<html>
<head>
	<title>Laporan Bulanan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">
        .table-kop {
            margin: auto;
            width: 75%;
            text-align: center
        }
        table tr td,
		table tr th{
			font-size: 10pt;
            text-align: center;
            vertical-align: middle;
		}

	</style>
<body>

    <table class="table-kop">
        <tr>
            <th rowspan="2"><img src="{{ storage_path('app/public/logo_kemenhub.png') }}" class="img_thumbnail" alt="..." width="100"></th>
            <th><h6>DIREKTORAT JENDERAL PERHUBUNGAN DARAT</h6></th>
        </tr>
            <th><h6>KEMENTERIAN PERHUBUNGAN</h6></th>
    </table>
<hr>

    <table class="table table-bordered gs-0 gy-1">
        <!--begin::Table head-->
        <thead>
            <tr>
                <th rowspan="2" style="vertical-align: middle;">#</th>
                <th rowspan="2" style="vertical-align: middle;">Waktu</th>
                <th rowspan="2" style="vertical-align: middle;">Jumlah Kendaraan</th>
                <th colspan="2" style="vertical-align: middle;">Pelanggaran</th>
                <th rowspan="2" style="vertical-align: middle;">Plat Nomor Tidak Ada</th>
            </tr>
            <tr>
                <th>Berat Lebih</th>
                <th>Dimensi Lebih</th>
            </tr>
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        @foreach ($datawim as $key => $wim )
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $wim->WeighingDate }}</td>
                <td>{{ $wim->total }}</td>
                <td>{{ $wim->total_berat }}</td>
                <td>{{ $wim->total_dimensi }}</td>
                <td>{{ $wim->total_plat }}</td>
            </tr>
        </tbody>
        <!--end::Table body-->
        @endforeach
    </table>
    <!--end::Table-->
</body>
</html>