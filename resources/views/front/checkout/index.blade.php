@extends('front.layout.master')

@section('title','Thanh Toán')

@section('body')
    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i  class="fa fa-home">Home</i></a>
                        <a href="./shop.html">Shop</a>
                        <span>Thanh Toán</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="checkout-section spad">
        <div class="container">
            <form action="" method="post" class="checkout-form">
                @csrf
                    <div class="row">
                        @if(Cart::count()>0)
                            <div class="col-lg-6">
                                <div class="checkout-content">
                                    <a href=".\account\login" class="content-btn">Đăng nhập?</a>
                                </div>
                                <h4>Chi tiết thanh toán </h4>
                                <div class="row">
                                    <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id ?? ''}}">
                                    <div class="col-lg-6">
                                        <label for="fir" >first name <span>*</span></label>
                                        <input type="text" name="first_name" id="fir" value="{{Auth::user()->name ?? ''}}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="last" >last name <span>*</span></label>
                                        <input type="text" name="last_name" id="last">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="cun-name" >company name </label>
                                        <input type="text" name="company_name" id="cun-name" value="{{Auth::user()->company_name ?? ''}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="cun" > conutry <span>*</span></label>
                                        <input type="text" name="country" id="cun" value="{{Auth::user()->country ?? ''}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="street" > street address <span>*</span></label>
                                        <input type="text" name="street_address" id="street" class="street-first" value="{{Auth::user()->street_address ?? ''}}">

                                    </div>
                                    <div class="col-lg-12">
                                        <label for="zip" > postcode/ZIP (optional) <span>*</span></label>
                                        <input type="text" name="postcode_zip" id="zip" value="{{Auth::user()->country ?? ''}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="town" > town/city <span>*</span></label>
                                        <input type="text" name="town_city" id="town" value="{{Auth::user()->town_city ?? ''}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="email" > email address <span>*</span></label>
                                        <input type="text" name="email" id="email" value="{{Auth::user()->email ?? ''}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="phone" > phone <span>*</span></label>
                                        <input type="text" name="phone" id="phone" value="{{Auth::user()->phone ?? ''}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="create-item">
                                            <label for="acc-create">
                                                Tạo tài khoản?
                                                <input type="checkbox" name="" id="acc-create">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout-content">
                                    <input type="text" placeholder="Nhập mã giảm giá" name="" id="">
                                </div>
                                <div class="place-order">
                                    <h4>Đơn hàng của bạn</h4>
                                    <div class="order-total">
                                        <ul class="order-table">
                                            <li >product <span >total</span></li>
                                            @foreach($carts as $cart)
                                            <li class="fw-normal">{{$cart->name}}x{{$cart->qty}}<span >${{$cart->price * $cart->qty}}</span></li>
                                            @endforeach
                                            <li class="fa-normal">Tổng tiền <span >${{$subtotal}}</span></li>
                                            <li class="total-price">Tổng thanh toán <span>${{$total}}</span></li>
                                        </ul>
                                        <div class="payment-check">
                                            <div class="pc-item">
                                                <label for="pc-check">
                                                    Thanh toán khi nhận hàng
                                                    <input type="radio" name="payment_type" id="pc-check" value="pay_later" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pc-item">
                                                <label for="pc-paypal" class="pc-paypal">
                                                    Thẻ tín dụng/Ghi nợ
                                                    <input type="radio" name="payment_type" id="pc-paypal" value="online_payment">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="order-btn">
                                            <button type="submit" class="site-btn place-btn">Đặt Hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12">
                            <h4>Giỏ Hàng Trống.</h4>
                            </div>
                        @endif
                    </div>
            </form>
        </div>
    </div>

    <!-- end body -->
    @endsection
