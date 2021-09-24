@extends('frontend.layouts.master')
@section('title') Contact Us | Aurum @endsection
@section('styles')
<style>
  .sent-success{
    color: green;
  }

  .error-sent{
    color: red;
  }
</style>
@endsection
@section('content')

      <!-- **Main** -->
      <div id="main">
        <section class="main-title-section-wrapper aligncenter" style="">
          <div class="container">
            <div class="main-title-section">
              <h1>Contact Us</h1>
            </div>
            <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><span
                class="current">Contact Us</span></div>
          </div>
        </section> <!-- ** Container ** -->
        <div class="container">
          <section id="primary" class="content-full-width">
            <!-- #post-4547 -->
            <div id="post-4547" class="post-4547 page type-page status-publish hentry">
              <div class="vc_row wpb_row vc_row-fluid">
                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="ult-spacer spacer-6107b81992335" data-id="6107b81992335" data-height="15"
                        data-height-mobile="15" data-height-tab="15" data-height-tab-portrait=""
                        data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                      <div id="responsive_map-1593890404" class="responsive-map" style="height:450px;width:100%;">
                    
                      <iframe src="{{@$setting_data->google_map}}" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                     
                    </div>
                  </div>
                </div>
                <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class='dt-sc-small-separator '></div>
                      <h2>We're always eager to hear from you!</h2>
                      <div class='dt-sc-hr-invisible-xsmall '> </div>
                        <form action="{{route('contact.store')}}" class="mxw-751 px-md-5 needs-validation" method="post"  id="contact">
                          @csrf
                          @if ($message = Session::get('success'))
                              <div class="alert alert-success alert-block">
                                  <strong class="sent-success">{{ $message }}</strong>
                              </div>
                          @endif
                          @if ($message = Session::get('error'))
                              <div class="alert alert-danger alert-block">
                                  <strong class="error-sent">{{ $message }}</strong>
                              </div>
                          @endif
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" placeholder="Full Name *"
                                          class="form-control form-control-lg border-0" name="fullname" required oninvalid="this.setCustomValidity('Enter you full name')" oninput="this.setCustomValidity('')">
                                     
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input placeholder="Your Email *" class="form-control form-control-lg border-0"
                                          type="email" name="email" required oninvalid="this.setCustomValidity('Enter your email')" oninput="this.setCustomValidity('')">
                                     
                                  </div>
                              </div>
                          </div>
                          <div class="row">

                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" placeholder="Your Subject *" name="subject"
                                          class="form-control form-control-lg border-0" required oninvalid="this.setCustomValidity('Enter a subject')" oninput="this.setCustomValidity('')">
                                     
                                  </div>
                              </div>
                             
                          </div>

                          <div class="form-group mb-6">
                              <textarea class="form-control border-0" placeholder="Your Message Here *.." name="message" required oninvalid="this.setCustomValidity('Type a message')" oninput="this.setCustomValidity('')"
                                  rows="3"></textarea>
                          </div>
                          <div class="text-center">
                              <input type="submit" class="btn btn-lg btn-primary px-9" value="Send Message"/>
                          </div>
                      </form>
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
@section('js')
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
 
@endsection