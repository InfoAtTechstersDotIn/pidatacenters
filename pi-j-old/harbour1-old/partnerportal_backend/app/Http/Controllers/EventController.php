<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy("event_is_active", "DESC")->orderBy('id', 'DESC')->get();
        if ( $events != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "events" =>  $events,
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting event items",
            "events"     =>  null,
        ]);

    }

    public function indexactive() {

        $events = Event::where("event_is_active", "=", 1)->orderBy('id', 'DESC')->get();

        if ( $events != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "events" =>  $events,
            ]);
        }
    

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting event items",
            "events"     =>  null,
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
    public function store(StoreEventRequest $request) {

        $validated = $request->validated();

        $event = new Event();

        

        $event->event_title = $validated['event_title'];
        $event->event_date = $validated['event_date'];
        $event->event_st_time = $validated['event_st_time'];
        $event->event_end_time = $validated['event_end_time'];
        $event->event_content = $validated['event_content'];

        $event->event_is_active = 1;

        if ($event->save()) {

            $id = $event->id;

            if ( $request->hasFile('event_banner') ) {
                $file = $request->file("event_banner");
                $tempPath = $request->event_banner->storeAs('public/events/'.$id, $file->getClientOriginalName());
                $event->event_banner_path = str_replace("public", "resources",$tempPath);

                $event->save();
            }

            return response()->json([
                "status" => "success",
                "msg" => "Event created successfully",
            ]);
        }

        return response()->json([
            "status" => "error",
            "msg" => "Error in creating event",
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
        $event = Event::where("id", '=', $id)
                ->where("event_is_active", "=", 1)
                ->first();

        if ($event != null) {
            return response()->json([
                "status" => "success",
                "msg" => "Event found",
                "event" => $event,
            ]);
        }

        return response()->json([
            "status" => "error",
            "msg"   =>  "Event not found",
            "event"  =>  null,
        ]);
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
    public function update(UpdateEventRequest $request, $id)
    {
        $validated = $request->validated(); 
        $event = Event::find($id);

        if ($event == null ) {
            return response()->json([
                "status" => "error",
                "msg" => "Event not found",
            ]);
        }
              
        $event->event_title = $validated['event_title'];
        $event->event_date = $validated['event_date'];
        $event->event_st_time = $validated['event_st_time'];
        $event->event_end_time = $validated['event_end_time'];
        $event->event_content = $validated['event_content'];

        if ( $request->hasFile('event_banner') ) {
            $file = $request->file("event_banner");
            $tempPath = $request->event_banner->storeAs('public/events/'.$event->id, $file->getClientOriginalName());
            $event->event_banner_path = str_replace("public", "resources",$tempPath);
        }

        if ($event->save()) {
            return response()->json([
                "status"    =>  "success",
                "msg"   =>  "Event item edited successfully",
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in editing event item",
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
        $event = Event::find($id);

        if ($event == null) {
            return response()->json([
                "status"    =>  "error",
                "msg"       =>  "Event not found",
            ]);
        }

        $event->event_is_active = 0;
        $event->save();

        return response()->json([
            "status"    =>  "success",
            "msg"       =>  "Event deleted successfully",
        ]);
    }

    public function activate($id) {
        $event = Event::find($id);

        if ($event == null) {
            return response()->json([
                "status"    =>  "error",
                "msg"       =>  "Event not found",
            ]);
        }

        $event->event_is_active = 1;
        $event->save();

        return response()->json([
            "status"    =>  "success",
            "msg"       =>  "Event activated successfully",
        ]);
    }
}
