@extends('front.layout.master')

@section('title','Đăng nhập')

@section('body')
    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i  class="fa fa-home">Home</i></a>

                        <span>Đăng Nhập</span>
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
                        <h2>Đăng Nhập</h2>
                        @if(session('notification'))
                        <div class="alert alert-warning" role="alert">
                            {{session('notification')}}
                        </div>
                        @endif
                        <form action="" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="username">Tên Hoặc Gmail</label>
                                <input type="text" name="email" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật Khẩu</label>
                                <input type="password" name="password" id="pass">
                            </div>
                            <div class="group-input gi-check">
                               <div class="gi-more">
                                    <label for="save-pass">Lưu Mật Khuẩu
                                        <input type="checkbox" name="remember" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="" class="forget-pass">Quên Mất Khẩu</a>
                               </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">Đăng Nhập</button>
                        </form>
                        <div class="switch-login">
                            <a href="./account/register" class="or-login">Hoặc Tạo Tài Khoản Mới</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
