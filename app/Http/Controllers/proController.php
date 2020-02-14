<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
class proController extends Controller
{
    public function index($id){
        $cat=Category::all();
        $user=User::where('id','=',$id)->get();
        $post=Post::where('user_id','=',$id)->get();
        return view('Users.Uprofile.UserProfile',compact('user','post','cat'));
    }
}
