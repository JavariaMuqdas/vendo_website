<!-- <footer class="site-footer">

    <section class="footer-social">
        <div class="footer-social-inner">
            <a href="" class="footer-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="footer-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="" class="footer-icon" aria-label="Google"><i class="fab fa-google"></i></a>
            <a href="" class="footer-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="" class="footer-icon" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="" class="footer-icon" aria-label="GitHub"><i class="fab fa-github"></i></a>
        </div>
    </section>

    <section class="footer-links">
        <div class="container">
            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="footer-heading"><i class="fas fa-gem me-2"></i> E-Commerce</h6>
                    <p class="footer-text">
                        We bring you quality products at unbeatable prices. From fashion to electronics,
                        our mission is to make online shopping simple, secure, and enjoyable.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="footer-heading">Products</h6>
                    <p><a href="#!" class="footer-link">Angular</a></p>
                    <p><a href="#!" class="footer-link">React</a></p>
                    <p><a href="#!" class="footer-link">Vue</a></p>
                    <p><a href="#!" class="footer-link">Laravel</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="footer-heading">Useful links</h6>
                    <p><a href="#!" class="footer-link">Pricing</a></p>
                    <p><a href="#!" class="footer-link">Settings</a></p>
                    <p><a href="#!" class="footer-link">Orders</a></p>
                    <p><a href="#!" class="footer-link">Help</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="footer-heading">Contact</h6>
                    <p><i class="fas fa-home me-2"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope me-2"></i> info@example.com</p>
                    <p><i class="fas fa-phone me-2"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-2"></i> + 01 234 567 89</p>
                </div>

            </div>
        </div>
    </section>

    <div class="footer-copyright">
        © {{ date('Y') }} Copyright:
        <a class="footer-brand" href="/">Ecommerce.com</a>
    </div>

</footer>

<style>
footer.site-footer {
    position: relative !important;
    top: auto !important;
    bottom: auto !important;
    left: auto !important;
    right: auto !important;
    z-index: 1;
    clear: both;
    isolation: isolate;
    background: #14171F;
    color: #A9ADB8;
    font-family: 'Inter', sans-serif;
    width: auto;
}

.footer-social {
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.footer-social-inner {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 16px;
    padding: 24px;
}

.footer-icon {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.06);
    color: #FFFFFF;
    text-decoration: none;
    transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
}

.footer-icon:hover {
    background: #C1622D;
    color: #FFFFFF;
    transform: translateY(-3px);
}

.footer-links {
    padding: 48px 0 8px;
}

.footer-heading {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #FFFFFF;
    margin-bottom: 18px;
}

.footer-text {
    font-size: 0.9rem;
    line-height: 1.7;
    color: #9096A2;
}

.footer-link {
    color: #A9ADB8;
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.2s ease;
}

.footer-link:hover {
    color: #C1622D;
}

.footer-links p {
    font-size: 0.9rem;
    color: #9096A2;
    margin-bottom: 10px;
}

.footer-links i {
    color: #1F6F63;
}

.footer-copyright {
    text-align: center;
    padding: 20px;
    font-size: 0.85rem;
    background: rgba(0, 0, 0, 0.2);
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.footer-brand {
    color: #FFFFFF;
    font-weight: 600;
    text-decoration: none;
}

.footer-brand:hover {
    color: #C1622D;
}

@media (max-width: 768px) {
    .footer-social-inner {
        gap: 12px;
    }
}
</style> -->



<footer class="mini-footer">
    <div class="mini-footer-inner">
        <span>© {{ date('Y') }} <a href="/" class="mini-footer-brand">Ecommerce.com</a> — All rights reserved.</span>

    </div>
</footer>

<style>
body {
    padding-bottom: 48px;
}

footer.mini-footer {
    position: fixed !important;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    height: 48px;
    background: #14171F;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    font-family: 'Inter', sans-serif;
}

.mini-footer-inner {
    max-width: 1280px;
    height: 100%;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    /* justify-content: space-between; */
    gap: 16px;
}

.mini-footer-inner span {
    font-size: 0.82rem;
    color: #9096A2;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.mini-footer-brand {
    color: #FFFFFF;
    font-weight: 600;
    text-decoration: none;
}

.mini-footer-brand:hover {
    color: #C1622D;
}

.mini-footer-social {
    display: flex;
    gap: 14px;
    flex-shrink: 0;
}

.mini-footer-social a {
    color: #A9ADB8;
    font-size: 0.85rem;
    text-decoration: none;
    transition: color 0.2s ease;
}

.mini-footer-social a:hover {
    color: #C1622D;
}

@media (max-width: 480px) {
    .mini-footer-inner span {
        font-size: 0.72rem;
    }

    .mini-footer-social {
        gap: 10px;
    }
}
</style>