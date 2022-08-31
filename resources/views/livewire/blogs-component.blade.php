<div>
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <h2>Blog</h2>
                <p>Our Latest News</p>
            </div>
        </div>

</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="blog-image">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">
                                                <img src="{{ asset('assets/img/blog-image') }}/{{ $blog->image }}" alt="{{ $blog->name }}">
                                            </a>

                                    <div class="date">
                                        <i class="far fa-calendar-alt"></i> {{date('d F, Y', strtotime(   $blog->created_at )) }}
                                    </div>
                                </div>

                                <div class="blog-post-content">
                                    <h3><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->name }}</a></h3>

                                    <span>by <a href="#">{{ $blog->user->name }}</a></span>

                                    <p>{{ str_limit(strip_tags($blog->description),200,'...')  }}</p>

                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            {{ $blogs->links('pagination::bootstrap-4') }}
                            {{-- <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </section>

                    <section class="widget widget_luvion_posts_thumb">
                        <h3 class="widget-title">Recent Posts</h3>
                        @foreach ($l_blogs as $l_blog)
                            <article class="item">
                                <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}" class="thumb">
                                            {{-- <span class=" cover bg1" role="img" style="background-image: url({{ asset('assets/img/blog-image') }}/{{ $l_blog->image }});"></span> --}}
                                            <img class=" cover bg1" style="width: 100%; height: 80%;" src="{{ asset('assets/img/blog-image') }}/{{ $l_blog->image }}" alt="{{ $l_blog->name }}">
                                        </a>
                                <div class="info">
                                    <time datetime="2021-06-30">{{date('d F, Y', strtotime(   $l_blog->created_at )) }}</time>
                                    <h4 class="title usmall"><a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">{{ $l_blog->name }}</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>
                        @endforeach


                    </section>



                    <section class="widget widget_categories">
                        <h3 class="widget-title">Services</h3>

                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('service.detail',['slug' =>$category->slug]) }}">{{ $category->name }}</a></li>
                            @endforeach


                        </ul>
                    </section>



                    {{-- <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>

                        <div class="tagcloud">
                            <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Luvion <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                        </div>
                    </section> --}}
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
</div>
