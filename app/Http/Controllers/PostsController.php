<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostImage;
use App\Images;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $posts = Post::orderBy("created_at","desc")->paginate(10);
        
        return view("admin.posts.index")->with('posts',$posts);
    }

    public function loadDataTable()
    {
        $posts = Post::orderBy("created_at","desc")->paginate(10);
        
        return view("admin.posts._index")->with('posts',$posts);
    }

    public function create()
    {
        return view("admin.posts.create");
    }

    public function store(Request $request)
    {
         //
         /*$rules = array(
            "title" => "required",
            "body" => "required",
            "shortDescription" => "required",
            "file"=>"image|nullable|max:3000"
        );*/


        // $validator = Validator::make(input::all(),$rules);

        // if($validator->fails())
        //     return response()->json(array('errors'=>$validator->getMessageBag()->toarray()));
            $post = new Post;
            $post->user_id = auth()->user()->id;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->shortDescription = $request->input('shortDescription');
            $post->save();

            $posts = Post::all();
            $html = View::make('admin.posts._index',compact('posts'))->render();
            if($request->hasFile("file"))
             {
                foreach($request->file('file') as $image)
                {
                    $filenameExt = $image->getClientOriginalName();
    
                    $filename=pathinfo($filenameExt,PATHINFO_FILENAME);
    
                    $extension = $image->getClientOriginalExtension();
    
                    $filenameToStore = $filename."_".time().".".$extension;
    
                    //upload the image
                    $path = $image->storeAs("public/post_images",$filenameToStore);
                    
                    $img = new PostImage([
                        'post_id'=>$post->id,
                        'cover_image'=> $filenameToStore
                    ]);
                    $img->save();
                }
             }else{
                 $filenameToStore="noname.jpg";
             }
            
            return response()->json($html);
     
    }
}
