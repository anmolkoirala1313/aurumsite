@extends('backend.layouts.master')
@section('title') User Management @endsection
@section('content')


<div class="col-xl-9 col-lg-8  col-md-12">
    <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card grow">
        <div class="card-body">
            <div class="flex-row list-group list-group-horizontal-lg" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class=" active list-group-item" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                <a class="list-group-item" id="v-pills-admin-tab" data-toggle="pill" href="#v-pills-admin" role="tab" aria-controls="v-pills-admin" aria-selected="false">Admin</a>
                <a class="list-group-item" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="false">General</a>
                
            </div>
        </div>
    </div>
    <div class="card shadow-sm ctm-border-radius grow">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title mb-0 d-inline-block">{{@$all_user->count()}} Users </h4>
            <a href="{{route('user.create')}}" class="btn btn-theme button-1 ctm-border-radius text-white float-right"><span></span><i class="fa fa-plus"></i> Create User</a>
        </div>
        <div class="card-body align-center">
            <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="employee-office-table">
                        <div class="table-responsive">
                            <table id="alluser-index" class="table custom-table table-hover">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>User Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(@$all_user)
                                    @foreach($all_user as  $user)
                                    <tr>
                                        <td>
                                            <a href="{{route('user.edit',$user->id)}}" class="avatar"><img class="img-fluid"  src="<?php if(!empty(@$user->image)){ echo '/images/uploads/profiles/'.@$user->image; } else { if(@$user->gender=="male") {echo '/images/uploads/profiles/male.png'; } elseif(@$user->gender=="female") {echo '/images/uploads/profiles/female.png'; } elseif(@$user->gender=="others") {echo '/images/uploads/profiles/others.png'; } } ?>" alt="{{ucfirst(Auth::user()->name)}}"></a>
                                            <h2><a href="{{route('user.edit',$user->id)}}"> {{ucwords(@$user->name)}}</a></h2>
                                        </td>
                                        <td>{{@$user->email}}</td>
                                        <td>{{@$user->contact}}</td>
                                        <td>{{ucwords(@$user->user_type)}}</td>
                                        <td>
                                            <div class="dropdown action-label drop-active">
                                                <a href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"> {{(($user->status == 0) ? "Deactive":"Active")}} <i class="caret"></i></a>
                                                <div class="dropdown-menu">
                                                    @if($user->status == 0)
                                                        <a class="dropdown-item status-update" aurum-update-action="{{route('user-status.update',$user->id)}}" href="#" id="1">Active</a>
                                                    @else
                                                        <a class="dropdown-item status-update" aurum-update-action="{{route('user-status.update',$user->id)}}" href="#" id="0">Deactive</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-action">
                                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-outline-success">
                                                    <span class="lnr lnr-pencil"></span> Edit
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger action-per-delete"  aurum-delete-per-action="{{route('user.destroy',$user->id)}}">
                                                    <span class="lnr lnr-trash"></span> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="v-pills-admin" role="tabpanel" aria-labelledby="v-pills-admin-tab">
                    <div class="employee-office-table">
                        <div class="table-responsive">
                            <table id="admin-index" class="table custom-table table-hover">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Join Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(@$admin)
                                    @foreach($admin as  $user)
                                    <tr>
                                        <td>
                                            <a href="{{route('user.edit',$user->id)}}" class="avatar"><img class="img-fluid"  src="<?php if(!empty(@$user->image)){ echo '/images/uploads/profiles/'.@$user->image; } else { if(@$user->gender=="male") {echo '/images/uploads/profiles/male.png'; } elseif(@$user->gender=="female") {echo '/images/uploads/profiles/female.png'; } elseif(@$user->gender=="others") {echo '/images/uploads/profiles/others.png'; } } ?>" alt="{{ucfirst(Auth::user()->name)}}"></a>
                                            <h2><a href="{{route('user.edit',$user->id)}}"> {{ucwords(@$user->name)}}</a></h2>
                                        </td>
                                        <td>{{@$user->email}}</td>
                                        <td>{{@$user->contact}}</td>
                                        <td>{{date('j F, Y',strtotime(@$user->created_at))}}</td>
                                        <td>
                                            <div class="dropdown action-label drop-active">
                                                <a href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"> {{(($user->status == 0) ? "Deactive":"Active")}} <i class="caret"></i></a>
                                                <div class="dropdown-menu">
                                                    @if($user->status == 0)
                                                        <a class="dropdown-item status-update" aurum-update-action="{{route('user-status.update',$user->id)}}" href="#" id="1">Active</a>
                                                    @else
                                                        <a class="dropdown-item status-update" aurum-update-action="{{route('user-status.update',$user->id)}}" href="#" id="0">Deactive</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-action">
                                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-outline-success">
                                                    <span class="lnr lnr-pencil"></span> Edit
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger action-per-delete"  aurum-delete-per-action="{{route('user.destroy',$user->id)}}">
                                                    <span class="lnr lnr-trash"></span> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                    <div class="employee-office-table">
                        <div class="table-responsive">
                            <table id="general-index" class="table custom-table table-hover">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Join Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(@$general)
                                    @foreach($general as  $user)
                                    <tr>
                                        <td>
                                            <a href="{{route('user.edit',$user->id)}}" class="avatar"><img class="img-fluid"  src="<?php if(!empty(@$user->image)){ echo '/images/uploads/profiles/'.@$user->image; } else { if(@$user->gender=="male") {echo '/images/uploads/profiles/male.png'; } elseif(@$user->gender=="female") {echo '/images/uploads/profiles/female.png'; } elseif(@$user->gender=="others") {echo '/images/uploads/profiles/others.png'; } } ?>" alt="{{ucfirst(Auth::user()->name)}}"></a>
                                            <h2><a href="{{route('user.edit',$user->id)}}"> {{ucwords(@$user->name)}}</a></h2>
                                        </td>
                                        <td>{{@$user->email}}</td>
                                        <td>{{@$user->contact}}</td>
                                        <td>{{date('j F, Y',strtotime(@$user->created_at))}}</td>
                                        <td>
                                            <div class="dropdown action-label drop-active">
                                                <a href="javascript:void(0)" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"> {{(($user->status == 0) ? "Deactive":"Active")}} <i class="caret"></i></a>
                                                <div class="dropdown-menu">
                                                    @if($user->status == 0)
                                                        <a class="dropdown-item status-update" aurum-update-action="{{route('user-status.update',$user->id)}}" href="#" id="1">Active</a>
                                                    @else
                                                        <a class="dropdown-item status-update" aurum-update-action="{{route('user-status.update',$user->id)}}" href="#" id="0">Deactive</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-action">
                                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-outline-success">
                                                    <span class="lnr lnr-pencil"></span> Edit
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger action-per-delete"  aurum-delete-per-action="{{route('user.destroy',$user->id)}}">
                                                    <span class="lnr lnr-trash"></span> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
                    $('#alluser-index, #admin-index , #general-index').DataTable({
                        paging: true,
                        searching: true,
                        ordering:  true,
                        lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                    });

                });
    </script>
@endsection
