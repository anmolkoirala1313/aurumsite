<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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
        $page_section = PageSection::with('page')->where('page_id', $id)->get();
      
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
