@extends('front.layout.master')

@section('title','Đơn Hàng')

@section('body')
    <!-- body -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row ">
                <div class="rol-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./home"><i  class="fa fa-home">Home</i></a>

                        <span>Đơn Hàng</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">

                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>ID#</th>

                                    <th class="p-name">Tên hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Chi tiết</th>

{{--                                    <th>--}}
{{--                                        <i  onclick="confirm('Bạn muốn xóa hêt?') === true ? destroyCart() : ''"--}}
{{--                                            class="ti-close" style="cursor: pointer;"></i>--}}
{{--                                    </th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="cart-pic first-row"> <img style="height: 170px;"
                                              src="front/img/products/{{ $order->orderDetails[0]->product->productImages[0]->path}}" alt="">
                                        </td>
                                        <td class="first-row">#{{$order->id}}</td>
                                        <td class="cart-title first-row">
                                            <h5>{{$order->orderDetails[0]->product->name}}
                                            @if(count($order->orderDetails)>1)
                                                (and {{count($order->orderDetails)}} other products)
                                            @endif
                                            </h5>
                                        </td>
                                        <td class="total-price first-row">
                                            ${{array_sum(array_column($order->orderDetails->toArray(),'total')) }}
                                        </td>
                                        <td class="first-row">
                                            <a class="btn" href="./account/my-order/{{$order->id}}">Chi tiết</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
