@extends('frontend.layouts.master')
@section('title') {{ucwords(@$singleService->name)}} | Aurum @endsection
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
            <h1>{{ucwords(@$singleService->name)}}</h1>
        </div>
        <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><a
            href="{{url('/services')}}">Services</a><span class="fa default"></span>
            <span class="current">{{ucwords(@$singleService->name)}} </span></div>
        </div>
    </section> <!-- ** Container ** -->
    <div class="container">
        <section id="primary" class="page-with-sidebar with-right-sidebar">
        <article id="post-7508"
            class="blog-entry single blog-default-style format-standard post-7508 post type-post status-publish format-quote has-post-thumbnail hentry category-magazine category-news tag-creative post_format-post-format-quote">

            <!-- Featured Image -->
            <div class="entry-thumb">
            <a title="{{ucwords($singleService->name)}}"><img width="1170" height="795"
                src="{{ asset('/images/uploads/service_categories/'.$singleService->image) }}"
                class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                srcset="{{ asset('/images/uploads/service_categories/'.$singleService->image) }} 1170w, {{ asset('/images/uploads/service_categories/'.$singleService->image) }} 600w, {{ asset('/images/uploads/service_categories/'.$singleService->image) }} 300w, {{ asset('/images/uploads/service_categories/'.$singleService->image) }} 768w, {{ asset('/images/uploads/service_categories/'.$singleService->image) }} 1024w"
                sizes="(max-width: 1170px) 100vw, 1170px" /></a>
           
            </div> <!-- Featured Image -->

            <!-- Content -->
            <!-- .entry-details -->
            <div class="entry-details">

            <!-- .entry-meta -->
            <div class="entry-meta">
                <div class="date ">Posted on {{$singleService->created_at->format('F  jS, Y')}}</div>
            </div><!-- .entry-meta -->


            <div class="entry-body">
                <p> {{@$singleService->short_description}} </p>



                <div class="service-list">{!! @$singleService->list !!}</div>

               
            </div>


     

              <!-- social media -->
             
              <ul class='dt-sc-sociable dt-simple-narrow'>
                    <li><a href="#" onclick='twitShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->name }}")' class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" onclick='fbShare("{{route('service.single',$singleService->slug)}}")' class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" onclick='whatsappShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->name }}")' class="text-muted fs-15 hover-dark lh-1 px-2"><i class="fab fa-whatsapp"></i></a></li>
                
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
            @include('frontend.pages.services.category_sidebar')            
      
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
function twitShare(url, name) {
    window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(name) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function whatsappShare(url, name) {
    message = name + " " + url;
    window.open("https://api.whatsapp.com/send?text=" + message);
}

</script>
@endsection