@extends('layouts.app_dashboard')


@section('content')

{{-- Row Start --}}
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <nav aria-label="Page navigation example" >
                <ul class="pagination justify-content-center" >
                  <li class="page-item text-center" ><a class="page-link" href="#" >Pilih UPPKB</a></li>
                  <li class="page-item text-center"><a class="page-link" href="#">Statistik</a></li>
                  </li>
                </ul>
              </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-4">
            <h3 style="color: white">Pilih Daerah UPPKB</h3>
        </div>

        <div class="col-12">
            <div class="form-group2">
                <select class="form-control2">
                    <option value="losarang">LOSARANG</option>
                    <option value="kulwaru">KULWARU</option>
                </select>
            </div>
        </div>
    </div>

</div>

@endsection
