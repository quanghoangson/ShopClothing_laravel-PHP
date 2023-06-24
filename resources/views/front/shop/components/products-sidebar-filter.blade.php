<form action="{{request()->segment(2) == 'product' ? 'shop' : ''}}">
    <div class="filter-widget">
        <h4 class="fw-title">Phân Loại</h4>
        <ul class="filter-catagories">
            @foreach($categories as $category)
                <li> <a href="shop/category/{{$category->name}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Thương Hiệu</h4>
        <div class="fw-brand-check">
            @foreach($brands as $bra)
                <div class="bc-item">
                    <label for="bc-{{$bra->id}}" >
                        {{$bra->name}}
                        <input type="checkbox"
                               {{ (request("brand") [$bra->id] ?? '') == 'on' ? 'checked' : '' }}
                               id="bc-{{$bra->id}}"
                               name="brand[{{$bra->id}}]"
                               onchange="this.form.submit();">
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Giá từ</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                 data-min="0" data-max="1080"
                 data-min-value="{{str_replace('$', '' , request('price_min'))}}"
                 data-max-value="{{str_replace('$', '' , request('price_max'))}}">
                <div class="ui-slider-range ui-corner-all ui-widget-header"> </div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <button type="submit" class="filter-btn">Lọc</button>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Chọn Màu</h4>
        <div class="fw-color-choose">
            <div class="cs-item">
                <input type="radio"  id="cs-black" name="color" value="black" onchange="this.form.submit();"
                    {{request('color') == 'black' ? 'checked' : ''}}>
                <label for="cs-black" class="cs-black {{request('color') == 'black' ? 'font-weight-bold' : ''}}">Đen</label>
            </div>
            <div class="cs-item">
                <input type="radio"  id="cs-violet" name="color" value="violet" onchange="this.form.submit();"
                    {{request('color') == 'violet' ? 'checked' : ''}}>
                <label for="cs-violet" class="cs-violet {{request('color') == 'violet' ? 'font-weight-bold' : ''}}">Tím</label>
            </div>
            <div class="cs-item">
                <input type="radio"  id="cs-blue" name="color" value="blue" onchange="this.form.submit();"
                    {{request('color') == 'blue' ? 'checked' : ''}}>
                <label for="cs-blue" class="cs-blue {{request('color') == 'blue' ? 'font-weight-bold' : ''}}">Xanh</label>
            </div>
            <div class="cs-item">
                <input type="radio"  id="cs-yellow" name="color" value="yellow" onchange="this.form.submit();"
                    {{request('color') == 'yellow' ? 'checked' : ''}}>
                <label for="cs-yellow" class="cs-yellow {{request('color') == 'yellow' ? 'font-weight-bold' : ''}}">Vàng</label>
            </div>
            <div class="cs-item">
                <input type="radio"  id="cs-red" name="color" value="red" onchange="this.form.submit();"
                    {{request('color') == 'red' ? 'checked' : ''}}>
                <label for="cs-red" class="cs-red {{request('color') == 'red' ? 'font-weight-bold' : ''}}">Đỏ</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-green" name="color" value="green" onchange="this.form.submit();"
                    {{request('color') == 'black' ? 'green' : ''}}>
                <label for="cs-green" class="cs-green {{request('color') == 'green' ? 'font-weight-bold' : ''}}">Xanh Lá</label>
            </div>

        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Size</h4>
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="s-size" name="size" value="s" onchange="this.form.submit();"
                    {{request('size')== 's' ? 'checked' : ''}}>
                <label for="s-size" class="{{request('size') == 's' ? 'active' : ''}}">S</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="m-size" name="size" value="m" onchange="this.form.submit();"
                    {{request('size')== 'm' ? 'checked' : ''}}>
                <label for="m-size"  class="{{request('size')== 'm' ? 'active' : ''}}">m</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="l-size" name="size" value="l" onchange="this.form.submit();"
                    {{request('size')== 'l' ? 'checked' : ''}}>
                <label for="l-size" class="{{request('size')== 'l' ? 'active' : ''}}">l</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xl-size" name="size" value="xl" onchange="this.form.submit();"
                    {{request('size')== 'xl' ? 'checked' : ''}}>
                <label for="xl-size" class="{{request('size')== 'xl' ? 'active' : ''}}">xl</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xxl-size" name="size" value="xxl" onchange="this.form.submit();"
                    {{request('size')== 'xxl' ? 'checked' : ''}}>
                <label for="xxl-size" class="{{request('size')== 'xxl' ? 'active' : ''}}">xxl</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Tags</h4>
        <div class="fw-tags">
            <a href="#">Towel</a>
            <a href="#">shoes</a>
            <a href="#">coat</a>
            <a href="#">dresses</a>
            <a href="#">trowsers</a>
            <a href="#">men's hats</a>
            <a href="#">backpack</a>
        </div>
    </div>
</form>
