<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resep;
use App\Models\Wim;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {



        // return view('home');
    }

    public function dashadmin()
    {


        $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        $konten = file_get_contents($sumber);
        $data = json_decode($konten, true);
        return view('admin.index', compact('data'));
        // return view('admin.index');
    }

    public function dashuser()
    {

        $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        $konten = file_get_contents($sumber);
        $data = json_decode($konten, true);
        return view('user_front.index', compact('data'));
        // return view('user_front.index');
    }

    public function dashdevice()
    {
        return view('device.index');
    }

    public function losarang()
    {
        // $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        // $konten = file_get_contents($sumber);
        // $data = json_decode($konten, true);
        // return view('losarang.index', compact('data'));
        // return view('losarang.index');

        $data = Wim::latest()->paginate(2);
        return view('losarang.index', compact('data'));

    }

    public function kulwaru()
    {
        $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        $konten = file_get_contents($sumber);
        $data = json_decode($konten, true);
        return view('kulwaru.index', compact('data'));
        // return view('kulwaru.index');
    }

}


