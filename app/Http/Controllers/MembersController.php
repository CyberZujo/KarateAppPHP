<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Member;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::orderBy("lastName","asc")->paginate(10);

        return view("admin.members.index")->with("members",$members);
    }

    public function loadTableData()
    {
        $members = Member::orderBy("lastName","asc")->paginate(10);

        $view = View::make("admin.members._index",compact("members"))->render();
        

        return response()->json(array("responseData"=>$view));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ("admin.members.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $rules = array(
            "firstName" => "required",
            "lastName" => "required",
            "beltRank" => "required",
            "file"=>"image|nullable|max:3000"
        );

        //handle file upload
        if($request->hasFile("file"))
        {
            $filenameExt = $request->file("file")->getClientOriginalName();

            $filename=pathinfo($filenameExt,PATHINFO_FILENAME);

            $extension = $request->file("file")->getClientOriginalExtension();

            $filenameToStore = $filename."_".time().".".$extension;

            //upload the image
            $path = $request->file("file")->storeAs("public/member_images",$filenameToStore);
        }else{
            $filenameToStore = "noimage.jpg";
        }

        $validator = Validator::make(input::all(),$rules);

        if($validator->fails())
            return response()->json(array('errors'=>$validator->getMessageBag()->toarray()));
        else{
            $member = new Member;
            $member->user_id = auth()->user()->id;
            $member->firstName = $request->input('firstName');
            $member->lastName = $request->input('lastName');
            $member->beltRank = $request->input('beltRank');
            $member->JMBG = $request->input('JMBG');
            $member->dateOfBirth = $request->input('dateOfBirth');
            $member->PhotoURL = $filenameToStore;
            $member->save();

            $members = Member::all();
            $html = View::make('admin.members._index',compact('members'))->render();
            return response()->json($html);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $member = Member::find($id);

        return view('members.details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($admin_member)
    {
        //
        $member = Member::find($admin_member);

        return view("admin.members.edit")->with("member",$member);
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
        //

        $rules = array(
            "firstName" => "required",
            "lastName" => "required",
            "beltRank" => "required",
            "file"=>"image|nullable|max:3000"
        );

           //handle file upload
           if($request->hasFile("file"))
           {
               $filenameExt = $request->file("file")->getClientOriginalName();
   
               $filename=pathinfo($filenameExt,PATHINFO_FILENAME);
   
               $extension = $request->file("file")->getClientOriginalExtension();
   
               $filenameToStore = $filename."_".time().".".$extension;
   
               //upload the image
               $path = $request->file("file")->storeAs("public/member_images",$filenameToStore);
           }else{
               $filenameToStore = "noimage.jpg";
           }
   
           $validator = Validator::make($request->all(),$rules);
   
           if($validator->fails())
               return response()->json(array('errors'=>$validator->getMessageBag()->toarray()));
           else{
               $member = Member::find($id);
               $member->firstName = $request->input('firstName');
               $member->lastName = $request->input('lastName');
               $member->beltRank = $request->input('beltRank');
               $member->JMBG = $request->input('JMBG');
               $member->dateOfBirth = $request->input('dateOfBirth');
               if($request->input('PhotoURL')!=null)
                    $member->PhotoURL = $filenameToStore;
            
               $member->save();
   
               $members = Member::all();
               $html = View::make('admin.members._index',compact('members'))->render();
               return response()->json($html);
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $member = Member::find($id);

        $member->delete();
        return redirect("admin-members");
    }
}
