@extends('backend.layouts.master')
@section('title') Section Elements @endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/backend/plugins/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/css/successbox.css')}}">

    <style>
        .ck-editor__editable_inline {
            min-height: 150px !important;
        }
        /*for tab*/
        li.button-5 a{
            color: #FFFFFF;
        }

        li.button-6 a{
            color: #000000;
        }

        .fade{
            display: none;
        }
        /*end for tab*/

        /*for image*/
        .avatar-upload{
            max-width: 505px!important;
        }

        .default-image{
            border: 6px solid #f3f3f3;
            border-radius: 10px;
        }



        /*end for image*/

    </style>
@endsection
@section('content')


    <div class="col-xl-9 col-lg-8  col-md-12">
        <div class="card shadow-sm grow ctm-border-radius">
            <div class="card-body align-center">
                <ul class="nav flex-row nav-pills" id="pills-tab" role="tablist">
                    @php($i=0)
                    @foreach(@$sections as $key=>$value)
                        <li class="nav-item mr-2">
                            <a class="nav-link {{($i==0) ? 'active':''}} mb-2" id="pills-{{$value}}-tab" data-toggle="pill" href="#pills-{{$value}}" role="tab" aria-controls="pills-{{$value}}" aria-selected="true">{{ucfirst(str_replace('_',' ',$value))}}</a>
                        </li>
                        <?php $i++; ?>
                    @endforeach

                </ul>
            </div>
        </div>


        <div class="card grow shadow-sm grow ctm-border-radius">
            <div class="card-body align-center">
                <div class="tab-content" id="pills-tabContent">

                    @php($j=0)
                    @foreach(@$sections as $key=>$value)
                    <div class="tab-pane fade {{($j==0) ? 'show active':''}} " id="pills-{{$value}}" role="tabpanel" aria-labelledby="pills-{{$value}}-tab">

                        @if($value == 'basic_section')
                            {!! Form::open(['route' => 'section-elements.store','method'=>'post','class'=>'needs-validation','id'=>'basic-form','novalidate'=>'','enctype'=>'multipart/form-data']) !!}
                            <div class="row" id="basic-form-ajax">
                                <div class="col-md-7">
                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">
                                                Basic Section Details
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-3">
                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                <input type="text" class="form-control" name="heading" required>
                                                <input type="hidden" class="form-control" value="{{$key}}" name="page_section_id" required>
                                                <input type="hidden" class="form-control" value="{{$value}}" name="section_name" required>
                                                <div class="invalid-feedback">
                                                    Please enter the basic section heading.
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label>Sub Heading </label>
                                                <input type="text" class="form-control" name="subheading">
                                                <div class="invalid-feedback">
                                                    Please enter the basic section Sub heading.
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                <textarea class="form-control" rows="6" name="description" id="basic_editor"  required></textarea>
                                                <div class="invalid-feedback">
                                                    Please write the short description for basic section.
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Button Text </label>
                                                <input type="text" maxlength="12" class="form-control" name="button">
                                                <div class="invalid-feedback">
                                                    Please enter the button text.
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Button Link </label>
                                                <input type="text" class="form-control" name="button_link">
                                                <div class="invalid-feedback">
                                                    Please enter the button link.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">
                                                Basic Section Image <span class="text-muted text-danger">*</span>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-9 mb-4">
                                                    <div class="custom-file h-auto">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type="file" class="custom-file-input" hidden id="basic-image" onchange="loadbasicFile('basic-image','current-basic-img',event)" name="image" required>
                                                                <label for="basic-image"></label>
                                                                <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                    Please select a image.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img id="current-basic-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="basic_section_image" class="w-100 current-img">
                                                    </div>
                                                    <span class="ctm-text-sm">*use image minimum of 660 x 410px for Basic section</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3" id="basic-form-button">
                                <button id="basic-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</button>
                            </div>
                            {!! Form::close() !!}
                        @endif

                        @if($value == 'call_to_action')
                                {!! Form::open(['route' => 'section-elements.store','method'=>'post','class'=>'needs-validation','id'=>'call-action-form','novalidate'=>'','enctype'=>'multipart/form-data']) !!}

                                <div class="row" id="call-action-form-ajax">
                                    <div class="col-md-12">
                                        <div class="card ctm-border-radius shadow-sm flex-fill">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">
                                                    Call to action Details
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label>Heading <span class="text-muted text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="heading" required>
                                                    <input type="hidden" class="form-control" value="{{$key}}" name="page_section_id" required>
                                                    <input type="hidden" class="form-control" value="{{$value}}" name="section_name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter the Call to action heading.
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label>Description <span class="text-muted text-danger">*</span></label>
                                                    <textarea class="form-control" rows="6" name="description" required></textarea>
                                                    <div class="invalid-feedback">
                                                        Please write the short description for basic section.
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Button Text </label>
                                                    <input type="text" maxlength="18" class="form-control" name="button">
                                                    <div class="invalid-feedback">
                                                        Please enter the button text.
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Button Link </label>
                                                    <input type="text" class="form-control" name="button_link">
                                                    <div class="invalid-feedback">
                                                        Please enter the button link.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3" id="call-action-form-button">
                                    <button id="call-action-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</button>
                                </div>
                                {!! Form::close() !!}

                        @endif

                        @if($value == 'background_image_section')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">
                                                Background Image Section Details
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-3">
                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                <input type="text" class="form-control" name="heading" required>
                                                <div class="invalid-feedback">
                                                    Please enter the Background Image Section heading.
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                <input type="text" class="form-control" name="subheading" required>
                                                <div class="invalid-feedback">
                                                    Please enter the Background Image Section sub heading.
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                <textarea class="form-control" rows="6" id="background_editor" name="short_description" required></textarea>
                                                <div class="invalid-feedback">
                                                    Please write the short description for basic section.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">
                                                Background Image Section's Image <span class="text-muted text-danger">*</span>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-9 mb-4">
                                                    <div class="custom-file h-auto">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type="file" class="custom-file-input" hidden id="background-image" onchange="loadbasicFile('background-image','current-backgroundss-img',event)" name="image">
                                                                <label for="background-image"></label>
                                                                <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                    Please select a image.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img id="current-backgroundss-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="background_section_image" class="w-100 current-img">
                                                    </div>
                                                    <span class="ctm-text-sm">*use image minimum of 1920 x 1280px for Background section</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" id="background-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                            </div>
                        @endif

                        @if($value == 'tab_section_1')
                            <div class="accordion add-tab-section1-details" id="accordion-details">

                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="mission1">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class=" coll-arrow d-block text-dark" href="javascript:void(0)" data-toggle="collapse" data-target="#mission-one" aria-expanded="true">
                                                Mission <span class="text-muted text-danger">*</span>
                                                <br><span class="ctm-text-sm">Please enter the details for mission.</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="mission-one" class="collapse show ctm-padding" aria-labelledby="mission1" data-parent="#accordion-details">

                                            <div class="row">

                                                <div class="col-md-7">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="list_header[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the Mission heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="list_description[]" id="mission_editor" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the Mission description.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="row justify-content-center">
                                                                <div class="col-9 mb-4">
                                                                    <div class="custom-file h-auto">
                                                                        <div class="avatar-upload">
                                                                            <div class="avatar-edit">
                                                                                <input type="file" class="custom-file-input" hidden id="mission-image" onchange="loadbasicFile('mission-image','current-mission-img',event)" name="list_image[]">
                                                                                <label for="mission-image"></label>
                                                                                <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                                    Please select a image.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <img id="current-mission-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="mission_section_image" class="w-100 current-img">
                                                                    </div>
                                                                    <span class="ctm-text-sm">*use image minimum of 370 x 370px for Mission section</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="vision1">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class="coll-arrow d-block text-dark collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#vision-one" aria-expanded="false">
                                                Vision Details <span class="text-muted text-danger">*</span>
                                                <br><span class="ctm-text-sm">Please enter the details for Vision.</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="vision-one" class="ctm-padding collapse" aria-labelledby="vision1" data-parent="#accordion-details">

                                            <div class="row">

                                                <div class="col-md-7">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="list_header[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the Vision heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="list_description[]" id="vision_editor" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the Vision description.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="row justify-content-center">
                                                                <div class="col-9 mb-4">
                                                                    <div class="custom-file h-auto">
                                                                        <div class="avatar-upload">
                                                                            <div class="avatar-edit">
                                                                                <input type="file" class="custom-file-input" hidden id="vision-image" onchange="loadbasicFile('vision-image','current-vision-img',event)" name="list_image[]">
                                                                                <label for="vision-image"></label>
                                                                                <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                                    Please select a image.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <img id="current-vision-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="vision_section_image" class="w-100 current-img">
                                                                    </div>
                                                                    <span class="ctm-text-sm">*use image minimum of 370 x 370px for Vision section</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="goal1">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class="coll-arrow d-block text-dark collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#goal-one" aria-expanded="false">
                                                Goals <span class="text-muted text-danger">*</span>
                                                <br><span class="ctm-text-sm">Please enter the details for goals.</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="goal-one" class="ctm-padding collapse" aria-labelledby="goal1" data-parent="#accordion-details">

                                            <div class="row">

                                                <div class="col-md-7">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="list_header[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the Goal heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="list_description[]" id="goal_editor" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the Goal description.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="row justify-content-center">
                                                                <div class="col-9 mb-4">
                                                                    <div class="custom-file h-auto">
                                                                        <div class="avatar-upload">
                                                                            <div class="avatar-edit">
                                                                                <input type="file" class="custom-file-input" hidden id="goal-image" onchange="loadbasicFile('goal-image','current-goal-img',event)" name="list_image[]">
                                                                                <label for="goal-image"></label>
                                                                                <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                                    Please select a image.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <img id="current-goal-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="goal_section_image" class="w-100 current-img">
                                                                    </div>
                                                                    <span class="ctm-text-sm">*use image minimum of 370 x 370px for Goal section</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" id="tab1-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                            </div>
                        @endif

                        @if($value == 'tab_section_2')
                            <div class="accordion add-tab-section2-details" id="accordion-details-two">

                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="headingtab2">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class=" coll-arrow d-block text-dark" href="javascript:void(0)" data-toggle="collapse" data-target="#headingtab-two" aria-expanded="true">
                                                Tab 1 details <span class="text-muted text-danger">*</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="headingtab-two" class="collapse show ctm-padding" aria-labelledby="headingtab2" data-parent="#accordion-details">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="heading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="subheading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="description[]" id="editor6" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the description.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="headingtwotab2">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class="coll-arrow d-block text-dark collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#headingtwotab-two" aria-expanded="false">
                                                Tab 2 details <span class="text-muted text-danger">*</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="headingtwotab-two" class="ctm-padding collapse" aria-labelledby="headingtwotab2" data-parent="#accordion-details">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="heading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="subheading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="description[]" id="editor7" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the description.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="headingthreetab2">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class="coll-arrow d-block text-dark collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#headingthreetab-two" aria-expanded="false">
                                                Tab 3 details <span class="text-muted text-danger">*</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="headingthreetab-two" class="ctm-padding collapse" aria-labelledby="headingthreetab2" data-parent="#accordion-details">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="heading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="subheading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="description[]" id="editor8" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the description.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="headingfourtab2">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class="coll-arrow d-block text-dark collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#headingfourtab-two" aria-expanded="false">
                                                Tab 4 details <span class="text-muted text-danger">*</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="headingfourtab-two" class="ctm-padding collapse" aria-labelledby="headingfourtab2" data-parent="#accordion-details">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="heading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="subheading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="description[]" id="editor9" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the description.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" id="tab1-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                            </div>
                        @endif

                        @if($value == 'list_section_1')
                            <div class="accordion add-employee" id="accordion-details">

                                @for ($i = 1; $i <=$list_1; $i++)
                                <div class="card shadow-sm ctm-border-radius">
                                    <div class="card-header" id="listheading{{$i}}">
                                        <h4 class="cursor-pointer mb-0">
                                            <a class="{{($i==1) ? 'coll-arrow d-block text-dark':'coll-arrow d-block text-dark collapsed'}}" href="javascript:void(0)" data-toggle="collapse" data-target="#list-heading-{{$i}}" aria-expanded="{{($i==1) ? 'true':'false'}}">
                                                List {{$i}} details <span class="text-muted text-danger">*</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="list-heading-{{$i}}" class="{{($i==1) ? 'collapse show ctm-padding':'collapse ctm-padding'}}" aria-labelledby="listheading{{$i}}" data-parent="#accordion-details" >

                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="form-group mb-3">
                                                                <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="list_header[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="subheading[]" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter the heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="list_description[]" required></textarea>
                                                                <div class="invalid-feedback">
                                                                    Please write the description.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Button Text </label>
                                                                <input type="text" maxlength="18" class="form-control" name="button[]">
                                                                <div class="invalid-feedback">
                                                                    Please enter the button text.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Button Link </label>
                                                                <input type="text" class="form-control" name="button_link[]">
                                                                <div class="invalid-feedback">
                                                                    Please enter the button link.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="card ctm-border-radius shadow-sm flex-fill">
                                                        <div class="card-body">
                                                            <div class="row justify-content-center">
                                                                <div class="col-9 mb-4">
                                                                    <div class="custom-file h-auto">
                                                                        <div class="avatar-upload">
                                                                            <div class="avatar-edit">
                                                                                <input type="file" class="custom-file-input" hidden id="list-{{$i}}-image" onchange="loadbasicFile('list-{{$i}}-image','current-list-{{$i}}-img',event)" name="list_image[]">
                                                                                <label for="list-{{$i}}-image"></label>
                                                                                <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                                    Please select a image.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <img id="current-list-{{$i}}-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="list_{{$i}}_section_image" class="w-100 current-img">
                                                                    </div>
                                                                    <span class="ctm-text-sm">*use image minimum of 1920 x 1280px for Background section</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endfor

                            </div>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" id="tab1-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                            </div>
                        @endif

                        @if($value == 'list_section_2')
                            <div class="accordion listwo" id="accordion-details">

                                @for ($i = 1; $i <=$list_2; $i++)
                                    <div class="card shadow-sm ctm-border-radius">
                                        <div class="card-header" id="listtwoheading{{$i}}">
                                            <h4 class="cursor-pointer mb-0">
                                                <a class="{{($i==1) ? 'coll-arrow d-block text-dark':'coll-arrow d-block text-dark collapsed'}}" href="javascript:void(0)" data-toggle="collapse" data-target="#listtwo-heading-{{$i}}" aria-expanded="{{($i==1) ? 'true':'false'}}">
                                                    List {{$i}} details <span class="text-muted text-danger">*</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="listtwo-heading-{{$i}}" class="{{($i==1) ? 'collapse show ctm-padding':'collapse ctm-padding'}}" aria-labelledby="listtwoheading{{$i}}" data-parent="#accordion-details" >

                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="card ctm-border-radius shadow-sm flex-fill">
                                                            <div class="card-body">
                                                                <div class="form-group mb-3">
                                                                    <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                    <input type="text" class="form-control" name="list_header[]" required>
                                                                    <div class="invalid-feedback">
                                                                        Please enter the heading.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                                    <input type="text" class="form-control" name="subheading[]" required>
                                                                    <div class="invalid-feedback">
                                                                        Please enter the heading.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Description <span class="text-muted text-danger">*</span></label>
                                                                    <textarea class="form-control" rows="6" name="list_description[]" required></textarea>
                                                                    <div class="invalid-feedback">
                                                                        Please write the description.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Button Text </label>
                                                                    <input type="text" maxlength="18" class="form-control" name="button[]">
                                                                    <div class="invalid-feedback">
                                                                        Please enter the button text.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Button Link </label>
                                                                    <input type="text" class="form-control" name="button_link[]">
                                                                    <div class="invalid-feedback">
                                                                        Please enter the button link.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="card ctm-border-radius shadow-sm flex-fill">
                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-9 mb-4">
                                                                        <div class="custom-file h-auto">
                                                                            <div class="avatar-upload">
                                                                                <div class="avatar-edit">
                                                                                    <input type="file" class="custom-file-input" hidden id="listtwo-{{$i}}-image" onchange="loadbasicFile('listtwo-{{$i}}-image','current-listtwo-{{$i}}-img',event)" name="list_image[]">
                                                                                    <label for="listtwo-{{$i}}-image"></label>
                                                                                    <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                                        Please select a image.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <img id="current-listtwo-{{$i}}-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="listtwo_{{$i}}_section_image" class="w-100 current-img">
                                                                        </div>
                                                                        <span class="ctm-text-sm">*use image minimum of 1920 x 1280px for Background section</span>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" id="tab1-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                            </div>
                        @endif

                        @if($value == 'process_selection')
                            <div class="accordion listwo" id="accordion-details">

                                @for ($i = 1; $i <=$list_3; $i++)
                                    <div class="card shadow-sm ctm-border-radius">
                                        <div class="card-header" id="processelect{{$i}}">
                                            <h4 class="cursor-pointer mb-0">
                                                <a class="{{($i==1) ? 'coll-arrow d-block text-dark':'coll-arrow d-block text-dark collapsed'}}" href="javascript:void(0)" data-toggle="collapse" data-target="#processelect-heading-{{$i}}" aria-expanded="{{($i==1) ? 'true':'false'}}">
                                                    Process {{$i}} details <span class="text-muted text-danger">*</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="processelect-heading-{{$i}}" class="{{($i==1) ? 'collapse show ctm-padding':'collapse ctm-padding'}}" aria-labelledby="processelect{{$i}}" data-parent="#accordion-details" >

                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="card ctm-border-radius shadow-sm flex-fill">
                                                            <div class="card-body">
                                                                <div class="form-group mb-3">
                                                                    <label>Heading <span class="text-muted text-danger">*</span></label>
                                                                    <input type="text" class="form-control" name="list_header[]" required>
                                                                    <div class="invalid-feedback">
                                                                        Please enter the heading.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Sub Heading <span class="text-muted text-danger">*</span></label>
                                                                    <input type="text" class="form-control" name="subheading[]" required>
                                                                    <div class="invalid-feedback">
                                                                        Please enter the heading.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Description <span class="text-muted text-danger">*</span></label>
                                                                    <textarea class="form-control" rows="6" name="list_description[]" required></textarea>
                                                                    <div class="invalid-feedback">
                                                                        Please write the description.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Button Text </label>
                                                                    <input type="text" maxlength="18" class="form-control" name="button[]">
                                                                    <div class="invalid-feedback">
                                                                        Please enter the button text.
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label>Button Link </label>
                                                                    <input type="text" class="form-control" name="button_link[]">
                                                                    <div class="invalid-feedback">
                                                                        Please enter the button link.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="card ctm-border-radius shadow-sm flex-fill">
                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-9 mb-4">
                                                                        <div class="custom-file h-auto">
                                                                            <div class="avatar-upload">
                                                                                <div class="avatar-edit">
                                                                                    <input type="file" class="custom-file-input" hidden id="processelect-{{$i}}-image" onchange="loadbasicFile('processelect-{{$i}}-image','current-processelect-{{$i}}-img',event)" name="list_image[]">
                                                                                    <label for="processelect-{{$i}}-image"></label>
                                                                                    <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                                        Please select a image.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <img id="current-processelect-{{$i}}-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="processelect_{{$i}}_section_image" class="w-100 current-img">
                                                                        </div>
                                                                        <span class="ctm-text-sm">*use image minimum of 1920 x 1280px for Background section</span>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" id="tab1-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                            </div>
                        @endif

                        @if($value == 'gallery_section')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card ctm-border-radius shadow-sm flex-fill">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">
                                                    Add image to gallery section
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <h2 class="page-heading">Upload your Images <span id="counter"></span></h2>
                                                <div class="invalid-feedback">    </div>
                                                <script type="text/javascript">
                                                var page_section_id = "{{$key}}"
                                                  </script>
                                                {!! Form::open(['url'=>route('section-elements-gallery.update', @$key),'method'=>'PUT','class'=>'dropzone','id'=>'myDropzone','enctype'=>'multipart/form-data']) !!}
                                                    <div class="dz-message">
                                                        <div class="col-xs-8">
                                                            <div class="message">
                                                                <p>Drop files here or Click to Upload</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>

                                                {!! Form::close() !!}


                                                    {{--Dropzone Preview Template--}}
                                                <div id="preview" style="display: none;">

                                                    <div class="dz-preview dz-file-preview">
                                                        <div class="dz-image"><img data-dz-thumbnail /></div>

                                                        <div class="dz-details">
                                                            <div class="dz-size"><span data-dz-size></span></div>
                                                            <div class="dz-filename"><span data-dz-name></span></div>
                                                        </div>
                                                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                                                        <div class="dz-error-message"><span data-dz-errormessage></span></div>


                                                        <div class="dz-success-mark">

                                                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                                <title>Check</title>
                                                                <desc>Created with Sketch.</desc>
                                                                <defs></defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                                    <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                                                </g>
                                                            </svg>

                                                        </div>
                                                        <div class="dz-error-mark">

                                                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                                <title>error</title>
                                                                <desc>Created with Sketch.</desc>
                                                                <defs></defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                                    <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                                                        <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--End of Dropzone Preview Template--}}

                                            </div>
                                        </div>
                                    </div>
                                </div>

                        @endif


                    </div>
                        <?php $j++; ?>
                    @endforeach


                </div>
            </div>
        </div>
    </div>




