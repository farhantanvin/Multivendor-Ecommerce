<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    //protected $moduleId = 1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //OwnLibrary::validateAccess($this->moduleId,1);
        $roles = Role::with('createdBy','updatedBy')->paginate(30);
        return view('backend.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //OwnLibrary::validateAccess($this->moduleId,2);
        return view('backend.role.create');
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

        $validation =  Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()->withInput()->withErrors($validation);
        }else{

            $role = new Role();

            $role->name = $request->name;
            $role->info = $request->info;
            $role->created_by = 1;
            $role->updated_by = 1;

            if ($role->save()){
                session()->flash("success","Data successfully created");
                return redirect()->route("role.index");
            }else{
                session()->flash("error","Data not created");
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //OwnLibrary::validateAccess($this->moduleId,3);
        return view('backend.role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //OwnLibrary::validateAccess($this->moduleId,3);
        $rules = [
            "name" => "required"
        ];

        $message = [
            "name.required" => "Name is required"
        ];

        $validation =  Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()->withInput()->withErrors($validation);
        }else{

            $role->name = $request->name;
            $role->info = $request->info;
            $role->status = $request->status;
            $role->created_by = 1;
            $role->updated_by = 1;

            if ($role->save()){
                session()->flash("success","Role Updated");
                return redirect()->route("role.index");
            }else{
                session()->flash("error","Role not updated");
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //OwnLibrary::validateAccess($this->moduleId,4);
        if ($role->Delete()){
            session()->flash("success","Role Deleted");
            return redirect()->back();
        }else{
            session()->flash("error","Role Not Deleted");
            return redirect()->back();
        }
    }
}
