<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $categories= Category::count();
        $posts= Post::count();
        $messages= Message::where('read_status',0)->count();
        return view('dashboard',compact('users','categories','posts','messages'));
    }
}