@endsection

@section('js')
    <script src="{{asset('assets/backend/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/plugins/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/backend/plugins/dropzone/dropzone.config.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    </script>

    <script type="text/javascript">
        var section_list = new Array();
        <?php foreach($sections as $key => $val){ ?>
        section_list.push('<?php echo $val; ?>');
        <?php } ?>
        var loadbasicFile = function(id1,id2,event) {
            var image       = document.getElementById(id1);
            var replacement = document.getElementById(id2);
            replacement.src = URL.createObjectURL(event.target.files[0]);
        };

        function ElementData(post_url,request_method,form_data,divID,buttonID){
            $.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false
            }).done(function(response){ //
                if (response=="success"){
                    var replacement = '<div class="col-md-12"><div id="container">' +
                        '<div id="success-box">' +
                        '<div class="face"><div class="eye"></div><div class="eye right"></div><div class="mouth happy"></div>' +
                        '</div>' +
                        '<div class="shadow scale"></div> ' +
                        '<div class="message">' +
                        '<h1 class="alert">Successfully Submitted!</h1>' +
                        '<p class="alert-para">The section element has been created.</p><' +
                        '/div>' +
                        '<button class="button-box"><h1 class="green">continue</h1></button></div></div>' +
                        '</div>';
                    $('#' + divID).html(replacement);
                    $('#' + buttonID).html("");
                }
            });
        }

     function createEditor ( elementId ) {
            return ClassicEditor
                .create( document.querySelector( '#' + elementId ), {
                toolbar : {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', '|',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', '|',
                        'insertTable', 'blockQuote', '|',
                        'undo', 'redo'
                    ],
                    shouldNotGroupWhenFull: false,

                },
            } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
        }


        $(document).ready(function () {
            if(section_list.includes("basic_section")) {
                createEditor('basic_editor');
            }
            if(section_list.includes("background_image_section")){
                createEditor('background_editor');
            }

            if(section_list.includes("tab_section_1")){
                createEditor('mission_editor');
                createEditor('vision_editor');
                createEditor('goal_editor');
            }
            if(section_list.includes("tab_section_2")){
                createEditor('editor6');
                createEditor('editor7');
                createEditor('editor8');
                createEditor('editor9');
            }
        });

        if($.inArray("basic_section", section_list) !== -1) {

            $("#basic-form").submit(function(event){
                event.preventDefault(); //prevent default action
                var post_url       = $(this).attr("action"); //get form action url
                var request_method = $(this).attr("method"); //get form GET/POST method
                var form_data      = new FormData(this); //Creates new FormData object
                var divID          = $(this).attr('id')+'-ajax';
                var buttonID       = $(this).attr('id')+'-button';
                if (!this.checkValidity()) { return false;
                }else{
                    ElementData(post_url,request_method,form_data,divID,buttonID);
                }
            });

        }

        if($.inArray("call_to_action", section_list) !== -1) {
            $("#call-action-form").submit(function(event){
                event.preventDefault(); //prevent default action
                var post_url       = $(this).attr("action"); //get form action url
                var request_method = $(this).attr("method"); //get form GET/POST method
                var form_data      = new FormData(this); //Creates new FormData object
                var divID          = $(this).attr('id')+'-ajax';
                var buttonID       = $(this).attr('id')+'-button';
                console.log(divID);
                if (!this.checkValidity()) { return false;
                }else{
                    ElementData(post_url,request_method,form_data,divID,buttonID);
                }
            });
        }





    </script>


@endsection
