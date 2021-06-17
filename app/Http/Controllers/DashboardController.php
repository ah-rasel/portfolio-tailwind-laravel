<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return storage::disk('portfolio')->url('NQV1iDS0poPj1kDVwDj4S1d3bqAbDYWjT2W461Mh.png');
    }
}
