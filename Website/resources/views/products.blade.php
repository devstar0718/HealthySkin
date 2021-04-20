@extends('layouts.template')
@section('main-content')
    <section class="main-content">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 pad-top-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">All skincare products</li>
                        </ol>
                    </nav>
                    <div class="side-box">
{{--                        <a id="show_modal" href="#" data-toggle="modal" data-target="#exampleModal">--}}
                        <h4 class="box-title">CHOOSE YOUR SKIN TYPE</h4>
{{--                        </a>--}}
                        <div class="side-category pad-top-50">
                            <h5 class="category-title">Is your skin Dry, Oily or Combination?</h5>
                            <div class="col-md-12 check-group" id="type1">
                                <label class="checkbox-container">
                                    <p class="check-title">DRY <span class="title-desc"> <!--(number of products)--></span>
                                    </p>
                                    <input type="checkbox" name="type1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container">
                                    <p class="check-title">OILY <span class="title-desc"> <!--(number of products)--></span>
                                    </p>
                                    <input type="checkbox" name="type1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container">
                                    <p class="check-title">COMBINATION <span class="title-desc"> <!--(number of products)--></span>
                                    </p>
                                    <input type="checkbox" name="type1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="side-category">
                            <h5 class="category-title">Is your skin Resistant or Sensitive?</h5>
                            <div class="col-md-12 check-group" id="type2">
                                <label class="checkbox-container">
                                    <p class="check-title">RESISTANT <span class="title-desc"> <!--(number of products)--></span>
                                    </p>
                                    <input type="checkbox" name="type2">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container">
                                    <p class="check-title">SENSITIVE <span class="title-desc"> <!--(number of products)--></span>
                                    </p>
                                    <input type="checkbox" name="type2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="side-category">
                            <h5 class="category-title">Is your skin Tight or Wrinkled?</h5>
                            <div class="col-md-12 check-group" id="type3">
                                <label class="checkbox-container">
                                    <p class="check-title">TIGHT <span class="title-desc"> <!--(number of products)--></span>
                                    </p>
                                    <input type="checkbox" name="type3">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container">
                                    <p class="check-title">WRINKLED <span class="title-desc"> <!--(number of products)--></span>
                                    </p>
                                    <input type="checkbox" name="type3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="side-box">
                        <h4 class="box-title">CHOOSE YOUR PRODUCT TYPE</h4>
                        <div class="side-category">
                            <div class="col-md-12 check-group" id="brand">
                                <label class="checkbox-container">
                                    <p class="check-title">Luxury skincare</p>
                                    <input type="checkbox" name="brand">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container">
                                    <p class="check-title">Organic/Natural skincare</p>
                                    <input type="checkbox" name="brand">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container">
                                    <p class="check-title">Affordable skincare</p>
                                    <input type="checkbox" name="brand">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox-container">
                                    <p class="check-title">Kids skincare</p>
                                    <input type="checkbox" name="brand">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-md-8 content">
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <h4 class="content-title">Products <span class="title-desc"><!--(0)--></span></h4>
                            <div class="form-group">
                                <label for="select-product" class="show-product">Show products:</label>
                                <select id="select-product" class="dropdown round-border show-product">
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                </select>
                            </div>
                            <div class="form-group mar-left-20">
                                <label for="select-sort">Sort:</label>
                                <select id="select-sort" class="dropdown round-border">
                                    <option>Popular</option>
{{--                                    <option>Fashion</option>--}}
                                    <option>Brand</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="product_list">
                        @foreach($products as $product)
                            <div class="col-md-5">
                                <div class="product-item">
                                    <img src="upload/product/{{$product['id']}}.png">
                                    <h5>{{$product['name']}}</h5>
                                    <ul>
                                        <li> {{$product['desc']}}</li>
                                    </ul>
                                    <a class="main-btn" href={{'http://'.$product['url']}}>shop now</a>
                                </div>
                            </div>
                        @endforeach
                        {{--                        <div class="col-md-4">--}}
                        {{--                            <div class="product-item">--}}
                        {{--                                <img>--}}
                        {{--                                <h5>Product 1</h5>--}}
                        {{--                                <ul>--}}
                        {{--                                    <li>opis o produktu opis o produktu</li>--}}
                        {{--                                    <li>opis o produktu opis o produktu</li>--}}
                        {{--                                </ul>--}}
                        {{--                                <a class="main-btn" href="#">shop now</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagenate">
                                <label>Page</label>
                                <input type="text" value="1">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="assets/js/products.js?v=202008271736"></script>
@endsection

