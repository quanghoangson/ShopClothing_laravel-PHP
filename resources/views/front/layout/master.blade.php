<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content=" unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
<!-- Start coding here -->
<!-- page p -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- end -->

<!-- header section  -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    quanghoangson2.3@gmai.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    0971213792
                </div>

            </div>


            <div class="ht-right">
                @if(Auth::check())
                    <a href="./account/logout" class="login-panel">
                        <i class="fa fa-user"></i>
                        {{Auth::user()->name}}  - <b>Đăng Xuất</b> </a>
                @else
                    <a href="./account/login" class="login-panel"><i class="fa fa-user"></i>Đăng Nhập</a>
                @endif
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width: 388px; ">
                        <option value="yt" data-image="" data-imagecss="flag yt"
                                data-title="English">Việt Nam</option>
                        <option value="yu" data-image="" data-imagecss="flag yu"
                                data-title="Bangladesh">English</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="https://www.facebook.com/qh.sonw" ><i class="ti-facebook"></i></a>
                    <a href="https://www.facebook.com/qh.sonw" ><i class="ti-twitter-alt"></i></a>
                    <a href="https://www.facebook.com/qh.sonw" ><i class="ti-linkedin"></i></a>
                    <a href="https://www.facebook.com/qh.sonw" ><i class="ti-pinterest"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2 ">
                    <div class="logo">
                      <a href="">
                            <img class="logo2" src="./front/img/LOGO_index.jpg"
                                 height="48" width="200" alt="">
                        </a>
{{--                        <a href="" class="text-decoration-none" style="background: #0c5460" >--}}
{{--                            <h4  class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">SƠN</span>SHOP</h4>--}}
{{--                        </a>--}}
                    </div>
                </div>

                <div class="col-lg-7 col-md-7"  >
                    <form action="shop">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Tất Cả</button>
                            <div class="input-group">
                                <input name="search" type="text" value="{{request('search')}}" placeholder="Tìm kiếm....">
                                <button type="submit" ><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 col-md-3">
                    <ul class="nav-right">
{{--                        <li class="heart-icon">--}}
{{--                            <a href="#">--}}
{{--                                <i class="icon_heart_alt"></i>--}}
{{--                                <span>1</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li class="cart-icon">
                            <a href="./cart">
                                <i class="icon_bag_alt"></i>
                                <span class="cart-count">{{Cart::count()}}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        @foreach(Cart::content() as $cart)

                                        <tr data-rowId="{{$cart->rowId}}">
                                            <td class="si-pic" style="height: 70px;"><img
                                                    src="front/img/products/{{$cart -> options->images[0]-> path}}" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>{{$cart -> price}} x {{$cart ->qty}}</p>
                                                    <h6>{{$cart->name}}</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i  class="ti-close"></i>
                                            </td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>Giá:</span>
                                    <h5>${{Cart::total()}}</h5>
                                </div>
                                <div class="select-button">
                                    <a href="./cart" class="primary-btn view-card">Xem Giỏ Hàng</a>
                                    <a href="./checkout" class="primary-btn checkout-btn">Thanh Toán</a>
                                </div>
                            </div>
                        </li>

                        <li class="cart-price">${{Cart::total()}}
                        </li>
                    </ul>
                </div>



            </div>
        </div>
    </div>

    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Tổng Hợp </span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Đồ Nam</a></li>
                        <li><a href="">Đồ Nữ</a></li>
                        <li><a href="#">Áo Hoodie</a></li>
                        <li><a href="#">BIKINI</a></li>
                        <li><a href="#">Phụ Kiện/Giày</a></li>
                        <li><a href="#">Đồ Trẻ Em</a></li>
                        <li><a href="#">Thời Trang</a></li>
                        <li><a href="#">Áo Khoác</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="{{(request()->segment(1)== '') ? 'active' : ''}}" ><a href="./">Trang chủ</a></li>
                    <li class="{{(request()->segment(1)== 'shop') ? 'active' : ''}}"><a href="./shop">Của hàng</a></li>
                    <li><a href="">collection</a>
                        <ul class="dropdown">
                            <li><a href="">men's</a></li>
                            <li><a href="">women's </a></li>
                            <li><a href="">kid's</a></li>
                        </ul>
                    </li>
                    <li class="{{(request()->segment(1)== 'blog') ? 'active' : ''}}"><a href="./blog">Tạp chí</a></li>
                    <li class="{{(request()->segment(1)== 'contact') ? 'active' : ''}}"><a href="./contact">Liên Hệ</a></li>
                    <li><a href="">Tùy Chọn</a>
                        <ul class="dropdown">
                            <li><a href="./account/my-order">Đơn Hàng</a></li>

                            <li><a href="./cart">Giỏ Hàng</a></li>
                            <li><a href="./checkout">Thanh Toán</a></li>
                            <li><a href="./faq">Câu Hỏi Thường Gặp</a></li>
                            <li><a href="register.html">Đăng Kí</a></li>
                            <li><a href="./account/login">Đăng Nhập</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>

</header>
<!-- end header -->

{{--boy--}}

    @yield('body')
{{--end--}}
<!-- partner logo section  -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end partner logo -->

<!-- footer section -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="front/img/_footer-logo.png" height="25" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>26 NGUYỄN TẠO</li>
                        <li>phone : 0971213792</li>
                        <li>EMAIL: STK_SHOP@GMAIL.COM</li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/qh.sonw" ><i class="fa fa-facebook"></i></a>
                        <a href="https://www.facebook.com/qh.sonw" ><i class="fa fa-instagram"></i></a>
                        <a href="https://www.facebook.com/qh.sonw" ><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/qh.sonw" ><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>THÔNG TIN</h5>
                    <ul>
                        <li><a href="#">Chúng Tôi</a></li>
                        <li><a href="#">Thanh Toán </a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Góp Ý</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>TÀI KHOẢN CỦA TÔI</h5>
                    <ul>
                        <li><a href="#">Tài khoản</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Giỏ Hàng</a></li>
                        <li><a href="#">Cửa hàng</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>THÔNG TIN MỚI NHẤT</h5>
                    <p>Nhập Email Để Nhận .....</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Email của bạn... !" name="" id="">
                        <button type="button">Xác Nhận</button>

                    </form>
                </div>

            </div>
        </div>

    </div>

    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                       @sondeptrai
                    </div>
                    <div class="payment-pic">
                        <img src="front/img/payment-method.png" alt="">

                    </div>

                </div>
            </div>

        </div>
    </div>

</footer>
<!-- end footer -->


<!-- Js Plugins -->
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet">
<script src="front/js/jquery-3.3.1.min.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<script src="front/js/jquery-ui.min.js"></script>
<script src="front/js/jquery.countdown.min.js"></script>
<script src="front/js/jquery.nice-select.min.js"></script>
<script src="front/js/jquery.zoom.min.js"></script>
<script src="front/js/jquery.dd.min.js"></script>
<script src="front/js/jquery.slicknav.js"></script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/owlcarousel2-filter.min.js"></script>
<script src="front/js/main.js"></script>
</body>

</html>
