@extends('backend.layouts.master')
@section('title') Blog @endsection
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

        .current-img{
            border: 6px solid #f3f3f3;
            border-radius: 10px;
        }

        #blog-img{
            border: 6px solid #f3f3f3;
            border-radius: 10px;
            width: 400px;
            height: 150px;
        }

        /*end for image*/

        .ck-editor__editable_inline {
            min-height: 150px !important;
        }

        .avatar-upload .blog-preview{
            width: 180px;
            height: 150px;
            position: relative;
        }

        table td {
            font-size: 18px;
        }


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
                            Blogs </a>
                    </li>
                    <li class="list-group-item text-center button-6">
                        <a class="in-active"
                           id="sensitive-info-tab" data-toggle="pill" data-number="" href="#sensitive-info" role="tab"
                           aria-controls="media" aria-selected="false">
                            Blog Category </a>
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

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    {!! Form::open(['route' => 'blog.store','method'=>'post','class'=>'needs-validation','novalidate'=>'','enctype'=>'multipart/form-data']) !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card ctm-border-radius shadow-sm grow flex-fill">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">
                                                        Blog Post Details
                                                    </h4>
                                                </div>

                                                <div class="card-body">
                                                    <div class="form-group mb-3">
                                                        <label>Title <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="title" name="title" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the post title.
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Slug <span class="text-muted text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="slug" id="blog-slug" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the post Slug.
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label>Summary <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" rows="6" name="excerpt" id="excerpt" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter the post summary.
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label>Description <span class="text-muted text-danger">*</span></label>
                                                        <textarea class="form-control" rows="6" name="description" id="editor" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Please enter the post description.
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card ctm-border-radius shadow-sm grow flex-fill">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">
                                                        Blog Post Details <span class="text-muted text-danger">*</span>
                                                    </h4>
                                                </div>
                                                <div class="card-body">

                                                    <div class="row justify-content-center">
                                                        <div class="col-9 mb-4">
                                                            <div class="custom-file h-auto">
                                                                <div class="avatar-upload">
                                                                    <div class="avatar-edit">
                                                                        <input type="file"  accept="image/png, image/jpeg" class="custom-file-input" hidden id="imageUpload" onchange="loadFile(event)" name="image" required>
                                                                        <label for="imageUpload"></label>
                                                                        <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                                                            Please select a image.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <img id="current-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="blog_image" class="w-100 current-img">
                                                            </div>
                                                            <span class="ctm-text-sm">*use image minimum of 1170 x 795px for blog</span>
                                                        </div>

                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label>Category <span class="text-muted text-danger">*</span></label>
                                                        <select class="form-control" name="blog_category_id" required>
                                                            <option value disabled selected>Select Blog Category</option>
                                                            @if(!empty(@$categories))
                                                                @foreach(@$categories as $categoryList)
                                                                    <option value="{{ @$categoryList->id }}" >{{ ucwords(@$categoryList->name) }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a category.
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-theme button-1 text-white ctm-border-radius mt-4" name="status" value="publish">Publish</button>
                                                        <button type="submit" class="btn btn-theme button-1 text-white ctm-border-radius mt-4" name="status" value="draft">Draft</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="company-doc">
                                                <div class="card ctm-border-radius shadow-sm grow">
                                                    <div class="card-header">
                                                        <h4 class="card-title d-inline-block mb-0">
                                                            Blog List
                                                        </h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="employee-office-table">
                                                            <div class="table-responsive">
                                                                <table id="blog-index-table" class="table custom-table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Post Feature Image</th>
                                                                        <th>Title</th>
                                                                        <th>Category</th>
                                                                        <th>Status</th>
                                                                        <th class="text-right">Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @if(@$blogs)
                                                                        @foreach($blogs as  $blog)
                                                                            <tr>
                                                                                <td class="align-middle pt-6 pb-4 px-6">
                                                                                    <div class="avatar-upload">
                                                                                        <div class="blog-preview">
                                                                                            <img id="blog-img" src="{{asset('/images/uploads/blog/'.@$blog->image)}}" alt="{{@$blog->slug}}"/>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>{{ucfirst($blog->title)}}</td>
                                                                                <td>{{ucfirst($blog->category->name)}}</td>
                                                                                <td>

                                                                                    <div class="dropdown action-label drop-active">
                                                                                        <a href="javascript:void(0)" class="btn btn-white btn-sm" data-toggle="dropdown" aria-expanded="false"> {{(($blog->status == 'draft') ? "Draft":"Publish")}}
                                                                                        </a>
                                                                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                                                                            @if($blog->status == 'draft')

                                                                                                <a class="dropdown-item status-update" hrm-update-action="{{route('blog-status.update',$blog->id)}}" href="#" id="publish"> Publish </a>
                                                                                            @else
                                                                                                <a class="dropdown-item status-update" hrm-update-action="{{route('blog-status.update',$blog->id)}}" href="#" id="draft"> Draft </a>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-right">
                                                                                    <div class="dropdown action-label drop-active">
                                                                                        <a href="javascript:void(0)" class="btn btn-white btn-sm" data-toggle="dropdown" aria-expanded="false"> <span class="lnr lnr-cog"></span>
                                                                                        </a>
                                                                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                                                                            <a class="dropdown-item action-blog-edit" href="#" hrm-update-action="{{route('blog.update',$blog->id)}}" hrm-edit-action="{{route('blog.edit',$blog->id)}}"> Edit </a>
                                                                                            <a class="dropdown-item action-blog-delete" href="#" hrm-delete-per-action="{{route('blog.destroy',$blog->id)}}"> Delete </a>
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

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card ctm-border-radius shadow-sm grow flex-fill">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">
                                                    Add Blog Category
                                                </h4>
                                            </div>
                                            {!! Form::open(['route' => 'blogcategory.store','method'=>'post','class'=>'needs-validation','novalidate'=>'']) !!}

                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label>Category Name <span class="text-muted text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name" id="name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter the category name.
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Slug <span class="text-muted text-danger">*</span></label>
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
                                    <div class="col-md-8">
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
                                                                                    <a class="dropdown-item action-edit" href="#" hrm-update-action="{{route('blogcategory.update',$categoryList->id)}}" hrm-edit-action="{{route('blogcategory.edit',$categoryList->id)}}"> Edit </a>
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
                        <label>Category Name <span class="text-muted text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="update-name" required>
                        <div class="invalid-feedback">
                            Please enter the category name.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Slug <span class="text-muted text-danger">*</span></label>
                        <input type="text" class="form-control" name="slug" id="update-slug" required>
                        <div class="invalid-feedback">
                            Please enter the category Slug.
                        </div>
                    </div>

                    <button type="button" class="btn btn-danger float-right ml-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-theme text-white ctm-border-radius float-right button-1">Update</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="edit_blog">
        <form action="#" method="post" id="deleted-form" >
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
        </form>
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                {!! Form::open(['method'=>'PUT','class'=>'needs-validation updateblog','novalidate'=>'','enctype'=>'multipart/form-data']) !!}

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title mb-3">Edit Blog Category</h4>

                    <div class="form-group mb-3">
                        <label>Title <span class="text-muted text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="edit-title" required>
                        <div class="invalid-feedback">
                            Please enter the post title.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Slug <span class="text-muted text-danger">*</span></label>
                        <input type="text" class="form-control" name="slug" id="blog-edit-slug" required>
                        <input type="hidden"  name="status" id="edit-status" required>
                        <div class="invalid-feedback">
                            Please enter the post Slug.
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Summary <span class="text-muted text-danger">*</span></label>
                        <textarea class="form-control" rows="6" name="excerpt" id="edit-excerpt" required></textarea>
                        <div class="invalid-feedback">
                            Please enter the post summary.
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Description <span class="text-muted text-danger">*</span></label>
                        <textarea class="form-control update-descp" rows="6" name="description" id="edit-editor" required></textarea>
                        <div class="invalid-feedback">
                            Please enter the post description.
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-9 mb-4">
                            <div class="custom-file h-auto">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="file" class="custom-file-input" hidden id="images-edit" onchange="loadeditFile(event)" name="image">
                                        <label for="images-edit"></label>
                                        <div class="invalid-feedback" style="position: absolute; width: 45px;">
                                            Please select a image.
                                        </div>
                                    </div>
                                </div>
                                <img id="current-edit-img" src="{{asset('/images/uploads/default-placeholder.png')}}" alt="blog_image" class="w-100 current-img">
                            </div>
                            <span class="ctm-text-sm">*use image minimum of 1170 x 795px for blog</span>
                        </div>

                    </div>

                    <div class="form-group mb-3">
                        <label>Category <span class="text-muted text-danger">*</span></label>
                        <select class="form-control" name="blog_category_id" id="edit-blog-cat" required>
                            <option value disabled>Select Blog Category</option>
                            @if(!empty(@$categories))
                                @foreach(@$categories as $categoryList)
                                    <option value="{{ @$categoryList->id }}" >{{ ucwords(@$categoryList->name) }}</option>
                                @endforeach
                            @endif
                        </select>
                        <div class="invalid-feedback">
                            Please select a category.
                        </div>
                    </div>


                    <button type="button" class="btn btn-danger float-right ml-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-theme text-white ctm-border-radius float-right button-1 mb-4">Update</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>



@endsection

@section('js')
    <script src="{{asset('assets/backend/plugins/ckeditor/ckeditor.js')}}"></script>
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
            $('#blog-category-index, #blog-index-table').DataTable({
                paging: true,
                searching: true,
                ordering:  true,
                lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
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

        $("#title").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        var regExp = /\s+/g;
        Text = Text.replace(regExp,'-');
        $("#blog-slug").val(Text);
    });

        $("#edit-title").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            var regExp = /\s+/g;
            Text = Text.replace(regExp,'-');
            $("#blog-edit-slug").val(Text);
        });


        ClassicEditor
        .create( document.querySelector( '#editor' ), {
            toolbar : {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'link', '|',
                    'outdent', 'indent', '|',
                    'bulletedList', 'numberedList', '|',
                    'insertTable', 'blockQuote', '|',
                    'undo', 'redo'
                ],
                shouldNotGroupWhenFull: false
            }

        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );

        ClassicEditor
            .create( document.querySelector( '#edit-editor' ), {
                toolbar : {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', '|',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', '|',
                        'insertTable', 'blockQuote', '|',
                        'undo', 'redo'
                    ],
                    shouldNotGroupWhenFull: false
                }

            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );

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

    //Blog category
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
    // end of blog category

    //blog

    $(document).on('click','.action-blog-edit', function (e) {
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
                $("#edit_blog").modal("toggle");
                $('#edit-title').attr('value',dataResult.title);
                $('#blog-edit-slug').attr('value',dataResult.slug);
                $('#edit-excerpt').text(dataResult.excerpt);
                $('#edit-status').attr('value',dataResult.status);
                editor.setData( dataResult.description );
                $('#current-edit-img').attr("src",'/images/uploads/blog/'+dataResult.image );
                $('#edit-blog-cat option[value="'+dataResult.blog_category_id+'"]').prop('selected', true);
                $('.updateblog').attr('action',action);

            },
            error: function(error){
                console.log(error)
            }
        });
    });

    $(document).on('click','.action-blog-delete', function (e) {
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


                    swal("Deleted!", "Blog Deleted Successfully", "success");
                    $(response).remove();
                    setTimeout(function() {
                        window.location.reload();
                    }, 2500);


                    })
                    .fail(function(response){
                        console.log(response)
                    });
            })

        })

    $(document).on('click','.status-update', function (e) {
            e.preventDefault();
            var status = $(this).attr('id');
            var url = $(this).attr('hrm-update-action');
            if(status == 'draft'){
                swal({
                    title: "Are You Sure?",
                    text: "Setting the post status to Draft will prevent them from displaying. \n \n Set their status to Publish to enable the displaying feature!",
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
                    swal("Success!", "Post Status has been updated", "success");
                    $(dataResult).remove();
                    setTimeout(function() {
                        window.location.reload();
                    }, 2500);
                }else{
                    swal({
                        title: "Error!",
                        text: "Failed to update post status",
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
                    text: "Error. Could not confirm the status of the post.",
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
