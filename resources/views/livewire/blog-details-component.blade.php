<div>
    <!-- Start Page Title Area -->
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Blog Details</h2>
            <p>Our latest news</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details">
                    <div class="article-image">
                        <img src="{{ asset('assets/img/blog-image') }}/{{ $blog->image }}" alt="{{ $blog->name }}" style="border-radius: 10px">
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li><span>Posted On:</span> <a href="#">{{date('d F, Y', strtotime(   $blog->created_at )) }}</a></li>
                                <li><span>Posted By:</span> <a href="#">{{ $blog->user->name }}</a></li>
                            </ul>
                        </div>

                        <h3>{{ $blog->name }}</h3>

                        <p>{{ $blog->description }}</p>


                        <blockquote class="wp-block-quote">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                            <cite>Tom Cruise</cite>
                        </blockquote>




                    </div>

                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fas fa-bookmark"></i></span>

                            {{-- <a href="#">Fashion</a>,
                            <a href="#">Games</a>,
                            <a href="#">Travel</a> --}}
                        </div>

                        <div class="article-share">
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="comments-area">
                    <h3 class="comments-title">2 Comments:</h3>

                    <ol class="comment-list">
                        <li class="comment">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img src="{{ asset('assets/img/author1.jpg') }}" class="avatar" alt="image">
                                        <b class="fn">James Anderson</b>
                                        <span class="says">says:</span>
                                    </div>

                                    <div class="comment-metadata">
                                        <a href="#">
                                                    <time>April 24, 2021 at 10:59 am</time>
                                                </a>
                                    </div>
                                </footer>

                                <div class="comment-content">
                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>

                                <div class="reply">
                                    <a href="#" class="comment-reply-link">Reply</a>
                                </div>
                            </article>

                            <ol class="children">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="{{ asset('assets/img/author2.jpg') }}" class="avatar" alt="image">
                                                <b class="fn">Steven Smith</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                            <time>April 24, 2021 at 10:59 am</time>
                                                        </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>
                                </li>

                                <ol class="children">
                                    <li class="comment">
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="{{ asset('assets/img/author3.jpg') }}" class="avatar" alt="image">
                                                    <b class="fn">Sarah Taylor</b>
                                                    <span class="says">says:</span>
                                                </div>

                                                <div class="comment-metadata">
                                                    <a href="#">
                                                                <time>April 24, 2021 at 10:59 am</time>
                                                            </a>
                                                </div>
                                            </footer>

                                            <div class="comment-content">
                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>

                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </article>
                                    </li>
                                </ol>
                            </ol>
                        </li>

                        <li class="comment">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img src="{{ asset('assets/img/author2.jpg') }}" class="avatar" alt="image">
                                        <b class="fn">John Doe</b>
                                        <span class="says">says:</span>
                                    </div>

                                    <div class="comment-metadata">
                                        <a href="#">
                                                    <time>April 24, 2021 at 10:59 am</time>
                                                </a>
                                    </div>
                                </footer>

                                <div class="comment-content">
                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>

                                <div class="reply">
                                    <a href="#" class="comment-reply-link">Reply</a>
                                </div>
                            </article>

                            <ol class="children">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="{{ asset('assets/img/author4.jpg') }}" class="avatar" alt="image">
                                                <b class="fn">James Anderson</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                            <time>April 24, 2021 at 10:59 am</time>
                                                        </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>
                                </li>
                            </ol>
                        </li>
                    </ol>

                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Leave a Reply</h3>

                        <form class="comment-form">
                            <p class="comment-notes">
                                <span id="email-notes">Your email address will not be published.</span> Required fields are marked
                                <span class="required">*</span>
                            </p>
                            <p class="comment-form-comment">
                                <label>Comment</label>
                                <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                            </p>
                            <p class="comment-form-author">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" id="author" name="author" required="required">
                            </p>
                            <p class="comment-form-email">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" id="email" name="email" required="required">
                            </p>
                            <p class="comment-form-url">
                                <label>Website</label>
                                <input type="url" id="url" name="url">
                            </p>
                            <p class="comment-form-cookies-consent">
                                <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                            </p>
                            <p class="form-submit">
                                <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                            </p>
                        </form>
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
<!-- End Blog Details Area -->
</div>
