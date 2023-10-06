<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return response()->json(['status' => 'success', 'cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCitiesForStateByName(Request $request) {

        $validator = Validator::make($request->all(), [
            'state_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error', 'message' => $validation->err,
            ], 400); 
        }

        $stateName = trim($request->state_name);

        $state = State::where('state_name', '=', $stateName)->first();

        $cityList = [];
        if ($state != null) {
            $cities = City::where('state_id', '=', $state->id)->get();

            foreach ($cities as $ct) {
                array_push($cityList, $ct->city_name);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Cities for state found',
                'cities_list' => $cityList,
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Given state could not be found',
            'cities' => "",
        ], 400);
    }
}
