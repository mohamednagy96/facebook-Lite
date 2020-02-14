<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\category;
use DB;
class categController extends Controller
{
    public function index($id){
        $post=Post::where('cate_id' , '=' , $id)->get();
        $cat=Category::all();
        return view('Users.Category.search',compact('post','cat'));    
    }
}
