@extends('backend.layouts.master')
@section('title') Dashboard @endsection
@section('content')
    <div class="col-xl-9 col-lg-8  col-md-12">
                <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm grow bg-white p-4 mb-4 card">
                    <ul class="list-group list-group-horizontal-lg">
                        <li class="list-group-item text-center button-6"><a href="employment.html" class="text-dark">Employement</a></li>
                        <li class="list-group-item text-center active button-5"><a href="details.html" class="text-white">Detail</a></li>
                        <li class="list-group-item text-center button-6"><a href="documents.html" class="text-dark">Document</a></li>
                        <li class="list-group-item text-center button-6"><a href="payroll.html" class="text-dark">Payroll</a></li>
                        <li class="list-group-item text-center button-6"><a href="time-off.html" class="text-dark">Timeoff</a></li>
                        <li class="list-group-item text-center button-6"><a href="profile-reviews.html" class="text-dark">Reviews</a></li>
                        <li class="list-group-item text-center button-6"><a class="text-dark" href="profile-settings.html">Settings</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill ctm-border-radius shadow-sm grow">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Basic Information</h4>
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-3"><span class="text-primary">Preferred Name :</span><b> Maria</b></p>
                                <p class="card-text mb-3"><span class="text-primary">First Name :</span> Maria</p>
                                <p class="card-text mb-3"><span class="text-primary">Last Name : </span>Cotton</p>
                                <p class="card-text mb-3"><span class="text-primary">Nationality :</span> American</p>
                                <p class="card-text mb-3"><span class="text-primary">Date of Birth :</span> 05 May 1990</p>
                                <p class="card-text mb-3"><span class="text-primary">Gender : </span>Female</p>
                                <p class="card-text mb-3"><span class="text-primary">Blood Group :</span> A+</p>
                                <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#add_basicInformation"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_basicInformation"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex">
                        <div class="card flex-fill  ctm-border-radius shadow-sm grow">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Contact</h4>
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-3"><span class="text-primary">Phone Number : </span>987654321</p>
                                <p class="card-text mb-3"><span class="text-primary">Personal Email : </span><a href="https://dleohr.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1ccc0d3c8c0c2ced5d5cecfe1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a></p>
                                <p class="card-text mb-3"><span class="text-primary">Secondary Number : </span>986754231</p>
                                <p class="card-text mb-3"><span class="text-primary">Web Site : </span>www.focustechnology.com</p>
                                <p class="card-text mb-3"><span class="text-primary">Linkedin : </span>#mariacotton</p>
                                <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#add_Contact"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_Contact"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 d-flex">
                                <div class="card ctm-border-radius shadow-sm grow flex-fill">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Dates</h4>
                                    </div>
                                    <div class="card-body text-center">
                                        <p class="card-text mb-3"><span class="text-primary">Start Date : </span>06 Jun 2017</p>
                                        <p class="card-text mb-3"><span class="text-primary">Visa Expiry Date : </span>06 Jun 2020</p>
                                        <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_Dates"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 d-flex">
                                <div class="card ctm-border-radius shadow-sm grow flex-fill">
                                    <div class="card-header">
                                        <h4 class="card-title d-inline-block mb-0">Dates</h4>
                                        <span class="float-right"><a href="javascript:void(0)" class="text-primary" data-toggle="modal" data-target="#addNewType"> New Type</a></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input class="form-control datetimepicker date-enter" type="text" placeholder="Add Start Date">
                                            <div class="input-group-append">
                                                <button class="btn btn-theme text-white" type="button"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input class="form-control datetimepicker date-enter" type="text" placeholder="Add Visa Expiry Date">
                                            <div class="input-group-append">
                                                <button class="btn btn-theme text-white" type="button"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white button-1">Add A Key Date</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</div>

<div class="sidebar-overlay" id="sidebar_overlay"></div>

<div class="modal fade" id="addNewType">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3">Create New Date Type</h4>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input class="form-control date-enter" type="text" placeholder="Date Type">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input class="form-control datetimepicker date-enter" type="text" placeholder="Key Date">
                    </div>
                </div>
                <button type="button" class="btn btn-danger ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn text-white ctm-border-radius btn-theme float-right">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_basicInformation">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3">Basic Information</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Preferred Name">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Nationality">
                </div>
                <div class="input-group mb-3">
                    <input class="form-control datetimepicker date-enter" type="text" placeholder="Add Date of Birth">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Gender">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Blood Group">
                </div>
                <button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme text-white ctm-border-radius float-right button-1">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_basicInformation">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3">Edit Basic Information</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Preferred Name" value="Maria">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="First Name" value="Maria">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Last Name" value="Cotton">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Nationality" value="American">
                </div>
                <div class="input-group mb-3">
                    <input class="form-control datetimepicker date-enter" type="text" placeholder="Add Date of Birth" value="05-07-1990">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Gender" value="Female">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Blood Group" value="A+">
                </div>
                <button type="button" class="btn btn-danger float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme text-white ctm-border-radius float-right button-1">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_Contact">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3">Edit Contact</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Phone Number" value="987654321">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Login Email" value="mariacotton@example.com">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Add Personal Email" value="maria@example.com">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Seconary Phone Number" value="986754231">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Web Site" value="www.focustechnology.com">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Connect Your Linkedin" value="#mariacotton">
                </div>
                <button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme text-white ctm-border-radius float-right button-1">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_Contact">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3">Add Contact</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Phone Number">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Login Email">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Add Personal Email">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Seconary Phone Number">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add Web Site">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Connect Your Linkedin">
                </div>
                <button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme text-white ctm-border-radius float-right button-1">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addKeyDate">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3">Add New Date</h4>
                <div class="form-group">
                    <div class="input-group mb-1">
                        <input class="form-control datetimepicker date-enter" type="text" placeholder="Date Type">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input class="form-control datetimepicker date-enter" type="text" placeholder="Key Date">
                    </div>
                </div>
                <button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme text-white ctm-border-radius float-right button-1">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_Dates">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3">Edit Date</h4>
                <div class="form-group">
                    <div class="input-group mb-1">
                        <input class="form-control datetimepicker date-enter" type="text" placeholder="Start Date" value="06-07-2017">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input class="form-control datetimepicker date-enter" type="text" placeholder="Visa Expiry Date" value="06 -07-2020">
                    </div>
                </div>
                <button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme text-white ctm-border-radius float-right button-1">Add</button>
            </div>
        </div>
    </div>
</div>
@endsection
