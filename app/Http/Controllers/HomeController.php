<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function GetMembers()
    {
        $members = Member::all();

        return view("home.members")->with('members',$members);
    }
    
    public function GetPosts()
    {
        $currentMonth = date('m');
        $posts = Post::where( DB::raw('MONTH(created_at)'), '=', date('n') )->paginate(3);
        //$posts = Post::orderBy('created_at','desc')->paginate(3);

        return view("home.posts")->with('posts',$posts);
    }

    public function GetPostDetails($id)
    {
        $post = Post::find($id);
        return view("home.post-details")->with('post',$post);
    }

    public function GalleryIndex()
    {
        return view("home.gallery");
    }
}
