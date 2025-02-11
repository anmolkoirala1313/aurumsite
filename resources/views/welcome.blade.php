@extends('frontend.layouts.master')
@section('title') Home @endsection

@section('styles')
<style>
    .slick-custom-background{
        margin: 0px !important;
        background-color: #f6f6f6 !important;
        border-radius: 10px !important;
    }

    #ult-carousel-18361286996107b7834a609 .slick-slide {
        margin: 0 15px;
    }

    /* .dt-sc-team.simple-rounded.aligncenter {
        height: 470px;
    }

    @media only screen and (min-width: 992px) and (max-width: 1199px){
        .dt-sc-team.simple-rounded.aligncenter {
            height: 515px;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px){
        .dt-sc-team.simple-rounded.aligncenter {
            height: 530px;
        }
    } */
</style>
@endsection
@section('slider')

@if(count($sliders) > 0)
    <div id="slider">
        <div class="dt-sc-main-slider" id="dt-sc-rev-slider">
            <!-- START Home2 REVOLUTION SLIDER -->
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_3_1_wrapper" data-source="gallery"
                            style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:;">
                <rs-module id="rev_slider_3_1" style="" data-version="6.3.3">
                    <rs-slides>
                    @foreach(@$sliders as $slider)

                        @if(@$loop->index == 0)
                        <rs-slide data-key="rs-7" data-title="Slide"
                                    data-thumb="{{ asset('/images/uploads/sliders/thumb/thumb_'.$slider->slider_image) }}"
                                    data-anim="ei:d;eo:d;s:d;t:incube-horizontal;sl:d;">
                                    <img
                                        src="{{ asset('/images/uploads/sliders/'.$slider->slider_image) }}"
                                        title="{{ucwords(@$slider->heading)}}" class="rev-slidebg" data-no-retina />

                                    <rs-layer id="slider-3-slide-7-layer-1" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                            data-xy="x:c;y:542px;" data-text="s:16;l:22;ls:2px;a:inherit;" data-frame_0="y:100%;tp:600;"
                                            data-frame_1="tp:600;e:power4.inOut;st:500;sp:2000;sR:500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:6500;"
                                            style="z-index:5;font-family:Open Sans;text-transform:uppercase;">{{ucwords(@$slider->subheading_one)}}
                                    </rs-layer>

                                    <rs-layer id="slider-3-slide-7-layer-2" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                            data-xy="x:c;y:582px;" data-text="s:60;l:60;ls:3px;fw:700;a:inherit;"
                                            data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:1500;sp:1500;sR:1500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:6000;"
                                            style="z-index:6;font-family:Montserrat;text-transform:uppercase;">{{ucwords(@$slider->heading)}}
                                    </rs-layer>

                                    <rs-layer id="slider-3-slide-7-layer-3" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                            data-xy="x:c;y:677px;" data-text="s:30;l:22;fw:600;a:inherit;" data-frame_0="y:100%;tp:600;"
                                            data-frame_1="tp:600;e:power4.inOut;st:2500;sp:2000;sR:2500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:4500;" style="z-index:7;font-family:Open Sans;">{{ucwords(@$slider->subheading_two)}}

                                    </rs-layer>

                                    <rs-layer id="slider-3-slide-7-layer-6" class="rev-btn" data-type="button"
                                            data-actions='o:click;a:simplelink;target:_self;url:{{@$slider->button_one_link}};'
                                            data-color="rgba(255,255,255,1)" data-xy="x:c;xo:-96px;y:751px;"
                                            data-text="s:14;l:17;a:inherit;" data-padding="t:17;r:35;b:17;l:35;"
                                            data-frame_0="x:-150px;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:3500;sp:1500;sR:3500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:4000;"
                                            data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;e:none;"
                                            style="@if($slider->button_two && @$slider->button_two_link) @else left: 100px; @endif z-index:8;background-color:#571f9c;font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                           {{ucwords(@$slider->button_one)}}
                                    </rs-layer>

                                    @if($slider->button_two && @$slider->button_two_link)
                                    <rs-layer id="slider-3-slide-7-layer-7" class="rev-btn" data-type="button"
                                            data-actions='o:click;a:simplelink;target:_self;url:{{@$slider->button_two_link}};'
                                            data-color="rgba(255,255,255,1)" data-xy="x:c;xo:145px;y:751px;" data-text="s:14;l:17;a:inherit;"
                                            data-padding="t:15;r:35;b:15;l:35;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;"
                                            data-frame_0="x:150px;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:3500;sp:1500;sR:3500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:4000;"
                                            data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;bow:0,0,0,0;oX:50;oY:50;sp:0;e:none;"
                                            style="z-index:9;background-color:rgba(87,31,156,0);font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                            {{ucwords(@$slider->button_two)}}

                                    </rs-layer>
                                    @endif


                        </rs-slide>
                        @elseif(@$loop->index == 1)
                        <rs-slide data-key="rs-8" data-title="Slide"
                                    data-thumb="{{asset('/images/uploads/sliders/thumb/thumb_'.$slider->slider_image) }}"
                                    data-anim="ei:d;eo:d;s:d;t:incube-horizontal;sl:d;">
                            <img
                                src="{{asset('/images/uploads/sliders/'.$slider->slider_image) }}"
                                title="{{ucwords(@$slider->heading)}}" class="rev-slidebg" data-no-retina>

                            <rs-layer id="slider-3-slide-8-layer-1" class="tp-shape tp-shapewrapper" data-type="shape"
                                        data-rsp_ch="on" data-xy="x:2px;y:b;" data-text="a:inherit;" data-dim="w:960px;h:430px;"
                                        data-basealign="slide" data-frame_0="x:175%;o:1;tp:600;" data-frame_0_mask="u:t;x:-100%;"
                                        data-frame_1="tp:600;e:power3.out;st:500;sp:1500;sR:500;" data-frame_1_mask="u:t;"
                                        data-frame_999="o:0;tp:600;st:w;sR:7000;"
                                        style="z-index:5;background-color:rgba(255,255,255,0.9);">
                            </rs-layer>

                            <rs-layer id="slider-3-slide-8-layer-2" data-type="text" data-color="#777777" data-rsp_ch="on"
                                        data-xy="x:30px;y:507px;" data-text="s:16;l:22;ls:2px;fw:600;a:inherit;"
                                        data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:1500;sp:2000;sR:1500;"
                                        data-frame_999="o:0;tp:600;st:w;sR:5500;"
                                        style="z-index:6;font-family:Open Sans;text-transform:uppercase;">{{ucwords(@$slider->subheading_one)}}
                            </rs-layer>

                            <rs-layer id="slider-3-slide-8-layer-3" data-type="text" data-color="#3f3f3f" data-rsp_ch="on"
                                        data-xy="x:30px;y:547px;" data-text="s:50;l:60;fw:700;a:inherit;"
                                        data-frame_0="x:175%;o:1;tp:600;" data-frame_0_mask="u:t;x:-100%;"
                                        data-frame_1="tp:600;e:power3.out;st:3000;sp:1500;sR:3000;" data-frame_1_mask="u:t;"
                                        data-frame_999="o:0;tp:600;st:w;sR:4500;" style="z-index:7;font-family:Montserrat;">{{ucwords(@$slider->heading)}}
                            </rs-layer>

                            <rs-layer id="slider-3-slide-8-layer-4" data-type="text" data-color="#777777" data-rsp_ch="on"
                                            data-xy="x:30px;y:630px;" data-text="s:25;l:22;fw:600;a:inherit;" data-frame_0="y:100%;tp:600;"
                                            data-frame_1="tp:600;e:power4.inOut;st:2500;sp:2000;sR:2500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:4500;" style="z-index:7;font-family:Open Sans;">{{ucwords(@$slider->subheading_two)}}
                            </rs-layer>

                            <rs-layer id="slider-3-slide-8-layer-5" class="rev-btn" data-type="button"
                                        data-actions='o:click;a:simplelink;target:_self;url:{{@$slider->button_one_link}};'
                                        data-color="rgba(255,255,255,1)" data-xy="x:30px;y:700px;" data-text="s:14;l:17;a:inherit;"
                                        data-padding="t:17;r:35;b:17;l:35;" data-frame_0="y:100px;tp:600;"
                                        data-frame_1="tp:600;e:power4.inOut;st:4000;sp:1500;sR:4000;"
                                        data-frame_999="o:0;tp:600;st:w;sR:3500;"
                                        data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;e:none;"
                                        style="z-index:8;background-color:#571f9c;font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                        {{ucwords(@$slider->button_one)}}
                            </rs-layer>

                            @if($slider->button_two && @$slider->button_two_link)

                            <rs-layer id="slider-3-slide-8-layer-6" class="rev-btn" data-type="button" data-color="#571f9c"
                                        data-actions='o:click;a:simplelink;target:_self;url:{{@$slider->button_two_link}};'
                                        data-xy="x:212px;y:700px;" data-text="s:14;l:17;a:inherit;" data-padding="t:15;r:35;b:15;l:35;"
                                        data-border="bos:solid;boc:#571f9c;bow:2px,2px,2px,2px;" data-frame_0="y:100px;tp:600;"
                                        data-frame_1="tp:600;e:power4.inOut;st:5000;sp:1500;sR:5000;"
                                        data-frame_999="o:0;tp:600;st:w;sR:2500;"
                                        data-frame_hover="c:#fff;bgc:#571f9c;boc:#571f9c;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;sp:0;e:none;"
                                        style="z-index:9;background-color:rgba(87,31,156,0);font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                        {{ucwords(@$slider->button_two)}}
                            </rs-layer>
                            @endif

                        </rs-slide>
                        @elseif(@$loop->index ==2)
                        <rs-slide data-key="rs-9" data-title="Slide"
                                    data-thumb="{{asset('/images/uploads/sliders/thumb/thumb_'.$slider->slider_image) }}"
                                    data-anim="ei:d;eo:d;s:d;t:incube-horizontal;sl:d;">
                            <img
                                src="{{asset('/images/uploads/sliders/'.$slider->slider_image) }}"
                                title="{{ucwords(@$slider->heading)}}" class="rev-slidebg" data-no-retina>


                            <rs-layer id="slider-3-slide-9-layer-2" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                        data-xy="x:c;y:409px;" data-text="s:60;l:60;fw:700;a:inherit;" data-frame_0="x:175%;o:1;tp:600;"
                                        data-frame_0_mask="u:t;x:-100%;" data-frame_1="tp:600;e:power3.out;st:1500;sp:1500;sR:1500;"
                                        data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:6000;"
                                        style="z-index:6;font-family:Montserrat;">{{ucwords(@$slider->heading)}}
                            </rs-layer>


                            <rs-layer id="slider-3-slide-9-layer-5" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                        data-xy="x:c;xo:5px;y:381px;" data-text="s:16;l:22;ls:2px;fw:600;a:inherit;"
                                        data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:500;sp:2000;sR:500;"
                                        data-frame_999="o:0;tp:600;st:w;sR:6500;"
                                        style="z-index:8;font-family:Open Sans;text-transform:uppercase;">{{ucwords(@$slider->subheading_one)}}
                            </rs-layer>

                            <rs-layer id="slider-3-slide-9-layer-6" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                data-xy="x:c;xo:5px;y:515px;" data-text="s:25;l:22;ls:2px;fw:600;a:inherit;"
                                data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:900;sp:2000;sR:900;"
                                data-frame_999="o:0;tp:600;st:w;sR:4500;"
                                style="z-index:5;font-family:Open Sans;text-transform:uppercase;">{{ucwords(@$slider->subheading_two)}}
                            </rs-layer>

                            <a id="slider-3-slide-9-layer-3" class="rs-layer rev-btn"
                                href="{{@$slider->button_one_link}}"
                                target="_self" data-type="button" data-color="#ffffff" data-xy="x:<?php if($slider->button_two && @$slider->button_two_link){ echo '430px'; }else{ echo 'c';}?>;y:592px;"
                                data-text="s:14;l:17;a:inherit;" data-padding="t:15;r:35;b:15;l:35;"
                                data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:100%;tp:600;"
                                data-frame_1="tp:600;e:power4.inOut;st:1250;sp:2000;sR:1250;"
                                data-frame_999="o:0;tp:600;st:w;sR:1000;"
                                data-frame_hover="c:#fff;bgc:#571f9c;boc:#571f9c;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;sp:0;e:none;"
                                style="z-index:7;background-color:rgba(87,31,156,0);font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                {{ucwords(@$slider->button_one)}}
                                </a>

                            @if($slider->button_two && @$slider->button_two_link)

                                <a id="slider-3-slide-9-layer-7" class="rs-layer rev-btn"
                                href="{{@$slider->button_two_link}}"
                                target="_self" data-type="button" data-color="#ffffff" data-xy="x:630px;y:592px;"
                                data-text="s:14;l:17;a:inherit;" data-padding="t:15;r:35;b:15;l:35;"
                                data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:100%;tp:600;"
                                data-frame_1="tp:600;e:power4.inOut;st:1250;sp:2000;sR:1250;"
                                data-frame_999="o:0;tp:600;st:w;sR:1000;"
                                data-frame_hover="c:#fff;bgc:#571f9c;boc:#571f9c;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;sp:0;e:none;"
                                style="z-index:7;background-color:rgba(87,31,156,0);font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                {{ucwords(@$slider->button_two)}}
                                </a>
                                @endif

                        </rs-slide>
                        @endif
                        @endforeach

                    </rs-slides>
                </rs-module>


            </rs-module-wrap>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
