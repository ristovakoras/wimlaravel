@extends('layouts.app_dashboard')


@section('content')

{{-- Row Start --}}
<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-center">
        <h1>LOSARANG</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-1">

        <div class="card" style="width: 105px; background-color: #1b2735; height:">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>START</strong></h7>
            </div>
        </div>
    </div>


    <div class="col-lg-2">
        <div class="container">
            <input type="text" style="width: 130px; height: 50px" id="picker" class="form-control">
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card" style="width: 180px; background-color: #1b2735;">
            <div class="card-header" >
                <h7 style="color: #6cf5ff;"><strong>BERAT MINIMUM</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <input type="text" class="border1" style="width: 125px; height: 50px; color: #6cf5ff;"  placeholder="   Diisi.....">
    </div>

</div>
{{-- End Row --}}

<div class="row mt-4">

    <div class="col-lg-1">
        <div class="card" style="width: 105px; background-color: #1b2735;">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>STOP</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="container">
            <input type="text" style="width: 130px; height: 50px" id="picker2" class="form-control">
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card" style="width: 180px; background-color: #1b2735;">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>DIMENSI</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <input type="text" class="border1" style="width: 125px; height: 50px; color: #6cf5ff;" placeholder="   Diisi.....">
    </div>

    <div class="col-lg-2">
        <div class="card" style="width: 180px; background-color: #1b2735;">
            <div class="card-header">
                <h7 style="color: #6cf5ff;"><strong>PELANGGARAN</strong></h7>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <input type="text" class="border1" style="width: 115px; height: 50px; color: #6cf5ff;" placeholder="  Diisi.....">
    </div>

    <div class="col-lg-1">
        <button type="submit" style="width: 50px; height: 50px; background-color: #1b2735; color:#6cf5ff ;" class="btn btn-primary"><span class="fa fa-search"></span></button>
    </div>

</div>

<!-- Row Tampil Data -->
<div class="row">
    <div class="col-lg-12 col-md-13 col-sm-12">
      <div class="d-flex justify-content-sm-center"><h1 class="my-5" style="color:#6cf5ff;">TAMPIL DATA</h1></div>
    </div>
  </div>

    <div class="col-lg-12">
      <table class="table table-dark table-hover" style="background-color: #121b24;" >
        <thead style="color: #6cf5ff ;">
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
        <tbody style="color: #6cf5ff ;">
            @foreach ($data['results'] as $wim )

          <tr>
              <th scope="row">1</th>
              <td>{{ $wim["dificulty"] }}</td>
              <td></td>
              <td>5000 KG</td>
              <td>2000 KG</td>
              <td>12,1 M</td>
              <td>3.5 m</td>
              <td>5.6 M</td>
              <td>Over Weight</td>
              <td><img src="{{ asset('image/plat_22.jpeg') }}" style="width: 150px;"></td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>03-2022 12.50</td>
              <td>BZ 2020 RFT</td>
              <td>3000 KG</td>
              <td>0 KG</td>
              <td>10,1 M</td>
              <td>3.5 m</td>
              <td>4.6 M</td>
              <td>Over Height</td>
              <td><img src="{{ asset('image/plat_23.jpeg') }}" style="width: 150px;"></td>
          <tr>
              <th scope="row">3</th>
              <td>05-2022 11.30</td>
              <td>A 2211 RF</td>
              <td>4000 KG</td>
              <td>2000 KG</td>
              <td>14,1 M</td>
              <td>5.5 m</td>
              <td>7.6 M</td>
              <td>Normal</td>
              <td><img src="{{ asset('image/plat_24.jpeg')}}" style="width: 150px;"></td>
          <tr>
              <th scope="row">4</th>
              <td>08-2022 20.30</td>
              <td>BF 1221 RFD</td>
              <td>3500 KG</td>
              <td>1500 KG</td>
              <td>12,1 M</td>
              <td>3.5 m</td>
              <td>5.6 M</td>
              <td>Over Weight</td>
              <td><img src="{{ asset('image/plat_25.jpeg') }}" style="width: 150px;"></td>
          <tr>
              <th scope="row">5</th>
              <td>01-2022 15.30</td>
              <td>BS 2013 DA</td>
              <td>5000 KG</td>
              <td>2000 KG</td>
              <td>15,5 M</td>
              <td>6.4 m</td>
              <td>7.2 M</td>
              <td>Normal</td>
              <td><img src="{{ asset('image/plat_26.jpeg') }}" style="width: 150px;"></td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>

@endsection
