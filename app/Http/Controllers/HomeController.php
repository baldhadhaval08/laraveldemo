<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roleId = Auth::user()->role_id;
        if($roleId == Role::ADMIN_ROLE){
            return redirect()->route('admin.index');
        }else{
            $isApproved = Auth::user()->is_approved;
            if($isApproved == 0){
                return redirect()->route('unapproved');
            }else if($isApproved == 1){
                return redirect()->route('approved');
            }
        }
    }
}
