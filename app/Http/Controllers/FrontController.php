<?php

namespace App\Http\Controllers;

use App\Mail\ContactDetail;
use App\Models\Award;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Client;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionElement;
use App\Models\SectionGallery;
use App\Models\ServiceCategory;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Team;
use CountryState;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


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
    protected $page = null;
    protected $pagesection = null;



    public function __construct(PageSection $pagesection,Page $page,Setting $setting,BlogCategory $bcategory,Blog $blog,Slider $slider,ServiceCategory $S_category,Testimonial $testimonial,Client $client,Award $award,Team $team)
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
        $this->page = $page;
        $this->pagesection = $pagesection;

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

    public function page($page)
    {
        $page_detail = $this->page->with('sections')->where('slug', $page)->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->get();
        if (!$page_section) {
            return abort(404);
        }
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
            elseif ($section->section_slug == 'call_to_action'){
                $call_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            elseif ($section->section_slug == 'background_image_section'){
                $bgimage_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            elseif ($section->section_slug == 'tab_section_1'){
                $tab1_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            elseif ($section->section_slug == 'tab_section_2'){
                $tab2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            elseif($section->section_slug == 'list_section_1'){
                $list_1 = $section->list_number_1;
                $list1_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            elseif($section->section_slug == 'list_section_2'){
                $list_2 = $section->list_number_2;
                $list2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            elseif ($section->section_slug == 'process_selection'){
                $list_3 = $section->list_number_3;
                $process_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            elseif ($section->section_slug == 'gallery_section'){
                $gallery_elements = SectionGallery::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
        }


        return view('frontend.pages.dynamic_page', compact('page_detail','sections','list_1','list_2','list_3','basic_elements','call_elements','bgimage_elements','tab1_elements','tab2_elements','gallery_elements','list1_elements','list2_elements','process_elements'));

    }

    public function contactStore(Request $request)
    {
        $theme_data = Setting::first();
            $data = array(
                'fullname'        =>$request->input('fullname'),
                'message'        =>$request->input('message'),
                'email'        =>$request->input('email'),
                'subject'        =>$request->input('subject'),
                'address'        =>ucwords($theme_data->address),
                'site_email'        =>ucwords($theme_data->email),
                'site_name'        =>ucwords($theme_data->website_name),
                'phone'        =>ucwords($theme_data->phone),
                'logo'        =>ucwords($theme_data->logo),
            );
//             Mail::to('surajmzn75@gmail.com')->send(new ContactDetail($data));

            Mail::to($theme_data->email)->cc(['suraj@canosoft.com.np','info@canosoft.com.np'])->send(new ContactDetail($data));

            Session::flash('success','Thank you for contacting us!');

        return redirect()->back();
    }
}
