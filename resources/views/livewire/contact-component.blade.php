<div>
    <!-- Start Page Title Area -->
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Contact</h2>
            <p>If you have an idea, we would love to hear about it.</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Drop us message for any query</h2>
            <div class="bar"></div>
            <p>Our operations, code of ethics and practices are guided by International Valuation Standards Council, Institution of Surveyors of Uganda, Association of Real Estate Agents of Uganda and Uganda’s laws enacted by parliament to whom we aspire in both membership and guidance.</p>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <ul>
                        @if ($setting->address)
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Address</span> {{ $setting->address }}
                        </li>
                        @endif

                        @if ($setting->email)
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>
                            <a href="mailto:{{ $setting->email }}"><span class="__cf_email__">{{ $setting->email }}</span></a>
                        </li>
                        @endif


                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <span>Phone</span>
                            @if ($setting->phone)
                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            @endif
                            @if ($setting->phone2)
                            <a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <form id="contactForm" wire:submit.prevent="sendMessage">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control"  wire:model="name" data-error="Please enter your name" placeholder="Name">
                                    @error('name')
                                    <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control"  wire:model="email" data-error="Please enter your email" placeholder="Email">
                                    @error('email')
                                    <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number"  wire:model="phone" data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    @error('phone')
                                    <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control"  wire:model="subject" data-error="Please enter your subject" placeholder="Subject">
                                    @error('subject')
                                    <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6"  wire:model="comment" data-error="Write your message" placeholder="Your Message"></textarea>
                                    @error('comment')
                                    <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
</section>
<!-- End Contact Area -->
</div>
