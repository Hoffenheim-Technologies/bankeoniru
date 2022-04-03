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
        
        return view("admin.dashboard", compact('user','dashboard'));
    }
}
