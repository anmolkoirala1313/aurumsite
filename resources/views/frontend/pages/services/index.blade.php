@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('content')

<!-- **Main** -->
<div id="main">
    <section class="main-title-section-wrapper aligncenter" style="">
        <div class="container">
        <div class="main-title-section">
            <h1>Services</h1>
        </div>
        <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><span
            class="current">Services</span></div>
        </div>
    </section> <!-- ** Container ** -->
    <div class="container">
        <section id="primary" class="content-full-width">
        <!-- #post-7535 -->
        <div id="post-7535" class="post-7535 page type-page status-publish hentry">
            <div
            class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
         
         
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                    data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                                    style="opacity:0;" data-opacity_start_effect="">
                                <div class='aligncenter  dt-sc-subtitle-text'>ALL THESE SERVICES FOR YOU</div>
                                <div class="ult-spacer spacer-6107b9a4c71e8" data-id="6107b9a4c71e8" data-height="10"
                                        data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                        data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                <h2 style="font-size: 60px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                    <strong><a href="{{url('/services')}}">Our Category</a></strong></h2>
                            </div>
                            <div class="ult-spacer spacer-6107b9a4c730b" data-id="6107b9a4c730b" data-height="60"
                                    data-height-mobile="35" data-height-tab="45" data-height-tab-portrait="45"
                                    data-height-mobile-landscape="35" style="clear:both;display:block;"></div>
                            <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                    data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                                    style="opacity:0;" data-opacity_start_effect="">
                                <div class="dt-sc-portfolio-container no-space">
                                    @foreach(@$service_categories as $service_category)

                                        <div id="dt_portfolios-7425" class="type1 no-space portfolio column dt-sc-one-fourth @if(@$loop->index == 0 || @$loop->index == 4 || @$loop->index == 8 ) first @endif">
                                            <figure> <img
                                                    src="{{ asset('/images/uploads/service_categories/'.$service_category->image) }}"
                                                    alt="{{ucwords(@$service_category->name)}}" title="{{ucwords(@$service_category->name)}}" />
                                                <div class="image-overlay">
                                                    <div class="links"><a title="{{ucwords(@$service_category->name)}}"
                                                                            href="{{route('service.single',$service_category->slug)}}"><span
                                                                class="icon icon-linked"> </span></a><a title="{{ucwords(@$service_category->name)}}"
                                                                                                        data-gal="prettyPhoto[gallery]"
                                                                                                        href="{{ asset('/images/uploads/service_categories/'.$service_category->image) }}">
                                                            <span class="icon icon-search"> </span> </a></div>
                                                    <div class="image-overlay-details">
                                                        <h2><a title="{{ucwords(@$service_category->name)}}"
                                                                href="{{route('service.single',$service_category->slug)}}">{{ucwords(@$service_category->name)}}</a></h2>

                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ult-spacer spacer-6107b9a4cab7c" data-id="6107b9a4cab7c" data-height="90"
                                    data-height-mobile="60" data-height-tab="75" data-height-tab-portrait="75"
                                    data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
                        </div>
                    </div>
                </div>

            </div>
           
           
         
          
            <div class="vc_row-full-width vc_clearfix"></div>
        </div><!-- #post-7535 -->
        </section><!-- **Primary - End** -->
    </div><!-- **Container - End** -->

</div>
<!-- **Main - End** -->

@endsection
