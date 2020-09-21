<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Role;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['role:id,name','creator:id,name','updator:id,name'])->orderBy('name')->paginate(20);
        return view('backend.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::select('id','name')->where('status','=',1)->get();
        return view('backend.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password|min:5',
        ];

        $message = [
            'role_id.required' => 'Role is required',
        ];

        $validation = Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }else{
            $user = new User();
            $user->role_id = $request->role_id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if ($user->save()){
                session()->flash("success","User Added");
                return redirect()->route("user.index");
            }else{
                session()->flash("error","User Not Added");
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //OwnLibrary::validateAccess($this->moduleId,3);
        $roles = Role::select('id','name')->where('status','=',1)->get();
        return view('backend.user.edit',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ];

        $message = [
            'role_id.required' => 'Role is required',
        ];

        if (!empty($request->password)){
            $rules['password'] = 'required|min:5';
            $rules['confirm_password'] = 'required|same:password|min:5';
        }

        $validation = Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }else{

            $user->role_id = $request->role_id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->status = $request->status;
            if(!empty($request->password)){
                $user->password = Hash::make($request->password);
            }
            if ($user->save()){
                session()->flash("success","User Updated");
                return redirect()->route("user.index");
            }else{
                session()->flash("error","User Not Updated");
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->delete()){
            session()->flash('success','User Delated');
            return redirect()->back();
        }else{
            session()->flash('error','User Delated');
            return redirect()->back();
        }
    }
}
