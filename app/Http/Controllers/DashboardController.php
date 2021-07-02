<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        if(Gate::denies('dashboard_access')){
           return redirect()->route('posts.show');
        }
        return view('dashboard');
    }
}
