<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        $dashboard = [];
        $dashboard['admins'] = User::where('role','admin')->count();
        $users = User::all();
        return view("admin.dashboard")->with('users', $users);
    }
}
