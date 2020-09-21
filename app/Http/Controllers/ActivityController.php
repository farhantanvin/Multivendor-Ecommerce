<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    //protected $moduleId = 5;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //OwnLibrary::validateAccess($this->moduleId, 1);
        $activities = Activity::with('createdBy')->orderBy("id")->paginate(20);
        return view("backend.activity.index", compact("activities"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //OwnLibrary::validateAccess($this->moduleId, 2);
        return view("backend.activity.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //OwnLibrary::validateAccess($this->moduleId, 2);
        $rules = [
            "name" => "required"
        ];

        $message = [
            "name.required" => "Name is required",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $activity = new Activity();

            $activity->name        = $request->name;
            $activity->description = $request->description;
            $activity->created_by  = 1;
            $activity->updated_by  = 1;

            if ($activity->save()) {
                session()->flash("success", "Data successfully created");
                return redirect()->route("activity.index");
            } else {
                session()->flash("error", "Data not created");
                return redirect()->back();
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //OwnLibrary::validateAccess($this->moduleId, 3);
        return view("backend.activity.edit", compact("activity"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //OwnLibrary::validateAccess($this->moduleId, 3);
        $rules = [
            "name" => 'required'
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $activity->name        = $request->name;
            $activity->description = $request->description;
            $activity->status      = $request->status;

            if ($activity->save()) {
                session()->flash("success", "Activity Updated");
                return redirect()->route("activity.index");
            } else {
                session()->flash("error", "Activity Not Updated");
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //OwnLibrary::validateAccess($this->moduleId, 4);
        if ($activity->forceDelete()) {
            session()->flash("success", "Activity Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Activity Not Deleted");
            return redirect()->back();
        }
    }
}
