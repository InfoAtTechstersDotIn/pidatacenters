<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\StoreCaseStudyRequest;
use App\Http\Requests\UpdateCaseStudyReqest;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexactive() {
        $cs = CaseStudy::where("cs_is_active", "=", 1)->orderBy('id', 'DESC')->get();
        foreach ( $cs as $item ) {
            $item['cs_date'] = date('d-m-Y', strtotime($item->cs_date));
        }

        if ( $cs != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "Case Studies found",
                "casestudies" =>  $cs,
            ]);
        }
    

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting Case study items",
            "casestudies"     =>  null,
        ]);
    }

    public function index()
    {
        $cs = CaseStudy::orderBy("cs_is_active", "DESC")->orderBy('id', 'DESC')->get();
        foreach ( $cs as $item ) {
            $item['cs_date'] = date('d-m-Y', strtotime($item->cs_date));
        }

        if ( $cs != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>   "Case Studies found",
                "casestudies" =>  $cs,
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting  Case Studies",
            "casestudies"     =>  null,
        ]);

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
    public function store(StoreCaseStudyRequest $request)
    {
        $validated = $request->validated(); 

        $cs = new CaseStudy();
        if ($request->hasFile('kccs_banner')) {
            $file = $request->file('kccs_banner');
            $tempPath = $file->storeAs('public/casestudies/images', $file->getClientOriginalName());
            $cs->cs_image_path = str_replace("public", "resources", $tempPath);
        }

        if ($request->hasFile('kccs_doc')) {
            $docfile = $request->file('kccs_doc');
            $tempPath = $docfile->storeAs('public/casestudies/docs', $docfile->getClientOriginalName());
            $cs->cs_doc_path = str_replace("public", "resources", $tempPath);
        }

        $cs->cs_title = $validated['kccs_title'];
        $cs->cs_short_description = $validated['kccs_short_desc'];
        $cs->cs_is_active = 1;

        if ($validated['kccs_date'] != null) {
            $cs->cs_date = $validated['kccs_date'];
        } else {
            $cs->cs_date = date('Y-m-d H:i:s');
        }

        if ($cs->save()) {
            return response()->json([
                "status" => "success",
                "msg" => "Case Study created successfully",
            ]);
        }
        
        return response()->json([
            "status" => "error",
            "msg" => "Error in creating the case study",
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
    public function update(UpdateCaseStudyReqest $request, $id)
    {
        $validated = $request->validated(); 
        $cs = CaseStudy::find($id);

        if ($cs == null ) {
            return response()->json([
                "status" => "error",
                "msg" => "Case Study not found",
            ]);
        }
       
        if ($request->hasFile('kccs_banner')) {
            $file = $request->file('kccs_banner');
            $tempPath = $file->storeAs('public/casestudies/images', $file->getClientOriginalName());
            $cs->cs_image_path = str_replace("public", "resources", $tempPath);
        }

        if ($request->hasFile('kccs_doc')) {
            $docfile = $request->file('kccs_doc');
            $tempPath = $docfile->storeAs('public/casestudies/docs', $docfile->getClientOriginalName());
            $cs->cs_doc_path = str_replace("public", "resources", $tempPath);
        }

        $cs->cs_title = $validated['kccs_title'];
        $cs->cs_short_description = $validated['kccs-short-desc'];

        if ($validated['kccs_date'] != null) {
            $cs->cs_date = $validated['kccs_date'];
        } else {
            $cs->cs_date = date('Y-m-d H:i:s');
        }

        if ($cs->save()) {
            return response()->json([
                "status"    =>  "success",
                "msg"   =>  "Case Study edited successfully",
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in editing case study",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cs = CaseStudy::find($id);
        if ($cs != null) {

            $cs->cs_is_active = 0;
            if ( $cs->save() ) {
                return response()->json([
                    "status"    =>  "success",
                    "msg"       =>  "Case Study was deleted",
                ]);
            }

        }

        return response()->json([
            "status" => "error",
            "msg"   =>  "Case Study not found",
        ]);
    }

    public function activate($id)
    {
        
        $cs = CaseStudy::find($id);
        if ($cs != null) {

            $cs->cs_is_active = 1;
            if ( $cs->save() ) {
                return response()->json([
                    "status"    =>  "success",
                    "msg"       =>  "Case Study was activated",
                ]);
            }

        }

        return response()->json([
            "status" => "error",
            "msg"   =>  "Case Study not found",
        ]);
    }

}
