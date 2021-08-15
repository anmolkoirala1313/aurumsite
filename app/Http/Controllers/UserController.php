<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
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
        //
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
        $user                 =  User::find($id);
        $user->name           =  $request->input('name');
        $user->email          =  $request->input('email');
        $user->gender         =  $request->input('gender');
        $user->contact        =  $request->input('contact');
        $status = $user->update();
        if($status){
            Session::flash('success','Your Profile Updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Your Profile could not be Updated');
        }
        return redirect()->back();
    }

    public function imageupdate(Request $request, $id)
    {
        $user                 =  User::find($id);
        $oldimage             = $user->image;
        if (!empty($request->file('image'))){
            $image =$request->file('image');
            $name1 = uniqid().'_'.$image->getClientOriginalName();
            $path = base_path().'/public/images/uploads/profiles/'.$name1;
            $image_resize = Image::make($image->getRealPath())->orientate();
            $image_resize->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            if ($image_resize->save($path,80)){
                $user->image= $name1;
                if (!empty($oldimage) && file_exists(public_path().'/images/uploads/profiles/'.$oldimage)){
                    @unlink(public_path().'/images/uploads/profiles/'.$oldimage);
                }
            }
        }
        $status = $user->update();
        if($status){
            Session::flash('success','Your Profile Image is Updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Your Profile Image could not be Updated');
        }
        return redirect()->back();
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

    public function profile(){
        $user_id        = Auth::user()->id;
        $user           = User::find($user_id);
        return view('backend.user.profile',compact('user'));
    }

    public function profilepassword(Request $request){
        $id                 = Auth::user()->id;
        $logged_in_user     = User::find($id);
        $current_password   = $request->current_password;

        $validator = Validator::make($request->all(),[
            'password' => 'required',
            'current_password' => ['required', function ($attribute, $current_password, $fail) use ($logged_in_user) {
                if (!\Hash::check($current_password, $logged_in_user->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $password                 = Hash::make($request->password);
        $logged_in_user->password = $password;
        $status = User::where('id', $id)->update(array('password' => $password));


        if($status){
            Session::flash('success','Your Password Updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Your Password could not be Updated');
        }
        return redirect()->back();
    }
}
