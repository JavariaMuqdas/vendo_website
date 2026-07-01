@extends('master')
@section('content')

<div class="cart-page-wrapper">
    <div class="container">

        <!-- Breadcrumb -->
        <div class="cart-breadcrumb">
            <h3>Your Cart</h3>
            <div class="crumb-row">
                <a href="/">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Home
                </a>
                <span class="crumb-sep">›</span>
                <span class="crumb-current">Your Cart</span>
            </div>
        </div>

        <!-- Cart Card -->
        <div class="cart-card">

            @if(is_countable($products) && count($products) > 0)

            <div class="cart-items">
                @foreach($products as $item)
                <div class="cart-item">

                    <div class="cart-item-img">
                        <img src="{{ $item->gallery }}" alt="{{ $item->name }}">
                    </div>

                    <div class="cart-item-info">
                        <h5>{{ $item->name }}</h5>
                        <p class="cart-item-price">Rs. {{ number_format($item->price) }}</p>
                    </div>

                    <div class="cart-item-qty">
                        <span class="qty-label">Quantity</span>
                        <span class="qty-badge">{{ $item->quantity }}</span>
                    </div>

                    <div class="cart-item-action">
                        <a href="{{ url('/remove_cart/' . $item->cart_id) }}" class="remove-btn">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/></svg>
                            Remove
                        </a>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="cart-checkout-row">
                <a href="/ordernow" class="checkout-btn">
                    Proceed to Checkout
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>

            @else

            <div class="empty-cart">
                <div class="empty-icon-wrap">
                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                    <span class="spark spark-1">+</span>
                    <span class="spark spark-2">+</span>
                    <span class="spark spark-3">·</span>
                    <span class="spark spark-4">·</span>
                </div>
                <h4>Your cart is empty</h4>
                <p>Looks like you haven't added anything to your cart yet.</p>
                <a href="/" class="continue-btn">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                    Continue Shopping
                </a>
            </div>

            @endif

        </div>

        <!-- Feature Strip -->
        <div class="feature-strip">

            <div class="feature-item">
                <div class="feature-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <div>
                    <strong>Free Delivery</strong>
                    <p>Free shipping on all orders over Rs. 5,000</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 4 5v6c0 5.25 3.4 9.74 8 11 4.6-1.26 8-5.75 8-11V5z"/></svg>
                </div>
                <div>
                    <strong>Secure Payment</strong>
                    <p>100% secure payment guarantee</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
                </div>
                <div>
                    <strong>24/7 Support</strong>
                    <p>Dedicated support whenever you need</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.5 13.5 17 22l-5-3-5 3 1.5-8.5"/></svg>
                </div>
                <div>
                    <strong>Best Quality</strong>
                    <p>Quality products you can trust</p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection