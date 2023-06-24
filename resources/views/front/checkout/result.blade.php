@extends('front.layout.master')

@section('title','Kết quả')

@section('body')
    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index"><i  class="fa fa-home">Home</i></a>
                        <a href="./checkout">Shop</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="checkout-section spad">
        <div class="container">
        <div class="col-lg-12">
            <h4>{{$notification}}</h4>
        </div>
        <a href="" class="primary-btn mt-5">Tiếp tục mua hàng.</a>
        </div>

    </div>

    <!-- end body -->
    @endsection
