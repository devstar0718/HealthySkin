<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nisheskin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    <link rel="stylesheet" href="/assets/plugins/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/style.css?v=202008101736">
    <link rel="icon" sizes="64x64" href="/assets/img/favicon.svg">
</head>
<body>
<header class="header-bar fl">
    <div class="container">
        <nav class="navbar navbar-expand navbar-light">
            <a class="navbar-brand logo-main" href="/"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Personalised Cosmetics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">What is NisheSkin?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://medium.com/@nisheskin">NisheSkin Blog</a>
                    </li>
                </ul>

                {{--                    <select class="dropdown float-right mar-20 form-inline my-2 my-lg-0">--}}
                {{--                        <option value="en">English</option>--}}
                {{--                        <option value="ru">Russian</option>--}}
                {{--                        <option value="it">Italy</option>--}}
                {{--                        <option value="cn">Chinese</option>--}}
                {{--                    </select>--}}
            </div>
        </nav>
    </div>
</header>
@yield('main-content')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="align-center footer-logo">
                    <img src="/assets/img/logo_webpage.svg" width="140">
                </div>
            </div>
            <span class="col-md-4 offset-md-4 footer-desc pad-bot-20">
                    Dedicated to offer cosmetic products tailored to your skin and
offer you innovative ways to analyse and track your skin health.
                </span>
            <div class="col-md-12 pad-top-50">
                <div class="align-center" style="width: 40px">
                    <img src="/assets/img/email.png" width="40">
                </div>
            </div>
            <span class="col-md-12 font-weight-bold font-14 text-center">Contact:</span>
            <span class="col-md-12 font-13 text-center pad-bot-30">info@nisheskin.com</span>
            <div class="col-md-6 offset-md-3">
                <div class="form-group row pad-top-50">
                    <div class="col-md-8 pad-right-0">
                        <input type="email" class="form-control" placeholder="Enter your email" id = "footer_email">
                    </div>
                    <button class="main-btn col-md-4" id = "footer_subscribe">Subscribe</button>
                </div>
            </div>
            <div class="col-md-12 pad-top-50">
                <div class="social-bar">
                    <a href="https://www.facebook.com/NisheSkin" class="social-icons"><i class="fab fa-facebook-f"></i> </a>
                    <a href="https://twitter.com/NisheSkin" class="social-icons"><i class="fab fa-twitter"></i> </a>
                    <a href="https://www.linkedin.com/in/matej-%C5%BEnidari%C4%8D-5516a4161/" class="social-icons"><i class="fab fa-linkedin-in"></i> </a>
                    <a href="https://https://www.instagram.com/nisheskin/" class="social-icons"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/" class="social-icons"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-6 offset-md-3 pad-top-40">
                <div class="d-flex terms">
                    <a href="policy" class="col-md-6">Privacy Policy</a>
                    <a href="term" class="col-md-6">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <a href="#" class="close-btn" data-dismiss="modal"><i class="far fa-times"></i> </a>
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
{{--                            aria-hidden="true"><i class="far fa-times"></i></span></button>--}}
                    <h3 class="title">join nishe community and recieve occasional updates about special offers and new
                        skincare products.</h3>
                </div>
                <div class="row" style="margin-top: 300px;">
                    <div class="col-md-6 offset-md-1">
                        <input type="email" placeholder="Enter your email" class="form-control" id="email">
                    </div>
                    <div class="col-md-4">
                        <button class="main-btn" type="submit" id="subscribe">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="loading-modal"><!-- Place at bottom of page --></div>
<script src="/assets/js/jquery3.5.1.min.js"></script>
<script src="/assets/plugins/bootstrap-4.5.0/js/bootstrap.js"></script>
<script src="/assets/js/app.js?v=202008121736"></script>
@yield('script')
</body>
</html>
