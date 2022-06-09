<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WIM Monitoring System</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Style Tabel --}}


    {{-- Favicon Icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('image/logo_kemenhub.png') }}>


    <link href="{{ asset('vendor/jquery/jquery.datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/jquery/jquery.datetimepicker.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-image: linear-gradient(to bottom right, #242263, #302e74);">
            <div class="container-fluid">

                <img class="mr-2" src="{{ asset('image/logo_kemenhub.png') }}" width="39">
                <a class="navbar-brand text-center" href="{{ url('/') }}">
                    KEMENTRIAN PERHUBUNGAN DITJEN PERHUBUNGAN DARAT
                </a>
                <img src="{{ asset('image/logo_ditjen_darat.png') }}" width="30">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            {{-- <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
                        @else
                            {{-- <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li> --}}
                            <li class="nav-item dropdown mr-4">
                                <a id="navbarDropdown" class="nav-link" href="{{ url('dashboard') }}" role="button" aria-haspopup="true" aria-expanded="false" >
                                   Wim Monitoring System
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


<main class="py-4">
    <div class="container">


        {{-- Row Start --}}
        <div class="row d-flex justify-content-center text-center" >
            <div class="col-12">
                <h5 style="color: white">DAERAH UPPKB</h5>
            </div>
            <div class="col--12 mt-2">
                <button type="button" class="btn btn-primary mt-3"><a href="{{ url('losarang/index') }}" style="color: white; background-color: linear-gradient(to bottom right, #242263, #302e74);">LOSARANG</a></button>
                <button type="button" class="btn btn-primary mt-3"><a href="{{ url('kulwaru/index') }}" style="color: white;">KULWARU</a></button>
            </div>
        </div>
        {{-- End Row --}}

        {{-- Start Row --}}
        <div class="row mt-5">

            <div class="col-xl-1  col-md-1 ">
                <div class="card text-center card-start">
                    <div class="card-header">
                        <p style="margin-top: 10%;">START</p>
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
                        <p style="padding-bottom: 10%;">BERAT MINIMUM</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-2">
                <input type="text" class="border1" placeholder="   Diisi.....">
            </div>

            <div class="col-xl-1 offset-xl-1 col-md-1 offset-md-1">
                <div class="card text-center card-start3">
                    <div class="card-header">
                        <p style="margin-top: 12%; font-size: 12px;">PELANGGARAN</p>
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
                <div class="card text-center card-start4">
                    <div class="card-header">
                        <p style="margin-top: 10%;"> STOP</p>
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
                        <p style="margin-top: 8%;">DIMENSI</p>
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
    </div>
{{-- End Row --}}
@yield('content')



<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Jquery Date Time Picker -->
<script src="{{ asset('vendor/jquery/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{ asset('js/datetime.js') }}"></script>

<!-- Icon -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
<script> $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</div>
</main>
</div>


</body>
</html>
