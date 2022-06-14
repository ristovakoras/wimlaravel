<?php

namespace App\Http\Controllers;
use App\Models\Wim;
use App\Models\Lidar;
use App\Models\AxleSpacings;
use App\Models\AxleWeights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WimGetController extends Controller
{
    public function index(Request $request)
    {

        $data = Lidar::join("wim","wim.id","=","lidar.id")
                ->select("lidar.*","wim.*")
                ->get();
        $data1 = Wim::leftjoin("axle_spacings","axle_spacings.id","=","wim.id")
                ->select("wim.id","axle_spacings.*")
                ->get();
        $data2 = Wim::leftjoin("axle_weights","axle_weights.id","=","wim.id")
                ->select("wim.id","axle_weights.*")
                ->get();
        return [$data,$data1,$data2];

    }

    public function store(Request $request)
    {
        request()->validate([
            'Weight_wim',
            'Speed',
            'LimitWeight',
            'LimitAxle',
            'OverWeight',
            'OverPercentage',
            'IsWeightOver',
            'Axle_wim',
            'WeighingDateTime',
            'WeighingTime',
            'WeighingDate',
            'LicencePlate',
            'InfoTestNumber',
            'InfoValidPeriod',
            'InfoVehicleType',
            'InfoAxleConfiguration',
            'InfoOwnerName',
            'InfoOwnerAddress',
            'DoesLicencePlateExist',
            'AxleWeight_1',
            'AxleWeight_2',
            'AxleWeight_3',
            'AxleWeight_4',
            'AxleWeight_5',
            'Axles',
            'Distance',
            'LidarLimitHeight',
            'LidarLimitWidth',
            'LidarLimitLength',
            'LidarReadingHeight',
            'LidarReadingWidth',
            'LidarReadingLength',
            'LidarOverHeight',
            'LidarOverWidth',
            'LidarOverLength',
            'LidarPercentageHeight',
            'LidarPercentageWidth',
            'LidarPercentageLength',
            'LidarPercentageHeight',
            'IsLidarOverHeight',
            'IsLidarOverWidth',
            'IsLidarOverLength',
            'IsDimensionOver',
            'Location',
            'LidarRaw',
            'Image',
            'Image_Plate',
            'WideViewImage',
        ]);


    try {

        $path = 'NULL';
        $path1 = 'NULL';
        $path2 = 'NULL';
        if($request->hasFile('Image')){  
            $path = Storage::disk('local')->put('storage/image_wim', $request->file('Image'));
        }
        if($request->hasFile('Image_Plate')){ 
            $path1 = Storage::disk('local')->put('storage/image_plate', $request->file('Image_Plate'));
        }
        if($request->hasFile('WideViewImage')){ 
            $path2 = Storage::disk('local')->put('storage/wideview_image', $request->file('WideViewImage'));
        }
        
        $wim=Wim::create([
            'Weight_wim' => request('Weight_wim'),
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
            'Location' => request('Location'),
            'Image' => $path,
            'Image_Plate' => $path1,
            'WideViewImage' => $path2,

        ]);


        AxleWeights::create([
            'AxleWeight_1' => request('AxleWeight_1'),
            'AxleWeight_2' => request('AxleWeight_2'),
            'AxleWeight_3' => request('AxleWeight_3'),
            'AxleWeight_4' => request('AxleWeight_4'),
            'AxleWeight_5' => request('AxleWeight_5'),
            'wim_id' => $wim->id

        ]);

        AxleSpacings::create([
            'Axles' => request('Axles'),
            'Distance' => request('Distance'),
            'wim_id' => $wim->id


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
            'wim_id' => $wim->id,

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
