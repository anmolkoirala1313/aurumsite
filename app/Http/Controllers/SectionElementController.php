<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;


class SectionElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $photos_path;

    public function __construct()
    {
        $this->middleware('auth');
        $this->photos_path = public_path('/images/uploads/section_elements/gallery');

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
    public function create($id)
    {
        $page_section = PageSection::with('page')->where('page_id', $id)->get();
        $sections      = array();
        $list_1 = "";
        $list_2 = "";
        $list_3 = "";
        $basic_elements = "";
        $call_elements = "";
        $bgimage_elements = "";
        $tab1_elements = "";
        $tab2_elements = "";
        $gallery_elements = "";
        $list1_elements = "";
        $list2_elements = "";
        $process_elements = "";
        foreach ($page_section as $section){
            $sections[$section->id] = $section->section_slug;
            if($section->section_slug == 'basic_section'){
                $basic_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'call_to_action'){
                $call_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'background_image_section'){
                $bgimage_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'tab_section_1'){
                $tab1_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'tab_section_2'){
                $tab2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'gallery_section'){
                $gallery_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if($section->section_slug == 'list_section_1'){
                $list_1 = $section->list_number_1;
                $list1_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if($section->section_slug == 'list_section_2'){
                $list_2 = $section->list_number_2;
                $list2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'process_selection'){
                $list_3 = $section->list_number_3;
                $process_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
        }

//        dd($process_elements);
        return view('backend.pages.section_elements.create',compact( 'sections','list_1','list_2','list_3','basic_elements','call_elements','bgimage_elements','tab1_elements','tab2_elements','gallery_elements','list1_elements','list2_elements','process_elements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section_name = $request->input('section_name');
        $section_id   = $request->input('page_section_id');
        if($section_name == 'basic_section'){
            $data=[
                'heading'                => $request->input('heading'),
                'page_section_id'        => $section_id,
                'subheading'             => $request->input('subheading'),
                'description'            => $request->input('description'),
                'button'                 => $request->input('button'),
                'button_link'            => $request->input('button_link'),
                'created_by'             => Auth::user()->id,
            ];
            if(!empty($request->file('image'))){
                $image        = $request->file('image');
                $name         = uniqid().'_basic_'.$image->getClientOriginalName();
                $path         = base_path().'/public/images/uploads/section_elements/basic_section/';
                $moved        = Image::make($image->getRealPath())->resize(660, 410)->orientate()->save($path.$name);
                if ($moved){
                    $data['image']= $name;
                }
            }
            $status = SectionElement::create($data);
        }
        elseif ($section_name == 'call_to_action'){
            $data=[
                'heading'                => $request->input('heading'),
                'page_section_id'        => $section_id,
                'description'            => $request->input('description'),
                'button'                 => $request->input('button'),
                'button_link'            => $request->input('button_link'),
                'created_by'             => Auth::user()->id,
            ];
            $status = SectionElement::create($data);
        }
        elseif ($section_name == 'background_image_section'){
            $data=[
                'heading'                => $request->input('heading'),
                'page_section_id'        => $section_id,
                'subheading'             => $request->input('subheading'),
                'description'            => $request->input('description'),
                'created_by'             => Auth::user()->id,
            ];
            if(!empty($request->file('image'))){
                $image        = $request->file('image');
                $name         = uniqid().'_background_'.$image->getClientOriginalName();
                $path         = base_path().'/public/images/uploads/section_elements/bgimage_section/';
                $moved        = Image::make($image->getRealPath())->resize(1920, 1280)->orientate()->save($path.$name);
                if ($moved){
                    $data['image']= $name;
                }
            }
            $status = SectionElement::create($data);
        }
        elseif ($section_name == 'tab_section_1'){
            for ($i=0;$i<3;$i++){
                $data=[
                    'list_header'            => $request->input('list_header')[$i],
                    'page_section_id'        => $section_id,
                    'list_description'       => $request->input('list_description')[$i],
                    'created_by'             => Auth::user()->id,
                ];

                if (array_key_exists($i,$request->file('list_image'))){
                        $image        = $request->file('list_image')[$i];
                        $name         = uniqid().'_tab1_'.$image->getClientOriginalName();
                        $path         = base_path().'/public/images/uploads/section_elements/tab_1/';
                        $moved        = Image::make($image->getRealPath())->resize(370, 370)->orientate()->save($path.$name);
                        if ($moved){
                            $data['list_image']= $name;
                        }

                }
                $status = SectionElement::create($data);
            }
        }
        elseif ($section_name == 'tab_section_2'){
            for ($i=0;$i<4;$i++){
                $data=[
                    'heading'            => $request->input('heading')[$i],
                    'page_section_id'    => $section_id,
                    'subheading'         => $request->input('subheading')[$i],
                    'description'        => $request->input('description')[$i],
                    'created_by'         => Auth::user()->id,
                ];
                $status = SectionElement::create($data);
            }

        }
        elseif ($section_name == 'list_section_1'){
            $list1_num   = $request->input('list_number_1');
            for ($i=0;$i<$list1_num;$i++){
                $data=[
                    'list_header'           => $request->input('list_header')[$i],
                    'page_section_id'       => $section_id,
                    'subheading'            => $request->input('subheading')[$i],
                    'list_description'      => $request->input('list_description')[$i],
                    'button'                => $request->input('button')[$i],
                    'button_link'           => $request->input('button_link')[$i],
                    'created_by'            => Auth::user()->id,
                ];
                if (array_key_exists($i,$request->file('list_image'))){
                    $image        = $request->file('list_image')[$i];
                    $name         = uniqid().'_list1_'.$image->getClientOriginalName();
                    $path         = base_path().'/public/images/uploads/section_elements/list_1/';
                    $moved        = Image::make($image->getRealPath())->resize(400, 280)->orientate()->save($path.$name);
                    if ($moved){
                        $data['list_image']= $name;
                    }

                }
                $status = SectionElement::create($data);
            }
        }
        elseif ($section_name == 'list_section_2'){
            $list2_num   = $request->input('list_number_2');
            for ($i=0;$i<$list2_num;$i++){
                $data=[
                    'list_header'           => $request->input('list_header')[$i],
                    'page_section_id'       => $section_id,
                    'subheading'            => $request->input('subheading')[$i],
                    'list_description'      => $request->input('list_description')[$i],
                    'button'                => $request->input('button')[$i],
                    'button_link'           => $request->input('button_link')[$i],
                    'created_by'            => Auth::user()->id,
                ];
                if (array_key_exists($i,$request->file('list_image'))){
                    $image        = $request->file('list_image')[$i];
                    $name         = uniqid().'_list1_'.$image->getClientOriginalName();
                    $path         = base_path().'/public/images/uploads/section_elements/list_2/';
                    $moved        = Image::make($image->getRealPath())->resize(400, 280)->orientate()->save($path.$name);
                    if ($moved){
                        $data['list_image']= $name;
                    }

                }
                $status = SectionElement::create($data);
            }
        }
        elseif ($section_name == 'process_selection'){
            $list3_num   = $request->input('list_number_3');
            for ($i=0;$i<$list3_num;$i++){
                $data=[
                    'list_header'           => $request->input('list_header')[$i],
                    'page_section_id'       => $section_id,
                    'subheading'            => $request->input('subheading')[$i],
                    'list_description'      => $request->input('list_description')[$i],
                    'button'                => $request->input('button')[$i],
                    'button_link'           => $request->input('button_link')[$i],
                    'created_by'            => Auth::user()->id,
                ];
                if (array_key_exists($i,$request->file('list_image'))){
                    $image        = $request->file('list_image')[$i];
                    $name         = uniqid().'_list1_'.$image->getClientOriginalName();
                    $path         = base_path().'/public/images/uploads/section_elements/process_list/';
                    $moved        = Image::make($image->getRealPath())->resize(600, 330)->orientate()->save($path.$name);
                    if ($moved){
                        $data['list_image']= $name;
                    }

                }
                $status = SectionElement::create($data);
            }
        }
        if($status){
            $response = 'success';
        }
        else{
            $response = 'error';
        }
        return response()->json($response);
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
        dd($request->all());
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

    public function uploadGallery(Request $request,$id)
    {
        $page_section                 =  PageSection::with('page')->find($id);
        if($page_section==null || $page_section=="null"){

             return Response::json([
                'message' => 'Page Section ID Not Found'
            ], 400);
        }

        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];

            $name = $page_section->page->slug."_page_gallery_".date('YmdHis') . uniqid();
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = "Thumb_".$name . '.' . $photo->getClientOriginalExtension();

            Image::make($photo)
                ->resize(1170, 900)
                ->save($this->photos_path . '/' . $resize_name);

            $photo->move($this->photos_path, $save_name);

            // $upload = new PropertyImage();
            // $upload->property_id = $property->id;
            // $upload->upload_by = Auth::user()->id;
            // $upload->filename = $save_name;
            // $upload->resized_name = $resize_name;
            // $upload->original_name = basename($photo->getClientOriginalName());
            // $upload->save();
        }
        return response()->json(['success'=>$save_name]);

    }

    public function deleteGallery(Request $request)
    {

        $filename = $request->get('filename');
        // $uploaded_image = SectionElement::where('filename', $filename)->first();

        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }

        $file_path = $this->photos_path . '/' . $uploaded_image->filename;
        $resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;

        if (file_exists($file_path)) {
            @unlink($file_path);
        }

        if (file_exists($resized_file)) {
            @unlink($resized_file);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return Response::json(['success' => $filename], 200);
    }

    public function getGallery(Request $request,$id)
    {
        // $images = SectionElement::where('property_id',$id)->get()->toArray();
    //     foreach($images as $image){
    //         $tableImages[] = $image['filename'];
    //     }
    //     $storeFolder = public_path('images/uploads/section_elements/gallery');
    //     $file_path = public_path('images/uploads/section_elements/gallery');
    //     $files = scandir($storeFolder);
    //     foreach ( $files as $file ) {
    //         if ($file !='.' && $file !='..' && in_array($file,$tableImages)) {
    //             $obj['name'] = $file;
    //             $file_path = public_path('images/uploads/section_elements/gallery').$file;
    //             $obj['size'] = filesize($file_path);
    //             $obj['path'] = url('/images/uploads/section_elements/gallery'.$file);
    //             $data[] = $obj;
    //         }

    //     }
	// return response()->json($data);
    }

}
