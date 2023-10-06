<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTrainingRequest;
use App\Http\Requests\UpdateTrainingRequest;

class TrainingController extends Controller
{

    public function index() {

        //$firstDate = date('Y-00-01');
        //$lastDate = date('Y-m-t');

        
        // $trainings = Training::where("training_is_active", "=", 1)
        //                 ->where("training_date", '>=', $firstDate)
        //                 ->where("training_date", "<=", $lastDate)
        //               ->get();

        $trainings = Training::orderBy("training_is_active", "DESC")->orderBy('id', 'DESC')->get();
        if ( $trainings != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "trainings" =>  $trainings,
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting training items",
            "trainings"     =>  null,
        ]);

    }

    public function indexactive() {

        $trainings = Training::where("training_is_active", "=", 1)->orderBy('id', 'DESC')->get();

        if ( $trainings != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "trainings" =>  $trainings,
            ]);
        }
    

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting training items",
            "trainings"     =>  null,
        ]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::where("id", '=', $id)
                ->where("training_is_active", "=", 1)
                ->first();

        if ($training != null) {
            return response()->json([
                "status" => "success",
                "msg" => "Training found",
                "training" => $training,
            ]);
        }

        return response()->json([
            "status" => "error",
            "msg"   =>  "Training not found",
            "training"  =>  null,
        ]);
    }

    public function store(StoreTrainingRequest $request) {

        $validated = $request->validated();

        $training = new Training();
        $training->training_title = $validated['training_title'];
        $training->trainer_name = $validated['trainer_name'];
        $training->training_date = $validated['training_date'];
        $training->training_st_time = $validated['training_st_time'];
        $training->training_end_time = $validated['training_end_time'];
        $training->training_content = $validated['training_content'];
        $training->training_is_active = 1;

        if ($training->save()) {
            return response()->json([
                "status" => "success",
                "msg" => "Training event created successfully",
            ]);
        }

        return response()->json([
            "status" => "error",
            "msg" => "Error in creating training event",
        ]);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingRequest $request, $id)
    {
        $validated = $request->validated(); 
        $training = Training::find($id);

        if ($training == null ) {
            return response()->json([
                "status" => "error",
                "msg" => "Training not found",
            ]);
        }
              
        $training->training_title = $validated['training_title'];
        $training->trainer_name = $validated['trainer_name'];
        $training->training_date = $validated['training_date'];
        $training->training_st_time = $validated['training_st_time'];
        $training->training_end_time = $validated['training_end_time'];
        $training->training_content = $validated['training_content'];

        if ($training->save()) {
            return response()->json([
                "status"    =>  "success",
                "msg"   =>  "Training item edited successfully",
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in editing training item",
        ]);
    }


    public function destroy($id) {

        $training = Training::find($id);

        if ($training == null) {
            return response()->json([
                "status"    =>  "error",
                "msg"       =>  "Training not found",
            ]);
        }

        $training->training_is_active = 0;
        $training->save();

        return response()->json([
            "status"    =>  "success",
            "msg"       =>  "Training deleted successfully",
        ]);
    }

    public function activate($id) {
        $training = Training::find($id);

        if ($training == null) {
            return response()->json([
                "status"    =>  "error",
                "msg"       =>  "Training not found",
            ]);
        }

        $training->training_is_active = 1;
        $training->save();

        return response()->json([
            "status"    =>  "success",
            "msg"       =>  "Training activated successfully",
        ]);
    }

}
