<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ApiController extends Controller
{

    public function get_data(Request $request){
        $validator = Validator::make($request->all(), [
            'country' => 'required',
            'language' => 'required',
            'total_post' => 'required|integer',
            'date' => 'required|date',

        ]);
        if ($validator->fails()) {
            $errorMessage =   [];
            $errorMessage['code'] = strval(0);
             $errorMessage['message'] = 'missing_required_parameter';
             $errorMessage['result']   =   [];
            return response()->json([$errorMessage
            ], 200);
        }

        $apikey = 'd817bfd3c7d952d1cc9bdcd1e52a61da ';
        $date = date("Y-m-d",strtotime($request->date));

        $carbonParsed = Carbon::parse($date);

        $tenDaysAgo = $carbonParsed->subDays(10);

        $tenDaysAgoFormatted = $tenDaysAgo->toDateString();


        $url = "https://gnews.io/api/v4/search?lang=.'$request->language'.&country=.'$request->country'.&max=.'$request->total_post'.&from=.'$tenDaysAgoFormatted'.&to=.'$date'.&apikey=$apikey";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = json_decode(curl_exec($ch), true);
        curl_close($ch);
        $articles = $data;

        if(!empty($articles)){
            foreach($articles as $aValue){
                $arrayStore=[];
                $arrayStore['id']      = strval(isset($aValue->id)?$aValue->id:'');
                $arrayStore['name']    = strval(isset($aValue->name)?$aValue->name:'');
                $arrayStore['address'] = strval(isset($aValue->store_address)?$aValue->store_address:'');
                $arrayStore['lat']     = strval(isset($aValue->store_latitude)?$aValue->store_latitude:'');
                $arrayStore['long']    = strval(isset($aValue->store_longitude)?$aValue->store_longitude:'');
                $commentArr[]           = $arrayStore;
            }

            $result['code']     =   strval(1);
            $result['message']  =   'success';
            $result['result']   =   $commentArr;

        }else{
            $result['code']     =   strval(0);
            $result['message']  =   'no_data_found';
            $result['result']   =   [];
        }
        $mainResult[]       =   $result;
        return response()->json($mainResult);
    }

}
