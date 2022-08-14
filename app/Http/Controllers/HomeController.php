<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        if (auth()->user()->role == 'admin') {
            $users = User::where('role','!=','admin')->get();
            return view('admin.home',['users_form' => $users]);
        }
        return view('user.home');
    }
}
