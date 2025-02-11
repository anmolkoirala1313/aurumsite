<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title>@yield('title') - @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Aurum @endif </title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php if(@$setting_data->favicon){?>{{asset('/images/uploads/settings/'.@$setting_data->favicon)}}<?php }?>">

    <meta name='robots' content='max-image-preview:large' />

    <script type="text/javascript">
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "{{asset('assets/frontend/js/wp-emoji-release.min.js?ver=5.7.2')}}" } };
        !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode; p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        .fa, .far, .fas {
            font-family: 'FontAwesome' !important;
        }
        span.page-link.seperate-pagination-link {
            background-color: unset;
            color: #571F9C;
        }

        .active-category ul li.current:before {
            content: "\f192";
        }

        .active-category li.current a {
            color: #571F9C !important;
        }
    </style>

    <link rel='stylesheet' id='wp-block-library-css'
          href="{{asset('assets/frontend/css/style.min.css?ver=5.7.2')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-theme-css'
          href="{{asset('assets/frontend/css/theme.min.css?ver=5.7.2')}}"
          type='text/css' media='all' />

    <link rel='stylesheet' id='dt-animation-css-css'
          href="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/css/animations.css?ver=5.7.2')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='dt-slick-css-css'
          href="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/css/slick.css?ver=5.7.2')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='dt-sc-css-css'
          href="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/css/shortcodes.css?ver=5.7.2')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href="{{asset('assets/frontend/plugins/revslider/public/assets/css/rs.css?ver=6.3.3')}}"
          type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>


    <link rel='stylesheet' id='js_composer_front-css'
          href="{{asset('assets/frontend/plugins/js_composer/assets/css/js_composer.min.css?ver=6.5.0')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-Defaults-css'
          href="{{asset('assets/frontend/smile_fonts/Defaults/Defaults.css?ver=3.19.8')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='ultimate-style-css'
          href="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-css/style.min.css?ver=3.19.8')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='ultimate-animate-css'
            href="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-css/animate.min.css?ver=3.19.8')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-css'
          href="{{asset('assets/frontend/css/themes/style.css?ver=2.7')}}"
          type='text/css' media='all' />


    <link rel='stylesheet' id='agencies-inline-css'
         href="{{asset('assets/frontend/inlinecss/agencies.css')}}"
          type='text/css' media='all' />

    <link rel='stylesheet' id='agencies-base-css'
         href="{{asset('assets/frontend/css/themes/css/base.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-grid-css'
        href="{{asset('assets/frontend/css/themes/css/grid.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-widget-css'
        href="{{asset('assets/frontend/css/themes/css/widget.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-layout-css'
        href="{{asset('assets/frontend/css/themes/css/layout.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-blog-css'
        href="{{asset('assets/frontend/css/themes/css/blog.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-portfolio-css'
        href="{{asset('assets/frontend/css/themes/css/portfolio.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-contact-css'
        href="{{asset('assets/frontend/css/themes/css/contact.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-custom-class-css'
        href="{{asset('assets/frontend/css/themes/css/custom-class.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='prettyphoto-css'
         href="{{asset('assets/frontend/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=6.5.0')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='custom-font-awesome-css'
        href="{{asset('assets/frontend/css/themes/css/font-awesome.min.css?ver=2.7')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='pe-icon-7-stroke-css'
            href="{{asset('assets/frontend/css/themes/css/pe-icon-7-stroke.css')}}"
           type='text/css' media='all' />
    <link rel='stylesheet' id='stroke-gap-icons-style-css'
        href="{{asset('assets/frontend/css/themes/css/stroke-gap-icons-style.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='icon-moon-css'
            href="{{asset('assets/frontend/css/themes/css/icon-moon.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='material-design-iconic-css'
        href="{{asset('assets/frontend/css/themes/css/material-design-iconic-font.min.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-popup-css-css'
         href="{{asset('assets/frontend/css/themes/framework/js/magnific/magnific-popup.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-gutenberg-css'
        href="{{asset('assets/frontend/css/themes/css/gutenberg.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-loader-css'
         href="{{asset('assets/frontend/css/themes/css/loaders.css')}}"
          type='text/css' media='all' />

    <link rel='stylesheet' id='agencies-wpsl-dtstyle-css'
        href="{{asset('assets/frontend/css/themes/css/store-locator.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-customevent-css'
        href="{{asset('assets/frontend/css/themes/tribe-events/custom.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-responsive-css'
        href="{{asset('assets/frontend/css/themes/css/responsive.css')}}"
          type='text/css' media='all' />
    <link rel='stylesheet' id='agencies-custom-css'
        href="{{asset('assets/frontend/css/themes/css/custom.css')}}"
          type='text/css' media='all' />

    <link rel='stylesheet'
        href="{{asset('assets/frontend/inlinecss/style.css')}}"
          type='text/css' media='all' />

    <link rel='stylesheet' id='kirki-inline-styles'
        href="{{asset('assets/frontend/inlinecss/kirki.css')}}"
          type='text/css' media='all' />

    <link rel='stylesheet'
        href="{{asset('assets/frontend/inlinecss/vs_custom.css')}}"
          type='text/css' media='all' />


    <script type='text/javascript'
            src="{{asset('assets/frontend/js/jquery/jquery.min.js?ver=3.5.1')}}"
            id='jquery-core-js'></script>
    <script type='text/javascript'
            src="{{asset('assets/frontend/js/jquery/jquery-migrate.min.js?ver=3.3.2')}}"
            id='jquery-migrate-js'></script>
    <script type='text/javascript'
            src="{{asset('assets/frontend/plugins/revslider/public/assets/js/rbtools.min.js')}}"
            id='tp-tools-js'></script>
    <script type='text/javascript'
            src="{{asset('assets/frontend/plugins/revslider/public/assets/js/rs6.min.js')}}"
            id='revmin-js'></script>


    <script type='text/javascript'
            src="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-js/ultimate-params.min.js')}}"
            id='ultimate-vc-params-js'></script>
    <script type='text/javascript'
            src="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-js/custom.min.js')}}"
            id='ultimate-custom-js'></script>
    <script type='text/javascript'
            src="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-js/jquery-appear.min.js')}}"
            id='ultimate-appear-js'></script>
    <script type='text/javascript'
            src="{{asset('assets/frontend/css/themes/framework/js/modernizr.custom.js')}}"
            id='modernizr-custom-js'></script>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{{@$setting_data->google_analytics}}');
