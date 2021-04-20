@extends('layouts.template')
@section('main-content')
    <section class="main-content">
        <div class="container">
            <div class="row pad-top-50">
                <h3 class="col-md-12 text-center">NisheSkin blog</h3>
                <div class="col-md-12 pad-top-50">
                    <div class="col-md-6 fl">
                        <a style="cursor: pointer" class="category-box fr active" id="category1">All about your skin</a>
                    </div>
                    <div class="col-md-6 fl">
                        <a style="cursor: pointer" class="category-box fl" id="category2">Skincare Product Reviews</a>
                    </div>
                </div>
                <span class="divider col-md-12 pad-top-50"></span>
            </div>
            <div class="row" id="post_list">
                @foreach($posts as $post)
                    <div class="post-box row">
                        <div class="col-md-7">
                            <span class="col-md-12">All about your skin</span>
                            <h4 class="col-md-12">{{$post['name']}}</h4>
                            <p class="col-md-12">
                                {{$post['desc']}}
                                <a href="blog/{{$post['id']}}">Read more</a>
                            </p>
                        </div>
                        <div class="col-md-5" style="margin: auto">
                            <img src="upload/post/{{$post['id']}}_1.png" style="max-width: 100%">
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12">
                    <div class="align-center" style="width: 250px">
                        <a href="#" class="light-btn col-md-12">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="assets/js/blog.js?v=202008101736"></script>
@endsection
