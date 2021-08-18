@extends('backend.layouts.master')
@section('title') Profile @endsection
@section('css')

    <style>
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

        #current-img{
            border: 6px solid #f3f3f3;
            border-radius: 10px;
        }



        /*end for image*/


    </style>
@endsection
@section('content')



    <div class="col-xl-9 col-lg-8  col-md-12">
        <div class="collapse-tabs">
            <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm grow bg-white p-4 mb-4 card">
                <ul class="list-group list-group-horizontal-lg" role="tablist">
                    <li class="list-group-item text-center active button-5">
                        <a class="active"
                           id="general-info-tab" data-toggle="pill" href="#general-info"
                           role="tab" aria-controls="description" aria-selected="true">
                            Blog Category </a>
                    </li>
                    <li class="list-group-item text-center button-6">
                        <a class="in-active"
                           id="sensitive-info-tab" data-toggle="pill" data-number="" href="#sensitive-info" role="tab"
                           aria-controls="media" aria-selected="false">
                            Blog </a>
                    </li>
                </ul>
            </div>


            <div class="tab-content shadow-none p-0">

                <div id="collapse-tabs-accordion">
                    <div class="tab-pane tab-pane-parent show active px-0" id="general-info"
                         role="tabpanel" aria-labelledby="general-info-tab">
                        <div class="bg-transparent border-0">
                            <div id="general-info-collapse" class="collapse show collapsible"
                                 aria-labelledby="heading-general-info"
                                 data-parent="#collapse-tabs-accordion">
                                {{-- Tab content --}}

                                <div class="col-xl-12 col-lg-8 col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <div class="card ctm-border-radius shadow-sm grow flex-fill">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">
                                                        Add Blog Category
                                                        <a href="javascript:void(0)" class="float-right text-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </h4>
                                                </div>
                                                {!! Form::open(['route' => 'blogcategory.store','method'=>'post','class'=>'needs-validation','novalidate'=>'']) !!}

                                                <div class="card-body">
                                                    <div class="form-group mb-3">
                                                        <label>Category Name</label>
                                                        <input type="text" class="form-control" name="name" id="name" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the catgeory name.
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Slug</label>
                                                        <input type="text" class="form-control" name="slug" id="slug" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the category Slug.
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <button type="submit" class="btn btn-theme text-white ctm-border-radius button-1">Add Category Information</button>
                                                    </div>
                                                </div>

                                                {!! Form::close() !!}

                                            </div>
                                        </div>
                                        <div class="col-md-8 d-flex">
                                            <div class="card ctm-border-radius shadow-sm grow flex-fill">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">
                                                        Category List
                                                    </h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="employee-office-table">
                                                        <div class="table-responsive">
                                                            <table id="blog-category-index" class="table custom-table">
                                                                <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Slug</th>
                                                                    <th class="text-right">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @if(!empty($categories))
                                                                    @foreach($categories as  $categoryList)
                                                                        <tr>
                                                                            <td>{{ ucwords(@$categoryList->name) }}</td>
                                                                            <td>{{ @$categoryList->slug }}</td>
                                                                            <td class="text-right">
                                                                                <div class="dropdown action-label drop-active">
                                                                                    <a href="javascript:void(0)" class="btn btn-white btn-sm" data-toggle="dropdown" aria-expanded="false"> <span class="lnr lnr-cog"></span>
                                                                                    </a>
                                                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                                                                        <a class="dropdown-item action-edit" href="#" hrm-update-action="{{route('blogcategory.update',$categoryList->id)}}"  hrm-edit-action="{{route('blogcategory.edit',$categoryList->id)}}"> Edit </a>
                                                                                        <a class="dropdown-item action-delete" href="#" hrm-delete-per-action="{{route('blogcategory.destroy',$categoryList->id)}}"> Delete </a>
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


                                {{-- End of Tab content --}}

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane tab-pane-parent fade px-0" id="sensitive-info" role="tabpanel"
                         aria-labelledby="sensitive-info-tab">
                        <div class="bg-transparent border-0">
                            <div id="sensitive-info-collapse" class="collapse show collapsible"
                                 aria-labelledby="heading-sensitive-info"
                                 data-parent="#collapse-tabs-accordion">
                                {{--  Tab content--}}

                                Blog contents



                                {{--  End Tab content--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="edit_blog_category">
        <form action="#" method="post" id="deleted-form" >
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
        </form>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                {!! Form::open(['method'=>'PUT','class'=>'needs-validation updateblogcategory','novalidate'=>'']) !!}

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title mb-3">Edit Blog Category</h4>
                    <div class="form-group mb-3">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="name" id="update-name" required>
                        <div class="invalid-feedback">
                            Please enter the category name.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug" id="update-slug" required>
                        <div class="invalid-feedback">
                            Please enter the category Slug.
                        </div>
                    </div>

                    <button type="button" class="btn btn-danger float-right ml-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-theme text-white ctm-border-radius float-right button-1">Update</button>
                    {!! Form::close() !!}
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

        $(document).ready(function () {
            $('#blog-category-index').DataTable({
                paging: true,
                searching: true,
                ordering:  true,
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            });

        });

        $("#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            var regExp = /\s+/g;
            Text = Text.replace(regExp,'-');
            $("#slug").val(Text);
        });

        $("#update-name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            var regExp = /\s+/g;
            Text = Text.replace(regExp,'-');
            $("#update-slug").val(Text);
        });

        //necessary for switching tabs
        $(document).on('click','li.list-group-item a', function (e) {
            var t = $(this);
            t.parents('.list-group').find('li').removeClass('active');
            t.parents('.list-group').find('li').removeClass('button-5');
            t.parents('.list-group').find('li').addClass('button-6');
            t.parentsUntil('.list-group', 'li').addClass('active');
            t.parentsUntil('.list-group', 'li').addClass('button-5');
            t.parentsUntil('.list-group', 'li').removeClass('button-6');

            //retrieve the href value of the active tab link
            var id = $(this).attr('href');
            //remove the class show from tabs which is not active and add class fade
            $(".tab-pane:not(.active)").addClass('fade')
            $(".tab-pane:not(.active)").removeClass('show')
            if($(id).hasClass('active')){
                //if the tab has active class, remove the class fade
                $(id).removeClass('fade');
            }
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
                    console.log(dataResult)
                    // $('#id').val(data.id);
                    $("#edit_blog_category").modal("toggle");
                    $('#update-name').attr('value',dataResult.name);
                    $('#update-slug').attr('value',dataResult.slug);
                    $('.updateblogcategory').attr('action',action);
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
                        if(response == 0){
                            swal({
                                title: "Warning.",
                                text: "You need to Remove Assigned Blogs",
                                type: "info",
                                showCancelButton: true,
                                closeOnConfirm: false,
                                showLoaderOnConfirm: true,
                            }, function(){
                                //window.location.href = ""
                                swal.close();
                            })

                        }else{

                            swal("Deleted!", "Deleted Successfully", "success");
                            // toastr.success('file deleted Successfully');
                            $(response).remove();
                            setTimeout(function() {
                                window.location.reload();
                            }, 2500);
                        }

                    })
                    .fail(function(response){
                        console.log(response)

                    });
            })

        })



    </script>
@endsection
