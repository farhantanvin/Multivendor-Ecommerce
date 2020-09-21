<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Activity;
use App\Model\Module;
use App\Model\ModuleToActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ModuleController extends Controller
{
    //protected $moduleId = 4;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //OwnLibrary::validateAccess($this->moduleId,1);
        $modules = Module::with(['createdBy:id,name','updatedBy:id,name'])->orderBy("id")->paginate(20);
        return view("backend.module.index",compact("modules"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //OwnLibrary::validateAccess($this->moduleId,2);
        $activites = Activity::select('id','name')->orderBy('name')->where('status','=',1)->get();
        return view("backend.module.create",compact('activites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //OwnLibrary::validateAccess($this->moduleId,2);
        $rules = [
            "name" => "required"
        ];

        $message = [
            "name.required" => "Name is required"
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            if (empty($request->activities)){
                session()->flash("error", "No Activity Selected");
                return redirect()->back()->withInput();
            }

            $module = new Module();

            $module->name = $request->name;
            $module->description = $request->description;
            $module->created_by = 1;
            $module->updated_by = 1;

            if ($module->save()) {
                $moduleId = $module->id;
                if ($module->id != null){
                    $count = count($request->activities);
                    for ($i=0; $i < $count; $i++ ){
                        $moduleToactivity = New ModuleToActivity();
                        $moduleToactivity->module_id = $moduleId;
                        $moduleToactivity->activity_id = $request->activities[$i];
                        $moduleToactivity->created_by = 1;
                        $moduleToactivity->updated_by = 1;
                        $moduleToactivity->save();
                    }
                }

                session()->flash("success", "Data successfully created");
                return redirect()->route("module.index");
            } else {
                session()->flash("error", "Data not created");
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //OwnLibrary::validateAccess($this->moduleId,3);
        $activites = Activity::select('id','name')->orderBy('name')->where('status','=',1)->get();
        $modules_activities=ModuleToActivity::where('module_id',$module->id)->get();

        return view("backend.module.edit",compact('activites','module','modules_activities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //OwnLibrary::validateAccess($this->moduleId,3);
        $rules = array(
            'name' => 'required|Unique:modules,name,' . $module->id,
        );

        $message = array(
            'name.required' => 'Please, insert module Name!',
            'name.unique' => 'This name has already been taken!'
        );

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $module->name = $request->name;
            $module->description = $request->description;
            $module->status = $request->status;

            if ($module->save()){
                ModuleToActivity::where('module_id',$module->id)->forceDelete();
                if ($request->activities != null){
                    foreach ($request->activities as $activity_id){

                        $moduleToactivity = New ModuleToActivity();
                        $moduleToactivity->module_id = $module->id;
                        $moduleToactivity->activity_id = $activity_id;
                        $moduleToactivity->created_by = 1;
                        $moduleToactivity->updated_by = 1;
                        $moduleToactivity->save();
                    }
                }

                Session::flash('success',"Module Updated");
                return redirect()->route('module.index');
            }else{
                Session::flash('error',"Module Not Updated");
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //OwnLibrary::validateAccess($this->moduleId,4);
        if ($module->forceDelete()){
            ModuleToActivity::where('module_id',$module->id)->forceDelete();
            Session::flash('success',"Module Delated");
            return redirect()->route('module.index');
        }else{
            Session::flash('error',"Module Not Delated");
            return redirect()->back();
        }
    }
}