</script>

    <script type="text/javascript">function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>


    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>

    @yield('styles')

</head>

<body
    class="home {{request()->is('/') ? 'no-breadcrumb' : ''}} {{request()->is('blog') ? 'page-template-tpl-blog' : ''}}  page-template-default page page-id-5 wp-embed-responsive theme-agencies  tribe-no-js layout-wide fullwidth-header default sticky-header standard-header header-with-topbar woo-type1 page-with-slider  wpb-js-composer js-comp-ver-6.5.0 vc_responsive">

    @if(@$code=="404")
    @else
    <div class="loader">
        <div class="loader-inner">
            <div class="dt-loading-text-with-icon"> - Loading- </div>
        </div>
    </div>
    @endif
<!-- **Wrapper** -->
<div class="wrapper">
    <div class="inner-wrapper">

        <!-- **Header Wrapper** -->
        <div id="header-wrapper" class="">
            <!-- **Header** -->
            <header id="header">

                <!-- **Main Header Wrapper** -->
                <div id="main-header-wrapper" class="main-header-wrapper">

                    <div class="container">

                        <!-- **Main Header** -->
                        <div class="main-header">
                            <div id="logo"> <a href="/" rel="home">
                                    <img class="normal_logo"
                                         src="<?php if(@$setting_data->logo){?>{{asset('/images/uploads/settings/'.@$setting_data->logo)}}<?php }?>"
                                         alt="logo" title="logo" />
                                    <img class="darkbg_logo"
                                        src="<?php if(@$setting_data->logo_white){?>{{asset('/images/uploads/settings/'.@$setting_data->logo_white)}}<?php }?>"
                                         alt="logo" title="logo" />
                                </a></div>
                            <div id="menu-wrapper" class="menu-wrapper ">
                                <div class="dt-menu-toggle" id="dt-menu-toggle">
                                    Menu <span class="dt-menu-toggle-icon"></span>
                                </div>

                                <nav id="main-menu" class="menu-main-menu-container">
                                    <ul class="menu">

                                        @if(!empty($top_nav_data))
                                            @foreach($top_nav_data as $nav)
                                            @if(!empty($nav->children[0]))
                                            <li id="menu-item-176{{@$loop->index}}" class="{{request()->is(@$nav->slug)  ? 'current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor ' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0 menu-links-with-arrow single menu-item-simple-parent ">
                                                <a href="#">@if(@$nav->name == NULL) {{ucwords(@$nav->title)}} @else {{ucwords(@$nav->name)}} @endif </a>

                                                <ul class="sub-menu ">
                                                    
                                                    @foreach($nav->children[0] as $childNav)
                                                    @if($childNav->type == 'custom')
                                                        <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$childNav->slug) ? 'current-menu-item page_team current_page_item' : ''}} menu-item-depth-1">
                                                            <a href="/{{@$childNav->slug}}" @if(@$childNav->target !== NULL) target="_blank" @endif >@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a></li>
                                                    @elseif($childNav->type == 'post')
                                                    <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$childNav->slug) ? 'current-menu-item page_team current_page_item' : ''}}  menu-item-depth-1">
                                                            <a href="{{url('blog')}}/{{@$childNav->slug}}" >@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a></li>
                                                    @else
                                                    <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$childNav->slug) ? 'current-menu-item page_team current_page_item' : ''}} menu-item-depth-1">
                                                            <a href="{{url('/')}}/{{@$childNav->slug}}" >@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a></li>
                                                    @endif
                                                    @endforeach
                                                
                                                </ul>
                                                <a class="dt-menu-expand" href="javascript:void(0)">+</a>
                                            </li>

                                            @else
                                                @if($nav->type == 'custom')
                                                <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is(@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-links-with-arrow single menu-item-simple-parent ">
                                                    <a href="{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @elseif($nav->type == 'post')
                                                <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is('blog/'.@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-links-with-arrow single menu-item-simple-parent ">
                                                    <a href="{{url('blog')}}/{{$nav->slug}}">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @else
                                                <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is(@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-links-with-arrow single menu-item-simple-parent ">
                                                    <a href="{{url('/')}}/{{$nav->slug}}">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>	
                                                @endif
                                            @endif	
                                            @endforeach
                                        @endif
                                   

                                    </ul>
                                </nav>

                                <div class="menu-icons-wrapper">
                                    <div class="search"> <a href="javascript:void(0)" id="overlay-search-type1"
                                                            class="dt-search-icon type1"> <span class="fa fa-search"> </span> </a>
                                        <div class="top-menu-search-container">
                                            <!-- **Searchform** -->
                                            <form method="get" id="searchform" action="{{route('searchBlog')}}">
                                                <input id="s" name="s" type="text" value="Enter Keyword" class="text_input"
                                                       onblur="if(this.value==''){this.value='Enter Keyword';}"
                                                       onfocus="if(this.value =='Enter Keyword') {this.value=''; }" />
                                                <a href="javascript:void(0)" class="dt-search-icon"> <span class="fa fa-close"> </span> </a>
                                                <input name="submit" type="submit" />
                                            </form><!-- **Searchform - End** -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- **Main Header** -->

                @yield('slider')



            </header><!-- **Header - End** -->
        </div><!-- **Header Wrapper - End** -->
