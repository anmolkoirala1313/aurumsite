@extends('backend.layouts.master')
@section('title') Edit a Page @endsection
@section('css')

    <style>
        /*for image*/
        .avatar-upload{
            max-width: 505px!important;
        }

        .current-img{
            border: 6px solid #f3f3f3;
            border-radius: 10px;
        }

        #blog-img{
            border: 6px solid #f3f3f3;
            border-radius: 10px;
        }
        /*end for image*/

        .nopad {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        /*image gallery*/
        .image-checkbox {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
            position:relative;
        }
        .image-checkbox input[type="checkbox"] {
            display: none;
        }

        .hidden{
            display: none;
        }

        .image-checkbox-checked {
            border-color: #4783B0;
        }
        .image-checkbox .fa {
            position: absolute;
            color: #4A79A3;
            background-color: #fff;
            padding: 5px;
            top: -4px;
            right: -3px;
            border: 4px solid #4A79A3;
            font-size: 21px;
        }
        .image-checkbox-checked .fa {
            display: block !important;
        }

        /*end of checklist design*/

    </style>
@endsection
@section('content')




    <div class="col-xl-9 col-lg-8 col-md-12">

        {!! Form::open(['method'=>'PUT','url'=>route('pages.update', $page->id),'class'=>'needs-validation','novalidate'=>'','enctype'=>'multipart/form-data']) !!}
        <div class="row">
            <div class="col-md-12">
                <div class="card ctm-border-radius shadow-sm flex-fill">
                    <div class="card-header">
                        <h4 class="card-title mb-0">
                            General Details
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Page Name <span class="text-muted text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$page->name}}" required>
                            <div class="invalid-feedback">
                                Please enter the page Name.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Slug <span class="text-muted text-danger">*</span></label>
                            <input type="text" class="form-control" name="slug" id="slug" value="{{$page->slug}}" required>
                            <div class="invalid-feedback">
                                Please enter the Page Slug.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card ctm-border-radius shadow-sm grow">
            <div class="card-header">
                <h4 class="card-title doc d-inline-block mb-0">Choose the Section for Pages </h4>
                <br/>
                <span class="ctm-text-sm">* Select the sections to use in the page by clicking on the section images below.</span>
            </div>
            <div class="card-body doc-boby">
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Basic Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('basic_section', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/basic_section.png')}}" />
                                    <input type="checkbox" name="section[]" value="basic_section" {{(in_array('basic_section', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Call to Action</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('call_to_action', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/calltoaction.png')}}" />
                                    <input type="checkbox" name="section[]" value="call_to_action" {{(in_array('call_to_action', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Background Image Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class='image-checkbox {{(in_array('background_image_section', $sections) ? "image-checkbox-checked":"")}}'>
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/background_image_section.png')}}" />
                                    <input type="checkbox" name="section[]" value="background_image_section" {{(in_array('background_image_section', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Mission, Vision & Goals: Tab Section 1</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('tab_section_1', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/mission_vision.png')}}" />
                                    <input type="checkbox" name="section[]" value="tab_section_1" {{(in_array('tab_section_1', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Tab Section 2</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('tab_section_2', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/tab_option2.png')}}" />
                                    <input type="checkbox" name="section[]" value="tab_section_2" {{(in_array('tab_section_2', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">List Section: Option 1 </h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Number of List <span class="text-muted text-danger">*</span></label>
                                    <select class="form-control select" name="list_number_1" id="list_number_1">
                                        <option {{($list1 == null) ? "disabled selected":"disabled"}}>Select Number of List</option>
                                        <option value="3" {{($list1 =="3") ? "selected":""}}>Three</option>
                                        <option value="6" {{($list1 =="6") ? "selected":""}}>Six</option>
                                        <option value="9" {{($list1 =="9") ? "selected":""}}>Nine</option>
                                    </select>
                                    <input type="hidden" name="list_1_id" value="{{$list1_id}}">
                                    <span class="ctm-text-sm text-warning">* Please choose the list numbers in odd format such as 3, 6, or 9.</span>
                                    <div class="invalid-feedback">
                                        Please enter the list number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('list_section_1', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" id="list_section_1" src="{{asset('assets/backend/img/page_sections/list_option1.png')}}" />
                                    <input type="checkbox" name="section[]" value="list_section_1" {{(in_array('list_section_1', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">List Section: Option 2 </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Select number of List <span class="text-muted text-danger">*</span></label>
                                    <select class="form-control select" name="list_number_2" id="list_number_2">
                                        <option {{($list2 == null) ? "disabled selected":"disabled"}}>Select Number of List</option>
                                        <option value="3" {{($list2 =="3") ? "selected":""}}>Three</option>
                                        <option value="6" {{($list2 =="6") ? "selected":""}}>Six</option>
                                        <option value="9" {{($list2 =="9") ? "selected":""}}>Nine</option>
                                    </select>
                                    <input type="hidden" name="list_2_id" value="{{$list2_id}}">
                                    <span class="ctm-text-sm text-warning">* Please choose the list numbers in odd format such as 3, 6, or 9.</span>
                                    <div class="invalid-feedback">
                                        Please enter the list number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('list_section_2', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/list_option2.png')}}" />
                                    <input type="checkbox" name="section[]" value="list_section_2" {{(in_array('list_section_2', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Gallery Section </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('gallery_section', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/gallery_section.png')}}" />
                                    <input type="checkbox" name="section[]" value="gallery_section" {{(in_array('gallery_section', $sections) ? "checked":"")}}  />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Process Selection</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Select number of Process Steps <span class="text-muted text-danger">*</span></label>
                                    <select class="form-control select" name="list_number_3" id="list_number_3">
                                        <option {{($list3 == null) ? "disabled selected":"disabled"}}>Select Number of List</option>
                                        <option value="3" {{($list3 =="3") ? "selected":""}}>Three</option>
                                        <option value="6" {{($list3 =="6") ? "selected":""}}>Six</option>
                                        <option value="9" {{($list3 =="9") ? "selected":""}}>Nine</option>
                                    </select>
                                    <input type="hidden" name="list_3_id" value="{{$list3_id}}">
                                    <span class="ctm-text-sm text-warning">* Please choose the list numbers in odd format such as 3, 6, or 9.</span>
                                    <div class="invalid-feedback">
                                        Please enter the list number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="image-checkbox {{(in_array('process_selection', $sections) ? "image-checkbox-checked":"")}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/img/page_sections/process_section.png')}}" />
                                    <input type="checkbox" name="section[]" value="process_selection" {{(in_array('process_selection', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-3">
            <button type="submit" class="btn btn-theme button-1 text-white ctm-border-radius mt-4" name="status" value="active">Active</button>
            <button type="submit" class="btn btn-theme button-1 text-white ctm-border-radius mt-4" name="status" value="deactive">De-Active</button>
        </div>

        {!! Form::close() !!}


    </div>




@endsection

@section('js')

    <script type="text/javascript">

        $("#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            var regExp = /\s+/g;
            Text = Text.replace(regExp,'-');
            $("#slug").val(Text);
        });

        // $(document).ready(function () {
        //
        //
        // });

        // image gallery
        // init the state from the input
        $(".image-checkbox").each(function () {
            if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                $(this).addClass('image-checkbox-checked');
            }

        });

        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
            $(this).toggleClass('image-checkbox-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop("checked",!$checkbox.prop("checked"))

            e.preventDefault();
        });

    </script>
@endsection



