<?php

namespace App\Http\Controllers;

use App\Models\Wim;
use App\Models\Lidar;
use App\Models\Resep;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\WimExport;
use Illuminate\Http\Request;
use App\Exports\LaporanExport;
use Illuminate\Support\Carbon;
use App\Exports\LaporanExportPDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
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


    public function exportexcel(Request $request)
    {
        return (new LaporanExport($request->get('year'), $request->get('month')))->download('DataLaporan.xlsx');
    }

    public function exportpdf(Request $request)
    {

        // $this->year = $year;
        // $this->month = $month;

        // $startDate = Carbon::create($this->year, $this->month)->startOfMonth()->format('Y-m-d');
        // $endDate = Carbon::create($this->year, $this->month)->endOfMonth()->format('Y-m-d');
        // $datawim = DB::table('wim')
        // ->leftjoin('lidar', 'wim.id', '=', 'lidar.wim_id')
        // ->leftjoin('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
        // ->leftjoin('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
        // ->select('wim.*', DB::raw("count('WeighingDate') as total"), DB::raw("SUM(IsWeightOver) as total_berat"),
        // DB::raw("SUM(IsDimensionOver) as total_dimensi"), DB::raw("SUM(DoeslicencePlateExist) as total_plat"),)

        // ->whereBetween('WeighingDate', [$startDate, $endDate])
        // ->groupBy('WeighingDate')
        // ->get();

        // return view('report.pdf', compact('datawim', 'startDate' ,'endDate'));

        $rawyear = $request->get('year');
        $rawmonth = $request->get('month');
        if (!isset($rawyear) || !isset($rawmonth) || $rawyear == "Tahun" && $rawmonth == "Bulan") {
            $datawim = [];
        }
        else {
            $startDate = Carbon::create($rawyear, $rawmonth)->startOfMonth()->format('Y-m-d');
            $endDate = Carbon::create($rawyear, $rawmonth)->endOfMonth()->format('Y-m-d');
            $datawim = DB::table('wim')
                        ->leftjoin('lidar', 'wim.id', '=', 'lidar.wim_id')
                        ->leftjoin('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
                        ->leftjoin('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
                        ->select('wim.*', DB::raw("count('WeighingDate') as total"), DB::raw("SUM(IsWeightOver) as total_berat"),
                        DB::raw("SUM(IsDimensionOver) as total_dimensi"), DB::raw("SUM(DoeslicencePlateExist) as total_plat"),'WeighingDate')

                        ->whereBetween('WeighingDate', [$startDate, $endDate])
                        ->groupBy('WeighingDate')
                        ->get();
        }
        // return ($rawyear." ".$rawmonth);


        $pdf = PDF::loadView('report.pdf', compact('datawim', 'rawyear' ,'rawmonth'));
        return $pdf->download('laporan-pdf.pdf');
        // return view('report.pdf', compact('datawim', 'rawyear' ,'rawmonth'));


        // return (new LaporanExportPDF($request->get('year'), $request->get('month')))->download('LaporanPDF.pdf');

        // $wim = Wim::all();

        // view()->share('wim', $wim);
        // $pdf = PDF::loadview('report.pdf');
        // return $pdf->download('laporan.pdf');

        // return (new LaporanExportPDF($request->get('year'), $request->get('month')))->download('DataLaporan.xlsx');


        // $pdf = PDF::loadview('pegawai-pdf',['pegawai'=>$wim]);
        // return $pdf->download('laporanpdf');


    }

    public function dashadmin(Request $request)
    {
        // Data Januari
        $from = $request->from;
        $to = $request->to;
        $datajanuari = Wim::whereBetween('WeighingDate', [$from.'2022-01-01',$to. '2022-01-31'])->count();
        // Data Februari
        $from = $request->from;
        $to = $request->to;
        $datafebruari = Wim::whereBetween('WeighingDate', [$from.'2022-02-01',$to. '2022-02-31'])->count();
        // Data Maret
        $from = $request->from;
        $to = $request->to;
        $datamaret = Wim::whereBetween('WeighingDate', [$from.'2022-03-01',$to. '2022-03-31'])->count();
        // Data April
        $from = $request->from;
        $to = $request->to;
        $dataapril = Wim::whereBetween('WeighingDate', [$from.'2022-04-01',$to. '2022-04-31'])->count();
        // Data Mei
        $from = $request->from;
        $to = $request->to;
        $datamei = Wim::whereBetween('WeighingDate', [$from.'2022-05-01',$to. '2022-05-31'])->count();
        // Data Juni
        $from = $request->from;
        $to = $request->to;
        $datajuni = Wim::whereBetween('WeighingDate', [$from.'2022-06-01',$to. '2022-06-31'])->count();
        // Data Juli
        $from = $request->from;
        $to = $request->to;
        $datajuli = Wim::whereBetween('WeighingDate', [$from.'2022-07-01',$to. '2022-07-31'])->count();
        // Data Agustus
        $from = $request->from;
        $to = $request->to;
        $dataagustus = Wim::whereBetween('WeighingDate', [$from.'2022-08-01',$to. '2022-08-31'])->count();
        // Data September
        $from = $request->from;
        $to = $request->to;
        $dataseptember = Wim::whereBetween('WeighingDate', [$from.'2022-09-01',$to. '2022-09-31'])->count();
        // Data Oktober
        $from = $request->from;
        $to = $request->to;
        $dataoktober = Wim::whereBetween('WeighingDate', [$from.'2022-10-01',$to. '2022-10-31'])->count();
        // Data November
        $from = $request->from;
        $to = $request->to;
        $datanovember = Wim::whereBetween('WeighingDate', [$from.'2022-11-01',$to. '2022-11-31'])->count();
        // Data Desember
        $from = $request->from;
        $to = $request->to;
        $datadesember = Wim::whereBetween('WeighingDate', [$from.'2022-12-01',$to. '2022-12-31'])->count();


        $from = $request->from;
        $to = $request->to;
        $datamelanggarjanuari = Wim::whereBetween('WeighingDate', [$from.'2022-01-01',$to. '2022-01-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarfebruari = Wim::whereBetween('WeighingDate', [$from.'2022-02-01',$to. '2022-02-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarmaret = Wim::whereBetween('WeighingDate', [$from.'2022-03-01',$to. '2022-03-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarapril = Wim::whereBetween('WeighingDate', [$from.'2022-04-01',$to. '2022-04-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarmei = Wim::whereBetween('WeighingDate', [$from.'2022-05-01',$to. '2022-05-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarjuni = Wim::whereBetween('WeighingDate', [$from.'2022-06-01',$to. '2022-06-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarjuli = Wim::whereBetween('WeighingDate', [$from.'2022-07-01',$to. '2022-07-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggaragustus = Wim::whereBetween('WeighingDate', [$from.'2022-08-01',$to. '2022-08-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarseptember = Wim::whereBetween('WeighingDate', [$from.'2022-09-01',$to. '2022-09-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggaroktober = Wim::whereBetween('WeighingDate', [$from.'2022-10-01',$to. '2022-10-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggarnovember = Wim::whereBetween('WeighingDate', [$from.'2022-11-01',$to. '2022-11-31'])->where('IsWeightOver','=',1)->count();

        $from = $request->from;
        $to = $request->to;
        $datamelanggardesember = Wim::whereBetween('WeighingDate', [$from.'2022-12-01',$to. '2022-12-31'])->where('IsWeightOver','=',1)->count();


        $datawim = DB::table('wim','wim.IsWeightOver')->where('IsWeightOver','>',0)->count();
        $datalidar = DB::table('lidar','lidar.IsDimensionOver')->where('IsDimensionOver','>',0)->count();
        $datawim2 = DB::table('wim','wim.DoesLicencePlateExist')->where('DoesLicencePlateExist','=',0)->count();
        $datalengkap = $datawim + $datawim2 + $datalidar;

        return view('admin.index', compact('datawim','datalidar', 'datawim2','datalengkap','datajanuari', 'datafebruari', 'datamaret', 'dataapril', 'datamei'
        , 'datajuni', 'datajuli', 'dataagustus', 'dataseptember', 'dataoktober', 'datanovember' ,'datadesember',
        'datamelanggarjanuari', 'datamelanggarfebruari', 'datamelanggarmaret', 'datamelanggarapril', 'datamelanggarmei', 'datamelanggarjuni', 'datamelanggarjuli',
        'datamelanggaragustus', 'datamelanggarseptember', 'datamelanggaroktober', 'datamelanggarnovember', 'datamelanggardesember'));
    }

    public function dashuser()
    {

;
        return view('user_front.index');
    }

    public function dashdevice()
    {
        return view('device.index');
    }

    public function report(Request $request)
    {

        $rawyear = $request->get('year');
        $rawmonth = $request->get('month');
        if (!isset($rawyear) || !isset($rawmonth) || $rawyear == "Tahun" && $rawmonth == "Bulan") {
            $datawim = [];
        }
        else {
            $startDate = Carbon::create($rawyear, $rawmonth)->startOfMonth()->format('Y-m-d');
            $endDate = Carbon::create($rawyear, $rawmonth)->endOfMonth()->format('Y-m-d');
            $datawim = DB::table('wim')
                        ->leftjoin('lidar', 'wim.id', '=', 'lidar.wim_id')
                        ->leftjoin('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
                        ->leftjoin('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
                        ->select('wim.*', DB::raw("count('WeighingDate') as total"), DB::raw("SUM(IsWeightOver) as total_berat"),
                        DB::raw("SUM(IsDimensionOver) as total_dimensi"), DB::raw("SUM(DoeslicencePlateExist) as total_plat"),'WeighingDate')

                        ->whereBetween('WeighingDate', [$startDate, $endDate])
                        ->groupBy('WeighingDate')
                        ->get();
        }
        // return ($rawyear." ".$rawmonth);



        return view('report.report', compact('datawim', 'rawyear' ,'rawmonth'));



    }

    public function losarang(Request $request)
    {

        if ($request->has('search')) {
            $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
            ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
            'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
            ->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = DB::table('wim')
                    ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
                    ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
                    ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
                    ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
                    'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
                    'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
                    'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
                    'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
                    ->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(10)->withQueryString();
        } else {

        $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
            ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
            'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
            ->latest()->paginate(10)->withQueryString();
        }

        return view('losarang.losarang', compact('datawim'));


    }

    public function kulwaru(Request $request)
    {

        if ($request->has('search')) {
            $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
            ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
            'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
            ->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = DB::table('wim')
                    ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
                    ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
                    ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
                    ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
                    'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
                    'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
                    'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
                    'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
                    ->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(10)->withQueryString();
        } else {

        $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
            ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
            'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
            ->latest()->paginate(10)->withQueryString();
        }

        return view('kulwaru.kulwaru', compact('datawim'));
    }


    public function dashboarduser()
    {


        $datawim = DB::table('wim','wim.IsWeightOver')->where('IsWeightOver','>',0)->count();
        $datawim2 = DB::table('wim','wim.DoesLicencePlateExist')->where('DoesLicencePlateExist','>',0)->count();
        $datalidar = DB::table('lidar','lidar.IsDimensionOver')->where('IsDimensionOver','>',0)->count();
        $datalengkap = $datawim + $datawim2 + $datalidar;

        return view('user_front.index', compact('datawim','datalidar', 'datawim2','datalengkap'));
    }

    public function losaranguser(Request $request)
    {

        if ($request->has('search')) {
            $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
            ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
            'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
            ->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = DB::table('wim')
                    ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
                    ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
                    ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
                    ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
                    'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
                    'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
                    'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
                    'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
                    ->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(500);
        } else {

        $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->join('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
            ->join('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','LicencePlate','Image','AxleWeight_1',
            'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')
            ->latest()->paginate(10);
        }

        return view('user_front.losaranguser.losaranguser', compact('datawim'));

    }

    public function kulwaruuser(Request $request)
    {

        if ($request->has('search')) {
            $datawim = Wim::latest()->where('LicencePlate', 'LIKE','%' .$request->search.'%')->paginate(5);

        } else if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = Wim::latest()->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(100);
        } else {

        $datawim = Wim::latest()->paginate(10);
        }
        return view('user_front.kulwaruuser.kulwaruuser', compact('datawim'));
    }

}


