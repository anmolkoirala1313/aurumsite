                    <!-- **Footer** -->
                    <footer id="footer" class="dt-sc-custom-bg left-bg-diamond-shape right-bg-circle-shape">

                        <div class="footer-widgets dt-sc-dark-bg">
                            <div class="container">
                                <div class='column dt-sc-one-third first'>
                                    <aside id="text-4" class="widget widget_text">
                                        <div class="textwidget">
                                        <img
                                                src="<?php if(@$setting_data->logo_white){?>{{asset('/images/uploads/settings/'.@$setting_data->logo_white)}}<?php } ?>"                                                alt="light-logo" style="width: 50%;">
                                            <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div>
                                            <p>@if(!empty(@$setting_data->website_description)) {{@$setting_data->website_description}} @endif </p>
                                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                           
                                            <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>
                                            <div class='alignleft  dt-sc-subtitle-text'>STAY CONNECTED</div>
                                            <ul class='dt-sc-sociable dt-simple-narrow'>
                                                <li class="facebook"><a target="_blank" href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" rel="noopener"></a></li>
                                                <li class="instagram"><a target="_blank"href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" rel="noopener"></a></li>
                                                <li class="youtube"><a target="_blank" href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" rel="noopener"></a></li>
                                                <li class="whatsapp"><a target="_blank" href="@if(!empty(@$setting_data->whatsapp)) {{@$setting_data->whatsapp}} @endif" rel="noopener"></a></li>
                                                <a class="viber-anchor" target="_blank" href="@if(!empty(@$setting_data->viber)) {{@$setting_data->viber}} @endif" rel="noopener"><i class="fab fa-viber"></i> </a>
                                           
                                            </ul>


                                        </div>
                                    </aside>
                                </div>
                                <div class='column dt-sc-one-third '>
                                    <aside id="text-3" class="widget widget_text">
                                        <h3 class="widgettitle">Useful Links</h3>
                                        <div class="textwidget">
                                            <ul class="split-list no-border no-bullet hvr-push-to-right">
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Home </a> </li>
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Company News </a> </li>
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> About us </a> </li>
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Projects </a> </li>
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Careers </a> </li>
                                            </ul>
                                            <ul class="split-list no-border no-bullet hvr-push-to-right">
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Contact us </a> </li>
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Legal Support </a> </li>
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Give us feedback </a> </li>
                                                <li> <a title="" href="#"> <i class="fa fa-angle-right"></i> Talk to us </a> </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class='column dt-sc-one-third '>
                                    <aside id="text-5" class="widget widget_text">
                                        <h3 class="widgettitle">Contact Us</h3>
                                        <div class="textwidget">
                                            <div class='dt-sc-contact-info  '><span class='fa fa-home'> </span>@if(!empty(@$setting_data->address)) {{@$setting_data->address}} @else Kathmandu, Nepal @endif </div>
                                            <div class='dt-sc-hr-invisible-xsmall '> </div>
                                            <div class='dt-sc-contact-info  '><span class='fa fa-phone'> </span>@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +977 1234567 @endif<br>@if(!empty(@$setting_data->mobile)) {{@$setting_data->mobile}} @else +977 1234567 @endif
                                            </div>
                                            <div class='dt-sc-hr-invisible-xsmall '> </div>
                                            <div class='dt-sc-contact-info  '><span class='fa fa-envelope'> </span><a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif">
                                            @if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a></div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>

                        <div class="footer-copyright dt-sc-dark-bg">
                            <div class="container">
                                <div class="column dt-sc-one-half first ">&copy; 2021, @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @endif  | Developed By: <a target="_blank" rel="noopener" href="https://www.canosoft.com.np/">Canosoft Techonology</a> |
                                    <ul id="menu-footer-menu" class="menu-links ">
                                        <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39"><a
                                                href="#">Privacy Policy</a></li>
                                        <li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a
                                                href="#">Terms &#038; Conditions</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </footer><!-- **Footer - End** -->
                </div><!-- **Inner Wrapper - End** -->
            </div><!-- **Wrapper - End** -->

                <script>
                    (function (body) {
                    'use strict';
                    body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
                    })(document.body);
                </script>
                <script
                type='text/javascript'> /* <![CDATA[ */var tribe_l10n_datatables = { "aria": { "sort_ascending": ": activate to sort column ascending", "sort_descending": ": activate to sort column descending" }, "length_menu": "Show _MENU_ entries", "empty_table": "No data available in table", "info": "Showing _START_ to _END_ of _TOTAL_ entries", "info_empty": "Showing 0 to 0 of 0 entries", "info_filtered": "(filtered from _MAX_ total entries)", "zero_records": "No matching records found", "search": "Search:", "all_selected_text": "All items on this page were selected. ", "select_all_link": "Select all pages", "clear_selection": "Clear Selection.", "pagination": { "all": "All", "next": "Next", "previous": "Previous" }, "select": { "rows": { "0": "", "_": ": Selected %d rows", "1": ": Selected 1 row" } }, "datepicker": { "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "nextText": "Next", "prevText": "Prev", "currentText": "Today", "closeText": "Done" } };/* ]]> */</script>
                <script type="text/html" id="wpb-modifications"></script>
                
                <link rel="stylesheet" property="stylesheet" id="rs-icon-set-fa-icon-css"
                href="{{asset('assets/frontend/plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css')}}"
                type="text/css" media="all" />
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:400%2C600%7CMontserrat:700%2C400" rel="stylesheet"
                property="stylesheet" media="all" type="text/css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

                <script type="text/javascript">
                if (typeof revslider_showDoubleJqueryError === "undefined") {
                function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
                }
                }
                </script>
                <link rel='stylesheet' id='vc_google_fonts_montserratregular700-css'
                href='http://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;ver=5.7.2' type='text/css'
                media='all' />
                <link rel='stylesheet' id='ult-background-style-css'
                href="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-css/background-style.min.css')}}"
                type='text/css' media='all' />
                <link rel='stylesheet' id='vc_animate-css-css'
                href="{{asset('assets/frontend/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css')}}"
                type='text/css' media='all' />


                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min.js')}}"
                id='dt-sc-tabs-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified.js')}}"
                id='dt-sc-tiptip-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/jquery.inview.js')}}"
                id='dt-sc-inview-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/jquery.animateNumber.min.js')}}"
                id='dt-sc-animatenum-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart.js')}}"
                id='dt-sc-donutchart-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/slick.min.js')}}"
                id='dt-sc-slick-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/jquery.toggle.click.js')}}"
                id='dt-sc-toogle-click-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/designthemes-core-features/shortcodes/js/shortcodes.js')}}"
                id='dt-sc-script-js'></script>

                <script type='text/javascript' id='ui-totop-js-extra'>
                /* <![CDATA[ */
                var toTopCustom = { "text": "Top" };
                /* ]]> */
                </script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.ui.totop.min.js')}}"
                id='ui-totop-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.caroufredsel.js')}}"
                id='jquery-caroufredsel-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.debouncedresize.js')}}"
                id='jquery-debouncedresize-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.prettyphoto.js')}}"
                id='jquery-prettyphoto-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.touchswipe.js')}}"
                id='jquery-touchswipe-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.parallax.js')}}"
                id='jquery-parallax-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.downcount.js')}}"
                id='jquery-downcount-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.nicescroll.js')}}"
                id='jquery-nicescroll-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.bxslider.js')}}"
                id='jquery-bxslider-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.fitvids.js')}}"
                id='jquery-fitvids-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.sticky.js')}}"
                id='jquery-sticky-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.simple-sidebar.js')}}"
                id='jquery-simple-sidebar-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.classie.js')}}"
                id='jquery-classie-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.placeholder.js')}}"
                id='jquery-placeholder-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/jquery.visualNav.min.js')}}"
                id='visualnav-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js')}}"
                id='isotope-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/magnific/jquery.magnific-popup.min.js')}}"
                id='agencies-popup-js-js'></script>
                <script type='text/javascript' id='pace-js-extra'>
                /* <![CDATA[ */
                var paceOptions = { "restartOnRequestAfter": "false", "restartOnPushState": "false" };
                /* ]]> */
                </script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/pace.min.js')}}"
                id='pace-js'></script>
                <script type='text/javascript' id='agencies-jqcustom-js-extra'>
    /* <![CDATA[ */
    var dttheme_urls = {  "url": "http:\/\/127.0.0.1:8000","stickynav": "enable", "stickyele": ".main-header-wrapper", "isRTL": "", "loadingbar": "enable", "advOptions": "Show Advanced Options" };
/* ]]> */
  </script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/css/themes/framework/js/custom.js')}}"
                id='agencies-jqcustom-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/js/wp-embed.min.js')}}"
                id='wp-embed-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/js_composer/assets/js/dist/js_composer_front.min.js')}}"
                id='wpb_composer_front_js-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-js/ultimate_bg.min.js')}}"
                id='ultimate-row-bg-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/Ultimate_VC_Addons/assets/min-js/jparallax.min.js')}}"
                id='jquery.shake-js'></script>
                <script type='text/javascript'
                src="{{asset('assets/frontend/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min.js')}}"
                id='vc_waypoints-js'></script>
               
                @yield('js')

        </body>


</html>
