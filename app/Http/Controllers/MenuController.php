<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuitems = '';
        $desiredMenu = '';
        $pages        = Page::all();
        $menus        = Menu::all();
        $blogs        = Blog::all();
        if(isset($_GET['slug']) && $_GET['slug'] != 'new'){
            $id = $_GET['slug'];
            $desiredMenu = Menu::where('slug',$id)->first();
            if($desiredMenu->content != ''){
                $menuitems = json_decode($desiredMenu->content);
                $menuitems = $menuitems[0];
                foreach($menuitems as $menu){
                    $menu->title    = MenuItem::where('id',$menu->id)->value('title');
                    $menu->name     = MenuItem::where('id',$menu->id)->value('name');
                    $menu->slug     = MenuItem::where('id',$menu->id)->value('slug');
                    $menu->target   = MenuItem::where('id',$menu->id)->value('target');
                    $menu->type     = MenuItem::where('id',$menu->id)->value('type');
                    if(!empty($menu->children[0])){
                        foreach ($menu->children[0] as $child) {
                            $child->title   = MenuItem::where('id',$child->id)->value('title');
                            $child->name    = MenuItem::where('id',$child->id)->value('name');
                            $child->slug    = MenuItem::where('id',$child->id)->value('slug');
                            $child->target  = MenuItem::where('id',$child->id)->value('target');
                            $child->type    = MenuItem::where('id',$child->id)->value('type');
                        }
                    }
                }
            }else{
                $menuitems = MenuItem::where('menu_id',$desiredMenu->id)->get();
            }

        }
        else{
            $desiredMenu = Menu::orderby('id','DESC')->first();
            if($desiredMenu){
                if($desiredMenu->content != ''){
                    $menuitems = json_decode($desiredMenu->content);
                    $menuitems = $menuitems[0];
                    foreach($menuitems as $menu){
                        $menu->title    = MenuItem::where('id',$menu->id)->value('title');
                        $menu->name     = MenuItem::where('id',$menu->id)->value('name');
                        $menu->slug     = MenuItem::where('id',$menu->id)->value('slug');
                        $menu->target   = MenuItem::where('id',$menu->id)->value('target');
                        $menu->type     = MenuItem::where('id',$menu->id)->value('type');
                        if(!empty($menu->children[0])){
                            foreach ($menu->children[0] as $child) {
                                $child->title   = MenuItem::where('id',$child->id)->value('title');
                                $child->name    = MenuItem::where('id',$child->id)->value('name');
                                $child->slug    = MenuItem::where('id',$child->id)->value('slug');
                                $child->target  = MenuItem::where('id',$child->id)->value('target');
                                $child->type    = MenuItem::where('id',$child->id)->value('type');
                            }
                        }
                    }
                }else{
                    $menuitems = MenuItem::where('menu_id',$desiredMenu->id)->get();
                }
            }
        }
        return view('backend.menu.index',compact('pages','blogs','menus','desiredMenu','menuitems'));

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
            'title'               => $request->input('title'),
            'slug'               => $request->input('slug'),
            'created_by'          => Auth::user()->id,
        ];
        $menu = Menu::create($data);
        if($menu){
            Session::flash('success','Menu Created Successfully');
            $newdata = Menu::orderby('id','DESC')->first();
            return redirect("auth/manage-menus?id=$newdata->id");
        }
        else{
            Session::flash('error','Something went wrong. Menu cannot be created');
            return redirect()->back();
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
    public function destroy(Request $request)
    {
        $delete    = Menu::find($request->id);
        $status = $delete->delete();
        if($status){
            Session::flash('success','Menu deleted Successfully');
        }else{
            Session::flash('error','Menu could not be deleted');
        }
        return redirect()->route('menu.index');

    }


    public function addPage(Request $request){
        $data       = $request->all();
        $menuid     = $request->menuid;
        $ids        = $request->ids;
        $menu       = Menu::findOrFail($menuid);
        if($menu->content == ''){
            foreach($ids as $id){
                $page = Page::find($id);
                $data =[
                    'title'         => $page->name,
                    'slug'          => $page->slug,
                    'type'          => 'page',
                    'menu_id'       => $menuid,
                    'created_by'    => Auth::user()->id,
                ];
                $status = MenuItem::create($data);
            }
        }else{
            $olddata = json_decode($menu->content,true);
            foreach($ids as $id){
                $page = Page::find($id);
                $data =[
                    'title'         => $page->name,
                    'slug'          => $page->slug,
                    'type'          => 'page',
                    'menu_id'       => $menuid,
                    'created_by'    => Auth::user()->id,
                ];
                MenuItem::create($data);
            }
            foreach($ids as $id){
                $page = Page::find($id);
                $array['title']     = $page->name;
                $array['slug']      = $page->slug;
                $array['type']      = 'page';
                $array['id']        = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->value('id');
                $array['children'] = [[]];
                array_push($olddata[0],$array);
                $oldata = json_encode($olddata);
                $status = $menu->update(['content'=>$olddata]);
            }
        }

        if($status){
            Session::flash('success','Page added in Menu');
        }else{
            Session::flash('error','Page could not be added in Menu');
        }
    }

    public function addPost(Request $request){
        $data           = $request->all();
        $menuid         = $request->menuid;
        $ids            = $request->ids;
        $menu           = Menu::findOrFail($menuid);
        if($menu->content == ''){
            foreach($ids as $id){
                $post = Blog::find($id);
                $data =[
                    'title'         => $post->title,
                    'slug'          => $post->slug,
                    'type'          => 'post',
                    'menu_id'       => $menuid,
                    'created_by'    => Auth::user()->id,
                ];
                $status  = MenuItem::create($data);
            }
        }else{
            $olddata = json_decode($menu->content,true);
            foreach($ids as $id){
                $post = Blog::find($id);
                $data =[
                    'title'         => $post->title,
                    'slug'          => $post->slug,
                    'type'          => 'post',
                    'menu_id'       => $menuid,
                    'created_by'    => Auth::user()->id,
                ];
                $status  = MenuItem::create($data);
            }
            foreach($ids as $id){
                $post               = Blog::find($id);
                $array['title']     = $post->title;
                $array['slug']      = $post->slug;
                $array['type']      = 'post';
                $array['id']        = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->orderby('id','DESC')->value('id');
                $array['children']  = [[]];
                array_push($olddata[0],$array);
                $oldata             = json_encode($olddata);
                $status             = $menu->update(['content'=>$olddata]);
            }
        }

        if($status){
            Session::flash('success','Post added in Menu');
        }else{
            Session::flash('error','Posts could not be added in Menu');
        }
    }

    public function addCustomLink(Request $request){
        $data       = $request->all();
        $menuid     = $request->menuid;
        $menu       = Menu::findOrFail($menuid);
        if($menu->content == ''){
            $data =[
                'title'         => $request->url_text,
                'slug'          => $request->url,
                'type'          => 'custom',
                'menu_id'       => $menuid,
                'created_by'    => Auth::user()->id,
            ];
            $status = MenuItem::create($data);
        }else{
            $olddata = json_decode($menu->content,true);
            $data =[
                'title'         => $request->url_text,
                'slug'          => $request->url,
                'type'          => 'custom',
                'menu_id'       => $menuid,
                'created_by'    => Auth::user()->id,
            ];
            MenuItem::create($data);
            $array = [];
            $array['title']     = $request->url_text;
            $array['slug']      = $request->url;
            $array['type']      = 'custom';
            $array['id']        = MenuItem::where('slug',$array['slug'])->where('type',$array['type'])->orderby('id','DESC')->value('id');
            $array['children']  = [[]];
            array_push($olddata[0],$array);
            $oldata = json_encode($olddata);
            $status = $menu->update(['content'=>$olddata]);
        }

        if($status){
            Session::flash('success','Custom link added in Menu');
        }else{
            Session::flash('error','Custom link could not be added in Menu');
        }
    }

    public function updateMenu(Request $request){
        $newdata                = $request->all();
        $menu                   = Menu::findOrFail($request->menuid);
        $content                = $request->data;
        $newdata                = [];
        $newdata['location']    = $request->location;
        $newdata['content']     = json_encode($content);
        $status = $menu->update($newdata);
        if($status){
            Session::flash('success','Menu Updated Successfully');
        }else{
            Session::flash('error','Menu could not be updated');
        }
    }

    public function updateMenuItem(Request $request){
        $data           = $request->all();
        $target         = $request->input('target');
        $item           = MenuItem::findOrFail($request->id);
        if($target == null){
            $data['target'] = NULL;
        }
        $status         = $item->update($data);
        if($status){
            Session::flash('success','Menu Item Updated Successfully');
        }else{
            Session::flash('error','Menu Item could not be updated');
        }
        return redirect()->back();
    }

    public function deleteMenuItem($id,$key,$in=''){
        $menuitem       = MenuItem::findOrFail($id);
        $menu           = Menu::where('id',$menuitem->menu_id)->first();
        if($menu->content != ''){
            $data       = json_decode($menu->content,true);
            $maindata   = $data[0];
            if($in == ''){
                unset($data[0][$key]);
                $newdata = json_encode($data);
                $menu->update(['content'=>$newdata]);
            }else{
                unset($data[0][$key]['children'][0][$in]);
                $newdata = json_encode($data);
                $menu->update(['content'=>$newdata]);
            }
        }
        $status = $menuitem->delete();
        if($status){
            Session::flash('success','Menu Item Deleted Successfully');
        }else{
            Session::flash('error','Menu Item could not be Deleted');
        }
        return redirect()->back();
    }

}
