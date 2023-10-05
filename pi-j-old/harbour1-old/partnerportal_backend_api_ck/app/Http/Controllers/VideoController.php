<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideoRequest;

class VideoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        $vids = Video::orderBy("vid_is_active", "DESC")->orderBy('id', 'DESC')->get();
        if ( $vids != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "videos" =>  $vids,
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting blogs",
            "videos"     =>  null,
        ]);

    }

    public function indexactive() {

        $vids = Video::where("vid_is_active", "=", 1)->orderBy('id', 'DESC')->get();

        if ( $vids != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "videos" =>  $vids,
            ]);
        }
    

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting videos",
            "videos"     =>  null,
        ]);
    }

    public function store(StoreVideoRequest $request)
    {
        $validated = $request->validated(); 

        $video = new Video();
        $isExtVid = 0;
        if ($validated['kccs_vid_ext_url'] != "" && $validated['kccs_vid_ext_url'] != null) {
            $video->vid_url = $validated['kccs_vid_ext_url'];
            $isExtVid = 1;
        }

        if (!$isExtVid) {
            // if ($request->hasFile('kccs_vid_thumb')) {
            //     $file = $request->file('kccs_vid_thumb');
            //     $tempPath = $file->storeAs('public/videos/thumbs', $file->getClientOriginalName());
            //     $video->vid_thumb = str_replace("public", "resources", $tempPath);
            // }

            if ($request->hasFile('kccs_video')) {
                $vidfile = $request->file('kccs_video');
                $tempPath = $vidfile->storeAs('public/videos', $vidfile->getClientOriginalName());
                $video->vid_url = str_replace("public", "resources", $tempPath);
                $isExtVid = 0;
            } else {
                return response()->json([
                    "status" => "error",
                    "msg" => "Video must be created either with an external link or be uploaded.",
                    
                ]);
            }
        }
        
        
        
        $video->vid_title = $validated['kccs_vid_title'];
        $video->vid_is_ext_url = $isExtVid;
        //$video->vid_url = "";
        $video->vid_is_active = 1;

        if ($video->save()) {
            return response()->json([
                "status" => "success",
                "msg" => "Video added successfully",
                'vid_url' => $video->vid_url,
            ]);
        }

        return response()->json([
            "status" => "error",
            "msg" => "Error in adding the video",
        ]);
    }
}
