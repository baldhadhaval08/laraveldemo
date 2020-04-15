<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->route = Route::getCurrentRoute() ? Route::getCurrentRoute()->getName() : '';
    }


    /**
     *
     * Get data for listing page
     * @return mixed
     * @throws \Exception
     */
    public function getData(){
        return Datatables::of(User::query()->with([
                'role'=>function($query){$query->select('id','name');},
            ]))->addColumn('action', function ($data) {
                return
                    (($data->role_id != Role::ADMIN_ROLE) ? (($data->is_approved == 1) ? ('<a href="javascript:;" data-url="'. url('admin/updatestatus/'.$data->id) .'" class="modal-popup-updatestatus btn-sm waves-effect waves-light btn-danger" title="UnApprove user" data-type="unapprove">UnApproved</a>'):('<a href="javascript:;" data-url="'. url('admin/updatestatus/'.$data->id) .'" class="modal-popup-updatestatus btn-sm waves-effect waves-light btn-success" title="Approve User" data-type="approve">Approved</a>')) : '');
            })
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Role::checkPermission($this->route)){
            return abort(403); // Forbidden
        }
        return view('admin.list');
    }

    /**
     * Update user status
     * @param $id - User Id
     *
     * @return bool
     */
    public function updateStatus($id){
        if(!Role::checkPermission($this->route)){
            return abort(403); // Forbidden
        }

        $user = User::find($id);
        if(empty($user)){
            return 'Sorry, something went wrong.';
        }
        try {
            $user->is_approved = $user->is_approved == 0 ? 1 : 0;
            $user->save();

            return 1;
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
