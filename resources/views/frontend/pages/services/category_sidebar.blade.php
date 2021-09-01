<section id="secondary-right" class="secondary-sidebar secondary-has-right-sidebar">
    <aside id="categories-3" class="widget widget_categories active-category">
        <h3 class="widgettitle">All Categories</h3>

        @if(!empty($service_categories))

        <ul>
            @foreach(@$service_categories as $service_category)
                <li class="cat-item cat-item-166 @if(Request::url() === url('/services/'.$service_category->slug)) current @endif"><a href="{{url('/services/'.$service_category->slug)}}">{{ucwords(@$service_category->name)}}</a>
                </li>
            @endforeach
            
        
        </ul>
        @endif

    </aside>
   

</section>