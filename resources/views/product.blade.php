@extends('master')
@section('content')

<section class="hero-carousel">
    <div class="hero-carousel-inner">
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">

            <div class="carousel-inner">
                @foreach ($products as $index => $item)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <a href="{{ url('/detail', $item['id']) }}" class="hero-slide-link">
                        <div class="hero-grid">

                            <div class="hero-image-panel">
                                <div class="hero-blob"></div>
                                <img
                                    src="{{ $item['gallery'] ?? 'https://via.placeholder.com/900x300' }}"
                                    class="hero-image"
                                    alt="{{ $item['name'] ?? 'Product' }}"
                                >
                            </div>

                            <div class="hero-content-panel">
                                <div class="hero-progress-track">
                                    <div class="hero-progress"></div>
                                </div>
                                <span class="hero-eyebrow">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} / {{ str_pad(count($products), 2, '0', STR_PAD_LEFT) }} — featured product
                                </span>
                                <h2 class="hero-title">{{ $item['name'] ?? 'Product Name' }}</h2>
                                <p class="hero-desc">{{ $item['description'] ?? 'No description available.' }}</p>
                                <span class="hero-cta">View details <span class="hero-cta-arrow">&rarr;</span></span>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <button class="carousel-control-prev hero-control hero-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="hero-arrow-icon" aria-hidden="true">&#8249;</span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next hero-control hero-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="hero-arrow-icon" aria-hidden="true">&#8250;</span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
</section>

<section class="tp-section">
    <div class="tp-wrapper">

        <div class="tp-header">
            <span class="tp-eyebrow">This week's movers</span>
            <h1 class="tp-title">Trending Products</h1>
            <p class="tp-subtitle">Handpicked by shoppers, ranked by what's selling right now.</p>
        </div>

        @if(count($products) > 0)
            <div class="tp-grid">
                @foreach ($products as $index => $item)
                    <a href="{{ url('/detail', $item['id']) }}" class="tp-card">
                        <span class="tp-rank">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>

                        <div class="tp-image-frame">
                            <img
                                src="{{ $item['gallery'] ?? 'https://via.placeholder.com/900x300' }}"
                                class="tp-image"
                                alt="{{ $item['name'] ?? 'Product' }}"
                                loading="lazy"
                            >
                        </div>

                        <div class="tp-info">
                            @if(!empty($item['category']))
                                <span class="tp-category">{{ $item['category'] }}</span>
                            @endif

                            <h5 class="tp-name">{{ $item['name'] ?? 'Product Name' }}</h5>

                            @if(!empty($item['price']))
                                <span class="tp-price">Rs {{ number_format($item['price']) }}</span>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <p class="tp-empty">No trending products right now — check back soon.</p>
        @endif

    </div>
</section>

<style>
/* ===========================
      Hero Carousel
=========================== */

.hero-carousel {
    background: var(--canvas);
    padding: 48px 0 0;
}

.hero-carousel-inner {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 32px;
}

.hero-slide-link {
    display: block;
    text-decoration: none;
    color: inherit;
}

.hero-grid {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 460px;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 28px;
    overflow: hidden;
}

.hero-image-panel {
    position: relative;
    background: var(--sage-tint);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
    overflow: hidden;
}

