@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleBlog->title)}} @endsection
@section('styles')
<style>
    .dt-sc-sociable li a {
        text-align: -webkit-left;
    }
    .dt-sc-sociable li{
        margin: unset;
    }
</style>
@endsection
@section('content')


<!-- **Main** -->
<div id="main">
    <section class="main-title-section-wrapper aligncenter" style="">
        <div class="container">
        <div class="main-title-section">
            <h1>{{ucwords(@$singleBlog->title)}}</h1>
        </div>
        <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><a
            href="{{url('/blog')}}">Blogs</a><span class="fa default"></span>
            <span class="current">{{ucwords(@$singleBlog->title)}} </span></div>
        </div>
    </section> <!-- ** Container ** -->
    <div class="container">
        <section id="primary" class="page-with-sidebar with-right-sidebar">
        <article id="post-7508"
            class="blog-entry single blog-default-style format-standard post-7508 post type-post status-publish format-quote has-post-thumbnail hentry category-magazine category-news tag-creative post_format-post-format-quote">

            <!-- Featured Image -->
            <div class="entry-thumb">
            <a title="{{ucwords($singleBlog->title)}}"><img width="1170" height="795"
                src="{{ asset('/images/uploads/blog/'.$singleBlog->image) }}"
                class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                srcset="{{ asset('/images/uploads/blog/'.$singleBlog->image) }} 1170w, {{ asset('/images/uploads/blog/'.$singleBlog->image) }} 600w, {{ asset('/images/uploads/blog/'.$singleBlog->image) }} 300w, {{ asset('/images/uploads/blog/'.$singleBlog->image) }} 768w, {{ asset('/images/uploads/blog/'.$singleBlog->image) }} 1024w"
                sizes="(max-width: 1170px) 100vw, 1170px" /></a>
           
            </div> <!-- Featured Image -->

            <!-- Content -->
            <!-- .entry-details -->
            <div class="entry-details">

            <!-- .entry-meta -->
            <div class="entry-meta">
                <div class="date ">Posted on {{$singleBlog->created_at->format('F  jS, Y')}}</div>
            </div><!-- .entry-meta -->


            <div class="entry-body">
            {!! $singleBlog->description !!}
            </div>

            <!-- Category & Tag -->
            <div class="entry-meta-data">
              
                <p class="category"><i class="pe-icon pe-network"> </i> <a href="{{route('blog.category',$singleBlog->category->slug)}}"
                    rel="category tag">{{ucwords($singleBlog->category->name)}}</a>
            </div><!-- Category & Tag -->


              <!-- social media -->
             
              <ul class='dt-sc-sociable dt-simple-narrow'>
                    <li><a href="#" onclick='twitShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")' class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" onclick='fbShare("{{route('blog.single',$singleBlog->slug)}}")' class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" onclick='whatsappShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")' class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-whatsapp"></i></a></li>
                
                </ul>

            </div><!-- .entry-details -->
            <!-- Content -->
        </article>

        <div class="dt-sc-hr"></div>
        <div class="dt-sc-clear"></div>
     
            <section class="commententries">
            </section>
        </section><!-- **Primary - End** -->
        <!-- Secondary Right -->
        <section id="secondary-right" class="secondary-sidebar secondary-has-right-sidebar">
            @include('frontend.pages.blogs.sidebar')            
      
        </section>
    </div><!-- **Container - End** -->

</div>
<!-- **Main - End** -->
@endsection
@section('js')
<script>
function fbShare(url) {
  window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function twitShare(url, title) {
    window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function whatsappShare(url, title) {
    message = title + " " + url;
    window.open("https://api.whatsapp.com/send?text=" + message);
}

</script>
@endsection