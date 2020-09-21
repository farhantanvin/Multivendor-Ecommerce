<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Activity;
use App\Model\Module;
use App\Model\ModuleToRole;
use App\Model\ModuleToUser;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserAccessController extends Controller
{
    //protected $moduleId = 3;
    public function index() {
        //OwnLibrary::validateAccess($this->moduleId,1);

        $userArr = User::with('role')->where('status', 1)->orderBy('id')->get();

        $userList = array('0' => 'Select User');
        if (!empty($userArr)) {
            foreach ($userArr as $item) {
                $userList[$item->id] = $item->name.' » '.$item->role->name;
            }
        }
        $data['userList'] = $userList;
        return view('backend.access-control.useracl', $data);
    }

    public function userAclSetup(Request $request) {
        $userId = $request->user_id;

        $data = array();
        $userInfo = array();
        if (!empty($userId)) {

            $module_activity = DB::table('module_to_activities')
                ->leftJoin('modules', 'modules.id', '=', 'module_to_activities.module_id')
                ->leftJoin('module_to_users', function($join) use ($userId) {
                    $join->on('module_to_users.activity_id', '=', 'module_to_activities.activity_id')
                        ->on('module_to_users.module_id', '=', 'module_to_activities.module_id')
                        ->on('module_to_users.module_id', '=', 'modules.id')
                        ->where('module_to_users.user_id', '=', $userId);
                })
                ->orderBy('modules.id', 'asc')
                ->orderBy('module_to_activities.activity_id', 'asc')
                ->select('modules.id', 'modules.name', 'module_to_activities.activity_id', 'module_to_users.activity_id as mu_activity')
                ->get();

            $m_activity = array();

            //Gather selected User's Info
            $userInfo = User::find($userId);
            //Get Role wise Module
            $groupRole = ModuleToRole::where('role_id', $userInfo->role_id)->get();

            $m_activity = array();
            $tmp_module = '';
            if (!empty($module_activity)) {
                foreach ($module_activity as $ma) {
                    if ($tmp_module != $ma->id) {
                        $tmp_module = $ma->id;
                    }
                    $m_activity[$tmp_module][$ma->activity_id] = 1;

                    if (!empty($ma->mu_activity)) {

                        $m_activity[$tmp_module][$ma->activity_id] = 2;
                    }
                }
            }

            $data['m_activity'] = $m_activity;

            $roleRelation = array();
            foreach ($groupRole as $item) {
                $roleRelation[$item->module_id][$item->activity_id] = $item->activity_id;
            }

            $data['role_relation'] = $roleRelation;

            $data['all_activity'] = Activity::all();
            $data['modules'] = Module::all();
        }
        $data['user_info'] = $userInfo;

        return View('backend.access-control.useraclsetup', $data);
    }

    public function save(Request $request) {
        $moduleActivity = $request->module_activity;
        $userId = $request->user_id;

        //if module to activity empty
        if (empty($moduleActivity)) {
            Session::flash('error',"No Activity Selected");
            return Redirect::route('user.access');
        }

        if(empty($userId)) {
            Session::flash('error', 'No User Selected');
            return Redirect::route('user.access');
        }

        $i = 0;
        if (!empty($moduleActivity)) {
            foreach ($moduleActivity as $moduleId => $modActivity) {
                foreach ($modActivity as $activityId => $val) {
                    $saveField[$i]['user_id'] = $userId;
                    $saveField[$i]['module_id'] = $moduleId;
                    $saveField[$i]['activity_id'] = $activityId;
                    $i++;
                }
            }

            //Delete old access
            ModuleToUser::where('user_id', $userId)->forceDelete();

            //echo '<pre>';print_r($saveField);exit;

            if (ModuleToUser::insert($saveField)) {
                Session::flash('success', 'User Wise Access Updated');
            } else {
                Session::flash('error', 'User Wise Access Not Updated');
            }
        }
        return Redirect::route('user.access');
    }
}
