@extends('master')

@section('content')

<div class="container py-5">

    <a href="/" class="back-btn">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
        Back to Products
    </a>

    <div class="product-box shadow">

        <div class="row align-items-stretch g-0">

            <!-- Product Image -->
            <div class="col-lg-5 p-0">

                <div class="image-box">

                    <span class="image-tag">{{ strtoupper($Product['category']) }}</span>

                    <img src="{{ $Product['gallery'] }}"
                        alt="{{ $Product['name'] }}"
                        class="product-image">

                </div>

            </div>

            <!-- Product Detail -->
            <div class="col-lg-7">

                <div class="product-content">

                    <span class="badge bg-primary mb-3 px-3 py-2">
                        {{ $Product['category'] }}
                    </span>

                    <h1>
                        {{ $Product['name'] }}
                    </h1>

                    <div class="rating">

                        ⭐⭐⭐⭐⭐
                        <span>(245 Reviews)</span>

                    </div>

                    <h2 class="price">
                        Rs. {{ number_format($Product['price']) }}
                    </h2>

                    <p class="description">

                        {{ $Product['description'] }}

                    </p>

                    <hr>

                    <div class="spec-grid row g-0">

                        <div class="spec-item col-md-6">

                            <strong>Category</strong>

                            <p>{{ $Product['category'] }}</p>

                        </div>

                        <div class="spec-item col-md-6">

                            <strong>Status</strong>

                            <p class="text-success">
                                ✔ In Stock
                            </p>

                        </div>

                        <div class="spec-item col-md-6">

                            <strong>Delivery</strong>

                            <p>Free Delivery</p>

                        </div>

                        <div class="spec-item col-md-6">

                            <strong>Warranty</strong>

                            <p>1 Year Warranty</p>

                        </div>

                    </div>

                    <div class="buttons mt-4">

                        <form action="/Add_to_cart" method="POST">

                            @csrf

                            <input
                                type="hidden"
                                name="product_id"
                                value="{{ $Product['id'] }}">

                            <button class="btn cart-btn">
                                🛒 Add to Cart
                            </button>

                        </form>

                        <button class="btn buy-btn">
                            Buy Now
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection