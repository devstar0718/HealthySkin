@extends('admin.layouts.app')

@section('pageTitle', 'Orders')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <div class="dropdown">
            <a class="btn btn-primary" id="new_btn">
                <i class="ti-settings mr-1"></i> New Product
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Orders</h6>
                    <div class="table-responsive">
                        <table id="orders" class="table table-lg">
                            <thead>
                            <tr>
                                <th style="text-align-last: center; width:50px;">No</th>
                                <th style="text-align-last: center; width:100px;">Product Name</th>
                                <th style="text-align-last: center; width:200px;">Description</th>
                                <th style="text-align-last: center; width:80px;">URL</th>
                                <th style="text-align-last: center; width:80px;">DRY</th>
                                <th style="text-align-last: center; width:80px;">Type2</th>
                                <th style="text-align-last: center; width:80px;">Type3</th>
                                <th style="text-align-last: center; width:80px;">Brand</th>
                                <th style="text-align-last: center; width:80px;">Popular</th>
{{--                                <th style="text-align-last: center; width:80px;">Fashion</th>--}}
                                <th style="text-align-last: center; width:130px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $value)
                                <tr>
                                    <td style="text-align-last: center; width:50px;">{{$loop->iteration}}</td>
                                    <td style="text-align-last: center; width:100px;">
                                        <a class="d-flex align-items-center"><img width="40" src="/upload/product/{{$value->id}}.png" class="rounded mr-3" alt="grape">
                                            <span>{{substr($value->name, 0, 10)."..."}}</span>
                                        </a>
                                    </td>
                                    <td style="text-align-last: center; width:200px;">{{substr($value->desc, 0, 10)."..."}}</td>
                                    <td style="text-align-last: center; width:200px;">{{substr($value->url, 0, 10)."..."}}</td>
                                    <td style="text-align-last: center; width:80px;">{{$value->type1}}</td>
                                    <td style="text-align-last: center; width:80px;">{{$value->type2}}</td>
                                    <td style="text-align-last: center; width:80px;">{{$value->type3}}</td>
                                    <td style="text-align-last: center; width:80px;">{{$value->brand}}</td>
                                    <td style="text-align-last: center; width:80px;">{{$value->popular}}</td>
{{--                                    <td style="text-align-last: center; width:80px;">{{$value->fashion}}</td>--}}
                                    <td style="text-align-last: center; width:130px;">
                                        <a class="text-secondary edit_btn" id="{{$value->id}}" data-toggle="tooltip" title="Edit">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <a class="text-danger ml-2 del_btn" id="{{$value->id}}" data-toggle="tooltip" title="Delete">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
        $(document).ready(function(){
            $("#new_btn").click(function(){
                sessionStorage.setItem("flag","new_product");
                window.location.href="/admin/product/item";
            })
            $(document).on("click",".edit_btn",function(){
                var product_id=$(this).attr("id");
                sessionStorage.setItem("product_id",product_id);
                sessionStorage.setItem("flag","edit_product");
                window.location.href="/admin/product/item";
            });
            $(document).on("click",".del_btn",function(){
                var product_id=$(this).attr("id");
                product.csrf_();
                $.post("/admin/product/delete",{id:product_id},function(res){
                    if(res.data=="success")
                    {
                        alert("Deleted successfully!!!")
                        window.location.href="/admin/product";
                    }
                })
            });
        })
        var product={
            csrf_: function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            }
        }
    </script>
    <!-- Datatable -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>

    <script src="{{ url('/assets/admin/js/examples/pages/orders.js') }}"></script>


@endsection
