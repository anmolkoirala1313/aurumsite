@extends('frontend.layouts.master')
@section('title') Contact Us | Aurum @endsection
@section('content')

      <!-- **Main** -->
      <div id="main">
        <section class="main-title-section-wrapper aligncenter" style="">
          <div class="container">
            <div class="main-title-section">
              <h1>Contact Info</h1>
            </div>
            <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><span
                class="current">Contact Info</span></div>
          </div>
        </section> <!-- ** Container ** -->
        <div class="container">
          <section id="primary" class="content-full-width">
            <!-- #post-4547 -->
            <div id="post-4547" class="post-4547 page type-page status-publish hentry">
              <div class="vc_row wpb_row vc_row-fluid">
                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-8">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="ult-spacer spacer-6107b81992335" data-id="6107b81992335" data-height="15"
                        data-height-mobile="15" data-height-tab="15" data-height-tab-portrait=""
                        data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                      <div id="responsive_map-1593890404" class="responsive-map" style="height:450px;width:100%;"></div>
                      <script type="text/javascript">
                        jQuery(document).ready(function ($) {

                          var mapdiv = jQuery("#responsive_map-1593890404");
                          mapdiv.gMap({
                            maptype: google.maps.MapTypeId.ROADMAP,
                            zoom: 13,
                            latitude: null,
                            longitude: null,
                            streetViewControl: false,
                            mapTypeControl: false,
                            zoomControl: false,
                            scaleControl: false,
                            scrollwheel: false,
                            draggable: true,
                            styles: [{ "stylers": [{ "featureType": "all" }] }],
                            markers: [{ flat: true, key: "1", latitude: "-27.5134074", longitude: "153.0049029", popup: false, html: "Yeronga QLD 4104, Australia", icon: { image: "https://dtagency.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/images/markers/pin.png" }, }],
                            panControl: true,
                            overviewMapControl: true,
                          });
                        });
                      </script>
                    </div>
                  </div>
                </div>
                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-4">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class='dt-sc-small-separator '></div>
                      <h2>TYPE 1</h2>
                      <div class='dt-sc-hr-invisible-xsmall '> </div>
                      <div class='dt-sc-contact-info  '><span class='pe-icon pe-call'> </span><strong>Toll
                          Free:</strong> 1224 2234 LAW <br> <strong>Fax:</strong> 1224 2235 225</div>
                      <div class='dt-sc-single-line-dashed-separator '></div>
                      <div class='dt-sc-contact-info  '><span class='pe-icon pe-mail'> </span><a title="" href="#">
                          support@livecon.com </a> <br> <a title="" href="#"> admin@livecon.com </a></div>
                      <div class='dt-sc-single-line-dashed-separator '></div>
                      <div class='dt-sc-contact-info  '><span class='pe-icon pe-map-marker'> </span>625 @ David Blake
                        Road, <br> Adventureland, LA 14536, USA</div>
                      <div class='dt-sc-single-line-dashed-separator '></div>
                      <div class='dt-sc-contact-info  '><span class='icon icon-timer'> </span>Mon – Sat 9 am to 8 pm
                         <br> Sun – 10 am to 3 pm</div>
                    </div>
                  </div>
                </div>

                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="vc_empty_space" style="height: 120px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                  </div>
                </div>
              </div>
           
            </div><!-- #post-4547 -->
          </section><!-- **Primary - End** -->
        </div><!-- **Container - End** -->

      </div><!-- **Main - End** -->

@endsection