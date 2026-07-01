<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('online-shopping.png') }}">
    <title>  Vendo website</title>
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <style>
        /* ===========================
              Theme tokens — pastel/professional
              Change these once, the whole site follows.
        =========================== */
        :root {
            --canvas: #F2F6F3;
            --surface: #FFFFFF;
            --ink: #1F2A24;
            --muted: #5B6B62;
            --border: #E1E7E2;

            --sage: #6FA98C;
            --sage-dark: #2F6B4F;
            --sage-tint: #DCEEE3;

            --terracotta: #D98B6D;
            --terracotta-dark: #A85332;
            --terracotta-tint: #F6DDD1;

            --lavender: #A79BD1;
            --lavender-dark: #5C4E96;
            --lavender-tint: #E9E4F7;

            --font-display: 'Space Grotesk', sans-serif;
            --font-body: 'Inter', sans-serif;
            --font-mono: 'IBM Plex Mono', monospace;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: var(--canvas);
            font-family: var(--font-body);
            color: var(--ink);
        }

        /* ===========================
              Global brand overrides
              (navbar / buttons — adjust selectors if your
              header.blade.php uses different classes)
        =========================== */
        .bg-dark {
            background-color: var(--ink) !important;
        }

        .btn-success {
            background-color: var(--sage) !important;
            border-color: var(--sage) !important;
            color: #FFFFFF !important;
        }

        .btn-success:hover {
            background-color: var(--sage-dark) !important;
            border-color: var(--sage-dark) !important;
        }

        .btn-primary {
            background-color: var(--terracotta) !important;
            border-color: var(--terracotta) !important;
        }

        .btn-primary:hover {
            background-color: var(--terracotta-dark) !important;
            border-color: var(--terracotta-dark) !important;
        }

        .img-slider {
            height: 400px !important;
        }

        .product-carousel {
            height: 600px;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            opacity: 0.4;
        }

        .carousel-indicators button {
            background-color: #000;
        }

        .carousel-indicators .active {
            background-color: #fff;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: var(--sage);
            border-radius: 50%;
            padding: 15px;
            background-size: 100%, 100%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            transition: all 0.3s ease-in-out;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(111, 169, 140, 0.15);
        }

        .trending-item {
            float: left;
            width: 20%;
        }

        .detail-img {
            height: 400px;
        }

        .search-box {
            width: 500px;
        }

        .trending-img {
            height: 200px;
            width: 100%;
            object-fit: contain;
            border-radius: 10px;
            padding: 10px;
        }

        /* ===========================
              Product detail page
        =========================== */

        .product-box {
            background: var(--surface);
            border-radius: 20px;
            padding: 40px;
        }

        .image-box {
            background: var(--canvas);
            border-radius: 15px;
            text-align: center;
            padding: 30px;
        }

        .product-image {
            max-height: 400px;
            width: 100%;
            object-fit: contain;
            transition: .4s;
        }

        .product-image:hover {
            transform: scale(1.08);
        }

        .product-content h1 {
            font-family: var(--font-display);
            font-size: 30px;
            font-weight: 700;
            color: var(--ink);
        }

        .price {
            color: var(--sage-dark);
            font-family: var(--font-mono);
            font-size: 28px;
            margin: 20px 0;
            font-weight: 700;
        }

        .description {
            color: var(--muted);
            font-size: 13px;
            line-height: 32px;
        }

        .rating {
            color: #E0A94C;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .rating span {
            color: var(--muted);
            font-size: 16px;
        }

        .buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .cart-btn {
            background: var(--terracotta-tint);
            color: var(--terracotta-dark);
            padding: 12px 35px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            border: none;
        }

        .buy-btn {
            background: var(--sage);
            color: #fff;
            padding: 12px 40px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            border: none;
        }

        .cart-btn:hover {
            background: var(--terracotta);
            color: #fff;
        }

        .buy-btn:hover {
            background: var(--sage-dark);
        }

        .back-btn {
            text-decoration: none;
            font-size: 18px;
            display: inline-block;
            margin-bottom: 25px;
            color: var(--ink);
        }

        @media (max-width: 768px) {
            .product-box {
                padding: 20px;
            }

            .product-content {
                margin-top: 30px;
            }

            .product-content h1 {
                font-size: 30px;
            }

            .price {
                font-size: 28px;
            }

            .buttons {
                flex-direction: column;
            }

            .cart-btn,
            .buy-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    @include('header')

    @yield('content')

    @include('footer')
</body>

</html>