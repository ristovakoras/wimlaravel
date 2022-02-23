@extends('layouts.app_dashboard')


@section('content')

{{-- Row Start --}}
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card card-up">
            <div class="card-body card-body-up">
                <h5 class="text-center p-4">KEMENTERIAN PERHUBUNGAN<br>
                    DITJEN PERHUBUNGAN DARAT</h5>
            </div>
        </div>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-1">
        <div class="card card-image text-center">
            <div class="card-header">
                <img src="{{ asset('image/logo_kemenhub.png') }}" width="39">
            </div>
        </div>
    </div>
    <div class="col-lg-5 pt-4 col-md-5">
        <h5 style="color: white">DAERAH UPPKB</h5>
    </div>
    <div class="col-lg-1 offset-lg-6 col-md-1 offset-md-6 mt-3">
        <div class="card card-image">
            <div class="card-header">
                <img src="{{ asset('image/logo_ditjen_darat.png') }}" width="30">
            </div>
        </div>
    </div>
    <div class="col-xl-5 mt-3 col-md-5">
        <div class="btn-group">
            <button class="btn btn-secondary btn-xl dropdown-toggle btn-dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </button>
            <div class="dropdown-menu btn-dropdown-menu">
                <a class="dropdown-item" href="#">LOSARANG</a>
                <a class="dropdown-item" href="#">KULWARU</a>
            </div>
          </div>

    </div>
</div>
{{-- End Row --}}

{{-- Start Row --}}
<div class="row mt-4">

    <div class="col-xl-1  col-md-1 ">
        <div class="card text-center card-start">
            <div class="card-header">
                <p>START</p>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-md-2">
        <div class="container container-text">
            <input type="text" id="picker" class="form-control">
        </div>
    </div>

    <div class="col-xl-1 col-md-1">
        <div class="card text-center card-start2">
            <div class="card-header">
                <p>BERAT MINIMUM</p>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-md-2">
        <input type="text" class="border1" placeholder="   Diisi.....">
    </div>

    <div class="col-xl-1 offset-xl-1 col-md-1 offset-md-1">
        <div class="card text-center card-start3">
            <div class="card-header">
                <p>PELANGGARAN</p>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-4">
        <input type="text" class="border2" placeholder="   Diisi.....">
    </div>


</div>
{{-- End Row --}}


{{-- Start Row --}}
<div class="row mt-4">

    <div class="col-xl-1 col-md-1">
        <div class="card text-center card-start">
            <div class="card-header">
                <p>STOP</p>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-md-2">
        <div class="container container-text">
            <input type="text"  id="picker2" class="form-control">
        </div>
    </div>

    <div class="col-xl-1 col-md-1">
        <div class="card text-center card-start2">
            <div class="card-header">
                <p>DIMENSI</p>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-md-2">
        <input type="text" class="border1"  placeholder="   Diisi.....">

    </div>

    <div class="col-xl-5 offset-xl-1 col-md-5 offset-md-1">
        <button type="submit" class="btn signin2">{{ __('Cari') }}</button>
    </div>


</div>
{{-- End Row --}}


<div class="row">
    <div class="col-xl-12 col-md-13 col-sm-12">
      <div class="d-flex justify-content-sm-center"><h2 class="my-5" style="color:#6cf5ff;">TAMPIL DATA</h2></div>
    </div>
  </div>

    <div class="col-xl-12">
      <table class="table table-dark table-hover table-data ">
        <thead class="text-center" style="color: white;">
            <tr >
                <th scope="col">#</th>
                <th scope="col">Waktu</th>
                <th scope="col">Plat Nomor</th>
                <th scope="col">Berat</th>
                <th scope="col">Berat Berlebih</th>
                <th scope="col">Panjang</th>
                <th scope="col">Lebar</th>
                <th scope="col">Tinggi</th>
                <th scope="col">Pelanggaran</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody class="text-center" style="color: #6cf5ff ;">
            @foreach ($data as $wim )

          <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $wim->WeighingDateTime }}</td>
              <td>{{ $wim->LicencePlate }}</td>
              <td>{{ $wim->Weight }}</td>
              <td>{{ $wim->OverWeight }}</td>
              <td>{{ $wim->Axle_wim }}</td>
              <td>3.5 m</td>
              <td>5.6 M</td>
              <td>Over Weight</td>
              <td><img src="{{ asset($wim->Image) }}" width="250"></td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
{{-- Row Start
<div class="row">
    <div class="col-lg-6">
        <div class="card card-up">
            <div class="card-body card-body-up">
                <h2 class="text-center p-4">KEMENTERIAN PERHUBUNGAN<br>
                    DITJEN PERHUBUNGAN DARAT</h2>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
        <div class="card" style="background-color: #0043a8; text-align: center; border-radius: 10px;">
            <div class="card-header text-center">
                <img src="{{ asset('image/logo_kemenhub.png') }}" style="width: 50px;">
            </div>
        </div>
    </div>
    <div class="col-lg-5 pt-4">
        <h5 style="color: white">DAERAH UPPKB</h5>
    </div>
    <div class="col-lg-1 offset-lg-6 mt-3">
        <div class="card" style="background-color: #0043a8; text-align: center; border-radius: 10px;">
            <div class="card-header">
                <img src="{{ asset('image/logo_ditjen_darat.png  ') }}" style="width: 50px;">
            </div>
        </div>
    </div>
    <div class="col-lg-5 mt-3">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 530px; height: 87px; border-radius: 10px; text-align: right;">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 530px; border-radius: 10px">
              <a class="dropdown-item" href="#">LOSARANG</a>
              <a class="dropdown-item" href="#">KULWARU</a>
            </div>
          </div>
    </div>
</div> --}}

@endsection
