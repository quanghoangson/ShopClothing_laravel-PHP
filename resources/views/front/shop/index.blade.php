@extends('front.layout.master')

@section('title','Shop')

@section('body')

<!-- body -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row ">
            <div class="rol-lg-12">
                <div class="breadcrumb-text">
                    <a href="./"><i  class="fa fa-home">Trang Chủ</i></a>
                    <span>Cửa Hàng</span>
                </div>
            </div>
        </div>
    </div>

</div>

<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-1  order-lg-1 produts-sidebar-filter">

                    @include('front.shop.components.products-sidebar-filter')

            </div>

            <div class="col-lg-9 order-2 order-lg-2 ">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7  col-md-7">
                            <form action="">
                                <div class="select-option">
                                    <select  class="sorting" name="sort_by" id="" onchange="this.form.submit();">

                                        <option {{request('sort_by')=='oldest' ? 'selected' : ''}} value="oldest">Sắp xếp: Mới nhất</option>
                                        <option {{request('sort_by')=='latest' ? 'selected' : ''}} value="latest">Sắp xếp: Cũ Nhất</option>
                                        <option {{request('sort_by')=='name-ascending' ? 'selected' : ''}} value="name-ascending">Sắp xếp: Tên A-Z</option>
                                        <option {{request('sort_by')=='name-descending' ? 'selected' : ''}} value="name-descending">Sắp xếp: Tên Z-A</option>
                                        <option {{request('sort_by')=='price-ascending' ? 'selected' : ''}} value="price-ascending">Sắp xếp: Giá tăng dần</option>
                                        <option {{request('sort_by')=='price-descending' ? 'selected' : ''}} value="price-descending">Sắp xếp: giá giảm dần</option>
                                    </select>
                                    <select  class="p-show" name="show" id="" onchange="this.form.submit();">
                                        <option {{request('show')=='9' ? 'selected' :''}}  value="9">Hiển Thị: 9</option>
                                        <option {{request('show')=='30' ? 'selected' :''}}  value="30">Hiển Thị: 30</option>
                                        <option {{request('show')=='100' ? 'selected' :''}}  value="100">Hiển Thị: 100</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="'product-list">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">
                            @include('front.components.product-item')
                            </div>
                        @endforeach

                    </div>
                </div>
                {{$products->links()}}
            </div>
        </div>
    </div>
</section>

@endsection
