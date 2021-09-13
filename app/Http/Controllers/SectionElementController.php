<?php

namespace App\Http\Controllers;

use App\Models\PageSection;
use App\Models\SectionElement;
use Illuminate\Http\Request;

class SectionElementController extends Controller
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

    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $page_section = PageSection::where('page_id', $id)->get();
        $sections      = array();
        $list_1 = "";
        $list_2 = "";
        $list_3 = "";
        foreach ($page_section as $section){
            $sections[$section->id] = $section->section_slug;
            if($section->section_slug == 'list_section_1'){
                $list_1 = $section->list_number_1;
            }else if($section->section_slug == 'list_section_2'){
                $list_2 = $section->list_number_2;
            }else if ($section->section_slug == 'process_selection'){
                $list_3 = $section->list_number_3;
            }
        }

        return view('backend.pages.section_elements.create',compact( 'sections','list_1','list_2','list_3'));
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
