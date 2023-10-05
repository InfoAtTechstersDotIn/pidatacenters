<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use App\Models\Relationowner;
use Illuminate\Support\Facades\Validator;

class ROController extends Controller
{
    public function getROListForState(Request $request) {
	
	$roListObjs = [];
        $roNames = [];

        $roListObjs = Relationowner::all();
        if ($roListObjs != null ){
            foreach($roListObjs as $roList) {
                array_push($roNames, $roList->ro_name);
            }

            return response()->json([
                'status' => 'success',
                'status_code' => 200,
                'ro_list'=> $roNames
            ],201);
            
        }
/*


        $validator = Validator::make($request->all(), [
            'state_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error', 'message' => 'State name not correct',
            ], 400); 
        }

        $stateName = trim($request->state_name);

        if ( $stateName != "" ) {
            $state = State::where('state_name', '=', $stateName)->first();

            $roListObjs = [];
            $roNames = [];

	    $roListObjs = Relationowner::all();
            if ($roListObjs != null ){
                foreach($roListObjs as $roList) {
                    array_push($roNames, $roList->ro_name);
                }

                return response()->json([
                    'status' => 'success',
                    'status_code' => 200,
                    'ro_list'=> $roNames
                ],201);
                
            }
        }else {
            return response()->json([
                'status' => 'error', 'message' => "State name cannot be empty",
            ], 400); 
        }
*/

    }
}