<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;



class SliderController extends Controller
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
        $sliders = Slider::all();
        return view('backend.slider.index',compact('sliders'));
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
            'heading'                => $request->input('heading'),
            'subheading_one'         => $request->input('subheading_one'),
            'subheading_two'         => $request->input('subheading_two'),
            'button_one'             => $request->input('button_one'),
            'button_two'             => $request->input('button_two'),
            'button_one_link'        => $request->input('button_one_link'),
            'button_two_link'        => $request->input('button_two_link'),
            'status'                 => $request->input('status'),
            'created_by'             => Auth::user()->id,
        ];

        if(!empty($request->file('slider_image'))){
            $image        = $request->file('slider_image');
            $name         = uniqid().'_'.$image->getClientOriginalName();
            $thumb        = 'thumb_'.$name;
            $path         = base_path().'/public/images/uploads/sliders/';
            $thumb_path   = base_path().'/public/images/uploads/sliders/thumb/';
            $moved        = Image::make($image->getRealPath())->resize(1920, 850)->orientate()->save($path.$name);
            $thumb        = Image::make($image->getRealPath())->resize(100, 50)->orientate()->save($thumb_path.$thumb);
            if ($moved && $thumb){
                $data['slider_image']= $name;
            }
        }

        $slider = Slider::create($data);
        if($slider){
            Session::flash('success','Slider Created Successfully');
        }
        else{
            Session::flash('error','Something went wrong. Slider cannot be created');
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
        $edit   = Slider::find($id);
        return response()->json($edit);
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
        $slider                      =  Slider::find($id);
        $slider->heading             =  $request->input('heading');
        $slider->subheading_one      =  $request->input('subheading_one');
        $slider->subheading_two      =  $request->input('subheading_two');
        $slider->button_one          =  $request->input('button_one');
        $slider->button_two          =  $request->input('button_two');
        $slider->button_one_link     =  $request->input('button_one_link');
        $slider->button_two_link     =  $request->input('button_two_link');
        $slider->status              =  $request->input('status');
        $oldimage                    = $slider->slider_image;
        $thumbimage                  = 'thumb_'.$slider->slider_image;




        if (!empty($request->file('slider_image'))){
            $image               =  $request->file('slider_image');
            $name1               = uniqid().'_'.$image->getClientOriginalName();
            $thumb               = 'thumb_'.$name1;
            $path                = base_path().'/public/images/uploads/sliders/';
            $thumb_path          = base_path().'/public/images/uploads/sliders/thumb/';
            $moved               = Image::make($image->getRealPath())->resize(1920, 850)->orientate()->save($path.$name1);
            $thumb               = Image::make($image->getRealPath())->resize(100, 50)->orientate()->save($thumb_path.$thumb);
            if ($moved && $thumb){
                $slider->slider_image = $name1;
                if (!empty($oldimage) && file_exists(public_path().'/images/uploads/sliders/'.$oldimage)){
                    @unlink(public_path().'/images/uploads/sliders/'.$oldimage);
                }
                if (!empty($thumbimage) && file_exists(public_path().'/images/uploads/sliders/thumb/'.$thumbimage)){
                    @unlink(public_path().'/images/uploads/sliders/thumb/'.$thumbimage);
                }
            }
        }
        $status = $slider->update();
        if($status){
            Session::flash('success','Slider was updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Slider could not be Updated');
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
        $deleteslider       = Slider::find($id);
        $rid                = $deleteslider->id;
        $image              = $deleteslider->slider_image;
        $thumbimage         = "thumb_".$deleteslider->slider_image;
        if (!empty($image) && file_exists(public_path().'/images/uploads/sliders/'.$image)){
            @unlink(public_path().'/images/uploads/sliders/'.$image);
        }
        if (!empty($thumbimage) && file_exists(public_path().'/images/uploads/sliders/thumb/'.$thumbimage)){
            @unlink(public_path().'/images/uploads/sliders/thumb/'.$thumbimage);
        }
        $deleteslider->delete();
        return '#slider_'.$rid;
    }
}
