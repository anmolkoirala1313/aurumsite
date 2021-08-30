<?php

namespace App\Http\Controllers;


use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
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
        $settings = Setting::first();
        return view('backend.setting.settings',compact('settings'));
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
        $data=[
            'website_name'              => $request->input('website_name'),
            'website_description'       => $request->input('website_description'),
            'phone'                     => $request->input('phone'),
            'mobile'                    => $request->input('mobile'),
            'whatsapp'                  => $request->input('whatsapp'),
            'viber'                     => $request->input('viber'),
            'facebook'                  => $request->input('facebook'),
            'youtube'                   => $request->input('youtube'),
            'instagram'                 => $request->input('instagram'),
            'address'                   => $request->input('address'),
            'email'                     => $request->input('email'),
            'google_analytics'          => $request->input('google_analytics'),
            'created_by'                => Auth::user()->id,
        ];

        $theme = Setting::create($data);
        if($theme){
            Session::flash('success','Settings Created Successfully');
        }
        else{
            Session::flash('error','Settings Creation Failed');
        }
        return redirect()->back();
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
        $update_theme                           =  Setting::find($id);
        $update_theme->website_name             =  $request->input('website_name');
        $update_theme->website_description      =  $request->input('website_description');
        $update_theme->phone                    =  $request->input('phone');
        $update_theme->mobile                   =  $request->input('mobile');
        $update_theme->whatsapp                 =  $request->input('whatsapp');
        $update_theme->viber                    =  $request->input('viber');
        $update_theme->facebook                 =  $request->input('facebook');
        $update_theme->youtube                  =  $request->input('youtube');
        $update_theme->instagram                =  $request->input('instagram');
        $update_theme->address                  =  $request->input('address');
        $update_theme->email                    =  $request->input('email');
        $update_theme->google_analytics         =  $request->input('google_analytics');
        $update_theme->updated_by               =  Auth::user()->id;

        $status=$update_theme->update();

        if($status){
            Session::flash('success','Settings Updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Settings could not be Updated');
        }
        return redirect()->back();
    }

    public function imageupdate(Request $request, $id)
    {
        $update_theme                           =  Setting::find($id);
        $oldimage_logo                          = $update_theme->logo;
        $oldimage_logo_white                    = $update_theme->logo_white;
        $oldimage_favicon                       = $update_theme->favicon;

        if (!empty($request->file('logo'))){
            $path = base_path().'/public/images/uploads/settings';
            $image =$request->file('logo');
            $name1 = uniqid().'_'.$image->getClientOriginalName();
            if ($image->move($path,$name1)){
                $update_theme->logo= $name1;
                if (!empty($oldimage_logo) && file_exists(public_path().'/images/uploads/settings/'.$oldimage_logo)){
                    @unlink(public_path().'/images/uploads/settings/'.$oldimage_logo);
                }
            }

        }

        if (!empty($request->file('logo_white'))){
            $path = base_path().'/public/images/uploads/settings/';
            $image =$request->file('logo_white');
            $name1 = uniqid().'_'.$image->getClientOriginalName();
            if ($image->move($path,$name1)){
                $update_theme->logo_white= $name1;
                if (!empty($oldimage_logo_white) && file_exists(public_path().'/images/uploads/settings/'.$oldimage_logo_white)){
                    @unlink(public_path().'/images/uploads/settings/'.$oldimage_logo_white);
                }
            }

        }


        if (!empty($request->file('favicon'))){
            $path = base_path().'/public/images/uploads/settings/';
            $image =$request->file('favicon');
            $name1 = uniqid().'_'.$image->getClientOriginalName();
            if ($image->move($path,$name1)){
                $update_theme->favicon= $name1;
                if (!empty($oldimage_favicon) && file_exists(public_path().'/images/uploads/settings/'.$oldimage_favicon)){
                    @unlink(public_path().'/images/uploads/settings/'.$oldimage_favicon);
                }
            }

        }
        $status=$update_theme->update();

        if($status){
            Session::flash('success','Your Logo Images is Updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Your Logo Images could not be Updated');
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
}
