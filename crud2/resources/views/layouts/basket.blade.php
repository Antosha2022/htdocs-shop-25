<div class="dropdown">
    <button type="button" class="btn btn-outline-dark" data-toggle="dropdown">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> кошик <span class="badge badge-pill badge-info">{{ count((array) session('cart')) }}</span>
    </button>
    <div class="dropdown-menu">
        <div class="row total-header-section">

            <div class="col-lg-6 col-sm-6 col-6">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-info">{{ count((array) session('cart')) }}</span>
            </div>
            @php $total = 0 @endphp
            @foreach((array) session('cart') as $id => $details)
                @php $total += $details['retail_price'] * $details['quantity'] @endphp
            @endforeach
            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                <p>сума замовлення: <span class="text-info">{{ $total }} ГРН</span></p>
            </div>
        </div>
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <div class="row cart-detail">
                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                        <img src="/mediaFiles/logo_azova.jpg" />
                    </div>
                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                        <p>{{ $details['short_name'] }}</p>
                        <span class="price text-info"> {{ $details['retail_price'] }} ГРН</span> <span class="count"> кількість:{{ $details['quantity'] }}</span>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                <a href="{{ route('cart') }}" class="btn btn-outline-info btn-block">оформити замовлення</a>
            </div>
        </div>
    </div>
</div>