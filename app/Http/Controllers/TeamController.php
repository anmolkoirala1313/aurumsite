<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;


class TeamController extends Controller
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
        $teams = Team::all();
        return view('backend.team.index',compact('teams'));
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
            'post'                => $request->input('post'),
            'description'         => $request->input('description'),
            'created_by'          => Auth::user()->id,
        ];

        if(!empty($request->file('image'))){
            $image        = $request->file('image');
            $name         = uniqid().'_'.$image->getClientOriginalName();
            $path         = base_path().'/public/images/uploads/teams/';
            $moved        = Image::make($image->getRealPath())->resize(300, 300)->orientate()->save($path.$name);
            if ($moved){
                $data['image']= $name;
            }
        }
        $team = Team::create($data);
        if($team){
            Session::flash('success','Team details Created Successfully');
        }
        else{
            Session::flash('error','Something went wrong. Team details cannot be created');
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
        $edit   = Team::find($id);
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
        $team                      =  Team::find($id);
        $team->name                =  $request->input('name');
        $team->post                =  $request->input('post');
        $team->description         =  $request->input('description');
        $oldimage                  = $team->image;

        if (!empty($request->file('image'))){
            $image                = $request->file('image');
            $name                 = uniqid().'_'.$image->getClientOriginalName();
            $path                 = base_path().'/public/images/uploads/teams/';
            $moved                = Image::make($image->getRealPath())->resize(300, 300)->orientate()->save($path.$name);
            if ($moved){
                $team->image = $name;
                if (!empty($oldimage) && file_exists(public_path().'/images/uploads/teams/'.$oldimage)){
                    @unlink(public_path().'/images/uploads/teams/'.$oldimage);
                }
            }
        }

        $status = $team->update();
        if($status){
            Session::flash('success','Team details was updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Team details could not be Updated');
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
        $delete             = Team::find($id);
        $rid                = $delete->id;
        if (!empty($delete->image) && file_exists(public_path().'/images/uploads/teams/'.$delete->image)){
            @unlink(public_path().'/images/uploads/teams/'.$delete->image);
        }
        $delete->delete();
        return '#teams_'.$rid;
    }
}
