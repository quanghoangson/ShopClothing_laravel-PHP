@extends('front.layout.master')

@section('title','Đăng Kí')

@section('body')
    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i  class="fa fa-home">Home</i></a>

                        <span>Đăng Ký</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Đăng Ký </h2>
                        @if(session('notification'))
                            <div class="alert alert-warning" role="alert">
                                {{session('notification')}}
                            </div>
                        @endif

                        <form action="" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="username">Tên</label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="group-input">
                                <label for="username">Gmail</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật Khẩu</label>
                                <input type="password" name="password" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Nhập Mật Khẩu</label>
                                <input type="password" name="password_confirmation" id="con-pass">
                            </div>
                            <button type="submit" class="site-btn register-btn">Đăng Ký</button>
                        </form>
                        <div class="switch-login">
                            <a href="./account/login" class="or-login">Hoặc Đăng Nhập</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- end body -->


    @endsection
