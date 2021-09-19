@extends('backend.layouts.master')
@section('title') Create User @endsection
@section('content')

<div class="col-xl-9 col-lg-8  col-md-12">

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
</div>
</div>
@endsection
