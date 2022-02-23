<?php

namespace App\Http\Controllers;
use App\Models\Wim;
use App\Models\Lidar;
use App\Models\AxleSpacings;
use App\Models\AxleWeights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\DB;

class WimGetController extends Controller
{
    public function index(Request $request)
    {
        $data = Lidar::join("wim","wim.id_wim","=","lidar.id_lidar")
                ->select("lidar.*","wim.*")
                ->get();
        $data1 = Wim::leftjoin("axle_spacings","axle_spacings.id_axle_spacings","=","wim.id_wim")
                ->select("wim.id_wim","axle_spacings.*")
                ->get();
        $data2 = Wim::leftjoin("axle_weights","axle_weights.id_axle_weights","=","wim.id_wim")
                ->select("wim.id_wim","axle_weights.*")
                ->get();
        return [$data,$data1,$data2];

        // User::select("select wim.id_wim, wim.")->get();

    // $wim = Wim::all();
    // return response()->json([
    //     'success'=> true,
    //     'message'=>'success',
    //     'data'=>$wim->all()
    // ]);

    }

    public function store(Request $request)
    {
        request()->validate([
            'Weight' => 'required',
            'Speed' => 'required',
            'LimitWeight' => 'required',
            'LimitAxle' => 'required',
            'OverWeight' => 'required',
            'OverPercentage' => 'required',
            'IsWeightOver' => 'required',
            'Axle_wim' => 'required',
            'WeighingDateTime' => 'required',
            'WeighingTime' => 'required',
            'WeighingDate' => 'required',
            'LicencePlate' => 'required',
            'InfoTestNumber' => 'required',
            'InfoValidPeriod' => 'required',
            'InfoVehicleType' => 'required',
            'InfoAxleConfiguration' => 'required',
            'InfoOwnerName' => 'required',
            'InfoOwnerAddress' => 'required',
            'DoesLicencePlateExist' => 'required',
            'IsOverWeight' => 'required',
            'IsOverDimension' => 'required',
            'Axle' => 'required',
            'Axle_Weight' => 'required',
            'Axles' => 'required',
            'Distance' => 'required','LidarReadingHeight' => 'required',
            'LidarLimitHeight' => 'required',
            'LidarLimitWidth' => 'required',
            'LidarLimitLength' => 'required',
            'LidarReadingHeight' => 'required',
            'LidarReadingWidth' => 'required',
            'LidarOverHeight' => 'required',
            'LidarOverWidth' => 'required',
            'LidarOverLength' => 'required',
            'LidarPercentageHeight' => 'required',
            'LidarPercentageWidth' => 'required',
            'LidarPercentageLength' => 'required',
            'LidarPercentageHeight' => 'required',
            'IsLidarOverHeight' => 'required',
            'IsLidarOverWidth' => 'required',
            'IsLidarOverLength' => 'required',
            'IsDimensionOver' => 'required',
            'LidarRaw' => 'required|file',
            'Image' => 'required|file|mimes:png,jpg,jpeg',
        ]);

    // dd(time().$request->file('image')->getClientOriginalName());
    try {
        // $fileName = time().$request->file('image')->getClientOriginalName();
        $path = Storage::disk('local')->put('storage/image_wim', $request->file('Image'));
        Wim::create([
            'Weight' => request('Weight'),
            'Speed' => request('Speed'),
            'LimitWeight' => request('LimitWeight'),
            'LimitAxle' => request('LimitAxle'),
            'OverWeight' => request('OverWeight'),
            'OverPercentage' => request('OverPercentage'),
            'IsWeightOver' => request('IsWeightOver'),
            'Axle_wim' => request('Axle_wim'),
            'WeighingDateTime' => request('WeighingDateTime'),
            'WeighingTime' => request('WeighingTime'),
            'WeighingDate' => request('WeighingDate'),
            'LicencePlate' => request('LicencePlate'),
            'InfoTestNumber' => request('InfoTestNumber'),
            'InfoValidPeriod' => request('InfoValidPeriod'),
            'InfoVehicleType' => request('InfoVehicleType'),
            'InfoAxleConfiguration' => request('InfoAxleConfiguration'),
            'InfoOwnerName' => request('InfoOwnerName'),
            'InfoOwnerAddress' => request('InfoOwnerAddress'),
            'DoesLicencePlateExist' => request('DoesLicencePlateExist'),
            'IsOverWeight' => request('IsOverWeight'),
            'IsOverDimension' => request('IsOverDimension'),
            'Image' => $path,

        ]);

        AxleWeights::create([
            'Axle' => request('Axle'),
            'Weight' => request('Weight'),

        ]);

        AxleSpacings::create([
            'Axles' => request('Axles'),
            'Distance' => request('Distance'),

        ]);

        $path1 = Storage::disk('public')->put('storage/raw_lidar', $request->file('LidarRaw'));
        Lidar::create([
            'LidarLimitHeight' => request('LidarLimitHeight'),
            'LidarLimitWidth' => request('LidarLimitWidth'),
            'LidarLimitLength' => request('LidarLimitLength'),
            'LidarReadingHeight' => request('LidarReadingHeight'),
            'LidarReadingWidth' => request('LidarReadingWidth'),
            'LidarReadingLength' => request('LidarReadingLength'),
            'LidarOverHeight' => request('LidarOverHeight'),
            'LidarOverWidth' => request('LidarOverWidth'),
            'LidarOverLength' => request('LidarOverLength'),
            'LidarPercentageHeight' => request('LidarPercentageHeight'),
            'LidarPercentageWidth' => request('LidarPercentageWidth'),
            'LidarPercentageLength' => request('LidarPercentageLength'),
            'IsLidarOverHeight' => request('IsLidarOverHeight'),
            'IsLidarOverWidth' => request('IsLidarOverWidth'),
            'IsLidarOverLength' => request('IsLidarOverLength'),
            'IsDimensionOver' => request('IsDimensionOver'),
            'LidarRaw' => $path1,

         ]);

         $user = auth()->userOrFail();
        } catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()
        ]);
        }
            return response()->json([
                'success'=> true,
                'message'=>'success',
                'data'=>$request->all()
        ]);

    }

}
