@extends('admin.layouts.app')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Blog Post</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <style>
                textarea {
                    margin: 10px
                }
                img {
                    width: 40px;
                    height: auto;
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                        <div class="card-body">
                            <form action="{{ route('blog.update', $blog)}}" enctype="multipart/form-data" class="form-valide" method="POST">
                                @csrf @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Title *</label>
                                        <input type="text" class="form-control" required name="title" value="{{$blog->title}}">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Date *</label>
                                        <input type="date" required class="form-control" name="date" value="{{$blog->date}}">
                                    </div>
                                    <div>
                                        <label>Description Image</label>
                                        <input type="file" class="form-control" name="caption_image">
                                        <img src="{{$blog->caption_image}}" alt="">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Introduction *</label>
                                        <textarea name="intro" required id="" cols="30" rows="10">{{$blog->intro}}</textarea>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Paragraph 1 *</label>
                                        <textarea name="bp1" required id="" cols="30" rows="10">{{$blog->bp1}}</textarea>
                                    </div>
                                    <div>
                                        <label>Image 1</label>
                                        <input type="file" class="form-control" name="bimg1">
                                        <img src="{{$blog->bimg1}}" alt="">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Paragraph 2</label>
                                        <textarea name="bp2" id="" cols="30" rows="10">{{$blog->bp2}}</textarea>
                                    </div>
                                    <div>
                                        <label>Image 2</label>
                                        <input type="file" class="form-control" name="bimg2">
                                        <img src="{{$blog->bimg2}}" alt="">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Paragraph 3</label>
                                        <textarea name="bp3" id="" cols="30" rows="10">{{$blog->bp3}}</textarea>
                                    </div>
                                    <div>
                                        <label>Conclusion *</label>
                                        <textarea name="conclusion" required id="" cols="30" rows="10">{{$blog->conclusion}}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary px-3 ml-4">Save</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
@section('custom-script')
    <script src="{{ $admin_source }}/plugins/validation/jquery.validate.min.js"></script>
    <script src="{{ $admin_source }}/plugins/validation/jquery.validate-init.js"></script>
@endsection
