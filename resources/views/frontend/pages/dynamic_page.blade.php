@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('styles')
<style>
    .list_section_1{
        background-color: aliceblue;
    }

    .list_section_2{
        background-color: aliceblue;
    }

    .vc_custom_1504784267864 {
    background-color: aliceblue !important;
    }
</style>
@endsection
@section('content')

 <!-- **Main** -->
 <div id="main">
    <section class="main-title-section-wrapper aligncenter" style="">
        <div class="container">
        <div class="main-title-section">
            <h1>{{ucwords(@$page_detail->name)}}</h1>
        </div>
        <div class="breadcrumb"><a href="">Home</a><span class="fa default"></span><span
            class="current">{{ucwords(@$page_detail->name)}}</span></div>
        </div>
    </section> <!-- ** Container ** -->
    <div class="container">
        <section id="primary" class="content-full-width">
        <!-- #post-1578 -->
        <div id="post-1637" class="post-1637 page type-page status-publish hentry">
           
        <!-- Basic elements -->

            @if(@$basic_elements !== "")
                <div class="vc_row wpb_row vc_row-fluid dt-sc-custom-bg left-bg-diamond-shape right-bg-circle-shape">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-spacer spacer-6107b9a4c2cfe" data-id="6107b9a4c2cfe" data-height="80" data-height-mobile="16" data-height-tab="80" data-height-tab-portrait="80" data-height-mobile-landscape="16" style="clear:both;display:block;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid rs_column_gap_override vc_custom_1494987902509 vc_column-gap-35">
                                    <div class="dt-sc-two-fifth rs_col-sm-12 wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-12">
                                        <div class="vc_column-inner vc_custom_1494982242608">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInRight" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
                                                    <div class='alignleft  dt-sc-subtitle-text'>
                                                        <p>{{ucwords(@$basic_elements->heading)}}</p>
                                                    </div>
                                                    <h2 style="text-align: left" class="vc_custom_heading vcr_heading-right"><strong>{{ucfirst(@$basic_elements->subheading)}}</strong></h2>
                                                    <p style="text-align: left" class="vc_custom_heading vcr_heading-right"> {!! @$basic_elements->description !!} </p>
                                                </div>
                                                <div class="ult-spacer spacer-6107b9a4c33f1" data-id="6107b9a4c33f1" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                                @if(@$basic_elements->button)
                                                    <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect=""><a href="{{@$basic_elements->button_link}}" target='_self' title='' class='dt-sc-button   medium   filled  default'> {{ucwords(@$basic_elements->button)}} </a></div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dt-sc-three-fifth rs_col-sm-12 wpb_column vc_column_container vc_col-sm-8 vc_col-lg-8 vc_col-md-12">
                                        <div class="vc_column-inner vc_custom_1494982255920">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown" data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
                                                    <div class="wpb_single_image wpb_content_element vc_align_center   dt-sc-outer-frame-border dt-sc-skin-highlight-border">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="600" height="370" src="{{asset('/images/uploads/section_elements/basic_section/'.$basic_elements->image) }}" class="vc_single_image-img attachment-full" alt="basic-image"
                                                                    loading="lazy" srcset="{{asset('/images/uploads/section_elements/basic_section/'.$basic_elements->image) }} 600w, {{asset('/images/uploads/section_elements/basic_section/'.$basic_elements->image) }} 300w"
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
                                <div class="ult-spacer spacer-6107b9a4c3ee7" data-id="6107b9a4c3ee7" data-height="135" data-height-mobile="90" data-height-tab="105" data-height-tab-portrait="105" data-height-mobile-landscape="90" style="clear:both;display:block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        <!-- End basic elements -->

     
        <!-- Call to action -->

            @if(@$call_elements !== "")
                <div data-vc-full-width="true" data-vc-full-width-init="false"
                        class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504784267864 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="ult-spacer spacer-6107b753c18ff" data-id="6107b753c18ff" data-height="45"
                            data-height-mobile="35" data-height-tab="45" data-height-tab-portrait="45"
                            data-height-mobile-landscape="35" style="clear:both;display:block;"></div>
                            <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                            data-animation-delay="1" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <h3 style="font-size: 42px;text-align: center" class="vc_custom_heading"><strong>{{ucwords(@$call_elements->heading)}}</strong>
                                </h3>
                            </div>
                            <div class="ult-spacer spacer-6107b753c1b07" data-id="6107b753c1b07" data-height="15"
                            data-height-mobile="15" data-height-tab="15" data-height-tab-portrait=""
                            data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                            <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown"
                            data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <p style="font-size: 14px;text-align: center" class="vc_custom_heading">{{ucfirst(@$call_elements->description)}}</p>
                            </div>
                            <div class="ult-spacer spacer-6107b753c1ce7" data-id="6107b753c1ce7" data-height="15"
                            data-height-mobile="15" data-height-tab="15" data-height-tab-portrait=""
                            data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                        </div>
                        </div>
                    </div>
                    <div class="aligncenter wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            @if(@$call_elements->button)
                            <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn"
                            data-animation-delay="1.6" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect=""><a href="{{@$call_elements->button_link}}" target='_self' title=''
                                class='dt-sc-button   medium icon-right with-icon  filled  default'> {{ucwords(@$call_elements->button)}} <span
                                class='fa fa-chevron-right'> </span></a></div>
                            @endif
                            <div class="ult-spacer spacer-6107b753c1f6b" data-id="6107b753c1f6b" data-height="60"
                            data-height-mobile="35" data-height-tab="45" data-height-tab-portrait="45"
                            data-height-mobile-landscape="35" style="clear:both;display:block;"></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
            @endif
        <!-- End Call to action -->

   <!-- Tab section 1-->

        @if(@$tab1_elements !== "")

            <div class='dt-sc-hr-invisible-small '> </div>
            <div class='dt-sc-hr-invisible-xsmall '> </div>
            <div class='dt-sc-tabs-horizontal-frame-container type4'>
                <ul class='dt-sc-tabs-horizontal-frame'>
                    <li><a href="javascript:void(0);"><span class='pe-icon pe-flag'></span>Mission</a></li>
                    <li><a href="javascript:void(0);"><span class='pe-icon pe-look'></span>Vision</a></li>
                    <li><a href="javascript:void(0);"><span class='pe-icon pe-target'></span>Goal</a></li>
                </ul>

                @foreach(@$tab1_elements as $tab_element)

                    @if($loop->index == 0)
                        <div class='dt-sc-tabs-horizontal-frame-content'>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  vc_custom_1451041863628">
                                                <div class="wpb_wrapper">
                                                    <div class='alignleft  dt-sc-subtitle-text'>
                                                        <p>{{ucwords(@$tab_element->list_header)}}</p>
                                                    </div>
                                                    {!! @$tab_element->list_description !!}
                                                </div>
                                            </div>
                                            <div class='dt-sc-hr-invisible-xsmall '> </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            @if(@$tab_element->list_image)
                                            <img width="370" height="370" src="{{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}}" class="alignnone attachment-full" alt="" loading="lazy"
                                                srcset="{{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 370w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 300w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 100w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 150w"
                                                sizes="(max-width: 370px) 100vw, 370px" />
                                            @else
                                            <img width="370" height="370" src="{{asset('/images/uploads/mission.png')}}" class="alignnone attachment-full" alt="" loading="lazy"
                                                srcset="{{asset('/images/uploads/mission.png')}} 370w, {{asset('/images/uploads/mission.png')}} 300w, {{asset('/images/uploads/mission.png')}} 100w, {{asset('/images/uploads/mission.png')}} 150w"
                                                sizes="(max-width: 370px) 100vw, 370px" />
                                            @endif
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($loop->index == 1)
                    <div class='dt-sc-tabs-horizontal-frame-content'>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1451041863628">
                                            <div class="wpb_wrapper">
                                                    <div class='alignleft  dt-sc-subtitle-text'>
                                                        <p>{{ucwords(@$tab_element->list_header)}}</p>
                                                    </div>
                                                    {!! @$tab_element->list_description !!}

                                            </div>
                                        </div>
                                        <div class='dt-sc-hr-invisible-xsmall '> </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        @if(@$tab_element->list_image)
                                            <img width="370" height="370" src="{{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}}" class="alignnone attachment-full" alt="" loading="lazy"
                                                srcset="{{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 370w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 300w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 100w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 150w"
                                                sizes="(max-width: 370px) 100vw, 370px" />
                                            @else
                                        <img width="370" height="370" src="{{asset('/images/uploads/vision.png')}}" class="alignnone attachment-full" alt="" loading="lazy"
                                            srcset="{{asset('/images/uploads/vision.png')}} 370w, {{asset('/images/uploads/vision.png')}} 300w, {{asset('/images/uploads/vision.png')}} 100w, {{asset('/images/uploads/vision.png')}} 150w"
                                            sizes="(max-width: 370px) 100vw, 370px" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($loop->index == 2)
                        <div class='dt-sc-tabs-horizontal-frame-content'>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  vc_custom_1451041863628">
                                                <div class="wpb_wrapper">
                                                    <div class='alignleft  dt-sc-subtitle-text'>
                                                        <p>{{ucwords(@$tab_element->list_header)}}</p>
                                                    </div>
                                                    {!! @$tab_element->list_description !!}
                                                </div>
                                            </div>
                                            <div class='dt-sc-hr-invisible-xsmall '> </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            @if(@$tab_element->list_image)
                                            <img width="370" height="370" src="{{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}}" class="alignnone attachment-full" alt="" loading="lazy"
                                                srcset="{{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 370w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 300w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 100w, {{asset('/images/uploads/section_elements/tab_1/'.@$tab_element->list_image)}} 150w"
                                                sizes="(max-width: 370px) 100vw, 370px" />
                                            @else
                                            <img width="370" height="370" src="{{asset('/images/uploads/goal.png')}}" class="alignnone attachment-full" alt="" loading="lazy"
                                                srcset="{{asset('/images/uploads/goal.png')}} 370w, {{asset('/images/uploads/goal.png')}} 300w, {{asset('/images/uploads/goal.png')}} 100w, {{asset('/images/uploads/goal.png')}} 150w"
                                                sizes="(max-width: 370px) 100vw, 370px" />
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class='dt-sc-hr-invisible-small '> </div>
            <div class='dt-sc-hr-invisible-xsmall '> </div>

        @endif
        <!-- End Tab section 1 -->

        <!-- Background image section -->

        @if(@$bgimage_elements !== "")
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg vcr_float_right wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504790526766 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="ult-spacer spacer-6107b781d8d68" data-id="6107b781d8d68" data-height="100" data-height-mobile="60" data-height-tab="80" data-height-tab-portrait="80" data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInRight" data-animation-delay="1.0" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
                                <p style="font-size: 22px;text-align: left;font-family:Alegreya;font-weight:400;font-style:italic" class="vc_custom_heading">{{ucwords(@$bgimage_elements->heading)}}</p>
                                <h2 style="font-size: 42px;text-align: left" class="vc_custom_heading vc_custom_1495797869428"><strong>{{ucfirst(@$bgimage_elements->subheading)}}</strong></h2>
                                <div class='dt-sc-small-separator black curved-line white'></div>
                                <p style="text-align: left" class="vc_custom_heading vc_custom_1495797837957">{!! @$bgimage_elements->description !!} </p>
                            </div>
                            <div class="ult-spacer spacer-6107b781d93a9" data-id="6107b781d93a9" data-height="35" data-height-mobile="35" data-height-tab="35" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                            
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="ult-spacer spacer-6107b781d99a2" data-id="6107b781d99a2" data-height="100" data-height-mobile="60" data-height-tab="80" data-height-tab-portrait="80" data-height-mobile-landscape="60" style="clear:both;display:block;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
            <div class="upb_bg_img" data-ultimate-bg="url({{asset('/images/uploads/section_elements/bgimage_section/'.@$bgimage_elements->image)}})" data-image-id="id^1625|url^{{asset('/images/uploads/section_elements/bgimage_section/'.@$bgimage_elements->image)}}|caption^null|alt^content-bgimage1|title^content-bgimage1|description^null"
            data-ultimate-bg-style="vcpb-default" data-bg-img-repeat="no-repeat" data-bg-img-size="cover" data-bg-img-position="" data-parallx_sense="30" data-bg-override="0" data-bg_img_attach="fixed" data-upb-overlay-color="rgba(0,0,0,0.5)"
            data-upb-bg-animation="" data-fadeout="" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true"
            data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="6.5.0" data-is_old_vc="" data-theme-support="" data-overlay="true" data-overlay-color="rgba(0,0,0,0.5)" data-overlay-pattern="" data-overlay-pattern-opacity="0.8"
            data-overlay-pattern-size="" data-overlay-pattern-attachment="scroll"></div>
        @endif
        <!-- End Background image section -->


        <!-- Tab section 2 -->
            @if(@$tab2_elements !== "")
            <div class='dt-sc-hr-invisible-small '> </div>
            <div class='dt-sc-hr-invisible-xsmall '> </div>

            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class='dt-sc-hr-invisible-xsmall '> </div>
                            <div class='dt-sc-tabs-vertical-frame-container type2'>
                                <ul class='dt-sc-tabs-vertical-frame'>
                                    @foreach(@$tab2_elements as $tab_element)
                                    <li><a href="javascript:void(0);">{{ucwords($tab_element->heading)}}</a></li>
                                    @endforeach
                                </ul>

                                @foreach(@$tab2_elements as $tab_element)
                                <div class='dt-sc-tabs-vertical-frame-content'>
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1451042676199">
                                        <div class="wpb_wrapper">
                                            <h3><strong>{{ucwords($tab_element->subheading)}}</strong></h3>
                                            <p>{!! @$tab_element->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class='dt-sc-hr-invisible-small '> </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
        <!-- End Tab section 2 -->

        <!-- List section 1 -->
        @if(@$list1_elements !== "")
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="list_section_1 vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element  vc_custom_1451372730817 aligncenter">
                            </div>
                            <div class='dt-sc-hr-invisible-small '> </div>
                            <div class='dt-sc-hr-invisible-small '> </div>
                            <div class='dt-sc-hr-invisible-xsmall '> </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                @foreach(@$list1_elements as $list_element)
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class='dt-sc-image-caption  '>
                                                    <div class='dt-sc-image-wrapper'><img width="400" height="280" src="{{asset('/images/uploads/section_elements/list_1/'.@$list_element->list_image)}}" class="attachment-full" alt="" loading="lazy" srcset="{{asset('/images/uploads/section_elements/list_1/'.@$list_element->list_image)}} 400w, {{asset('/images/uploads/section_elements/list_1/'.@$list_element->list_image)}} 300w"
                                                            sizes="(max-width: 400px) 100vw, 400px" />
                                                    </div>
                                                    <div class='dt-sc-image-content'>
                                                        <div class='dt-sc-image-title'>
                                                            <h3 class="text-capitalize">{{$list_element->list_header}}</h3>
                                                            <h6 class="text-capitalize">{{$list_element->subheading}}</h6>
                                                        </div>
                                                        <p>{!! @$list_element->list_description !!}</p>
                                                        @if(@$list_element->button)
                                                            <p><a href="{{@$list_element->button_link}}" target='_self' title='' class='dt-sc-button   medium   filled  '> {{ucwords(@$list_element->button)}} </a></p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class='dt-sc-hr-invisible-xlarge '> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>

        @endif
        <!-- End List section 1 -->


        <!-- Process section  -->
        @if(@$process_elements !== "")
        <div class="vc_row wpb_row vc_row-fluid dt-sc-process-with-caption wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="ult-spacer spacer-6107b781d1ff0" data-id="6107b781d1ff0" data-height="65" data-height-mobile="35" data-height-tab="45" data-height-tab-portrait="45" data-height-mobile-landscape="35" style="clear:both;display:block;"></div>
                        @foreach($process_elements as $process_element)
                        @if($loop->odd)
                        <div class='dt-sc-image-caption type7 '>
                            <div class='dt-sc-image-wrapper'><img width="600" height="330" src="{{asset('/images/uploads/section_elements/process_list/'.@$process_element->list_image)}}" class="attachment-full" alt="" loading="lazy" srcset="{{asset('/images/uploads/section_elements/process_list/'.@$process_element->list_image)}} 600w, {{asset('/images/uploads/section_elements/process_list/'.@$process_element->list_image)}} 300w"
                                    sizes="(max-width: 600px) 100vw, 600px" /></div>
                            <div class='dt-sc-image-content'>
                                <div class='dt-sc-image-title'>
                                    <h3>{{ucwords(@$process_element->list_header)}}</h3>
                                    <h6>{{ucwords(@$process_element->subheading)}}</h6>
                                </div>
                                <p>{!! @$process_element->list_description !!}</p>
                            </div>
                        </div>
                        <div class="ult-spacer spacer-6107b781d2917" data-id="6107b781d2917" data-height="120" data-height-mobile="45" data-height-tab="60" data-height-tab-portrait="60" data-height-mobile-landscape="45" style="clear:both;display:block;"></div>
                       @endif

                       @if($loop->even)
                        <div class='dt-sc-image-caption type7 left-content'>
                            <div class='dt-sc-image-wrapper'><img width="600" height="330" src="{{asset('/images/uploads/section_elements/process_list/'.@$process_element->list_image)}}" class="attachment-full" alt="" loading="lazy" srcset="{{asset('/images/uploads/section_elements/process_list/'.@$process_element->list_image)}} 600w, {{asset('/images/uploads/section_elements/process_list/'.@$process_element->list_image)}} 300w"
                                    sizes="(max-width: 600px) 100vw, 600px" /></div>
                            <div class='dt-sc-image-content'>
                                <div class='dt-sc-image-title'>
                                    <h3>{{ucwords(@$process_element->list_header)}}</h3>
                                    <h6>{{ucwords(@$process_element->subheading)}}</h6>
                                </div>
                                <p>{!! @$process_element->list_description !!}</p>
                            </div>
                        </div>
                        <div class="ult-spacer spacer-6107b781d2f88" data-id="6107b781d2f88" data-height="120" data-height-mobile="45" data-height-tab="60" data-height-tab-portrait="60" data-height-mobile-landscape="45" style="clear:both;display:block;"></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- End Process section -->


        <!-- List section 2 -->
        @if(@$list2_elements !== "")
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="list_section_2 vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element  vc_custom_1451382036908 aligncenter">
                        </div>
                        <div class='dt-sc-hr-invisible-small '> </div>
                        <div class='dt-sc-hr-invisible-small '> </div>
                        <div class='dt-sc-hr-invisible-xsmall '> </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            @foreach(@$list2_elements as $list_element)

                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class='dt-sc-image-caption type9 '>
                                                <div class='dt-sc-image-wrapper'><img width="400" height="280" src="{{asset('/images/uploads/section_elements/list_2/'.@$list_element->list_image)}}" class="attachment-full" alt="" loading="lazy" srcset="{{asset('/images/uploads/section_elements/list_2/'.@$list_element->list_image)}} 400w, {{asset('/images/uploads/section_elements/list_2/'.@$list_element->list_image)}} 300w"
                                                        sizes="(max-width: 400px) 100vw, 400px" />
                                                    <div class="dt-sc-image-overlay">
                                                        <p>{!! @$list_element->list_description !!}</p>
                                                        @if(@$list_element->button)
                                                            <p><a href="{{@$list_element->button_link}}" target='_self' title='' class='dt-sc-button   small   filled  '> {{ucwords(@$list_element->button)}} </a></p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class='dt-sc-image-content'>
                                                    <div class='dt-sc-image-title'>
                                                        <h3>{{ucwords(@$list_element->list_header)}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        <div class='dt-sc-hr-invisible-medium '> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>

        @endif
        <!-- End List section 2 -->

   

        </div><!-- #post-1578 -->
        </section><!-- **Primary - End** -->
    </div><!-- **Container - End** -->

</div>
<!-- **Main - End** -->




@endsection