<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class ApprovedController extends Controller
{

    public $routename;

    public function __construct()
    {
        $this->middleware('auth');
        $this->routename = Route::getCurrentRoute() ? Route::getCurrentRoute()->getName() : '/xyz';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roleId = Auth::user()->role_id;
        if(!Role::checkPermission($this->routename)){
            return abort(403); // Forbidden
        } else if($roleId == Role::ADMIN_ROLE){
            return redirect()->route('admin.index');
        }
        
        return view('approved.dashboard');
    }
}
