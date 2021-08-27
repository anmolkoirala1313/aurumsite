@extends('frontend.layouts.master')
@section('title') Aurum @endsection
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
                                    data-thumb="{{ asset('/images/uploads/sliders/thumb/thumb_'.$slider->slider_image) }}')}}"
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
                                    
                                    <rs-layer id="slider-3-slide-7-layer-6" class="rev-btn" data-type="button" data-url="{{@$slider->button_one_link}}"
                                            data-color="rgba(255,255,255,1)" data-xy="x:c;xo:-96px;y:751px;"
                                            data-text="s:14;l:17;a:inherit;" data-padding="t:17;r:35;b:17;l:35;"
                                            data-frame_0="x:-150px;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:3500;sp:1500;sR:3500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:4000;"
                                            data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;e:none;"
                                            style="z-index:8;background-color:#571f9c;font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                            {{ucwords(@$slider->button_one)}}
                                    </rs-layer>
                                    
                                    <rs-layer id="slider-3-slide-7-layer-7" class="rev-btn" data-type="button"
                                            data-color="rgba(255,255,255,1)" data-xy="x:c;xo:95px;y:751px;" data-text="s:14;l:17;a:inherit;"
                                            data-padding="t:15;r:35;b:15;l:35;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;"
                                            data-frame_0="x:150px;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:3500;sp:1500;sR:3500;"
                                            data-frame_999="o:0;tp:600;st:w;sR:4000;"
                                            data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;bow:0,0,0,0;oX:50;oY:50;sp:0;e:none;"
                                            style="z-index:9;background-color:rgba(87,31,156,0);font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                        get a quote
                                    </rs-layer>
                                    
                        </rs-slide>
                        @elseif(@$loop->index == 1)
                        <rs-slide data-key="rs-8" data-title="Slide"
                                    data-thumb="{{ asset('/images/uploads/sliders/thumb/thumb_'.$slider->slider_image) }}')}}"
                                    data-anim="ei:d;eo:d;s:d;t:incube-horizontal;sl:d;">
                            <img
                                src="{{ asset('/images/uploads/sliders/'.$slider->slider_image) }}')}}"
                                title="Home" class="rev-slidebg" data-no-retina>
                            
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
                                        style="z-index:6;font-family:Open Sans;text-transform:uppercase;">#1 best agency Theme
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-8-layer-3" data-type="text" data-color="#3f3f3f" data-rsp_ch="on"
                                        data-xy="x:30px;y:547px;" data-text="s:50;l:60;fw:700;a:inherit;"
                                        data-frame_0="x:175%;o:1;tp:600;" data-frame_0_mask="u:t;x:-100%;"
                                        data-frame_1="tp:600;e:power3.out;st:3000;sp:1500;sR:3000;" data-frame_1_mask="u:t;"
                                        data-frame_999="o:0;tp:600;st:w;sR:4500;" style="z-index:7;font-family:Montserrat;">Creative
                                Services<br>
                                for your Company
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-8-layer-4" class="rev-btn" data-type="button"
                                        data-color="rgba(255,255,255,1)" data-xy="x:30px;y:700px;" data-text="s:14;l:17;a:inherit;"
                                        data-padding="t:17;r:35;b:17;l:35;" data-frame_0="y:100px;tp:600;"
                                        data-frame_1="tp:600;e:power4.inOut;st:4000;sp:1500;sR:4000;"
                                        data-frame_999="o:0;tp:600;st:w;sR:3500;"
                                        data-frame_hover="c:#000;bgc:#fff;boc:#000;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;e:none;"
                                        style="z-index:8;background-color:#571f9c;font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                talk to us
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-8-layer-5" class="rev-btn" data-type="button" data-color="#571f9c"
                                        data-xy="x:212px;y:700px;" data-text="s:14;l:17;a:inherit;" data-padding="t:15;r:35;b:15;l:35;"
                                        data-border="bos:solid;boc:#571f9c;bow:2px,2px,2px,2px;" data-frame_0="y:100px;tp:600;"
                                        data-frame_1="tp:600;e:power4.inOut;st:5000;sp:1500;sR:5000;"
                                        data-frame_999="o:0;tp:600;st:w;sR:2500;"
                                        data-frame_hover="c:#fff;bgc:#571f9c;boc:#571f9c;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;sp:0;e:none;"
                                        style="z-index:9;background-color:rgba(87,31,156,0);font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                get a quote
                            </rs-layer>
                            
                        </rs-slide>
                        @elseif(@$loop->index ==2)
                        <rs-slide data-key="rs-9" data-title="Slide"
                                    data-thumb="{{asset('assets/frontend/images/06/agency-slider03-100x50.jpg')}}"
                                    data-anim="ei:d;eo:d;s:d;t:incube-horizontal;sl:d;">
                            <img
                                src="{{asset('assets/frontend/images/06/agency-slider03.jpg')}}"
                                title="Home" class="rev-slidebg" data-no-retina>
                            
                            <rs-layer id="slider-3-slide-9-layer-1" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                        data-xy="x:c;xo:-191px;y:517px;" data-text="s:16;l:22;ls:2px;fw:600;a:inherit;"
                                        data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:2500;sp:2000;sR:2500;"
                                        data-frame_999="o:0;tp:600;st:w;sR:4500;"
                                        style="z-index:5;font-family:Open Sans;text-transform:uppercase;">Reliability
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-9-layer-2" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                        data-xy="x:c;y:409px;" data-text="s:60;l:60;fw:700;a:inherit;" data-frame_0="x:175%;o:1;tp:600;"
                                        data-frame_0_mask="u:t;x:-100%;" data-frame_1="tp:600;e:power3.out;st:1500;sp:1500;sR:1500;"
                                        data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:6000;"
                                        style="z-index:6;font-family:Montserrat;">Simply the Best
                            </rs-layer>
                            <a id="slider-3-slide-9-layer-3" class="rs-layer rev-btn"
                                href="https://themeforest.net/item/agencies-multipurpose-creative-agency-consultancy-theme/20068283?s_rank=1"
                                target="_self" data-type="button" data-color="#ffffff" data-xy="x:c;y:592px;"
                                data-text="s:14;l:17;a:inherit;" data-padding="t:15;r:35;b:15;l:35;"
                                data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:100%;tp:600;"
                                data-frame_1="tp:600;e:power4.inOut;st:6000;sp:2000;sR:6000;"
                                data-frame_999="o:0;tp:600;st:w;sR:1000;"
                                data-frame_hover="c:#fff;bgc:#571f9c;boc:#571f9c;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;sp:0;e:none;"
                                style="z-index:7;background-color:rgba(87,31,156,0);font-family:Montserrat;text-transform:uppercase;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Purchase
                                            Theme
                                </a>
                            
                            <rs-layer id="slider-3-slide-9-layer-5" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                        data-xy="x:c;xo:5px;y:381px;" data-text="s:16;l:22;ls:2px;fw:600;a:inherit;"
                                        data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:500;sp:2000;sR:500;"
                                        data-frame_999="o:0;tp:600;st:w;sR:6500;"
                                        style="z-index:8;font-family:Open Sans;text-transform:uppercase;">#1 Most Loved By Everyone
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-9-layer-7" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                        data-xy="x:c;xo:-4px;y:517px;" data-text="s:16;l:22;ls:2px;fw:600;a:inherit;"
                                        data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:3500;sp:2000;sR:3500;"
                                        data-frame_999="o:0;tp:600;st:w;sR:3500;"
                                        style="z-index:9;font-family:Open Sans;text-transform:uppercase;">Competence
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-9-layer-8" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                        data-xy="x:c;xo:205px;y:517px;" data-text="s:16;l:22;ls:2px;fw:600;a:inherit;"
                                        data-frame_0="y:100%;tp:600;" data-frame_1="tp:600;e:power4.inOut;st:4500;sp:2000;sR:4500;"
                                        data-frame_999="o:0;tp:600;st:w;sR:2500;"
                                        style="z-index:10;font-family:Open Sans;text-transform:uppercase;">Accountability
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-9-layer-9" data-type="image" data-rsp_ch="on"
                                        data-xy="x:334px;y:518px;" data-text="l:22;a:inherit;" data-dim="w:19px;h:23px;"
                                        data-frame_0="tp:600;" data-frame_1="tp:600;st:5500;sp:1000;sR:5500;"
                                        data-frame_999="o:0;tp:600;st:w;sR:2500;" style="z-index:11;"><img
                                    src="{{asset('assets/frontend/images/06/bullet.png')}}"
                                    width="19" height="23" data-no-retina>
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-9-layer-10" data-type="image" data-rsp_ch="on"
                                        data-xy="x:511px;y:520px;" data-text="l:22;a:inherit;" data-dim="w:19px;h:23px;"
                                        data-frame_0="tp:600;" data-frame_1="tp:600;st:5700;sp:1000;sR:5700;"
                                        data-frame_999="o:0;tp:600;st:w;sR:2300;" style="z-index:12;"><img
                                    src="{{asset('assets/frontend/images/06/bullet.png')}}"
                                    width="19" height="23" data-no-retina>
                            </rs-layer>
                            
                            <rs-layer id="slider-3-slide-9-layer-11" data-type="image" data-rsp_ch="on"
                                        data-xy="x:698px;y:519px;" data-text="l:22;a:inherit;" data-dim="w:19px;h:23px;"
                                        data-frame_0="tp:600;" data-frame_1="tp:600;st:5900;sp:1000;sR:5900;"
                                        data-frame_999="o:0;tp:600;st:w;sR:2100;" style="z-index:13;"><img
                                    src="{{asset('assets/frontend/images/06/bullet.png')}}"
                                    width="19" height="23" data-no-retina>
                            </rs-layer>
                            
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
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1493802286760 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-6107b9a4bd866" data-id="6107b9a4bd866" data-height="90"
                                            data-height-mobile="45" data-height-tab="75" data-height-tab-portrait="75"
                                            data-height-mobile-landscape="45" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInRight"
                                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <h5
                                            style="line-height: 36px;text-align: left;font-family:Montserrat;font-weight:700;font-style:normal"
                                            class="vc_custom_heading vcr_heading-right">The Best Agency for your Business</h5>
                                        <p style="text-align: left" class="vc_custom_heading vcr_heading-right vc_custom_1496127376202">
                                            Our strategy is dependent on your world and your goals. Moving towards your goal empowers us
                                            too!</p>
                                    </div>
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn"
                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect=""><a href='#' target='_self' title=''
                                                                                            class='dt-sc-button   medium   filled  default'> Consult Now </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-9 vc_col-lg-9 vc_col-md-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInX"
                                                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type5 no-icon-bg aligncenter'>
                                                            <div class="icon-wrapper"><img width="150" height="150"
                                                                                            src="{{asset('assets/frontend/images/05/icon-arrow-board.png')}}"
                                                                                            class="attachment-full" alt="icon-arrow-board" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-arrow-board.png')}} 150w, {{asset('assets/frontend/images/05/icon-arrow-board-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Engrossing content</h4>
                                                                <p>The content delivery needs to be original &amp; engrossing to hold the attention
                                                                    of the visitors.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInX"
                                                            data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type5 no-icon-bg aligncenter'>
                                                            <div class="icon-wrapper"><img width="150" height="150"
                                                                                            src="{{asset('assets/frontend/images/05/icon-mount-flag.png')}}"
                                                                                            class="attachment-full" alt="icon-mount-flag" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-mount-flag.png')}} 150w, {{asset('assets/frontend/images/05/icon-mount-flag-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Engaging copy nails!</h4>
                                                                <p>When the visitor is impressed with the content, the retention is likely to be
                                                                    longer in the site.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInX"
                                                            data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type5 no-icon-bg aligncenter'>
                                                            <div class="icon-wrapper"><img width="150" height="150"
                                                                                            src="{{asset('assets/frontend/images/05/icon-fire-torch.png')}}"
                                                                                            class="attachment-full" alt="icon-fire-torch" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-fire-torch.png')}} 150w, {{asset('assets/frontend/images/05/icon-fire-torch-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Retaining the visitor</h4>
                                                                <p>When the copy nails it, the call to action appears like a shadow intending to
                                                                    trigger a move.</p>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                    <div class="ult-spacer spacer-6107b9a4bf656" data-id="6107b9a4bf656" data-height="90"
                                            data-height-mobile="45" data-height-tab="75" data-height-tab-portrait="75"
                                            data-height-mobile-landscape="45" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid dt-sc-custom-bg left-bg-stripebox-shape right-bg-triangle-shape">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-6107b9a4bf9eb" data-id="6107b9a4bf9eb" data-height="100"
                                            data-height-mobile="80" data-height-tab="90" data-height-tab-portrait="90"
                                            data-height-mobile-landscape="80" style="clear:both;display:block;"></div>
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='aligncenter  dt-sc-subtitle-text with-bottom-border'>
                                            <p>WE ARE THE BEST AGENCY FOR YOU</p>
                                        </div>
                                        <div class="ult-spacer spacer-6107b9a4bfaa1" data-id="6107b9a4bfaa1" data-height="20"
                                                data-height-mobile="20" data-height-tab="20" data-height-tab-portrait=""
                                                data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                        <h2 style="font-size: 40px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                            <strong>Take your business soaring high...<br />
                                                Reach for us</strong></h2>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4bfc0a" data-id="6107b9a4bfc0a" data-height="10"
                                            data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                            data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                        <div class="aligncenter wpb_column vc_column_container vc_col-sm-8">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInDown"
                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <p style="text-align: center" class="vc_custom_heading">When you objectively analyze your
                                            business, you are likely to get a new perspective. These new perspectives propel your business
                                            up by infusing fresh strategy. We can support whenever new strategy is needed.</p><a href='#'
                                                                                                                                    target='_self' title=''
                                                                                                                                    class='dt-sc-button   medium   rounded-border  with-ballpin-needle-holder'> Hire us </a>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4bfff1" data-id="6107b9a4bfff1" data-height="64"
                                            data-height-mobile="48" data-height-tab="64" data-height-tab-portrait="64"
                                            data-height-mobile-landscape="48" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div><!-- Row Backgrounds -->
                    <div class="upb_bg_img"
                            data-ultimate-bg="{{asset('assets/frontend/images/05/custom-bg-parallax.png')}}"
                            data-ultimate-bg-style="vcpb-fs-jquery" data-bg-img-repeat="repeat" data-bg-img-size="cover"
                            data-bg-img-position="" data-parallx_sense="30" data-bg-override="0" data-bg_img_attach="scroll"
                            data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-fadeout-percentage="30"
                            data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true"
                            data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="6.5.0"
                            data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color=""
                            data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                    <div class="vc_row wpb_row vc_row-fluid dt-sc-centered-border-columns">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='aligncenter  dt-sc-subtitle-text'>
                                            <p>ALL THESE SERVICES FOR YOU</p>
                                        </div>
                                        <div class="ult-spacer spacer-6107b9a4c07fb" data-id="6107b9a4c07fb" data-height="10"
                                                data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                                data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                        <h2 style="font-size: 60px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                            <strong>The Best Services</strong></h2>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4c0922" data-id="6107b9a4c0922" data-height="75"
                                            data-height-mobile="45" data-height-tab="60" data-height-tab-portrait="60"
                                            data-height-mobile-landscape="45" style="clear:both;display:block;"></div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid first">
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner vc_custom_1493875964566">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type14 '>
                                                            <div class="icon-wrapper"><img width="104" height="104"
                                                                                            src="{{asset('assets/frontend/images/05/icon-stats-counter.png')}}"
                                                                                            class="attachment-full" alt="icon-stats-counter" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-stats-counter.png')}} 104w, {{asset('assets/frontend/images/05/icon-stats-counter-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 104px) 100vw, 104px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Track <strong> Record</strong></h4>
                                                                <p>Consistent track record of clients both big and SMEs</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner vc_custom_1493819054764">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                                            data-animation-delay="2.0" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type14 '>
                                                            <div class="icon-wrapper"><img width="104" height="104"
                                                                                            src="{{asset('assets/frontend/images/05/icon-analyze.png')}}"
                                                                                            class="attachment-full" alt="icon-analyze" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-analyze.png')}} 104w, {{asset('assets/frontend/images/05/icon-analyze-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 104px) 100vw, 104px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Exponential <strong> Growth</strong></h4>
                                                                <p>Our recommendations ensures rapid expansion of business.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner vc_custom_1493876017970">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                                            data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type14 '>
                                                            <div class="icon-wrapper"><img width="104" height="104"
                                                                                            src="{{asset('assets/frontend/images/05/icon-video-play.png')}}"
                                                                                            class="attachment-full" alt="icon-video-play" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-video-play.png')}} 104w, {{asset('assets/frontend/images/05/icon-video-play-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 104px) 100vw, 104px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Brand <strong> Equity</strong></h4>
                                                                <p>The brands have exceptional premium value of equity</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid last">
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner vc_custom_1493876054400">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                                            data-animation-delay="2.3" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type14 '>
                                                            <div class="icon-wrapper"><img width="104" height="104"
                                                                                            src="{{asset('assets/frontend/images/05/icon-edit-cogs.png')}}"
                                                                                            class="attachment-full" alt="icon-edit-cogs" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-edit-cogs.png')}} 104w, {{asset('assets/frontend/images/05/icon-edit-cogs-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 104px) 100vw, 104px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Trusted <strong> by leaders</strong></h4>
                                                                <p>The leaders&#8217; trust in us empowers our operations.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner vc_custom_1493819054764">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type14 '>
                                                            <div class="icon-wrapper"><img width="104" height="104"
                                                                                            src="{{asset('assets/frontend/images/05/icon-certified-batch.png')}}"
                                                                                            class="attachment-full" alt="icon-certified-batch" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-certified-batch.png')}} 104w, {{asset('assets/frontend/images/05/icon-certified-batch-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 104px) 100vw, 104px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Diverse <strong>Portfolio</strong></h4>
                                                                <p>Our range of clients encompasses the big &amp; the small.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner vc_custom_1493876043193">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                                            data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-icon-box type14 '>
                                                            <div class="icon-wrapper"><img width="104" height="104"
                                                                                            src="{{asset('assets/frontend/images/05/icon-zoom-eye.png')}}"
                                                                                            class="attachment-full" alt="icon-zoom-eye" loading="lazy"
                                                                                            srcset="{{asset('assets/frontend/images/05/icon-zoom-eye.png')}} 104w, {{asset('assets/frontend/images/05/icon-zoom-eye-100x100.png')}} 100w"
                                                                                            sizes="(max-width: 104px) 100vw, 104px" /></div>
                                                            <div class="icon-content">
                                                                <h4>Pioneers<strong>in Consultancy </strong></h4>
                                                                <p>We pioneered the agency concept by launching our own unit.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4c2998" data-id="6107b9a4c2998" data-height="80"
                                            data-height-mobile="16" data-height-tab="80" data-height-tab-portrait="80"
                                            data-height-mobile-landscape="16" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <p>BUILDING RELATIONSHIPS</p>
                                                        </div>
                                                        <h2 style="text-align: left" class="vc_custom_heading vcr_heading-right"><strong>How you
                                                                can save time &amp; money in your Business</strong></h2>
                                                        <p style="text-align: left" class="vc_custom_heading vcr_heading-right">You don’t have
                                                            to reinvent the wheels, right? When you entrust the task of launching a strategy for
                                                            your latest marketing campaign, you would get many time tested modules that have
                                                            delivered consistently across different industries.</p>
                                                    </div>
                                                    <div class="ult-spacer spacer-6107b9a4c33f1" data-id="6107b9a4c33f1" data-height="25"
                                                            data-height-mobile="25" data-height-tab="25" data-height-tab-portrait=""
                                                            data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn"
                                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect=""><a href='#' target='_self' title=''
                                                                                                            class='dt-sc-button   medium   filled  default'> Consult Now </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="dt-sc-three-fifth rs_col-sm-12 wpb_column vc_column_container vc_col-sm-8 vc_col-lg-8 vc_col-md-12">
                                            <div class="vc_column-inner vc_custom_1494982255920">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                                                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_center   dt-sc-outer-frame-border dt-sc-skin-highlight-border">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="600"
                                                                                                                                height="370"
                                                                                                                                src="{{asset('assets/frontend/images/05/about-agency.jpg')}}"
                                                                                                                                class="vc_single_image-img attachment-full" alt="about-agency" loading="lazy"
                                                                                                                                srcset="{{asset('assets/frontend/images/05/about-agency.jpg')}} 600w, {{asset('assets/frontend/images/05/about-agency-300x185.jpg')}} 300w"
                                                                                                                                sizes="(max-width: 600px) 100vw, 600px" /></div>
                                                            </figure>
                                                        </div>
                                                    </div>
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
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                                            data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-team  simple-rounded aligncenter'>
                                                            <div class='dt-sc-team-thumb'><img width="300" height="300"
                                                                                                src="{{asset('assets/frontend/images/11/testimonial4.jpg')}}"
                                                                                                class="attachment-full" alt="testimonial4" loading="lazy"
                                                                                                srcset="{{asset('assets/frontend/images/11/testimonial4.jpg')}} 300w, {{asset('assets/frontend/images/11/testimonial4-100x100.jpg')}} 100w, {{asset('assets/frontend/images/11/testimonial4-150x150.jpg')}} 150w"
                                                                                                sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                            <div class='dt-sc-team-details'>
                                                                <h4>Jeff Norton</h4>
                                                                <h5>Business Analyst</h5>
                                                                <p>Mirum est notare quam littera gothica, quam putamus.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                                            data-animation-delay="1.6" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-team  simple-rounded aligncenter'>
                                                            <div class='dt-sc-team-thumb'><img width="300" height="300"
                                                                                                src="{{asset('assets/frontend/images/11/testimonial8.jpg')}}"
                                                                                                class="attachment-full" alt="testimonial8" loading="lazy"
                                                                                                srcset="{{asset('assets/frontend/images/11/testimonial8.jpg')}} 300w, {{asset('assets/frontend/images/11/testimonial8-100x100.jpg')}} 100w, {{asset('assets/frontend/images/11/testimonial8-150x150.jpg')}} 150w"
                                                                                                sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                            <div class='dt-sc-team-details'>
                                                                <h4>Anita Allen</h4>
                                                                <h5>Marketing Research</h5>
                                                                <p>Mirum est notare quam littera gothica, quam putamus.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                                            data-animation-delay="1.9" data-animation-duration="1" data-animation-iteration="1"
                                                            style="opacity:0;" data-opacity_start_effect="">
                                                        <div class='dt-sc-team  simple-rounded aligncenter'>
                                                            <div class='dt-sc-team-thumb'><img width="300" height="300"
                                                                                                src="{{asset('assets/frontend/images/11/testimonial6.jpg')}}"
                                                                                                class="attachment-full" alt="testimonial6" loading="lazy"
                                                                                                srcset="{{asset('assets/frontend/images/11/testimonial6.jpg')}} 300w, {{asset('assets/frontend/images/11/testimonial6-100x100.jpg')}} 100w, {{asset('assets/frontend/images/11/testimonial6-150x150.jpg')}} 150w"
                                                                                                sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                            <div class='dt-sc-team-details'>
                                                                <h4>Sonja Summers</h4>
                                                                <h5>Digital Analyst</h5>
                                                                <p>Mirum est notare quam littera gothica, quam putamus.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4c55cc" data-id="6107b9a4c55cc" data-height="135"
                                            data-height-mobile="90" data-height-tab="120" data-height-tab-portrait="120"
                                            data-height-mobile-landscape="90" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-6107b9a4c5905" data-id="6107b9a4c5905" data-height="75"
                                            data-height-mobile="45" data-height-tab="60" data-height-tab-portrait="60"
                                            data-height-mobile-landscape="45" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='dt-sc-counter type1  aligncenter'>
                                            <div class='dt-sc-couter-icon-holder'>
                                                <div class='icon-wrapper'><span><img width="60" height="60"
                                                                                        src="{{asset('assets/frontend/images/05/icon-phone.png')}}"
                                                                                        class="attachment-full" alt="icon-phone" loading="lazy" /></span></div>
                                                <div class='dt-sc-counter-number' data-value='500' data-append='M'>500</div>
                                            </div>
                                            <h4></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='dt-sc-counter type1  aligncenter'>
                                            <div class='dt-sc-couter-icon-holder'>
                                                <div class='icon-wrapper'><span><img width="60" height="60"
                                                                                        src="{{asset('assets/frontend/images/05/icon-cost-n-time.png')}}"
                                                                                        class="attachment-full" alt="icon-cost-n-time" loading="lazy" /></span></div>
                                                <div class='dt-sc-counter-number' data-value='19000'>19000</div>
                                            </div>
                                            <h4></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='dt-sc-counter type1  aligncenter'>
                                            <div class='dt-sc-couter-icon-holder'>
                                                <div class='icon-wrapper'><span><img width="60" height="60"
                                                                                        src="{{asset('assets/frontend/images/05/icon-stats-bar-chart.png')}}"
                                                                                        class="attachment-full" alt="icon-stats-bar-chart" loading="lazy" /></span></div>
                                                <div class='dt-sc-counter-number' data-value='2331'>2331</div>
                                            </div>
                                            <h4></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                            data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='dt-sc-counter type1  aligncenter last'>
                                            <div class='dt-sc-couter-icon-holder'>
                                                <div class='icon-wrapper'><span><img width="60" height="60"
                                                                                        src="{{asset('assets/frontend/images/05/icon-cup-coffee.png')}}"
                                                                                        class="attachment-full" alt="icon-cup-coffee" loading="lazy" /></span></div>
                                                <div class='dt-sc-counter-number' data-value='112260'>112260</div>
                                            </div>
                                            <h4></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-6107b9a4c6de9" data-id="6107b9a4c6de9" data-height="90"
                                            data-height-mobile="60" data-height-tab="75" data-height-tab-portrait="75"
                                            data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                            class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                                            data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='aligncenter  dt-sc-subtitle-text'>THE BEST PICKS</div>
                                        <div class="ult-spacer spacer-6107b9a4c71e8" data-id="6107b9a4c71e8" data-height="10"
                                                data-height-mobile="10" data-height-tab="10" data-height-tab-portrait=""
                                                data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                        <h2 style="font-size: 60px;line-height: 50px;text-align: center" class="vc_custom_heading">
                                            <strong>Our Gallery</strong></h2>
                                    </div>
                                    <div class="ult-spacer spacer-6107b9a4c730b" data-id="6107b9a4c730b" data-height="60"
                                            data-height-mobile="35" data-height-tab="45" data-height-tab-portrait="45"
                                            data-height-mobile-landscape="35" style="clear:both;display:block;"></div>
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                                            data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class="dt-sc-portfolio-container no-space">
                                            <div id="dt_portfolios-7425" class="type1 no-space portfolio column dt-sc-one-fourth first">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery3.jpg')}}"
                                                        alt="Cras tristique purus non lacus" title="Cras tristique purus non lacus" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Cras tristique purus non lacus"
                                                                                href="https://dtagency.wpengine.com/dt_portfolios/cras-tristique-purus-non-lacus/"><span
                                                                    class="icon icon-linked"> </span></a><a title="Cras tristique purus non lacus"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery3.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Cras tristique purus non lacus"
                                                                    href="https://dtagency.wpengine.com/dt_portfolios/cras-tristique-purus-non-lacus/">Cras
                                                                    tristique purus non lacus</a></h2>
                                                            <p class='categories'><a
                                                                    href="https://dtagency.wpengine.com/portfolio_entries/animation/"
                                                                    rel="tag">Animation</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div id="dt_portfolios-7424" class="type1 no-space portfolio column dt-sc-one-fourth">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery8.jpg')}}"
                                                        alt="Duis fermentum felis" title="Duis fermentum felis" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Duis fermentum felis"
                                                                                href="https://dtagency.wpengine.com/dt_portfolios/duis-fermentum-felis/"><span
                                                                    class="icon icon-linked"> </span></a><a title="Duis fermentum felis"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery8.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Duis fermentum felis"
                                                                    href="https://dtagency.wpengine.com/dt_portfolios/duis-fermentum-felis/">Duis
                                                                    fermentum felis</a></h2>
                                                            <p class='categories'><a
                                                                    href="https://dtagency.wpengine.com/portfolio_entries/web-design/" rel="tag">Web
                                                                    Design</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div id="dt_portfolios-7423" class="type1 no-space portfolio column dt-sc-one-fourth">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery6-1.jpg')}}"
                                                        alt="Quisque id maximus leo" title="Quisque id maximus leo" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Quisque id maximus leo"
                                                                                href="dt_portfolios/quisque-id-maximus-leo/index.html"><span
                                                                    class="icon icon-linked"> </span></a><a title="Quisque id maximus leo"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery6-1.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Quisque id maximus leo"
                                                                    href="dt_portfolios/quisque-id-maximus-leo/index.html">Quisque id maximus leo</a>
                                                            </h2>
                                                            <p class='categories'><a href="portfolio_entries/development/index.html"
                                                                                        rel="tag">Development</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div id="dt_portfolios-7422" class="type1 no-space portfolio column dt-sc-one-fourth">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery1.jpg')}}"
                                                        alt="Proin venenatis felis" title="Proin venenatis felis" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Proin venenatis felis"
                                                                                href="https://dtagency.wpengine.com/dt_portfolios/proin-venenatis-felis/"><span
                                                                    class="icon icon-linked"> </span></a><a title="Proin venenatis felis"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery1.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Proin venenatis felis"
                                                                    href="https://dtagency.wpengine.com/dt_portfolios/proin-venenatis-felis/">Proin
                                                                    venenatis felis</a></h2>
                                                            <p class='categories'><a
                                                                    href="https://dtagency.wpengine.com/portfolio_entries/photography/"
                                                                    rel="tag">Photography</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div id="dt_portfolios-7421" class="type1 no-space portfolio column dt-sc-one-fourth first">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery2.jpg')}}"
                                                        alt="Aenean vitae enim rhoncus" title="Aenean vitae enim rhoncus" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Aenean vitae enim rhoncus"
                                                                                href="https://dtagency.wpengine.com/dt_portfolios/aenean-vitae-enim-rhoncus/"><span
                                                                    class="icon icon-linked"> </span></a><a title="Aenean vitae enim rhoncus"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery2.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Aenean vitae enim rhoncus"
                                                                    href="https://dtagency.wpengine.com/dt_portfolios/aenean-vitae-enim-rhoncus/">Aenean
                                                                    vitae enim rhoncus</a></h2>
                                                            <p class='categories'><a
                                                                    href="https://dtagency.wpengine.com/portfolio_entries/web-design/" rel="tag">Web
                                                                    Design</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div id="dt_portfolios-7420" class="type1 no-space portfolio column dt-sc-one-fourth">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery7.jpg')}}"
                                                        alt="Donec in maximus augue" title="Donec in maximus augue" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Donec in maximus augue"
                                                                                href="https://dtagency.wpengine.com/dt_portfolios/donec-in-maximus-augue/"><span
                                                                    class="icon icon-linked"> </span></a><a title="Donec in maximus augue"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery7.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Donec in maximus augue"
                                                                    href="https://dtagency.wpengine.com/dt_portfolios/donec-in-maximus-augue/">Donec
                                                                    in maximus augue</a></h2>
                                                            <p class='categories'><a
                                                                    href="https://dtagency.wpengine.com/portfolio_entries/photography/"
                                                                    rel="tag">Photography</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div id="dt_portfolios-7419" class="type1 no-space portfolio column dt-sc-one-fourth">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery10.jpg')}}"
                                                        alt="Vestibulum pellentesque metus" title="Vestibulum pellentesque metus" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Vestibulum pellentesque metus"
                                                                                href="https://dtagency.wpengine.com/dt_portfolios/vestibulum-pellentesque-metus/"><span
                                                                    class="icon icon-linked"> </span></a><a title="Vestibulum pellentesque metus"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery10.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Vestibulum pellentesque metus"
                                                                    href="https://dtagency.wpengine.com/dt_portfolios/vestibulum-pellentesque-metus/">Vestibulum
                                                                    pellentesque metus</a></h2>
                                                            <p class='categories'><a
                                                                    href="https://dtagency.wpengine.com/portfolio_entries/logo-design/" rel="tag">Logo
                                                                    Design</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div id="dt_portfolios-7418" class="type1 no-space portfolio column dt-sc-one-fourth">
                                                <figure> <img
                                                        src="{{asset('assets/frontend/images/01/gallery5.jpg')}}"
                                                        alt="Nulla rhoncus efficitur augue" title="Nulla rhoncus efficitur augue" />
                                                    <div class="image-overlay">
                                                        <div class="links"><a title="Nulla rhoncus efficitur augue"
                                                                                href="https://dtagency.wpengine.com/dt_portfolios/nulla-rhoncus-efficitur-augue/"><span
                                                                    class="icon icon-linked"> </span></a><a title="Nulla rhoncus efficitur augue"
                                                                                                            data-gal="prettyPhoto[gallery]"
                                                                                                            href="{{asset('assets/frontend/images/01/gallery5.jpg')}}">
                                                                <span class="icon icon-search"> </span> </a></div>
                                                        <div class="image-overlay-details">
                                                            <h2><a title="Nulla rhoncus efficitur augue"
                                                                    href="https://dtagency.wpengine.com/dt_portfolios/nulla-rhoncus-efficitur-augue/">Nulla
                                                                    rhoncus efficitur augue</a></h2>
                                                            <p class='categories'><a href="portfolio_entries/development/index.html"
                                                                                        rel="tag">Development</a></p>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
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
                                            <div class='column dt-sc-one-third first'>
                                                <article id="post-1"
                                                            class="blog-entry  format-standard post-1 post type-post status-publish has-post-thumbnail hentry category-news category-technical tag-blog">
                                                    <div class="entry-thumb"> <a href="planning-on-the-strategy-from-figures/index.html"><img
                                                                width="1170" height="795"
                                                                src="{{asset('assets/frontend/images/06/blog1.jpg')}}"
                                                                class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                                                srcset="{{asset('assets/frontend/images/06/blog1.jpg')}} 1170w, {{asset('assets/frontend/images/06/blog1-600x408.jpg')}} 600w, {{asset('assets/frontend/images/06/blog1-300x204.jpg')}} 300w, {{asset('assets/frontend/images/06/blog1-768x522.jpg.jpg')}} 768w, {{asset('assets/frontend/images/06/blog1-1024x696.jpg')}} 1024w"
                                                                sizes="(max-width: 1170px) 100vw, 1170px" /></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="#"></a> </div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="date ">Posted on 18 Jun 2015 </div>
                                                            <div class="comments ">/ <a class="comments"
                                                                                        href="planning-on-the-strategy-from-figures/index.html#respond"> <i
                                                                        class="pe-icon pe-chat"></i> 0 Comments</a> </div>
                                                            <div class="author "> / <i class="pe-icon pe-user"> </i> <a
                                                                    href="author/admin/index.html">admin</a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="planning-on-the-strategy-from-figures/index.html">Planning on the
                                                                    strategy from figures</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc
                                                                lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id...</p>
                                                        </div>
                                                        <div class="entry-meta-data hidden">
                                                            <p class="tags hidden"> <i class="pe-icon pe-ticket"> </i><a
                                                                    href="https://dtagency.wpengine.com/tag/blog/">blog</a></p>
                                                            <p class="category hidden"> <i class="pe-icon pe-network"> </i><a
                                                                    href="https://dtagency.wpengine.com/category/news/">News</a>, <a
                                                                    href="https://dtagency.wpengine.com/category/technical/">Technical</a></p>
                                                        </div><a href="planning-on-the-strategy-from-figures/index.html" target='_self' title=''
                                                                    class='dt-sc-button   small   filled  dt-sc-readmore-link'> Continue Reading </a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class='column dt-sc-one-third'>
                                                <article id="post-87"
                                                            class="blog-entry  format-standard post-87 post type-post status-publish format-gallery has-post-thumbnail hentry category-uncategorized tag-business post_format-post-format-gallery">
                                                    <div class="entry-thumb"> <a
                                                            href="https://dtagency.wpengine.com/brainstorming-is-our-routine-methodology/"><img
                                                                width="1170" height="795"
                                                                src="{{asset('assets/frontend/images/06/blog2-1.jpg')}}"
                                                                class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                                                srcset="{{asset('assets/frontend/images/06/blog2-1.jpg')}} 1170w, {{asset('assets/frontend/images/06/blog2-1-600x408.jpg')}} 600w, {{asset('assets/frontend/images/06/blog2-1-300x204.jpg')}} 300w, {{asset('assets/frontend/images/06/blog2-1.jpg')}}-768x522.jpg 768w, {{asset('assets/frontend/images/06/blog2-1-1024x696.jpg')}} 1024w"
                                                                sizes="(max-width: 1170px) 100vw, 1170px" /></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="#"></a> </div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="date ">Posted on 18 Jun 2015 </div>
                                                            <div class="comments ">/ <a class="comments"
                                                                                        href="https://dtagency.wpengine.com/brainstorming-is-our-routine-methodology//#respond">
                                                                    <i class="pe-icon pe-chat"></i> 0 Comments</a> </div>
                                                            <div class="author "> / <i class="pe-icon pe-user"> </i> <a
                                                                    href="author/admin/index.html">admin</a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a
                                                                    href="https://dtagency.wpengine.com/brainstorming-is-our-routine-methodology/">Brainstorming
                                                                    is our routine methodology</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc
                                                                lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id...</p>
                                                        </div>
                                                        <div class="entry-meta-data hidden">
                                                            <p class="tags hidden"> <i class="pe-icon pe-ticket"> </i><a
                                                                    href="https://dtagency.wpengine.com/tag/business/">Business</a></p>
                                                            <p class="category hidden"> <i class="pe-icon pe-network"> </i><a
                                                                    href="https://dtagency.wpengine.com/category/uncategorized/">Uncategorized</a></p>
                                                        </div><a href="https://dtagency.wpengine.com/brainstorming-is-our-routine-methodology/"
                                                                    target='_self' title='' class='dt-sc-button   small   filled  dt-sc-readmore-link'>
                                                            Continue Reading </a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class='column dt-sc-one-third'>
                                                <article id="post-7508"
                                                            class="blog-entry  format-standard post-7508 post type-post status-publish format-quote has-post-thumbnail hentry category-magazine category-news tag-creative post_format-post-format-quote">
                                                    <div class="entry-thumb"> <a href="tete-a-tete-over-a-coffee-with-clients/index.html"><img
                                                                width="1170" height="795"
                                                                src="{{asset('assets/frontend/images/06/blog3.jpg')}}"
                                                                class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                                                srcset="{{asset('assets/frontend/images/06/blog3.jpg')}} 1170w, {{asset('assets/frontend/images/06/blog3-600x408.jpg')}} 600w, {{asset('assets/frontend/images/06/blog3-300x204.jpg')}} 300w, {{asset('assets/frontend/images/06/blog3-768x522.jpg')}} 768w, {{asset('assets/frontend/images/06/blog3-1024x696.jpg')}} 1024w"
                                                                sizes="(max-width: 1170px) 100vw, 1170px" /></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="#"></a> </div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="date ">Posted on 18 Jun 2015 </div>
                                                            <div class="comments ">/ <a class="comments"
                                                                                        href="tete-a-tete-over-a-coffee-with-clients/index.html#respond"> <i
                                                                        class="pe-icon pe-chat"></i> 0 Comments</a> </div>
                                                            <div class="author "> / <i class="pe-icon pe-user"> </i> <a
                                                                    href="author/admin/index.html">admin</a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="tete-a-tete-over-a-coffee-with-clients/index.html">Tête-à-tête over a
                                                                    coffee with clients</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc
                                                                lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id...</p>
                                                        </div>
                                                        <div class="entry-meta-data hidden">
                                                            <p class="tags hidden"> <i class="pe-icon pe-ticket"> </i><a
                                                                    href="tag/creative/index.html">Creative</a></p>
                                                            <p class="category hidden"> <i class="pe-icon pe-network"> </i><a
                                                                    href="category/magazine/index.html">magazine</a>, <a
                                                                    href="https://dtagency.wpengine.com/category/news/">News</a></p>
                                                        </div><a href="tete-a-tete-over-a-coffee-with-clients/index.html" target='_self'
                                                                    title='' class='dt-sc-button   small   filled  dt-sc-readmore-link'> Continue Reading
                                                        </a>
                                                    </div>
                                                </article>
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
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                            class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='dt-sc-icon-box type12 '>
                                            <div class="icon-wrapper"><img width="160" height="160"
                                                                            src="{{asset('assets/frontend/images/05/icon-question.png')}}"
                                                                            class="attachment-full" alt="icon-question" loading="lazy"
                                                                            srcset="{{asset('assets/frontend/images/05/icon-question.png')}} 160w, {{asset('assets/frontend/images/05/icon-question-100x100.png')}} 100w, {{asset('assets/frontend/images/05/icon-question-150x150.png')}} 150w"
                                                                            sizes="(max-width: 160px) 100vw, 160px" /></div>
                                            <div class="icon-content">
                                                <h4>Get your <strong>Clarifications</strong></h4>
                                                <p>Using our 24/7 knowledgebase, forum &amp; comments get clarified.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='dt-sc-icon-box type12 '>
                                            <div class="icon-wrapper"><img width="160" height="160"
                                                                            src="{{asset('assets/frontend/images/05/icon-support.png')}}"
                                                                            class="attachment-full" alt="icon-support" loading="lazy"
                                                                            srcset="{{asset('assets/frontend/images/05/icon-support.png')}} 160w, {{asset('assets/frontend/images/05/icon-support-100x100.png')}} 100w, {{asset('assets/frontend/images/05/icon-support-150x150.png')}} 150w"
                                                                            sizes="(max-width: 160px) 100vw, 160px" /></div>
                                            <div class="icon-content">
                                                <h4>Legendary <strong> Support </strong></h4>
                                                <p>Get your doubts cleared using our email support, phone or knowledgebase.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                                            style="opacity:0;" data-opacity_start_effect="">
                                        <div class='dt-sc-icon-box type12 '>
                                            <div class="icon-wrapper"><img width="160" height="160"
                                                                            src="{{asset('assets/frontend/images/05/icon-package.png')}}"
                                                                            class="attachment-full" alt="icon-package" loading="lazy"
                                                                            srcset="{{asset('assets/frontend/images/05/icon-package.png')}} 160w, {{asset('assets/frontend/images/05/icon-package-100x100.png.png')}} 100w, {{asset('assets/frontend/images/05/icon-package-150x150.png')}} 150w"
                                                                            sizes="(max-width: 160px) 100vw, 160px" /></div>
                                            <div class="icon-content">
                                                <h4>Maintenance <strong> Package </strong></h4>
                                                <p>We offer annual maintenance packages for different needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection