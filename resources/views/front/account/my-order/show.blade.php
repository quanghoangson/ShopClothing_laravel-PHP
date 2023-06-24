@extends('front.layout.master')

@section('title','Chi Tiết')

@section('body')

    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i  class="fa fa-home">Home</i></a>
                        <span>Chi tiết</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="checkout-section spad">
        <div class="container">
            <form action=""  class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">
                                Order ID:
                                <b>{{$order->id}}</b>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir" >first name <span>*</span></label>
                                <input disabled type="text"  id="fir" value="{{$order->first_name}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="last" >last name <span>*</span></label>
                                <input disabled type="text"  id="last" value="{{$order->last_name}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name" >company name </label>
                                <input disabled type="text"  id="cun-name" value="{{$order->company_name}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun" > conutry <span>*</span></label>
                                <input disabled type="text" id="cun" value="{{$order->country}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="street" > street address <span>*</span></label>
                                <input disabled type="text"  id="street" class="street-first" value="{{$order->street_address}}">

                            </div>
                            <div class="col-lg-12">
                                <label for="zip" > postcode/ZIP (optional) <span>*</span></label>
                                <input disabled type="text"  id="zip" value="{{$order->postcode_zip}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="town" > town/city <span>*</span></label>
                                <input disabled type="text"  id="town" value="{{$order->town_city}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="email" > email address <span>*</span></label>
                                <input disabled type="text"  id="email" value="{{$order->email}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="phone" > phone <span>*</span></label>
                                <input disabled type="text" id="phone" value="{{$order->phone}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">
                                    Trạng Thái:
                               <b>{{ \App\Utilities\Constant::$order_status[$order->status] }} </b>
                            </a>
                        </div>

                        <div class="place-order">
                            <h4>Chi tiết</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản Phẩm <span>Giá</span> </li>
                                    @foreach($order->orderDetails as $orderDetail)
                                        <li class="fw-normal">{{ $orderDetail->product->name}} x {{$orderDetail->qty}}
                                            <span>{{$orderDetail->total}}</span>
                                        </li>
                                    @endforeach
                                    <li class="total-price">Tổng tiền thanh toán
                                        <span>${{array_sum(array_column($order->orderDetails->toArray(),'total')) }}</span>
                                    </li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Thanh toán khi nhận hàng
                                            <input  disabled  type="radio" name="payment_type" value="pay_later" id="pc-check"
                                            {{ $order->payment_type == 'pay_later' ? 'checked' :''}}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Đã thanh toán online
                                            <input  disabled type="radio" name="payment_type" value="online_payment" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
