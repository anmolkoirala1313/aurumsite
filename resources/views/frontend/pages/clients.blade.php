@extends('frontend.layouts.master')
@section('title') Clients @endsection
@section('styles')
<style>
    .type8 ul.dt-sc-tabs-horizontal-frame {
        text-align: center;
    }

    .type8 ul.dt-sc-tabs-horizontal-frame > li {
        margin-right: 0;
        display: inline-block;
        float: none;
        margin: 0;
    }
</style>
@endsection
@section('content')

   <!-- **Main** -->
   <div id="main">
        <section class="main-title-section-wrapper aligncenter" style="">
          <div class="container">
            <div class="main-title-section">
              <h1>Clients</h1>
            </div>
            <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><span
                class="current">Clients</span></div>
          </div>
        </section> <!-- ** Container ** -->
        <div class="container">
          <section id="primary" class="content-full-width">
            <!-- #post-5755 -->
            <div id="post-5755" class="post-5755 page type-page status-publish hentry">
            
              <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  vc_custom_1471930876552 aligncenter">
                        <div class="wpb_wrapper">
                          <div class='dt-sc-small-separator '></div>
                          <h2>All Clients</h2>
                         
                        </div>
                      </div>
                      <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                        <div class='dt-sc-tabs-horizontal-frame-container type8'>
                          <ul class='dt-sc-tabs-horizontal-frame'>
                            @foreach(@$client_groups as $country => $client_group)
                                @foreach(@$countries as $key => $value)
                                      @if($key== $country)
                                          <li><a href="javascript:void(0);">{{ucwords($value)}}</a></li>
                                      @endif
                                  @endforeach

                            @endforeach
                          </ul>

                          @foreach(@$client_groups as $country => $client_group)
                          <div  class='dt-sc-tabs-horizontal-frame-content'>
                          
                            <div id="{{$loop->iteration}}" class="dt-sc-portfolio-container no-space">
                              @foreach ($client_group as $client)
                                <div  class="type7 no-space portfolio column dt-sc-one-sixth @if(@$loop->index == 0 || @$loop->index == 6 || @$loop->index == 12  || @$loop->index == 18 || @$loop->index == 24 ) first @endif">
                                  <figure>
                                    <img src="<?php if(@$client->image){?>{{asset('/images/uploads/clients/'.@$client->image)}}<?php }?>"
                                      alt="client" />
                                    <div class="image-overlay">
                                      <div class="links">
                                        <a title="client"
                                          href="{{@$client->link}}" @if(@$client->link) target="_blank"  @endif> <span
                                            class="icon icon-linked"> </span> </a>
                                        
                                      </div>
                                    
                                    </div>
                                  </figure>
                                </div>
                                  
                              @endforeach
                              </div>
                          </div>
                            @endforeach
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_row-full-width vc_clearfix"></div>
              <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class='dt-sc-hr-invisible-medium '> </div>
                    </div>
                  </div>
                </div>
              </div>
             

             
            </div><!-- #post-5755 -->
          </section><!-- **Primary - End** -->
        </div><!-- **Container - End** -->

    </div><!-- **Main - End** -->

@endsection

