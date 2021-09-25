@extends('frontend.layouts.master')
@section('title') Blog @endsection
@section('content')

    <!-- **Main** -->
    <div id="main">
        <section class="main-title-section-wrapper aligncenter" style="">
          <div class="container">
            <div class="main-title-section">
              <h1>Blogs</h1>
            </div>
            <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span>
                <span class="current">Blog </span></div>
          </div>
        </section> <!-- ** Container ** -->
        <div class="container">
          <section id="primary" class="page-with-sidebar with-right-sidebar">
            <!-- #post-7064 -->
            <div id="post-7064" class="post-7064 page type-page status-publish hentry">
            </div><!-- #post-7064 -->

            <div class="dt-sc-clear"></div>

            <!-- Blog Template -->
            <div class='tpl-blog-holder apply-isotope'>
             
            
              @if(!empty($allPosts))
                    @foreach($allPosts as $post)
                     
                      <div class="column dt-sc-one-half with-sidebar @if($loop->odd)<?php echo 'first'; ?>@endif">
                        <article id="post-1"
                          class="blog-entry entry-date-left format-standard post-1 post type-post status-publish has-post-thumbnail hentry category-news category-technical tag-blog">
                          <!-- Featured Image -->
                          <div class="entry-thumb">
                            <a href="{{route('blog.single',$post->slug)}}"
                              title="{{ucwords($post->title)}}"><img width="1170" height="795"
                                src="<?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?>"
                                class="attachment-full size-full wp-post-image" alt="{{$post->slug}}" loading="lazy"
                                srcset="<?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 1170w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 600w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 300w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 768w, <?php if(@$post->image){?>{{asset('/images/uploads/blog/'.@$post->image)}}<?php }?> 1024w"
                                sizes="(max-width: 1170px) 100vw, 1170px" /></a>
                            <div class="entry-format hidden">
                              <a class="ico-format" href="#"></a>
                            </div>
                          </div> <!-- Featured Image -->

                          <!-- Content -->

                          <div class="entry-details">


                            <div class="entry-date ">

                              <!-- date -->
                              <div class="">
                              {{date('j ',strtotime(@$post->created_at))}}<span>{{date('M',strtotime(@$post->created_at))}}</span>
                              </div><!-- date -->

                            
                            </div><!-- .entry-date -->


                            <div class="entry-title">
                              <h4><a href="{{route('blog.single',$post->slug)}}"
                                  title="{{ucwords($post->title)}}">{{ucwords($post->title)}}</a></h4>
                            </div>

                            <div class="entry-body">
                              <p>{{ucfirst(Str::limit($post->excerpt, 85))}}...</p>
                            </div>

                            <!--  Category &  -->
                            <div class="entry-meta-data ">
                              
                              <p class=" category"><i class="pe-icon pe-network"> </i> <a
                                  href="{{route('blog.category',$post->category->slug)}}" rel="category tag"> {{ucwords(@$post->category->name)}}</a></p>

                            </div><!-- Category &-->

                            <!-- Read More Button -->
                            <a href="{{route('blog.single',$post->slug)}}" target='_self' title=''
                              class='dt-sc-button   small icon-right with-icon  filled  type1'> Read More <span
                                class='fa fa-long-arrow-right'> </span></a><!-- Read More Button -->

                          </div><!-- .entry-details -->

                          <!-- Content -->
                        </article>
                      </div>

                    @endforeach
              @endif
         
            </div>
            <!-- **Pagination** -->
            {{ $allPosts->links('vendor.pagination.default') }}

         <!-- **Pagination** -->
            <!-- Blog Template Ends -->
          </section><!-- **Primary - End** -->
          <!-- Secondary Right -->

          @include('frontend.pages.blogs.sidebar')            
      
        </div><!-- **Container - End** -->

    </div><!-- **Main - End** -->

@endsection