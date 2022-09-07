<div>
    <!-- Start Main Banner Area -->
<section class="banner-wrapper">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="banner-wrapper-content">
                    <h1>Start or grow your own business.</h1>
                    <p>Get the financial tools and insights to start, build, and grow your business.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="banner-wrapper-image">
                    <img src="{{ asset('assets/img/icons/icon6.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Banner Area -->

<!-- Start Partner Area -->
<section class="partner-area-two ptb-40">
    <div class="container">
        <div class="partner-slides owl-carousel owl-theme">
            @foreach ($services as $service)
            <div class="single-partner-item">
                    <div class="single-blog-post">
                        <div class="blog-image1">
                            <a href="{{ route('service.detail',['slug' =>$service->slug]) }}">
                                <img src="{{ asset('assets/img/category') }}/{{ $service->image }}" alt="{{ $service->name }}">
                            </a>
                        </div>

                        <div class="blog-post-content">
                            <h3><a href="{{ route('service.detail',['slug' =>$service->slug]) }}">{{ $service->name }}</a></h3>

                            {{-- <p>{{ $service->description }}</p> --}}

                            <a href="{{ route('service.detail',['slug' =>$service->slug]) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
            </div>
            @endforeach

            <div class="single-partner-item">
                <div class="single-blog-post">
                    <div class="blog-image1">
                        <a href="single-blog.html">
                                    <img src="{{ asset('assets/img/GettyImages-949278532.webp') }}" alt="image">
                                </a>

                        {{-- <div class="date">
                            <i class="far fa-calendar-alt"></i> September 15, 2021
                        </div> --}}
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">Investment</a></h3>


                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="single-partner-item">
                <div class="single-blog-post">
                    <div class="blog-image1">
                        <a href="single-blog.html">
                                    <img src="{{ asset('assets/img/fin003-pix-data.jpg') }}" alt="image">
                                </a>

                        {{-- <div class="date">
                            <i class="far fa-calendar-alt"></i> September 15, 2021
                        </div> --}}
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">Customer Support</a></h3>

                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="single-partner-item">
                <div class="single-blog-post">
                    <div class="blog-image1">
                        <a href="single-blog.html">
                                    <img src="{{ asset('assets/img/product_8.jpg') }}" alt="image">
                                </a>

                        {{-- <div class="date">
                            <i class="far fa-calendar-alt"></i> September 15, 2021
                        </div> --}}
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">Business Tips</a></h3>


                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partner Area -->

<!-- Start Payment Experience Area -->
<section class="payment-experience-area bg-f4fcff ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="payment-experience-content">
                    <p class="link-btn">About company</p>
                    <h2>We have been working very efficiently with loan and funding for 5 years.</h2>
                    <p>We are a leading innovative financial company in Uganda boosted with our dedicated professional, highly trained and disciplined staff in areas of financial products .</p>
                    <p>We're leading the governance of a new industry, developing ethical, responsible ways to bring greater value and better opportunities to customers.</p>
                    <a href="{{ route('about') }}" class="btn btn-primary">ABOUT-US</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="payment-experience-image text-center">
                    <img src="{{ asset('assets/img/House_Money.webp') }}" alt="image" style="border-radius: 10px;">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-payment-experience-box">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Quick Loans</h3>
                    <p>Get personal loans from as low as Ugx100,000 in a few minutes.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-payment-experience-box">
                    <div class="icon">
                        <i class="fab fa-audible"></i>
                    </div>
                    <h3>Structured Advisory</h3>
                    <p>Structured advisory services to maximise business and financial return on investments.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-payment-experience-box">
                    <div class="icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Nominal Rates</h3>
                    <p>We operate single digits interest rates you can't get elsewhere.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-payment-experience-box">
                    <div class="icon">
                        <i class="fab fa-expeditedssl"></i>
                    </div>
                    <h3>Minimal Documentation</h3>
                    <p>With our easy documentation and speedy approvals, you are avail a hassle-free application process to enjoy our unmatched benefits.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Payment Experience Area -->

<!-- Start Support Area -->
<section class="support-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="support-image">
                    <img src="{{ asset('assets/img/support-img2.png') }}" style="width: 100%; height: 100%; border-radius: 10px;" alt="image">
                    <img src="{{ asset('assets/img/images.jpg') }}" style="border-radius: 10px;" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="support-content">
                    <div class="section-title">
                        <p class="link-btn">LET YOUR MONEY WORK FOR YOU</p>
                        <div class="bar"></div>
                        <h2>Earn up to 13% per annum when you invest with us</h2>
                    </div>

                    <p>Our approach is client focused as we understand that each investor has a unique set of requirements, that’s why we create tailored investment solutions to suit each one.</p>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
                    <a href="#" class="btn btn-primary">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Support Area -->

