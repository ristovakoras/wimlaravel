<?php

namespace App\Exports;

use App\Models\Laporan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaporanExport implements FromView, ShouldAutoSize, WithTitle, Responsable
{

    use Exportable;

    public function title(): string
    {
        $name_file = 'DataLaporan';
        return $name_file;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $year;
    protected $month;

    public function __construct($year, $month)
    {
        $this->year = $year;
        $this->month = $month;
    }

    public function view(): View
    {

        $startDate = Carbon::create($this->year, $this->month)->startOfMonth()->format('Y-m-d');
        $endDate = Carbon::create($this->year, $this->month)->endOfMonth()->format('Y-m-d');
        $datawim = DB::table('wim')
        ->leftjoin('lidar', 'wim.id', '=', 'lidar.wim_id')
        ->leftjoin('axle_weights', 'wim.id', '=', 'axle_weights.wim_id')
        ->leftjoin('axle_spacings', 'wim.id', '=', 'axle_spacings.wim_id')
        ->select('wim.*', DB::raw("count('WeighingDate') as total"), DB::raw("SUM(IsWeightOver) as total_berat"),
        DB::raw("SUM(IsDimensionOver) as total_dimensi"), DB::raw("SUM(DoeslicencePlateExist) as total_plat"),
        'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
        'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
        'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','IsDimensionOver','Weight_wim','Speed',
        'OverWeight','LimitWeight','OverWeight','WeighingDate','IsWeightOver','LicencePlate','Image','AxleWeight_1',
        'AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','Distance_1','Distance_2','Distance_3','Distance_4')

        ->whereBetween('WeighingDate', [$startDate, $endDate])
        ->groupBy('WeighingDate')
        ->get();

        return view('report.excel', [
            'datawim' => $datawim
        ]);
    }
}
