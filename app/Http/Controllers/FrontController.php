<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Slider;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $blog = null;
    protected $bcategory = null;
 

    public function __construct(BlogCategory $bcategory,Blog $blog,Slider $slider)
    {
        $this->bcategory = $bcategory;
        $this->blog = $blog;
        $this->slider = $slider;
    }


    public function index()
    {
        $sliders =$this->slider->where('status','active')->orderBy('created_at', 'asc')->get();
        return view('welcome',compact('sliders'));

    }
    public function blogs(){
        $bcategories = $this->bcategory->get();
        $allPosts = $this->blog->orderBy('title', 'asc')->where('status','publish')->paginate(6);
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(5)->get();
        return view('frontend.pages.blogs.index',compact('allPosts','latestPosts','bcategories'));
    }

    public function blogSingle($slug){

        $singleBlog = $this->blog->where('slug', $slug)->first();
        $catid = $singleBlog->blog_category_id;
        $relatedBlogs = Blog::where('blog_category_id', '=', $catid)->where('status','publish')->take(2)->get();
        $bcategories = $this->bcategory->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(5)->get();
        return view('frontend.pages.blogs.single',compact('singleBlog','relatedBlogs','bcategories','latestPosts'));
    }

    public function blogCategories($slug){
        $bcategory = $this->bcategory->where('slug', $slug)->first();
        $catid = $bcategory->id;
        $cat_name = $bcategory->name;
        $allPosts = $this->blog->where('blog_category_id', $catid)->where('status','publish')->orderBy('title', 'asc')->paginate(6);
        $bcategories = $this->bcategory->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(5)->get();
        return view('frontend.pages.blogs.category',compact('allPosts','cat_name','latestPosts','bcategories'));
    }

   

    

    public function searchBlog(Request $request)
    {
        $query = $request->s;
        $allPosts = $this->blog->where('title', 'LIKE', '%' . $query . '%')->where('status','publish')->orderBy('title', 'asc')->paginate(6);
        $bcategories = $this->bcategory->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(5)->get();

        return view('frontend.pages.blogs.search',compact('allPosts','query','latestPosts','bcategories'));
    }

}