.hero-blob {
    position: absolute;
    width: 340px;
    height: 340px;
    border-radius: 50%;
    background: var(--surface);
    opacity: 0.5;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.hero-image {
    position: relative;
    z-index: 1;
    max-width: 100%;
    max-height: 380px;
    object-fit: contain;
}

.hero-content-panel {
    padding: 48px 96px 56px 48px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.hero-progress-track {
    width: 64px;
    height: 3px;
    background: var(--border);
    border-radius: 2px;
    margin-bottom: 20px;
    overflow: hidden;
}

.hero-progress {
    width: 0%;
    height: 100%;
    background: var(--terracotta);
}

.carousel-item.active .hero-progress {
    animation: heroProgress 3s linear forwards;
}

@keyframes heroProgress {
    from { width: 0%; }
    to { width: 100%; }
}

.hero-eyebrow {
    font-family: var(--font-mono);
    font-size: 0.75rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--terracotta-dark);
    margin-bottom: 16px;
    display: block;
}

.hero-title {
    font-family: var(--font-display);
    font-weight: 700;
    font-size: 2.6rem;
    line-height: 1.1;
    letter-spacing: -0.02em;
    color: var(--ink);
    margin: 0 0 16px;
}

.hero-desc {
    font-family: var(--font-body);
    font-size: 1rem;
    line-height: 1.7;
    color: var(--muted);
    max-width: 460px;
    margin: 0 0 28px;
}

.hero-cta {
    font-family: var(--font-mono);
    font-size: 0.85rem;
    letter-spacing: 0.04em;
    color: var(--sage-dark);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    width: fit-content;
    padding-bottom: 4px;
    border-bottom: 1px solid var(--sage-dark);
    transition: color 0.25s ease, border-color 0.25s ease, gap 0.25s ease;
}

.hero-slide-link:hover .hero-cta {
    color: var(--terracotta-dark);
    border-color: var(--terracotta-dark);
    gap: 12px;
}

.carousel-item .hero-eyebrow,
.carousel-item .hero-title,
.carousel-item .hero-desc,
.carousel-item .hero-cta {
    opacity: 0;
    transform: translateY(10px);
}

.carousel-item.active .hero-eyebrow,
.carousel-item.active .hero-title,
.carousel-item.active .hero-desc,
.carousel-item.active .hero-cta {
    animation: heroFadeUp 0.6s ease forwards;
}

.carousel-item.active .hero-title { animation-delay: 0.08s; }
.carousel-item.active .hero-desc { animation-delay: 0.16s; }
.carousel-item.active .hero-cta { animation-delay: 0.24s; }

@keyframes heroFadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-carousel .carousel-control-prev,
.hero-carousel .carousel-control-next {
    width: 44px !important;
    height: 44px !important;
    top: auto;
    bottom: 32px;
    border-radius: 50%;
    background-color: var(--surface) !important;
    border: 1px solid var(--border);
    opacity: 1;
    transition: border-color 0.25s ease;
}

.hero-carousel .carousel-control-prev:hover,
.hero-carousel .carousel-control-next:hover {
    background-color: var(--surface) !important;
    border-color: var(--terracotta);
}

.hero-control-prev {
    left: auto;
    right: 132px;
}

.hero-control-next {
    right: 32px;
}

.hero-arrow-icon {
    font-family: var(--font-body);
    font-size: 22px;
    line-height: 1;
    color: var(--ink);
}

.hero-carousel .carousel-control-prev:hover .hero-arrow-icon,
.hero-carousel .carousel-control-next:hover .hero-arrow-icon {
    color: var(--terracotta-dark);
}

@media (max-width: 860px) {
    .hero-grid {
        grid-template-columns: 1fr;
    }

    .hero-content-panel {
        padding: 32px 28px 40px;
    }

    .hero-title {
        font-size: 1.9rem;
    }

    .hero-carousel .carousel-control-prev,
    .hero-carousel .carousel-control-next {
        bottom: 16px;
    }

    .hero-control-prev {
        right: 88px;
    }

    .hero-control-next {
        right: 20px;
    }
}

/* ===========================
      Trending Products
=========================== */

.tp-section {
    background: var(--canvas);
    padding: 64px 0;
}

.tp-wrapper {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 32px;
}

.tp-header {
    margin-bottom: 40px;
}

.tp-eyebrow {
    font-family: var(--font-mono);
    font-size: 0.75rem;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--terracotta-dark);
    display: block;
    margin-bottom: 10px;
}

.tp-title {
    font-family: var(--font-display);
    font-weight: 700;
    font-size: 2.5rem;
    color: var(--ink);
    margin: 0 0 8px;
    letter-spacing: -0.02em;
}

.tp-subtitle {
    font-family: var(--font-body);
    font-size: 1rem;
    color: var(--muted);
    margin: 0;
    max-width: 520px;
}

.tp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 28px;
}

.tp-card {
    position: relative;
    display: block;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 16px;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
}

.tp-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 44px -24px rgba(31, 42, 36, 0.22);
    border-color: var(--terracotta);
}

.tp-card:focus-visible {
    outline: 2px solid var(--sage-dark);
    outline-offset: 3px;
}

.tp-rank {
    position: absolute;
    top: 14px;
    left: 14px;
    z-index: 2;
    font-family: var(--font-mono);
    font-size: 0.7rem;
    font-weight: 500;
    color: var(--ink);
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(6px);
    padding: 4px 8px;
    border-radius: 20px;
    letter-spacing: 0.05em;
}

.tp-image-frame {
    aspect-ratio: 1 / 1;
    background: var(--sage-tint);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 28px;
}

.tp-image {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.5s ease;
}

.tp-card:hover .tp-image {
    transform: scale(1.06);
}

.tp-info {
    padding: 18px 20px 22px;
    border-top: 1px solid var(--border);
}

.tp-category {
    font-family: var(--font-mono);
    font-size: 0.68rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--sage-dark);
    display: block;
    margin-bottom: 6px;
}

.tp-name {
    font-family: var(--font-display);
    font-weight: 600;
    font-size: 1.02rem;
    color: var(--ink);
    margin: 0 0 8px;
    line-height: 1.3;
}

.tp-price {
    font-family: var(--font-mono);
    font-size: 0.9rem;
    color: var(--muted);
}

.tp-empty {
    font-family: var(--font-body);
    color: var(--muted);
    text-align: center;
    padding: 60px 0;
}

@media (max-width: 640px) {
    .tp-title {
        font-size: 1.9rem;
    }

    .tp-wrapper {
        padding: 0 20px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .carousel-item .hero-eyebrow,
    .carousel-item .hero-title,
    .carousel-item .hero-desc,
    .carousel-item .hero-cta {
        opacity: 1;
        transform: none;
        animation: none;
    }

    .hero-progress {
        animation: none !important;
        width: 100%;
    }
}
</style>

@endsection