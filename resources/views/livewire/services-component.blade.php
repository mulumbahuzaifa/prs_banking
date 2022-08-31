<div>
    <!-- Start Page Title Area -->
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Services</h2>
            <p>What We Offer</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-70">
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="{{ route('service.detail',['slug' =>$service->slug]) }}">
                            <img src="{{ asset('assets/img/category') }}/{{ $service->image }}" alt="{{ $service->name }}">
                        </a>
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="{{ route('service.detail',['slug' =>$service->slug]) }}">{{ $service->name }}</a></h3>

                        <p>{{ $service->description }}</p>

                        <a href="{{ route('service.detail',['slug' =>$service->slug]) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="single-blog.html">
                                    <img src="{{ asset('assets/img/GettyImages-949278532.webp') }}" alt="image">
                                </a>

                        {{-- <div class="date">
                            <i class="far fa-calendar-alt"></i> September 15, 2021
                        </div> --}}
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">Investment</a></h3>


                        <p>An investment is an asset or item acquired with the goal of generating income or appreciation. Appreciation refers to an increase in the value of an asset over time. When an individual purchases a good as an investment, the intent is not to consume the good but rather to use it in the future to create wealth.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="single-blog.html">
                                    <img src="{{ asset('assets/img/fin003-pix-data.jpg') }}" alt="image">
                                </a>

                        {{-- <div class="date">
                            <i class="far fa-calendar-alt"></i> September 15, 2021
                        </div> --}}
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">Customer Support</a></h3>


                        <p>We understand that customer service is a full team effort, not just the responsibility of frontline staff. Indeed, customer experience is every employee’s responsibility and thus we have put in place channels to obtain feedback and communicate with customers. Channels include: call center, customer helplines, e-mail, website, suggestion boxes and complaint/compliment registers in our branches. From time to time, we also carry out customer meetings at branches and customer visitations at their business premises in order to exchange first-hand feedback with our customers.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="single-blog.html">
                                    <img src="{{ asset('assets/img/product_8.jpg') }}" alt="image">
                                </a>

                        {{-- <div class="date">
                            <i class="far fa-calendar-alt"></i> September 15, 2021
                        </div> --}}
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">Tips For Your Business</a></h3>


                        <p>If you're starting a new business for the first time, you should take every opportunity to give your new enterprise the best chance of success. We provide top business tips and advice to help your business succeed.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                    <a href="#" class="page-numbers">1</a>
                    <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- End Blog Area -->
</div>
