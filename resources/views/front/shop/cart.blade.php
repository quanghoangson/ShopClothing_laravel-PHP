
    @extends('front.layout.master')
    <!-- body -->
    <!-- khai bao tieu de trang -->
    @section('title','Giỏ Hàng')
    @section('body')
    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i  class="fa fa-home">Home</i></a>
                        <a href="./shop">Shop</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                @if(Cart::count()>0)
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">product name</th>
                                    <th>Gia</th>
                                    <th>quantity</th>
                                    <th>Tong tien</th>
                                    <th>
                                        <i  onclick="confirm('Bạn muốn xóa hêt?') === true ? destroyCart() : ''"
                                     class="ti-close" style="cursor: pointer;"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carts as $cart)
                                    <tr data-rowid="{{$cart->rowId}}">
                                        <td class="cart-pic first-row"> <img style="height: 170px;" src="front/img/products/{{ $cart->options->images[0]->path}}" alt=""></td>
                                        <td class="cart-title first-row">
                                            <h5>{{$cart->name}}</h5>
                                        </td>
                                        <td class="p-price first-row">${{number_format($cart->price, 2) }}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}" id="">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">${{number_format($cart->price * $cart->qty, 2) }}</td>
                                        <td class="close-td first-row"><i onclick="removeCart('{{$cart->rowId}}')" class="ti-close"></i></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="" class="primary-btn up-cart">update card</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>discount code</h6>
                                <form action="" class="coupon-form">
                                    <input type="text " placeholder="enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">apply  </button>
                                </form>
                            </div>

                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Tổng Tiền <span>${{$total}}</span></li>
                                    <li class="cart-total">total <span>${{$subtotal}}</span></li>
                                </ul>
                                <a href="./checkout" class="proceed-btn">Thanh Toán</a>
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
        </div>
    </div>

    <!-- end body -->

    @endsection
