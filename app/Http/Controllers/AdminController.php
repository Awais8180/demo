<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $user = User::all();
        $coampnies = Companies::all();
        $employee=Employees::all();
        return view('backend.admin.dashboard.index',compact('user','coampnies','employee'));
    }

    public function user() {
        $users = User::All();
        return view('backend.admin.dashboard.user',compact('users'));
    }

    public function userDelete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('delete','successfully Delete User record');
    }
}