<!-- Start Business Area -->
{{-- <section class="business-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="business-content">
                    <h2>Made to grow with your business</h2>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-business-box">
                                <h3>International payments</h3>
                                <p>Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-business-box">
                                <h3>Completely customisable</h3>
                                <p>Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-business-box">
                                <h3>Real-time alerts</h3>
                                <p>Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-business-box">
                                <h3>Fully safe and secure</h3>
                                <p>Labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="business-image">
                    <img src="{{ asset('assets/img/business-img.jpg') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Business Area -->

<!-- Start Testimonials Area -->
{{-- <section class="testimonials-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Luvion score 4.8 out of 5, from 55,495 reviews</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-testimonials-box">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    <h3>John Smith <span>CTO at EnvyThme</span></h3>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-testimonials-box">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    <h3>Sarah Taylor <span>CTO at ThemeForest</span></h3>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-testimonials-box">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    <h3>James Andy <span>CEO at Envato</span></h3>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Testimonials Area -->

<!-- Start Success Story Area -->
<section class="success-story-area ptb-60 pt-0">
    <div class="container">
        <div class="section-title">
            <h2>Business success story</h2>
        </div>

        <div class="success-story-inner">
            <div class="success-story-slides owl-carousel owl-theme">
                <div class="single-success-story-box">
                    <div class="row m-0 align-items-center">
                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="content">
                                <p>MaryBeth Hyland started her company Spark Vision to help businesses create and maintain collaborative and inclusive office cultures. Specializing in millennial engagement, Hyland and Spark Vision offer workshops to help offices foster collaboration and connections among workers.</p>
                                <p>A child of abuse, Hyland has faced a lot of challenges to her self-worth and confidence. She uses her survival daily as a way to motivate her to succeed in business, drawing on the experience of her past to connect with the people she works with. According to her website, Hyland says she thinks that her experience makes her more successful in her company.</p>
                                <h3> Smith John<span>CEO at PRS</span></h3>
                                {{-- <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="btn btn-primary popup-youtube">Watch Video</a> --}}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="image">
                                <img src="{{ asset('assets/img/icons/icon5.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-success-story-box">
                    <div class="row m-0 align-items-center">
                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="content">
                                <p>Virginia-based contracting firm, Halfaker & Associates, deals with data analytics, cybersecurity, software engineering, and IT infrastructure for the federal government. After being wounded in combat in Iraq, Dawn Halfaker worked on Capitol Hill and with various other contractors looking for a way to continue working with the military even after being medically retired.</p>
                                <p>As a veteran herself, Halfaker knows firsthand what troops in combat need to be successful, and she saw a disconnect between those needs and what people in Washington could provide. This inspired her to start her own company and offer real-world, common-sense solutions to help the military be more effective.</p>
                                <h3>John Smith <span>CTO at PRS</span></h3>
                                {{-- <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="btn btn-primary popup-youtube">Watch Video</a> --}}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 p-0">
                            <div class="image">
                                <img src="{{ asset('assets/img/icons/icon11.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Success Story Area -->

<!-- Start Global Area -->
<section class="global-area ptb-60">
    <div class="container">
        <div class="section-title">
            <h2>Trusted all over the country</h2>
            <div class="bar"></div>
            <p>We are a leading innovative financial company in Uganda boosted with our dedicated professional, highly trained and disciplined staff in areas of financial products .</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="global-content">
                    <ul>
                        <li>1,000+ trusted customers</li>
                        <li>100+ request per day</li>
                        <li>2+ countries using</li>
                        <li>2+ sent every month</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="global-image text-center">
                    <img src="{{ asset('assets/img/global-img.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Global Area -->

<!-- Start Payment Features Area -->
{{-- <section class="payment-features-area ptb-70">
    <div class="container">
        <div class="payment-features-overview">
            <div class="payment-features-image">
                <div class="image">
                    <img src="{{ asset('assets/img/payment-features1.jpg') }}" alt="image">
                </div>
            </div>

            <div class="payment-features-content">
                <div class="content">
                    <h2>Retail Payment Processing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="link-btn">Get started now</a>
                </div>
            </div>
        </div>

        <div class="payment-features-overview">
            <div class="payment-features-content">
                <div class="content">
                    <h2>Online & eCom Payment Processing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="link-btn">Get started now</a>
                </div>
            </div>

            <div class="payment-features-image">
                <div class="image">
                    <img src="{{ asset('assets/img/payment-features2.jpg') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Payment Features Area -->

<!-- Start Get Started Area -->
{{-- <section class="get-started-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="get-started-title">
                    <h2>Ready to get started?</h2>
                    <a href="sign-up.html" class="btn btn-primary">Sign Up Now</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="get-started-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Get Started Area -->
</div>
