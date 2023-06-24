@extends('front.layout.master')
@section('title','Trang Chủ')
@section('body')
    <!-- body -->
    <br>
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/blackFriday_baner1.jpg">
                <div class="container">
                    <div class="row">

                    </div>
                    <div class="off-card">
                        <h2>sale  <span>50%</span> </h2>

                    </div>

                </div>

            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,Kids</span>
                            <h1>black friday</h1>
                            <p>fgkhsneg .gmsdogj kdlgm/gjmdsopg imsdkgdofigjdlkfsgoidfdflg4</p>
                            <a href="#" class="primary-btn"> shop now </a>
                        </div>

                    </div>
                    <div class="off-card">
                        <h2>sale  <span>50%</span> </h2>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4><a href="./shop/category/men"><b>ĐỒ NAM</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4><a href="./shop/category/women"><b>ĐỒ NỮ</b></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4><a href="./shop/category/kids"><b>ĐỒ TRẺ EM</b></a></h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg " data-setbg="front/img/products/women-large.jpg">
                        <h2>wwonmen's</h2>
                        <a href="#"> discover more</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="women">Tất Cả</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Quần Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="women">Túi Xách</li>
                            <li class="item" data-tag=".Shoes " data-category="women">Giày Dép</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Phụ Kiện Cá Nhân</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach($featuredProducts['women'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>deal of the weeek</h2>
                    <p>sdfknsdfsdfkdfsnifnskjfnfiodsjkfnsidfdsffn <br> dskjfbdfsddfsdsf</p>
                    <div class="product-price">
                        34.66$
                        <span>/hanbag</span>
                    </div>
                 </div>
                    <div class="countdown-timer " id="countdown">
                        <div class="cd-item">
                            <span>56</span>
                            <P>DAYS</P>
                        </div>
                        <div class="cd-item">
                            <span>12</span>
                            <P>DAYS</P>
                        </div>
                        <div class="cd-item">
                            <span>48</span>
                            <P>DAYS</P>
                        </div>
                        <div class="cd-item">
                            <span>52</span>
                            <P>DAYS</P>
                        </div>
                    </div>
                    <a href="" class="primary-btn">shop now</a>
            </div>
        </div>
    </section>

    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg " data-setbg="front/img/products/women-large.jpg">
                        <h2>Men</h2>
                        <a href="#"> discover more</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="men">Tất Cả</li>
                            <li class="item" data-tag=".Clothing" data-category="men">Quần Áo</li>
                            <li class="item" data-tag=".HandBag " data-category="men">Túi Xách</li>
                            <li class="item" data-tag=".Shoes " data-category="men">Giày</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Phụ Kiện Cá Nhân</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach($featuredProducts['men'] as $product)

                                @include('front.components.product-item')

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="instagram-photo">
        <div class="insta-item set-bg "  data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"> Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg "  data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"> Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg "  data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"> Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg "  data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"> Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg "  data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"> Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg "  data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#"> Collection</a></h5>
            </div>
        </div>
    </div>

    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>from the blog</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img src="front/img/blog/{{$blog->image}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        {{date('M d, Y', strtotime($blog->created_at))}}
                                        <!-- {{$blog->created_at}} -->
                                        <!-- ngay xuat ban -->
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment-o"></i>
                                        {{count( $blog->blogComments)}}
                                        <!-- tong so comment laay tu bang cmt -->
                                    </div>
                                </div>
                                <a href="">
                                    <h4>{{$blog->title}}</h4>
                                </a>
                                <p>{{$blog->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>free shipping </h6>
                                <p> for all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>free shipping </h6>
                                <p> for all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>free shipping </h6>
                                <p> for all order over 99$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end body -->

@endsection