@endif

@endsection
@section('content')

    <!-- **Main** -->
    <div id="main">
        <!-- ** Container ** -->
        <div class="container">
            <section id="primary" class="content-full-width">
                <!-- #post-5 -->
                <div id="post-5" class="post-5 page type-page status-publish hentry">

                    <div class="vc_row wpb_row vc_row-fluid dt-sc-custom-bg left-bg-diamond-shape right-bg-circle-shape">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-6107b9a4c2cfe" data-id="6107b9a4c2cfe" data-height="80"
                                            data-height-mobile="16" data-height-tab="80" data-height-tab-portrait="80"
                                            data-height-mobile-landscape="16" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div
                                        class="vc_row wpb_row vc_inner vc_row-fluid rs_column_gap_override vc_custom_1494987902509 vc_column-gap-35">
                                        <div
                                            class="dt-sc-two-fifth rs_col-sm-12 wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-12">
                                            <div class="vc_column-inner vc_custom_1494982242608">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile "
                                                            data-animate="fadeInRight" data-animation-delay="0.5" data-animation-duration="1"
                                                            data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='alignleft  dt-sc-subtitle-text'>
                                                            <p>{{ucwords(@$welcome_settings->intro_subheading)}}</p>
                                                        </div>
                                                        <h2 style="text-align: left" class="vc_custom_heading vcr_heading-right"><strong>{{strtoupper(@$welcome_settings->intro_heading)}}</strong></h2>
                                                        <p style="text-align: left" class="vc_custom_heading vcr_heading-right">{{ucfirst(@$welcome_settings->intro_description)}}</p>
                                                    </div>
                                                    <div class="ult-spacer spacer-6107b9a4c33f1" data-id="6107b9a4c33f1" data-height="25"
                                                            data-height-mobile="25" data-height-tab="25" data-height-tab-portrait=""
                                                            data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn"
                                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect=""><a href='{{ucwords(@$welcome_settings->intro_button_link)}}' target='_self' title=''
                                                                                                            class='dt-sc-button   medium   filled  default'> {{ucwords(@$welcome_settings->intro_button)}} </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="dt-sc-three-fifth rs_col-sm-12 wpb_column vc_column_container vc_col-sm-8 vc_col-lg-8 vc_col-md-12">
                                            <div class="vc_column-inner vc_custom_1494982255920">
                                                <div class="wpb_wrapper">

                                                    @if(count($awards) >= 2)

                                                    <div id="ult-carousel-18361286996107b7834a609" class="ult-carousel-wrapper   ult_horizontal"
                                                        data-gutter="15" data-rtl="false">
                                                        <div class="ult-carousel-20935043566107b7834a5d4 ">

                                                        @foreach(@$awards as $award)
                                                            <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1494067265881 slick-custom-background vc_row-has-fill">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="ult-spacer spacer-6107b7834aee7" data-id="6107b7834aee7"
                                                                            data-height="50" data-height-mobile="50" data-height-tab="50"
                                                                            data-height-tab-portrait="" data-height-mobile-landscape=""
                                                                            style="clear:both;display:block;"></div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation"><img width="200"
                                                                            height="200"
                                                                            src="{{asset('/images/uploads/awards/'.$award->image) }}"
                                                                            class="aligncenter attachment-full" alt="award" loading="lazy" /></div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="ult-spacer spacer-6107b7834b6c6" data-id="6107b7834b6c6"
                                                                            data-height="50" data-height-mobile="50" data-height-tab="50"
                                                                            data-height-tab-portrait="" data-height-mobile-landscape=""
                                                                            style="clear:both;display:block;"></div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        </div>
                                                    </div>
                                                    @else

                                                     <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                                                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_center   dt-sc-outer-frame-border dt-sc-skin-highlight-border">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="600"
                                                                                                                                height="370"
                                                                                                                                src="{{asset('/images/uploads/settings/'.$welcome_settings->intro_image) }}"
                                                                                                                                class="vc_single_image-img attachment-full" alt="about-aurum" loading="lazy"
                                                                                                                                srcset="{{asset('/images/uploads/settings/'.$welcome_settings->intro_image) }} 600w, {{asset('/images/uploads/settings/'.$welcome_settings->intro_image) }} 300w"
                                                                                                                                sizes="(max-width: 600px) 100vw, 600px" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>

                                                    @endif



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-6107b9a4c3ee7" data-id="6107b9a4c3ee7" data-height="135"
                                            data-height-mobile="90" data-height-tab="105" data-height-tab-portrait="105"
                                            data-height-mobile-landscape="90" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row Backgrounds -->
                    <div class="upb_color" data-bg-override="0" data-bg-color="" data-fadeout="" data-fadeout-percentage="30"
                            data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true"
                            data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="6.5.0"
                            data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color=""
                            data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                    @if(count($teams) > 0)

                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504782187535 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-6107b9a4c42ba" data-id="6107b9a4c42ba" data-height="90"
                                            data-height-mobile="60" data-height-tab="75" data-height-tab-portrait="75"
                                            data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                            data-animation-delay="1" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='aligncenter  dt-sc-subtitle-text'>THE SHOWRUNNERS</div>
                                        <div class="ult-spacer spacer-6107b9a4c4341" data-id="6107b9a4c4341" data-height="10"
                                                data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                                data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                        <h2 style="font-size: 60px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                            <strong>Perfect Team</strong></h2>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4c445f" data-id="6107b9a4c445f" data-height="90"
                                            data-height-mobile="60" data-height-tab="75" data-height-tab-portrait="75"
                                            data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid" style="color: rgba(114, 152, 166, 0.3);">
                                    @foreach(@$teams as $team)
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                                            data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-team  simple-rounded aligncenter'>
                                                            <div class='dt-sc-team-thumb'><img width="300" height="300"
                                                                                                src="{{asset('/images/uploads/teams/'.@$team->image)}}"
                                                                                                class="attachment-full" alt="{{@$team->name}}" loading="lazy"
                                                                                                srcset="{{asset('/images/uploads/teams/'.@$team->image)}} 300w, {{asset('/images/uploads/teams/'.@$team->image)}} 100w, {{asset('/images/uploads/teams/'.@$team->image)}} 150w"
                                                                                                sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                            <div class='dt-sc-team-details'>
                                                                <h4>{{ucwords(@$team->name)}}</h4>
                                                                <h5>{{ucwords(@$team->post)}}</h5>
                                                                <p>{{ucfirst(@$team->description)}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4c55cc" data-id="6107b9a4c55cc" data-height="135"
                                            data-height-mobile="90" data-height-tab="120" data-height-tab-portrait="120"
                                            data-height-mobile-landscape="90" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif

                    <div class="vc_row-full-width vc_clearfix"></div>


                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1451371259984 alignleft">
                                    </div>
                                    <div class="dt-sc-hr-invisible-xsmall "> </div>
                                </div>
                            </div>
                        </div>
                        <div class="ult-spacer spacer-6107b9a4cb1aa" data-id="6107b9a4cb1aa" data-height="60" data-height-mobile="35" data-height-tab="45" data-height-tab-portrait="45" data-height-mobile-landscape="35" style="clear:both;display:block;"></div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="dt-sc-counter type4 green ">
                                        <div class="dt-sc-couter-icon-holder">
                                            <div class="icon-wrapper"><span class="pe-icon pe-like"> </span></div>
                                            <div class="dt-sc-counter-number" data-value="@if(!empty(@$setting_data->customer_served)) {{@$setting_data->customer_served}} @else 10000 @endif" data-append="+">@if(!empty(@$setting_data->customer_served)) {{@$setting_data->customer_served}}+ @else 10000+ @endif</div>
                                        </div>
                                        <h4>Customer Served</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="dt-sc-counter type4 cyan ">
                                        <div class="dt-sc-couter-icon-holder">
                                            <div class="icon-wrapper"><span class="pe-icon pe-paper-plane"> </span></div>
                                            <div class="dt-sc-counter-number" data-value="@if(!empty(@$setting_data->visa_approved)) {{@$setting_data->visa_approved}} @else 1892 @endif" data-append="+">@if(!empty(@$setting_data->visa_approved)) {{@$setting_data->visa_approved}}+ @else 1892+ @endif</div>
                                        </div>
                                        <h4>Visa Approved</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="dt-sc-counter type4 red ">
                                        <div class="dt-sc-couter-icon-holder">
                                            <div class="icon-wrapper"><span class="pe-icon pe-check"> </span></div>
                                            <div class="dt-sc-counter-number" data-value="@if(!empty(@$setting_data->success_stories)) {{@$setting_data->success_stories}} @else 250 @endif" data-append="+">@if(!empty(@$setting_data->success_stories)) {{@$setting_data->success_stories}}+ @else 250+ @endif</div>
                                        </div>
                                        <h4>Success Stories</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="dt-sc-counter type4 orange ">
                                        <div class="dt-sc-couter-icon-holder">
                                            <div class="icon-wrapper"><span class="pe-icon pe-smile"> </span></div>
                                            <div class="dt-sc-counter-number" data-value="@if(!empty(@$setting_data->happy_customers)) {{@$setting_data->happy_customers}} @else 1546 @endif" data-append="+">@if(!empty(@$setting_data->happy_customers)) {{@$setting_data->happy_customers}}+ @else 1546+ @endif</div>
                                        </div>
                                        <h4>Happy Customers</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="dt-sc-hr-invisible-large "> </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if(count($service_categories) > 0)

                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                                class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                                data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                                                style="opacity:0;" data-opacity_start_effect="">
                                            <div class='aligncenter  dt-sc-subtitle-text'>THE BEST SERVICE</div>
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
                    @endif

                    @if(count($clients) > 0)
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  vc_custom_1453795421005 aligncenter">
                                    <div class="wpb_wrapper">
                                        <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                                data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                                style="opacity:0;" data-opacity_start_effect="">
                                            <div class='aligncenter  dt-sc-subtitle-text'>OUR VALUEABLE </div>
                                            <div class="ult-spacer spacer-6107b9a4cb018" data-id="6107b9a4cb018" data-height="10"
                                                    data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                                    data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                            <h2 style="font-size: 60px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                                <a href="{{url('/clients')}}"><strong>Clients</strong></a></h2>
                                        </div>

                                    </div>
                                </div>
                                <div class='dt-sc-hr-invisible-small '> </div>
                                <div class='dt-sc-hr-invisible-xsmall '> </div>

                                <div class="dt-sc-partners-carousel-wrapper" data-scroll="3" data-visible="5">
                                    <ul class='dt-sc-partners-carousel'>
                                        @foreach(@$clients as $client)

                                            <li><a href="{{@$client->link}}" @if(@$client->link) target="_blank"  @endif > <img width="155" height="125"
                                                src="<?php if(@$client->image){?>{{asset('/images/uploads/clients/'.@$client->image)}}<?php }?>"
                                                class="attachment-full" alt="" loading="lazy" /></a></li>
                                        @endforeach
                                    </ul>
                                    <div class="carousel-arrows"><a href="#" class="partners-prev"> </a><a href="#"
                                        class="partners-next"> </a></div>
                                </div>
                                <div class='dt-sc-hr-invisible-large '> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif


                    @if(count($testimonials) > 0)

                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='aligncenter  dt-sc-subtitle-text'>OUR CLIENTS </div>
                                        <div class="ult-spacer spacer-6107b9a4cb018" data-id="6107b9a4cb018" data-height="10"
                                                data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                                data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                        <h2 style="font-size: 60px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                            <strong>Testimonials</strong></h2>
                                    </div>

                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">

                                            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                        <div class='dt-sc-hr-invisible-small '> </div>
                                                        <div class='dt-sc-testimonial-wrapper carousel_items type6 ' data-animation='scroll'>
                                                            <ul class="dt-sc-testimonial-carousel">
                                                            @foreach(@$testimonials as $testimonial)

                                                                <li>
                                                                    <div class='dt-sc-testimonial type6 '>
                                                                    <div class="dt-sc-testimonial-author"><span><img width="120" height="120"
                                                                            src="<?php if(@$testimonial->image){?>{{asset('/images/uploads/testimonials/'.@$testimonial->image)}}<?php }?>"
                                                                            class="attachment-full" alt="" loading="lazy"
                                                                            srcset="<?php if(@$testimonial->image){?>{{asset('/images/uploads/testimonials/'.@$testimonial->image)}}<?php }?> 120w, <?php if(@$testimonial->image){?>{{asset('/images/uploads/testimonials/'.@$testimonial->image)}}<?php }?> 100w"
                                                                            sizes="(max-width: 120px) 100vw, 120px" /></span><cite>{{ucwords(@$testimonial->title)}}<small>{{ucwords(@$testimonial->subtitle)}}
                                                                        </small></cite></div>
                                                                    <div class="dt-sc-testimonial-quote">
                                                                        <blockquote> <q> {!! @$testimonial->testimonial !!}</q> </blockquote>
                                                                    </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach

                                                            </ul>
                                                            <div class="carousel-arrows"> <a href="#" class="testimonial-prev"> </a> <a href="#"
                                                                class="testimonial-next"> </a></div>
                                                        </div>
                                                        <div class='dt-sc-clear '> </div>
                                                        <div class='dt-sc-hr-invisible-small '> </div>
                                                        <div class='dt-sc-hr-invisible-small '> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4cfa98" data-id="6107b9a4cfa98" data-height="50"
                                            data-height-mobile="15" data-height-tab="35" data-height-tab-portrait="35"
                                            data-height-mobile-landscape="15" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                  @endif



                    @if(count($latestPosts) > 0)

                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='aligncenter  dt-sc-subtitle-text'>OUR NEWS &amp; STORIES</div>
                                        <div class="ult-spacer spacer-6107b9a4cb018" data-id="6107b9a4cb018" data-height="10"
                                                data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                                data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                        <h2 style="font-size: 60px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                            <strong>From The Blog</strong></h2>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4cb1aa" data-id="6107b9a4cb1aa" data-height="60"
                                            data-height-mobile="35" data-height-tab="45" data-height-tab-portrait="45"
                                            data-height-mobile-landscape="35" style="clear:both;display:block;"></div>
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='tpl-blog-holder apply-isotope'>
                                        @foreach(@$latestPosts as $post)
                                            <div class='column dt-sc-one-third @if(@$loop->index == 0) first @endif'>
                                                <article id="post-{{@$loop->iteration}}"
                                                            class="blog-entry  format-standard post-1 post type-post status-publish has-post-thumbnail hentry category-news category-technical tag-blog">
                                                    <div class="entry-thumb"> <a href="{{route('blog.single',$post->slug)}}"><img
                                                                width="1170" height="795"
                                                                src="<?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?>"
                                                                class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                                                srcset="<?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 1170w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 600w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 300w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 768w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 1024w"
                                                                sizes="(max-width: 1170px) 100vw, 1170px" /></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="#"></a> </div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="date ">Posted on {{date('j ',strtotime(@$post->created_at))}}{{date('M Y',strtotime(@$post->created_at))}} </div>

                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="{{route('blog.single',$post->slug)}}">{{ucwords($post->title)}}</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>{{ucfirst(Str::limit($post->excerpt, 85))}}...</p>
                                                        </div>
                                                       <a href="{{route('blog.single',$post->slug)}}" target='_self' title=''
                                                                    class='dt-sc-button   small   filled  dt-sc-readmore-link'> Continue Reading </a>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4cfa98" data-id="6107b9a4cfa98" data-height="50"
                                            data-height-mobile="15" data-height-tab="35" data-height-tab-portrait="35"
                                            data-height-mobile-landscape="15" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="vc_row-full-width vc_clearfix"></div>

                </div><!-- #post-5 -->
            </section><!-- **Primary - End** -->
        </div><!-- **Container - End** -->

    </div>
    <!-- **Main - End** -->

@endsection
@section('js')
    <script type="text/javascript">
        setREVStartSize({ c: 'rev_slider_3_1', rl: [1240, 1024, 778, 480], el: [], gw: [1230], gh: [850], type: 'standard', justify: '', layout: 'fullwidth', mh: "0" });
        var revapi3,
            tpj;
        function revinit_revslider31() {
            jQuery(function () {
                tpj = jQuery;
                revapi3 = tpj("#rev_slider_3_1");
                if (revapi3 == undefined || revapi3.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_3_1");
                } else {
                    revapi3.revolution({
                        visibilityLevels: "1240,1024,778,480",
                        gridwidth: 1230,
                        gridheight: 850,
                        spinner: "spinner0",
                        perspectiveType: "local",
                        responsiveLevels: "1240,1024,778,480",
                        progressBar: { disableProgressBar: true },
                        navigation: {
                            mouseScrollNavigation: false,
                            onHoverStop: false,
                            arrows: {
                                enable: true,
                                style: "uranus",
                                hide_onleave: true,
                                left: {

                                },
                                right: {

                                }
                            }
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid: true
                        },
                    });
                }

            });
        } // End of RevInitScript
        var once_revslider31 = false;
        if (document.readyState === "loading") { document.addEventListener('readystatechange', function () { if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider31) { once_revslider31 = true; revinit_revslider31(); } }); } else { once_revslider31 = true; revinit_revslider31(); }
    </script>

    <script>
        var htmlDivCss = unescape("%23rev_slider_3_1_wrapper%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_3_1_wrapper%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_3_1_wrapper%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>

    <script>
        var htmlDivCss = unescape("%0A%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
    if (typeof jQuery('.ult-carousel-20935043566107b7834a5d4').slick == "function") {
        $('.ult-carousel-20935043566107b7834a5d4').slick({
        dots: false, autoplay: true, autoplaySpeed: 5000, speed: 300, infinite: true, arrows: false, slidesToScroll: 1, slidesToShow: 2, swipe: true, draggable: true, touchMove: true, pauseOnHover: true, pauseOnFocus: false, responsive: [
            {
            breakpoint: 1026,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
            },
            {
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 760,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ], pauseOnDotsHover: true, customPaging: function (slider, i) {
            return '<i type="button" style= "color:#333333;" class="ultsl-record" data-role="none"></i>';
        },
        });
    }
    });
</script>
@endsection
