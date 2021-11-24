@extends('backend.layouts.master')
@section('title') Edit a Page @endsection
@section('css')

    <style>

        .upper-case{
            text-transform: capitalize;
        }

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

        /*for sortable*/
        #sortable { list-style-type: none; margin: 0; padding: 0; }
        #sortable li {cursor:move; margin-top: 10px;  transition: -webkit-transform ease-out 0.3s;
            -webkit-transform-origin: 50% 50%; }
        body.dragging, body.dragging * {cursor: move !important; }
        .dragged {position: absolute;z-index: 1; transform: perspective(800px) translateZ(20px);}
        #sortable li span { position: absolute; }
        #sortable li.fixed{cursor:default; color:#959595; opacity:0.5;}

        .div-center{
            margin: auto;width: 70%;
        }


        /*end of sortable*/

    </style>
@endsection
@section('content')




    <div class="col-xl-9 col-lg-8 col-md-12">

        {!! Form::open(['method'=>'PUT','id'=>'pageedit-form','url'=>route('pages.update', $page->id),'class'=>'needs-validation','novalidate'=>'','enctype'=>'multipart/form-data']) !!}
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
                                    <input type="checkbox" name="section[]" id="basic_section.png" value="basic_section" {{(in_array('basic_section', $sections) ? "checked":"")}} />
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
                                    <input type="checkbox" name="section[]" id="calltoaction.png" value="call_to_action" {{(in_array('call_to_action', $sections) ? "checked":"")}} />
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
                                    <input type="checkbox" name="section[]" id="background_image_section.png" value="background_image_section" {{(in_array('background_image_section', $sections) ? "checked":"")}} />
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
                                    <input type="checkbox" name="section[]" id="mission_vision.png" value="tab_section_1" {{(in_array('tab_section_1', $sections) ? "checked":"")}} />
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
                                    <input type="checkbox" name="section[]" id="tab_option2.png" value="tab_section_2" {{(in_array('tab_section_2', $sections) ? "checked":"")}} />
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
                                    <input type="checkbox" name="section[]" id="list_option1.png" value="list_section_1" {{(in_array('list_section_1', $sections) ? "checked":"")}} />
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
                                    <input type="checkbox" name="section[]" id="list_option2.png" value="list_section_2" {{(in_array('list_section_2', $sections) ? "checked":"")}} />
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
                                    <input type="checkbox" name="section[]" id="gallery_section.png" value="gallery_section" {{(in_array('gallery_section', $sections) ? "checked":"")}}  />
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
                                    <input type="checkbox" name="section[]" id="process_section.png" value="process_selection" {{(in_array('process_selection', $sections) ? "checked":"")}} />
                                    <i class="fa fa-check hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-3">
            <input type="hidden" name="status" id="status" value="{{$page->status}}"/>
            <button type="button" class="btn btn-theme button-1 text-white ctm-border-radius mt-4" name="btnstatus" id="status1" value="active">Active</button>
            <button type="button" class="btn btn-theme button-1 text-white ctm-border-radius mt-4" name="btnstatus" id="status1" value="deactive">De-Active</button>
        </div>

        {!! Form::close() !!}


    </div>


    <div class="modal fade bd-example-modal-lg" id="editStructure">
        <form action="#" method="post" id="deleted-form" >
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
        </form>
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title mb-3">Edit Your Page Sections Structure By Dragging Them</h4>

                    <div id="items-container">
                        <ul class="ui-sortable" id="sortable">
                            {{-- list of section with their names and images are added here via jquery--}}
                        </ul>
                    </div>

                    <div class="text-center mb-3">
                        <button id="submiteditpagedata" class="btn btn-theme button-1 text-white ctm-border-radius mt-4">Update Page</button>
                    </div>
                </div>

            </div>
        </div>
    </div>





@endsection

@section('js')
    <script src="{{asset('assets/backend/js/jquery-sortable.js')}}"></script>

    <script type="text/javascript">
        var section_list = new Array();
        var section_names = new Array();
        <?php foreach($ordered_sections as $key=>$value){ ?>
        section_list.push({
            name: '<?php echo $key; ?>',
            image: '<?php echo $value; ?>'
        });
        section_names.push('<?php echo $key; ?>');
        <?php } ?>


        //settings for sortable JS
        $("#sortable").sortable({
            onDrop: function ($item, container, _super) {
                //for animation
                var $clonedItem = $('<li/>').css({height: 0});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });
            },
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            //for animation
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });
        //settings for sortable JS

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

        $('#status1, #status2').click(function(event){
            event.preventDefault();
            var form = $('#pageedit-form')[0];
            if (!form.reportValidity()) {return false;}
            var status         = $(this).val();
            $('#status').val(status);
            var namelist = new Array();
            var newaddition = new Array();
            $("input:checkbox:checked").each(function() {
                //creating the array of section names only to check with db section names
                namelist.push($(this).val());
                //comparing all the selected sections from this edit page with original section list of DB
                //creating array of newly added sections only
                if($.inArray($(this).val(), section_names) == -1){
                    newaddition.push({
                        name: $(this).val(),
                        image:  $(this).attr("id")
                    });
                }
            });
            $("#editStructure").modal("toggle");//activate the modal
            $('#sortable').empty();//empty the sortable div data to avoid repetition
            let i = 1; //counter for the original section list
            section_list.forEach(function(item) {
                var name = item.name;
                var newname = name.replace(new RegExp('_', 'g')," ");
                //adding the original sections that were created with the page in the list first
                var dbsection = '<li class="'+item.name+'" id="' + i + '">' +
                    '<div class="col-md-10 div-center">' +
                    '<label class="upper-case">' + newname + '</label>' +
                    '<img src="/assets/backend/img/page_sections/' + item.image + '"/>' +
                    '</div>' +
                    '</li> ';
                $('#sortable').append(dbsection);
                i++;

                if($.inArray(item.name, namelist) == -1){
                    $('.'+item.name+'').remove();
                    //checking in the arrary if any of the original section is removed and if yes,
                    //removing them from the UL list as well
                }
            });

            //starting the counter where the first counter for already existing sections ended
            let j = i;
            //looping through the new sections which do not exist in the original section list from database
            newaddition.forEach(function(item) {
                var name = item.name;
                var newname = name.replace(new RegExp('_', 'g')," ");
                var replacements = '<li class="'+item.name+'" id="' + j + '">' +
                    '<div class="col-md-10 div-center">' +
                    '<label class="upper-case">' + newname + '</label>' +
                    '<img src="/assets/backend/img/page_sections/' + item.image + '"/>' +
                    '</div>' +
                    '</li> ';
                $('#sortable').append(replacements);
                j++;
                //populate the div by appending the image and section name from loop
            });
        });

        //submit the data from previous form and the values of sortable field on button click
        $('#submiteditpagedata').click(function(){
            var form       = $('#pageedit-form')[0];
            var form_data  = new FormData(form); //Creates new FormData object
            var section_name        = $('#sortable li').map(function(i) {
                return $(this).attr('class'); }).get();
            //get the names of the section present as class in sortable UL's li

            for (var i = 0; i < section_name.length; i++) {
                form_data.append('position[]', i+1);//send the position array in terms of number of li present in sortable UL
                form_data.append('sorted_sections[]', section_name[i]);//send the section names listed in sortable UL
            }
            var post_url       = $('#pageedit-form').attr("action"); //get form action url
            var request_method = $('#pageedit-form').attr("method"); //get form GET/POST method

            $.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false
            }).done(function(response){
                window.location.replace(response);
            });
        });

    </script>
@endsection



