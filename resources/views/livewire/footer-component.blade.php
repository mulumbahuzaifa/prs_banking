<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="index.html" class="black-logo"><img src="{{ asset('assets/img/logos/logo.png') }}" alt="logo" width="70"></a>
                        <a href="index.html" class="white-logo"><img src="{{ asset('assets/img/logos/logo.png') }}" alt="logo" width="70"></a>
                        <p>We are a leading innovative financial company in Uganda boosted with our dedicated professional, highly trained and disciplined staff in areas of financial products .</p>
                    </div>

                    <ul class="social-links">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Company</h3>

                    <ul class="list">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        {{-- <li><a href="{{ route('contact') }}">Contact</a></li> --}}
                        <li><a href="{{ route('blogs') }}">Latest News</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Support</h3>

                    <ul class="list">
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Address</h3>

                    <ul class="footer-contact-info">
                        <li><span>Location:</span> 27 Division St, New York, NY 10002, USA</li>
                        <li><span>Email:</span> <a href="/cdn-cgi/l/email-protection#80e8e5ececefc0ecf5f6e9efeeaee3efed"><span class="__cf_email__" data-cfemail="6d05080101022d01181b040203430e0200">[email&#160;protected]</span></a></li>
                        <li><span>Phone:</span> <a href="tel:+321984754">+ (321) 984 754</a></li>
                        <li><span>Fax:</span> <a href="tel:+12129876543">+1-212-9876543</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p>Developed
                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear())
                </script>By<a href="https://ditherug.tech" target="_blank"> EnvyTheme</a></p>
        </div>
    </div>

    {{-- <div class="map-image"><img src="{{ asset('assets/img/map.png') }}" alt="map"></div> --}}
</footer>
