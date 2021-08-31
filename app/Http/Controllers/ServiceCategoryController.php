<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ServiceCategoryController extends Controller
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
        $categories = ServiceCategory::all();
        return view('backend.service_category.index',compact('categories'));
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
            'name'                => $request->input('name'),
            'slug'                => $request->input('slug'),
            'short_description'   => $request->input('short_description'),
            'list'                => $request->input('list'),
            'created_by'          => Auth::user()->id,
        ];
        if(!empty($request->file('image'))){
            $image        = $request->file('image');
            $name         = uniqid().'_'.$image->getClientOriginalName();
            $path         = base_path().'/public/images/uploads/service_categories/';
            $moved        = Image::make($image->getRealPath())->resize(1170, 795)->orientate()->save($path.$name);
            if ($moved){
                $data['image']= $name;
            }
        }

        $cat = ServiceCategory::create($data);
        if($cat){
            Session::flash('success','Service Category Created Successfully');
        }
        else{
            Session::flash('error','Something went wrong. Service Category cannot be created');
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
        $edit   = ServiceCategory::find($id);
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
        $cat                      =  ServiceCategory::find($id);
        $cat->name                =  $request->input('name');
        $cat->slug                =  $request->input('slug');
        $cat->short_description   =  $request->input('short_description');
        $cat->list                =  $request->input('list');
        $oldimage                 = $cat->image;

        if (!empty($request->file('image'))){
            $image                = $request->file('image');
            $name                 = uniqid().'_'.$image->getClientOriginalName();
            $path                 = base_path().'/public/images/uploads/service_categories/';
            $moved                = Image::make($image->getRealPath())->resize(1170, 785)->orientate()->save($path.$name);
            if ($moved){
                $cat->image = $name;
                if (!empty($oldimage) && file_exists(public_path().'/images/uploads/service_categories/'.$oldimage)){
                    @unlink(public_path().'/images/uploads/service_categories/'.$oldimage);
                }
            }
        }
        $status = $cat->update();
        if($status){
            Session::flash('success','Service Category was updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Service Category could not be Updated');
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
        $deleteslider       = ServiceCategory::find($id);
        $rid                = $deleteslider->id;
        if (!empty($deleteslider->image) && file_exists(public_path().'/images/uploads/service_categories/'.$deleteslider->image)){
            @unlink(public_path().'/images/uploads/service_categories/'.$deleteslider->image);
        }
        $deleteslider->delete();
        return '#category_'.$rid;
    }
}
