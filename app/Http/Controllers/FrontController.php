<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Client;
use App\Models\ServiceCategory;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Team;
use CountryState;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $blog = null;
    protected $bcategory = null;
    protected $slider = null;
    protected $S_category = null;
    protected $testimonial = null;
    protected $client = null;
    protected $award = null;
    protected $team = null;
    protected $settting = null;
 

    public function __construct(Setting $setting,BlogCategory $bcategory,Blog $blog,Slider $slider,ServiceCategory $S_category,Testimonial $testimonial,Client $client,Award $award,Team $team)
    {
        $this->bcategory = $bcategory;
        $this->blog = $blog;
        $this->slider = $slider;
        $this->S_category = $S_category;
        $this->testimonial = $testimonial;
        $this->client = $client;
        $this->award = $award;
        $this->team = $team;
        $this->setting = $setting;
        
    }


    public function index()
    {
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        $sliders =$this->slider->where('status','active')->orderBy('created_at', 'asc')->get();
        $service_categories =$this->S_category->orderBy('name', 'asc')->get();
        $testimonials =$this->testimonial->orderBy('title', 'asc')->get();
        $client_groups =$this->client->orderBy('created_at', 'asc')->get()->groupBy('country');
        $clients =$this->client->orderBy('created_at', 'asc')->get();
        $countries  = CountryState::getCountries();
        $awards =$this->award->orderBy('created_at', 'asc')->get();
        $teams =$this->team->orderBy('name', 'asc')->take(3)->get();
        $welcome_settings = $this->setting->first();

        return view('welcome',compact('welcome_settings','teams','awards','sliders','service_categories','latestPosts','testimonials','countries','client_groups','clients'));

    }

    public function clients(){
        $client_groups =$this->client->orderBy('created_at', 'asc')->get()->groupBy('country');
        $countries          = CountryState::getCountries();

        return view('frontend.pages.clients',compact('client_groups','countries'));
    }

    public function services(){
        $service_categories =$this->S_category->orderBy('name', 'asc')->get();
        return view('frontend.pages.services.index',compact('service_categories'));
    }

    public function serviceSingle($slug){
        $singleService = $this->S_category->where('slug', $slug)->first();
        $service_categories = $this->S_category->orderBy('name', 'asc')->get();
        return view('frontend.pages.services.single',compact('singleService','service_categories'));
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
