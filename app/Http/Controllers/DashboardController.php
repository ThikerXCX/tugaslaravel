<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create()
    {   
        return view('dashboard.dashboard.index',[
            'users' => User::all(),
            'berita' => Berita::all()
        ]);
    }
}
