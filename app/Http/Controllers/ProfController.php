<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::where('id','=',auth()->user()->id)->get();
        $cat=Category::all();
        $post=Post::all();
        return view('Users.Uprofile.profile',compact('user','cat','post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        return view('Users.Uprofile.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post= new Post();

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $post->photo=$filename;   
        }
        $post->title = $request->title;
        $post->body = $request->body;
        $post->cate_id = $request->cate_id;
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/user/profile');
       
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findorfail($id);
        return view('Users.Uprofile.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findorfail($id);
        if($request->hasfile('propicture')){
            $file=$request->file('propicture');
            $ext =$file->getClientOriginalExtension();
           $filename=time() . '.' . $ext;
            $file->move('images/profile', $filename);
            $user->propicture =$filename;

        }
            $user->name=$request->name;
            $user->email=$request->email;
             $user->password=Hash::make($request->password);
            $user->save();
            return redirect(url('user/profile'));
           
    }

    

    public function poprofile(Request $request,$id){
        $post = Post::findOrfail($id);
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // $path = Storage::putFile('public', $request->file('photo'));
        // $url = Storage::url($path);
        // $post->photo = $url;


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $post->photo = $filename;
        }


        $post->title = $request->title;
        $post->body = $request->body;
        $post->cate_id = $request->cate_id;
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/user/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findorfail($id);
        $post->delete();
        return back();
    }
}
