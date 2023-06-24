@extends('front.layout.master')
@section('title','Trang Chủ')
@section('body')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i  class="fa fa-home">Cửa Hàng</i></a>
                        <span>Tạp chí</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-1 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Tìm Kiếm</h4>
                            <form action="">
                                <input type="text"  placeholder="...." name="" id="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Chủ Đề</h4>
                            <ul>
                                <li><a href="">Hoang Son</a></li>
                                <li><a href="">Du Lịch</a></li>
                                <li><a href="">Thế Giới</a></li>
                                <li><a href="">Thời trang</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Bài Đăng Gần Đây</h4>
                            <div class="recent-blog">
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/blog-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>the personality trait that makes</h6>
                                        <p>sondeptrai <span>May 19, 2022</span></p>
                                    </div>
                                </a>
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/blog-2.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>the personality trait that makes</h6>
                                        <p>sondeptrai <span>May 19, 2022</span></p>
                                    </div>
                                </a>
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/blog-3.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>the personality trait that makes</h6>
                                        <p>sondeptrai <span>May 19, 2022</span></p>
                                    </div>
                                </a>
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/blog-4.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>the personality trait that makes</h6>
                                        <p>sondeptrai <span>May 19, 2022</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Liên Quan</h4>
                            <div class="tag-item">
                                <a href="">Towel</a>
                                <a href="">To4wel</a>
                                <a href="">To3wel</a>
                                <a href="">Tow4el</a>
                                <a href="">Tow4el</a>
                                <a href="">Tow5el</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-2 order-lg-2">
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
                        <div class="col-lg-12">
                           {{$products->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
