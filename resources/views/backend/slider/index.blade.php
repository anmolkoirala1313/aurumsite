@extends('backend.layouts.master')
@section('title') Sliders @endsection
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


    </style>
@endsection
@section('content')

    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="company-doc">
                    <div class="card ctm-border-radius shadow-sm grow">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block mb-0">
                                Sliders
                            </h4>
                            @if(count($sliders)<3)
                                <a href="javascript:void(0)" class="float-right add-doc text-primary" data-toggle="modal" data-target="#addSlider">Add Slider
                                </a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="employee-office-table">
                                <div class="table-responsive">
                                    <table id="slider-index" class="table custom-table">
                                        <thead>
                                        <tr>
                                            <th>Slider Image</th>
                                            <th>heading</th>
                                            <th>Sub heading one</th>
                                            <th>Sub heading two</th>
                                            <th>status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(@$sliders)
                                            @foreach($sliders as  $slider)
                                                <tr>
                                                    <td class="align-middle pt-6 pb-4 px-6">
                                                        <div class="avatar-upload">
                                                            <div class="blog-preview">
                                                                <img id="blog-img" src="{{asset('/images/uploads/sliders/'.$slider->slider_image)}}" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$slider->heading}}</td>
                                                    <td>{{$slider->subheading_one}}</td>
                                                    <td>{{(!empty($slider->subheading_two)) ? $slider->subheading_two:"Not Assigned"}}</td>
                                                    <td><div class="dropdown action-label drop-active">
                                                            <a href="javascript:void(0)" class="btn btn-white btn-sm" data-toggle="dropdown" aria-expanded="false"> {{(($slider->status == 'active') ? "Active":"De-active")}}
                                                            </a>
                                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                                                @if($slider->status == 'active')

                                                                    <a class="dropdown-item status-update" hrm-update-action="{{route('sliders-status.update',$slider->id)}}" href="#" id="deactive"> De-active </a>
                                                                @else
                                                                    <a class="dropdown-item status-update" hrm-update-action="{{route('sliders-status.update',$slider->id)}}" href="#" id="active"> Active </a>
                                                                @endif
                                                            </div>
                                                        </div></td>
                                                    <td class="text-right">
                                                        <div class="dropdown action-label drop-active">
                                                            <a href="javascript:void(0)" class="btn btn-white btn-sm" data-toggle="dropdown" aria-expanded="false"> <span class="lnr lnr-cog"></span>
                                                            </a>
                                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                                                <a class="dropdown-item action-edit" href="#" hrm-update-action="{{route('sliders.update',$slider->id)}}" hrm-edit-action="{{route('sliders.edit',$slider->id)}}"> Edit </a>
                                                                <a class="dropdown-item action-delete" href="#" hrm-delete-per-action="{{route('sliders.destroy',$slider->id)}}"> Delete </a>
                                                            </div>
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
    </div>



    <div class="modal fade bd-example-modal-lg" id="addSlider">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                {!! Form::open(['route' => 'sliders.store','method'=>'post','class'=>'needs-validation','novalidate'=>'','enctype'=>'multipart/form-data']) !!}


                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title mb-3">Add Slider</h4>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="card ctm-border-radius shadow-sm flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        General Details
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Heading <span class="text-muted text-danger">*</span></label>
                                        <input type="text" class="form-control" name="heading" required>
                                        <div class="invalid-feedback">
                                            Please enter the slider heading.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Heading One <span class="text-muted text-danger">*</span></label>
                                        <input type="text" class="form-control" name="subheading_one" required>
                                        <div class="invalid-feedback">
                                            Please enter the slider subheading one.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Sub Heading Two</label>
                                            <input type="text" class="form-control" name="subheading_two">
                                            <div class="invalid-feedback">
                                                Please enter the slider subheading two.
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card ctm-border-radius shadow-sm flex-fill">
                            <div class="card-header">
                                <h4 class="card-title mb-0">
                                    Slider Image <span class="text-muted text-danger">*</span>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-9 mb-4">
                                        <div class="custom-file h-auto">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type="file" class="custom-file-input" hidden id="image" onchange="loadFile(event)" name="slider_image" required>
                                                    <label for="image"></label>
                                                    <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                        Please select a image.
                                                    </div>
                                                </div>
                                            </div>
                                            <img id="current-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="slider image" class="w-100 current-img">
                                        </div>
                                        <span class="ctm-text-sm">*use image minimum of 1920 x 850px for slider</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ctm-border-radius shadow-sm flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        Button Details
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Button one title <span class="text-muted text-danger">*</span></label>
                                        <input type="text" maxlength="12" class="form-control" name="button_one" required>
                                        <div class="invalid-feedback">
                                            Please enter button one title.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Button one link <span class="text-muted text-danger">*</span></label>
                                        <input type="text" class="form-control" name="button_one_link" required>
                                        <div class="invalid-feedback">
                                            Please enter the button one link.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Button Two</label>
                                        <input type="text" maxlength="12" class="form-control" name="button_two">
                                        <div class="invalid-feedback">
                                            Please enter the button two title.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Button two link</label>
                                        <input type="text" class="form-control" name="button_two_link">
                                        <div class="invalid-feedback">
                                            Please enter the slider button two link.
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
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="editSlider">
        <form action="#" method="post" id="deleted-form" >
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
        </form>
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                {!! Form::open(['method'=>'PUT','class'=>'needs-validation updateslider','novalidate'=>'','enctype'=>'multipart/form-data']) !!}

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title mb-3">Update Slider</h4>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="card ctm-border-radius shadow-sm flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        General Details
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Heading <span class="text-muted text-danger">*</span></label>
                                        <input type="text" class="form-control" name="heading" id="heading" required>
                                        <div class="invalid-feedback">
                                            Please enter the slider heading.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Heading One <span class="text-muted text-danger">*</span></label>
                                        <input type="text" class="form-control" name="subheading_one" id="subheading_one" required>
                                        <div class="invalid-feedback">
                                            Please enter the slider subheading one.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Heading Two</label>
                                        <input type="text" class="form-control" name="subheading_two" id="subheading_two">
                                        <div class="invalid-feedback">
                                            Please enter the slider subheading two.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card ctm-border-radius shadow-sm flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        Slider Image <span class="text-muted text-danger">*</span>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-9 mb-4">
                                            <div class="custom-file h-auto">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type="file" class="custom-file-input" hidden id="image-edit" onchange="loadeditFile(event)" name="slider_image">
                                                        <label for="image-edit"></label>
                                                        <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                            Please select a image.
                                                        </div>
                                                    </div>
                                                </div>
                                                <img id="current-edit-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="slider image" class="w-100 current-img">
                                            </div>
                                            <span class="ctm-text-sm">*use image minimum of 1920 x 850px for slider</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ctm-border-radius shadow-sm flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        Button Details
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Button one title <span class="text-muted text-danger">*</span></label>
                                        <input type="text" maxlength="12" class="form-control" name="button_one" id="button_one" required>
                                        <div class="invalid-feedback">
                                            Please enter button one title.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Button one link <span class="text-muted text-danger">*</span></label>
                                        <input type="text" class="form-control" name="button_one_link" id="button_one_link" required>
                                        <div class="invalid-feedback">
                                            Please enter the button one link.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Button Two</label>
                                        <input type="text" maxlength="12" class="form-control" name="button_two" id="button_two">
                                        <div class="invalid-feedback">
                                            Please enter the button two title.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Button two link</label>
                                        <input type="text" class="form-control" name="button_two_link" id="button_two_link">
                                        <input type="hidden" name="status" id="status">
                                        <div class="invalid-feedback">
                                            Please enter the slider button two link.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-theme button-1 text-white ctm-border-radius mt-4">Update</button>
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript">


        var loadFile = function(event) {
            var image = document.getElementById('image');
            var replacement = document.getElementById('current-img');
            replacement.src = URL.createObjectURL(event.target.files[0]);
        };

        var loadeditFile = function(event) {
            var image = document.getElementById('image-edit');
            var replacement = document.getElementById('current-edit-img');
            replacement.src = URL.createObjectURL(event.target.files[0]);
        };

        $(document).ready(function () {
            $('#slider-index').DataTable({
                paging: true,
                searching: true,
                ordering:  true,
                lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            });

        });

        $(document).on('click','.action-edit', function (e) {
            e.preventDefault();
            var url =  $(this).attr('hrm-edit-action');
            // console.log(action)
            var id=$(this).attr('id');
            var action = $(this).attr('hrm-update-action');

            $.ajax({
                url: $(this).attr('hrm-edit-action'),
                type: "GET",
                cache: false,
                dataType: 'json',
                success: function(dataResult){
                    // $('#id').val(data.id);
                    $("#editSlider").modal("toggle");
                    $('#heading').attr('value',dataResult.heading);
                    $('#subheading_one').attr('value',dataResult.subheading_one);
                    $('#subheading_two').attr('value',dataResult.subheading_two);
                    $('#status').attr('value',dataResult.status);
                    $('#current-edit-img').attr("src",'/images/uploads/sliders/'+dataResult.slider_image);
                    $('#button_one').attr('value',dataResult.button_one);
                    $('#button_one_link').attr('value',dataResult.button_one_link);
                    $('#button_two').attr('value',dataResult.button_two);
                    $('#button_two_link').attr('value',dataResult.button_two_link);
                    $('.updateslider').attr('action',action);

                },
                error: function(error){
                    console.log(error)
                }
            });
        });

        $(document).on('click','.action-delete', function (e) {
            e.preventDefault();
            var form = $('#deleted-form');
            var action = $(this).attr('hrm-delete-per-action');
            form.attr('action',$(this).attr('hrm-delete-per-action'));
            $url = form.attr('action');
            var form_data = form.serialize();
            // $('.deleterole').attr('action',action);
            swal({
                title: "Are You Sure?",
                text: "You will not be able to recover this",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function(){
                $.post( $url, form_data)
                    .done(function(response) {
                        swal("Deleted!", "Slider Deleted Successfully", "success");
                            $(response).remove();
                            setTimeout(function() {
                                window.location.reload();
                            }, 2500);


                    })
                    .fail(function(response){
                        console.log(response)

                    });
            });

        });

        $(document).on('click','.status-update', function (e) {
            e.preventDefault();
            var status = $(this).attr('id');
            var url = $(this).attr('hrm-update-action');
            if(status == 'deactive'){
                swal({
                    title: "Are You Sure?",
                    text: "Setting the slider status to de-active will prevent them from displaying. \n \n Set their status to Publish to enable the displaying feature!",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                }, function(){
                    statusupdate(url,status);
                });
            }else{
                statusupdate(url,status);
            }

        });

        //end of blog

        function statusupdate(url,status){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                url: url,
                type: "PATCH",
                cache: false,
                data:{
                    status: status,
                },
                success: function(dataResult){
                    if(dataResult == "yes"){
                        swal("Success!", "Slider Status has been updated", "success");
                        $(dataResult).remove();
                        setTimeout(function() {
                            window.location.reload();
                        }, 2500);
                    }else{
                        swal({
                            title: "Error!",
                            text: "Failed to update slider status",
                            type: "error",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true,
                        }, function(){
                            //window.location.href = ""
                            swal.close();
                        })
                    }
                },
                error: function() {
                    swal({
                        title: 'Blog Warning',
                        text: "Error. Could not confirm the status of the slider.",
                        type: "info",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                    });
                }
            });
        }



    </script>
@endsection



