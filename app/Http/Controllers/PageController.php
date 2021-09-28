<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionElement;
use App\Models\SectionGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
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
        $pages = Page::all();
        return view('backend.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
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
            'status'              => $request->input('status'),
            'created_by'          => Auth::user()->id,
        ];
        $status   = Page::create($data);
        $sections = $request->input('section');
        $page     = Page::latest()->first();
        $listval1     = ($request->input('list_number_1')==null) ? 3:$request->input('list_number_1');
        $listval2     = ($request->input('list_number_2')==null) ? 3:$request->input('list_number_2');
        $listval3     = ($request->input('list_number_3')==null) ? 3:$request->input('list_number_3');

        if($sections !== null){
            foreach ($sections as $key=>$value){
                $section_name = str_replace("_"," ", $value);
                if($value == 'list_section_1'){
                    $dataone = [
                        'section_name'                => $section_name,
                        'section_slug'                => $value,
                        'list_number_1'               => $listval1,
                        'page_id'                     => $page->id,
                        'created_by'                  => Auth::user()->id,
                    ];
                    $section_status = PageSection::create($dataone);
                }
                elseif ($value == 'list_section_2'){
                    $section_status = PageSection::create([
                        'section_name'                  => $section_name,
                        'section_slug'                  => $value,
                        'list_number_2'                 => $listval2,
                        'page_id'                       => $page->id,
                        'created_by'                    => Auth::user()->id,
                    ]);

                }
                elseif($value == 'process_selection'){
                    $section_status = PageSection::create([
                        'section_name'                  => $section_name,
                        'section_slug'                  => $value,
                        'list_number_3'                 => $listval3,
                        'page_id'                       => $page->id,
                        'created_by'                    => Auth::user()->id,
                    ]);
                } else{
                    $section_status =  PageSection::create([
                        'section_name'                  => $section_name,
                        'section_slug'                  => $value,
                        'page_id'                       => $page->id,
                        'created_by'                    => Auth::user()->id,
                    ]);
                }
            }
        }else{
            $section_status = PageSection::create([
                'section_name'                  => 'basic section',
                'section_slug'                  => 'basic_section',
                'page_id'                       => $page->id,
                'created_by'                    => Auth::user()->id,
            ]);
        }
        if($status && $section_status){
            Session::flash('success',ucfirst($page->name).' Page with section(s) Created Successfully');
        }
        else{
            Session::flash('error','Page with section(s) could not be created Successfully');
        }

        return redirect()->route('pages.index');
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
        $page               = Page::find($id);
        $sections           = array();
        $list1              = "";
        $list1_id           = "";
        $list2              = "";
        $list2_id           = "";
        $list3              = "";
        $list3_id           = "";
        foreach ($page->sections as $section){
            $sections[$section->id] = $section->section_slug;
            if( $section->section_slug == 'list_section_1'){
                $list1      = $section->list_number_1;
                $list1_id   = $section->id;
            }elseif ($section->section_slug == 'list_section_2'){
                $list2      = $section->list_number_2;
                $list2_id   = $section->id;
            }elseif ($section->section_slug == 'process_selection'){
                $list3      = $section->list_number_3;
                $list3_id   = $section->id;
            }
        }

        return view('backend.pages.edit',compact('page','sections','list1','list2','list3','list1_id','list2_id','list3_id'));
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
        $incoming_sections        = $request->input('section');
        $section                  = PageSection::where('page_id',$id)->get()->toArray();
        $db_section_slug          = array_map(function($item){ return $item['section_slug']; }, $section);

        $page                     = Page::find($id);
        $page->name               = $request->input('name');
        $page->slug               = $request->input('slug');
        $page->status             = $request->input('status');


        $status                 = $page->update();

        $listval1               = ($request->input('list_number_1')==null) ? 3:$request->input('list_number_1');
        $listval2               = ($request->input('list_number_2')==null) ? 3:$request->input('list_number_2');
        $listval3               = ($request->input('list_number_3')==null) ? 3:$request->input('list_number_3');


        if($incoming_sections !== null) {
            foreach ($incoming_sections as $ins) {
                if (!in_array($ins, $db_section_slug)) {
                    $section_name = str_replace("_", " ", $ins);
                    if ($ins == 'list_section_1') {
                        $section_status = PageSection::create(
                            [
                            'section_name'  => $section_name,
                            'section_slug'  => $ins,
                            'list_number_1' => $listval1,
                            'page_id'       => $page->id,
                            'created_by'    => Auth::user()->id,
                        ]);
                    }
                    elseif ($ins == 'list_section_2') {
                        $section_status = PageSection::create([
                            'section_name' => $section_name,
                            'section_slug' => $ins,
                            'list_number_2' => $listval2,
                            'page_id' => $page->id,
                            'created_by' => Auth::user()->id,
                        ]);

                    }
                    elseif ($ins == 'process_selection') {
                        $section_status = PageSection::create([
                            'section_name' => $section_name,
                            'section_slug' => $ins,
                            'list_number_3' => $listval3,
                            'page_id' => $page->id,
                            'created_by' => Auth::user()->id,
                        ]);
                    }
                    else {
                        $section_status = PageSection::updateOrCreate([
                            'section_name' => $section_name,
                            'section_slug' => $ins,
                            'page_id' => $page->id,
                            'created_by' => Auth::user()->id,
                        ]);
                    }
                }else{
                    if ($ins == 'list_section_1') {
                        $section_element                  = PageSection::find($request->input('list_1_id'));
                        $section_element->list_number_1   = $request->input('list_number_1');
                        $section_status                   = $section_element->update();
                    }
                    elseif ($ins == 'list_section_2'){
                        $section_element                  = PageSection::find($request->input('list_2_id'));
                        $section_element->list_number_2   = $request->input('list_number_2');
                        $section_status                   = $section_element->update();
                    }
                    elseif ($ins == 'process_selection'){
                        $section_element                  = PageSection::find($request->input('list_3_id'));
                        $section_element->list_number_3   = $request->input('list_number_3');
                        $section_status                   = $section_element->update();
                    }
                }
            }

            foreach ($db_section_slug as $dbs){
                if(!in_array($dbs,$incoming_sections)){
                    $delete_section   = PageSection::where('page_id',$id)->where('section_slug',$dbs);
                    $sections         = PageSection::with('elements')->where('page_id',$id)->where('section_slug',$dbs)->get();
                    foreach ($sections as $section){
                        if($section->section_slug == 'basic_section'){
                            $basic_element = SectionElement::where('page_section_id', $section->id)
                                ->first();
                            if (!empty($basic_element->image) && file_exists(public_path().'/images/uploads/section_elements/basic_section/'.$basic_element->image)){
                                @unlink(public_path().'/images/uploads/section_elements/basic_section/'.$basic_element->image);
                            }
                        }
                        if($section->section_slug == 'background_image_section'){
                            $bgimage_element = SectionElement::where('page_section_id', $section->id)
                                ->first();
                            if (!empty($bgimage_element->image) && file_exists(public_path().'/images/uploads/section_elements/bgimage_section/'.$bgimage_element->image)){
                                @unlink(public_path().'/images/uploads/section_elements/bgimage_section/'.$bgimage_element->image);
                            }
                        }
                        if($section->section_slug == 'tab_section_1'){
                            $tab1_element = SectionElement::where('page_section_id', $section->id)
                                ->get();
                            foreach ($tab1_element as $elements){
                                if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/tab_1/'.$elements->list_image)){
                                    @unlink(public_path().'/images/uploads/section_elements/tab_1/'.$elements->list_image);
                                }
                            }

                        }
                        if($section->section_slug == 'list_section_1'){
                            $list1_element = SectionElement::where('page_section_id', $section->id)
                                ->get();
                            foreach ($list1_element as $elements){
                                if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/list_1/'.$elements->list_image)){
                                    @unlink(public_path().'/images/uploads/section_elements/list_1/'.$elements->list_image);
                                }
                            }
                        }
                        if($section->section_slug == 'list_section_2'){
                            $list2_element = SectionElement::where('page_section_id', $section->id)
                                ->get();
                            foreach ($list2_element as $elements){
                                if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/list_2/'.$elements->list_image)){
                                    @unlink(public_path().'/images/uploads/section_elements/list_2/'.$elements->list_image);
                                }
                            }
                        }
                        if($section->section_slug == 'process_selection'){
                            $list2_element = SectionElement::where('page_section_id', $section->id)
                                ->get();
                            foreach ($list2_element as $elements){
                                if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/process_list/'.$elements->list_image)){
                                    @unlink(public_path().'/images/uploads/section_elements/process_list/'.$elements->list_image);
                                }
                            }
                        }
                        if($section->section_slug == 'gallery_section'){
                            $gallery_element = SectionGallery::where('page_section_id', $section->id)
                                ->get();
                            foreach ($gallery_element as $elements){
                                if (!empty($elements->filename) && !empty($elements->resized_name) && file_exists(public_path().'/images/uploads/section_elements/gallery/'.$elements->filename) && file_exists(public_path().'/images/uploads/section_elements/gallery/'.$elements->resized_name)){
                                    @unlink(public_path().'/images/uploads/section_elements/gallery/'.$elements->filename);
                                    @unlink(public_path().'/images/uploads/section_elements/gallery/'.$elements->resized_name);
                                }
                            }
                        }

                    }
                    $delete_status    = $delete_section->delete();
                }
            }
        }else{
            $delete_section   = PageSection::where('page_id',$id);
            $delete_status    = $delete_section->delete();
            $section_status = PageSection::create([
                'section_name'                  => 'basic section',
                'section_slug'                  => 'basic_section',
                'page_id'                       => $page->id,
                'created_by'                    => Auth::user()->id,
            ]);
        }

        if($status){
            Session::flash('success',ucfirst($page->name).' Page with section(s) is Updated.');
        }
        else{
            Session::flash('error','Page with section(s) could not be updated.');
        }

        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete             = Page::with('sections')->find($id);

        foreach ($delete->sections as $section){
            if($section->section_slug == 'basic_section'){
                $basic_element = SectionElement::where('page_section_id', $section->id)
                    ->first();
                if (!empty($basic_element->image) && file_exists(public_path().'/images/uploads/section_elements/basic_section/'.$basic_element->image)){
                    @unlink(public_path().'/images/uploads/section_elements/basic_section/'.$basic_element->image);
                }
            }
            if($section->section_slug == 'background_image_section'){
                $bgimage_element = SectionElement::where('page_section_id', $section->id)
                    ->first();
                if (!empty($bgimage_element->image) && file_exists(public_path().'/images/uploads/section_elements/bgimage_section/'.$bgimage_element->image)){
                    @unlink(public_path().'/images/uploads/section_elements/bgimage_section/'.$bgimage_element->image);
                }
            }
            if($section->section_slug == 'tab_section_1'){
                $tab1_element = SectionElement::where('page_section_id', $section->id)
                    ->get();
                foreach ($tab1_element as $elements){
                    if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/tab_1/'.$elements->list_image)){
                        @unlink(public_path().'/images/uploads/section_elements/tab_1/'.$elements->list_image);
                    }
                }

            }
            if($section->section_slug == 'list_section_1'){
                $list1_element = SectionElement::where('page_section_id', $section->id)
                    ->get();
                foreach ($list1_element as $elements){
                    if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/list_1/'.$elements->list_image)){
                        @unlink(public_path().'/images/uploads/section_elements/list_1/'.$elements->list_image);
                    }
                }
            }
            if($section->section_slug == 'list_section_2'){
                $list2_element = SectionElement::where('page_section_id', $section->id)
                    ->get();
                foreach ($list2_element as $elements){
                    if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/list_2/'.$elements->list_image)){
                        @unlink(public_path().'/images/uploads/section_elements/list_2/'.$elements->list_image);
                    }
                }
            }
            if($section->section_slug == 'process_selection'){
                $list2_element = SectionElement::where('page_section_id', $section->id)
                    ->get();
                foreach ($list2_element as $elements){
                    if (!empty($elements->list_image) && file_exists(public_path().'/images/uploads/section_elements/process_list/'.$elements->list_image)){
                        @unlink(public_path().'/images/uploads/section_elements/process_list/'.$elements->list_image);
                    }
                }
            }
            if($section->section_slug == 'gallery_section'){
                $gallery_element = SectionGallery::where('page_section_id', $section->id)
                    ->get();
                foreach ($gallery_element as $elements){
                    if (!empty($elements->filename) && !empty($elements->resized_name) && file_exists(public_path().'/images/uploads/section_elements/gallery/'.$elements->filename) && file_exists(public_path().'/images/uploads/section_elements/gallery/'.$elements->resized_name)){
                        @unlink(public_path().'/images/uploads/section_elements/gallery/'.$elements->filename);
                        @unlink(public_path().'/images/uploads/section_elements/gallery/'.$elements->resized_name);
                    }
                }
            }
        }

        $rid                = $delete->id;
        $delete->delete();
        return '#page_'.$rid;
    }

    public function updateStatus(Request $request, $id){
        $page          = Page::find($id);
        $page->status  = $request->status;
        $status        = $page->update();
        if($status){
            $confirmed = "yes";
        }
        else{
            $confirmed = "no";
        }
        return response()->json($confirmed);
    }
}
