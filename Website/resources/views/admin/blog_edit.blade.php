@extends('admin.layouts.app')

@section('pageTitle', 'User Edit')

@section('content')

    <div class="page-header">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a>Blog</a>
                </li>
                <li class="breadcrumb-item active" id="post_title2" aria-current="page">New Blog</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-2 col-md-12 mb-3">
                    <div class="nav flex-lg-column flex-sm-row nav-pills" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <a class="nav-link active post_title3" id="v-pills-home-tab" data-toggle="pill" role="tab"
                           aria-controls="v-pills-home" aria-selected="true">New Blog</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Post</h6>
                                    <form id="kt_form_post" action="/admin/blog/create_update" method="post"
                                          enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="post_id_hidden" name="post_id_hidden" value="">
                                        <div class="d-flex mb-3">
                                            <figure class="mr-3">
                                                <img width="100" class="rounded" id="imagepreview1"
                                                     src="/assets/admin/media/image/user/blank.png" alt="...">
                                            </figure>
                                            <div>
                                                <p>Post Image(1)</p>
                                                <button class="btn btn-outline-primary mr-2" id="image_change1">Change
                                                    Avatar
                                                </button>
                                                <input id="post_image1" type="file" name="post_image1"
                                                       style="display: none;" accept=".png, .jpg, .jpeg, .svg, .pdf, .html"/>
                                                <button class="btn btn-outline-danger" id="image_remove1">Remove Avatar
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <figure class="mr-3">
                                                <img width="100" class="rounded" id="imagepreview2"
                                                     src="/assets/admin/media/image/user/blank.png" alt="...">
                                            </figure>
                                            <div>
                                                <p>Post Image(2)</p>
                                                <button class="btn btn-outline-primary mr-2" id="image_change2">Change
                                                    Avatar
                                                </button>
                                                <input id="post_image2" type="file" name="post_image2"
                                                       style="display: none;" accept=".png, .jpg, .jpeg, .svg, .pdf, .html"/>
                                                <button class="btn btn-outline-danger" id="image_remove2">Remove Avatar
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Blog Name</label>
                                                    <input type="text" id="post_name" name="post_name"
                                                           class="form-control" value=""
                                                           placeholder="Enter Blog name." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <input type="number" id="category" name="category"
                                                           class="form-control" value="" placeholder="Enter Category."
                                                           required>
                                                </div>
{{--                                                <div class="form-group">--}}
{{--                                                    <label>Fashion</label>--}}
{{--                                                    <input type="number" id="fashion" name="fashion"--}}
{{--                                                           class="form-control" value="" placeholder="Enter Fashion."--}}
{{--                                                           required>--}}
{{--                                                </div>--}}
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="desc" name="desc" rows="10"
                                                              style="width:100%" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Details</label>
                                                    <textarea class="form-control" id="details" name="details" rows="10"
                                                              style="width:100%" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary post_validate_btn">Save Changes</button>
                                        <button class="btn btn-outline-danger post_cancel_btn">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/jquery3.5.1.min.js"></script>
    <script>
        $("document").ready(function () {
            var flag = sessionStorage.getItem("flag");
            if (flag === "edit_post") {
                $("#post_title2").text("Edit Blog");
                $("#post_title3").text("Edit Blog");
                var post_id = sessionStorage.getItem("post_id");
                $("#post_id_hidden").val(post_id);
                post.csrf_();
                $.post("/admin/blog/read", {id: post_id}, function (res) {
                    var result = res.data;
                    $("#post_name").val(result[0].name);
                    $("#imagepreview1").attr("src", "/upload/post/" + result[0].id + "_1.png");
                    $("#imagepreview2").attr("src", "/upload/post/" + result[0].id + "_2.png");
                    $("#category").val(result[0].category);
                    $("#details").val(result[0].details);
                    $("#desc").val(result[0].desc);//alert(result[0].desc)
                });
            }


            $(".post_validate_btn").click(function () {
                post.csrf_();
                $("#kt_form_post").submit();
            });
            $(".post_cancel_btn").click(function () {
                window.location.href = "/admin/blog";
            });
            $("#image_change1").click(function (e) {
                e.preventDefault();
                $('#post_image1').trigger('click');
            })
            $("#post_image1").change(function (e) {
                var image_url = URL.createObjectURL(e.target.files[0]);
                $("#imagepreview1").attr("src", image_url);
            });
            $("#image_remove1").click(function (e) {
                e.preventDefault();
                $("#imagepreview1").attr("src", "/assets/admin/media/image/user/blank.png");
            })
            $("#image_change2").click(function (e) {
                e.preventDefault();
                $('#post_image2').trigger('click');
            })
            $("#post_image2").change(function (e) {
                var image_url = URL.createObjectURL(e.target.files[0]);
                $("#imagepreview2").attr("src", image_url);
            });
            $("#image_remove2").click(function (e) {
                e.preventDefault();
                $("#imagepreview2").attr("src", "/assets/admin/media/image/user/blank.png");
            })
        })
        var post = {
            csrf_: function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            }
        }
    </script>
@endsection
