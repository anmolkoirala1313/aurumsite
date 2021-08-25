<section id="secondary-right" class="secondary-sidebar secondary-has-right-sidebar">
            <aside id="categories-3" class="widget widget_categories active-category">
              <h3 class="widgettitle">Categories</h3>

              @if(!empty($bcategories))

                <ul>
                    @foreach(@$bcategories as $bcategory)
                        <li class="cat-item cat-item-166 @if(Request::url() === url('/blog/categories/'.$bcategory->slug)) current @endif"><a href="{{url('/blog/categories/'.$bcategory->slug)}}">{{ucwords(@$bcategory->name)}}</a>
                        </li>
                    @endforeach
                    
                
                </ul>
              @endif

            </aside>
            <aside id="recent-posts-3" class="widget widget_recent_entries">
              <h3 class="widgettitle">Recent Posts</h3>

              @if(!empty($latestPosts))

              <ul>
                @foreach($latestPosts as $index => $latest)

                  <li>
                    <a href="{{route('blog.single',$latest->slug)}}">{{ucwords($latest->title)}}</a>
                  </li>
                @endforeach
              
              </ul>
              @endif

            </aside>
           
          </section>