<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Activity;
use App\Model\Module;
use App\Model\ModuleToRole;
use App\Model\ModuleToUser;
use App\Model\Role;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RoleAccessController extends Controller
{
    //protected $moduleId = 2;

    public function index(){
        //OwnLibrary::validateAccess($this->moduleId,1);
        $roleAcList = Role::where('status', 1)->orderBy('id')->pluck('name', 'id')->toArray();
        $data['roleList'] = array('0' => 'Select Role') + $roleAcList ;
        return view('backend.access-control.index', $data);
    }

    public function save(Request $request) {

        $updateExist = $request->update_exist;

        $moduleActivity = $request->module_activity;
        $roleId = $request->role_id;
        $target = Role::find($roleId);

        if (empty($target)) {
            show_404();
        }

        //if module to activity empty
        if (empty($moduleActivity)) {
            Session::flash('error', "No Activity Selected");
            return Redirect::route('role.access');
        }

        if (!empty($roleId)) {
            $i = 0;
            $saveField = array();
            if (!empty($moduleActivity)) {
                foreach ($moduleActivity as $moduleId => $modActivity) {
                    foreach ($modActivity as $activityId => $val) {
                        $saveField[$i]['role_id'] = $roleId;
                        $saveField[$i]['module_id'] = $moduleId;
                        $saveField[$i]['activity_id'] = $activityId;
                        $i++;
                    }
                }

                //Delete old access
                ModuleToRole::where('role_id', $roleId)->forceDelete();

                if (ModuleToRole::insert($saveField)) {
                    if (!empty($updateExist)) {
                        //users previous activity list remove
                        $userList = User::where('role_id', $roleId)->select('id', 'role_id')->get();
                        if (!empty($userList)) {
                            foreach ($userList as $user) {
                                ModuleToUser::where('user_id', $user->id)->forceDelete();
                            }
                        }

                        //update new activity list
                        $roleActivityList = ModuleToRole::where('role_id', $roleId)->get();
                        $data = array();
                        if (!empty($roleActivityList)) {
                            $i = 0;
                            foreach ($roleActivityList as $rActivity) {
                                foreach ($userList as $user) {
                                    $data[$i]['user_id'] = $user->id;
                                    $data[$i]['module_id'] = $rActivity->module_id;
                                    $data[$i]['activity_id'] = $rActivity->activity_id;
                                    $i++;
                                }
                            }
                        }
                        if (!empty($data)) {
                            ModuleToUser::insert($data);
                        }
                    }
                    Session::flash('success', 'Role Wise Access Uodated');
                } else {
                    Session::flash('error', 'Role Wise Access Not Uodated');
                }
                return Redirect::route('role.access');
            }//if
        }
    }

    public function roleAclSetup(Request $request) {

        $roleId = $request->role_id;
        $data = array();
        if (!empty($roleId)) {
            $module_activity = DB::table('module_to_activities')
                ->leftJoin('modules', 'modules.id', '=', 'module_to_activities.module_id')
                ->leftJoin('module_to_roles', function($join) use ($roleId) {
                    $join->on('module_to_roles.activity_id', '=','module_to_activities.activity_id')
                        ->on('module_to_roles.module_id', '=', 'modules.id')
                        ->where('module_to_roles.role_id', '=', $roleId);
                })
                ->orderBy('modules.id', 'asc')
                ->orderBy('module_to_activities.activity_id', 'asc')
                ->select('modules.id', 'modules.name','module_to_activities.activity_id','module_to_roles.activity_id as mr_activity')
                ->get();
            $m_activity = array();
            $tmp_module = '';
            if (!empty($module_activity)) {
                foreach ($module_activity as $ma) {
                    if ($tmp_module != $ma->id) {
                        $tmp_module = $ma->id;
                    }
                    $m_activity[$tmp_module][$ma->activity_id] = 1;
                    if (!empty($ma->mr_activity)) {
                        $m_activity[$tmp_module][$ma->activity_id] = 2;
                    }
                }
            }
            $data['m_activity'] = $m_activity;
            $data['all_activity'] = Activity::orderBy('id', 'asc')->get();
            $data['modules'] = Module::orderBy('id', 'asc')->get();
            $data['role_id'] = $roleId;
        }

        return view('backend.access-control.roleaclsetup', $data);
    }
}
