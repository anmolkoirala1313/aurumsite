@extends('backend.layouts.master')
@section('title') Section Elements @endsection
@section('css')

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
                            <div class="row">
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
                                                <textarea class="form-control" rows="6" name="description" id="editor" required></textarea>
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
                                                                <input type="file" class="custom-file-input" hidden id="basic-image" onchange="loadbasicFile('basic-image','current-basic-img',event)" name="image">
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
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" id="basic-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                            </div>
                        @endif

                        @if($value == 'call_to_action')
                                <div class="row">
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
                                                    <div class="invalid-feedback">
                                                        Please enter the Call to action heading.
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label>Description <span class="text-muted text-danger">*</span></label>
                                                    <textarea class="form-control" rows="6" name="short_description" required></textarea>
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
                                <div class="text-center mt-3">
                                    <a href="javascript:void(0)" id="callaction-button-submit" class="btn btn-theme button-1 ctm-border-radius text-white">Add Details</a>
                                </div>
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
                                                <textarea class="form-control" rows="6" id="editor2" name="short_description" required></textarea>
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
                                                                <textarea class="form-control" rows="6" name="list_description[]" id="editor3" required></textarea>
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
                                                                    Please enter the Mission heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="list_description[]" id="editor4" required></textarea>
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
                                                                    Please enter the Mission heading.
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label>Description <span class="text-muted text-danger">*</span></label>
                                                                <textarea class="form-control" rows="6" name="list_description[]" id="editor5" required></textarea>
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
                            <div class="accordion add-tab-section2-details" id="accordion-details">

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
    <script type="text/javascript">

        var loadbasicFile = function(id1,id2,event) {
            var image       = document.getElementById(id1);
            var replacement = document.getElementById(id2);
            replacement.src = URL.createObjectURL(event.target.files[0]);
        };

        function createEditor( elementId ) {
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
            createEditor('editor');
            createEditor('editor2');
            createEditor('editor3');
            createEditor('editor4');
            createEditor('editor5');
            createEditor('editor6');
            createEditor('editor7');
            createEditor('editor8');
        });

    </script>
@endsection
