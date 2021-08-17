<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                <aside class="sidebar sidebar-user">
                    <div class="row">
                        <div class="col-12">
                            <div class="card ctm-border-radius shadow-sm grow">
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-md-12 mr-auto text-left">
                                            <div class="custom-search input-group">
                                                <div class="custom-breadcrumb">
                                                    <ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
                                                        <li class="breadcrumb-item d-inline-block"><a href="{{route('dashboard')}}" class="text-dark">Home</a></li>
                                                        <li class="breadcrumb-item d-inline-block active">{{ucfirst(Request::segment(2))}}</li>
                                                    </ol>
                                                    <h4 class="text-dark">{{ucfirst(Request::segment(2))}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(Request::segment(2) == 'dashboard')
                    <div class="user-card card shadow-sm bg-white text-center ctm-border-radius grow">
                        <div class="user-info card-body">
                            <div class="user-avatar mb-4">
                                <img src="{{asset('assets/backend/img/profiles/img-13.jpg')}}" alt="User Avatar" class="img-fluid rounded-circle" width="100">
                            </div>
                            <div class="user-details">
                                <h4><b>Welcome {{ucwords(Auth::user()->name)}}</b></h4>
                                <p>{{\Carbon\Carbon::parse(Auth::user()->created_at)->isoFormat('MMMM Do, YYYY')}}</p>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::segment(2) == 'profile')
                        <div class="user-card card shadow-sm bg-white text-center ctm-border-radius grow">
                            <div class="user-info card-body">
                                <div class="user-avatar mb-4">
                                    <img src="{{asset('assets/backend/img/profiles/img-13.jpg')}}" alt="User Avatar" class="img-fluid rounded-circle" width="100">
                                </div>
                                <div class="user-details">
                                    <h4><b>{{ucwords(Auth::user()->name)}}</b></h4>
                                    <p>{{Auth::user()->email}}</p>
                                </div>
                            </div>
                        </div>
                    @endif


                    <div class="sidebar-wrapper d-lg-block d-md-none d-none">
                        <div class="card ctm-border-radius shadow-sm border-none grow">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-6 align-items-center text-center">
                                        <a href="{{route('dashboard')}}" class="{{(Request::segment(2) == 'dashboard') ? "text-white active":"text-dark"}} p-4 first-slider-btn ctm-border-right ctm-border-left ctm-border-top"><span class="lnr lnr-home pr-0 pb-lg-2 font-23"></span><span class="">Dashboard</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="#" class="text-dark p-4 second-slider-btn ctm-border-right ctm-border-top"><span class="lnr lnr-users pr-0 pb-lg-2 font-23"></span><span class="">Employees</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="#" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-apartment pr-0 pb-lg-2 font-23"></span><span class="">Company</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="#" class="text-dark p-4 ctm-border-right"><span class="lnr lnr-calendar-full pr-0 pb-lg-2 font-23"></span><span class="">Calendar</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="#" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-briefcase pr-0 pb-lg-2 font-23"></span><span class="">Leave</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="#" class="text-dark p-4 last-slider-btn ctm-border-right"><span class="lnr lnr-star pr-0 pb-lg-2 font-23"></span><span class="">Reviews</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="#" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-rocket pr-0 pb-lg-2 font-23"></span><span class="">Reports</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="#" class="text-dark p-4 ctm-border-right"><span class="lnr lnr-sync pr-0 pb-lg-2 font-23"></span><span class="">Manage</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="{{route('setting.index')}}" class="{{(Request::segment(2) == 'settings') ? "text-white active":"text-dark"}} p-4 last-slider-btn1 ctm-border-right ctm-border-left"><span class="lnr lnr-cog pr-0 pb-lg-2 font-23"></span><span class="">Settings</span></a>
                                    </div>
                                    <div class="col-6 align-items-center shadow-none text-center">
                                        <a href="{{route('profile')}}" class="{{(Request::segment(2) == 'profile') ? "text-white active":"text-dark"}} p-4 last-slider-btn ctm-border-right"><span class="lnr lnr-user pr-0 pb-lg-2 font-23"></span><span class="">Profile</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
