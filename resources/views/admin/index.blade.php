@extends('layouts.app_dashboard')


@section('content')

{{-- Row Start --}}
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <nav aria-label="Page navigation example" >
                <ul class="pagination justify-content-center" >
                  <li class="page-item text-center" ><a class="page-link" href="#" >Pilih UPPKB</a></li>
                  </li>
                </ul>
              </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-4">
            <h3 style="color: white">Pilih Daerah UPPKB</h3>
        </div>

        <div class="col-12 d-flex justify-content-center">
            <button type="button" class="btn btn-primary mx-3"><a href="{{ url('losarang/index') }}" style="color: white;">LOSARANG</a></button>
            <button type="button" class="btn btn-primary"><a href="{{ url('kulwaru/index') }}" style="color: white;">KULWARU</a></button>
        </div>
    </div>

</div>

@endsection
