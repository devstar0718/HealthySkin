@extends('admin.layouts.app')

@section('pageTitle', 'User Edit')

@section('content')

    <div class="page-header">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a>Product</a>
                </li>
                <li class="breadcrumb-item active" id="product_title2" aria-current="page">New Product</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-2 col-md-12 mb-3">
                    <div class="nav flex-lg-column flex-sm-row nav-pills" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <a class="nav-link active product_title3" id="v-pills-home-tab" data-toggle="pill" role="tab"
                           aria-controls="v-pills-home" aria-selected="true">New Product</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Product</h6>
                                    <form id="kt_form_product" action="/admin/product/create_update" method="post"
                                          enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="product_id_hidden" name="product_id_hidden" value="">
                                        <div class="d-flex mb-3">
                                            <figure class="mr-3">
                                                <img width="150" class="rounded"
                                                     src="/assets/admin/media/image/user/blank.png" alt="...">
                                            </figure>
                                            <div>
                                                <p>Product Image</p>
                                                <button class="btn btn-outline-primary mr-2" id="image_change">Change
                                                    Avatar
                                                </button>
                                                <input id="product_image" type="file" name="product_image"
                                                       style="display: none;" accept=".png, .jpg, .jpeg"/>
                                                <button class="btn btn-outline-danger" id="image_remove">Remove Avatar
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input type="text" id="product_name" name="product_name"
                                                           class="form-control" value=""
                                                           placeholder="Enter Product name." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>URL</label>
                                                    <input type="text" id="url" name="url"
                                                           class="form-control" value=""
                                                           placeholder="Enter Product url." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Type1</label>
                                                    <input type="number" id="type1" name="type1" class="form-control"
                                                           value="" placeholder="Enter Type1." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Type2</label>
                                                    <input type="number" id="type2" name="type2" class="form-control"
                                                           value="" placeholder="Enter Type2." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Type3</label>
                                                    <input type="number" id="type3" name="type3" class="form-control"
                                                           value="" placeholder="Enter Type3." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Brand</label>
                                                    <input type="number" id="brand" name="brand" class="form-control"
                                                           value="" placeholder="Enter Brand." required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Popular</label>
                                                    <input type="number" id="popular" name="popular"
                                                           class="form-control" value="" placeholder="Enter Popular."
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
                                            </div>
                                        </div>
                                        <button class="btn btn-primary product_validate_btn">Save Changes</button>
                                        <button class="btn btn-outline-danger product_cancel_btn">Cancel</button>
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
            if (flag === "edit_product") {
                $("#product_title2").text("Edit Product");
                $(".product_title3").text("Edit Product");
                var product_id = sessionStorage.getItem("product_id");
                $("#product_id_hidden").val(product_id);
                product.csrf_();
                $.post("/admin/product/read", {id: product_id}, function (res) {
                    var result = res.data;
                    $("#product_name").val(result[0].name);
                    $(".rounded").attr("src", "/upload/product/" + result[0].id + ".png");
                    $("#url").val(result[0].url);
                    $("#type1").val(result[0].type1);
                    $("#type2").val(result[0].type2);
                    $("#type3").val(result[0].type3);
                    $("#brand").val(result[0].brand);
                    $("#popular").val(result[0].popular);
                    // $("#fashion").val(result[0].fashion);
                    $("#desc").val(result[0].desc);//alert(result[0].desc)
                });
            }


            $(".product_validate_btn").click(function () {
                product.csrf_();
                $("#kt_form_product").submit();
            });
            $(".product_cancel_btn").click(function () {
                window.location.href = "/admin/product";
            });
            $("#image_change").click(function (e) {
                e.preventDefault();
                $('#product_image').trigger('click');
            })
            $("#product_image").change(function (e) {
                var image_url = URL.createObjectURL(e.target.files[0]);
                $(".rounded").attr("src", image_url);
            });
            $("#image_remove").click(function (e) {
                e.preventDefault();
                $(".rounded").attr("src", "/assets/admin/media/image/user/blank.png");
            })
        })
        var product = {
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
