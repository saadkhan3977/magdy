<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("profile.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       try{
        
        $update_fields = array();
        $update_fields = [
            "phone" => $request->phone,
            "f_name" => $request->F_name,
            "l_name" => $request->l_name,
            "occupation" => $request->occupation,
            "dob" => $request->dob,
            "gender" => $request->gender,
            "facebook" => $request->facebook,
            "tweeter" => $request->tweeter,
            "insta" => $request->insta,
            "linkdin" => $request->linkdin,
        ];
      if($request->hasfile("profile_pic")){
            $this->validate($request, [
                'profile_pic' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            ]);
            $image = $request->file('profile_pic');
            $input['imagename'] = time().'.'.$image->extension();
            $filePath = public_path('/uploads/images/thumbnails');
            $img = Image::make($image->path());
            $img->resize(512, 512, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$input['imagename']);
            $filePath = public_path('/uploads/images');
            $image->move($filePath, $input['imagename']);
            $update_fields["profile_image"] = $input['imagename'];
            $update_fields["profile_image_url"] = asset("uploads/images");
        }
        Auth::user()->update($update_fields);
        
        return redirect()->back()->with(["success" => true , "message" => "Profile updated Successfully"]);
      }
      catch(\Exception $exception)
      { 
        return redirect()->back()->with(["success" => false , "message" => $exception->getMessage()]);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
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
    }
}
