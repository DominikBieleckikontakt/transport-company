<x-layout>
    <div>
        <section class="hero" id="hero">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                  @foreach($slides as $slide)
                  <div class="swiper-slide">
                    <img loading="lazy" src="{{ asset('storage/'.$slide->image) }}" alt="Slide 1">
                    <div class="banner-content">
                      <h1>{{ $slide->title }}</h1>
                      <p>{{ $slide->description }}</p>
                      <a href="{{ $slide->button_link }}" class="banner-button">{{ $slide->button_text }}</a>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </section>
        <section class="contact__section" id="contact">
            <div class="contact__section-container">
                <div class="text__container">
                    <h2>WHAT DO YOU NEED?</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Tell us what you need</p>
                </div>
                <form action="{{ route('contact.send') }}#contact" method="POST">
                    @csrf
                    @if(session()->has('success'))
                        <div class="contact__section-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="form-group position-relative">
                        <!-- <label for="service">Service:</label> -->
                        <input type="text" class="form-control input-with-icon" id="service" name="service" placeholder="What service do you need...">
                        <img src="{{ asset('/img/furniture_input.png') }}" alt="icon" class="input-icon">
                    </div>
                    <div class="inputs-container">
                        <div class="form-group position-relative location">
                            <!-- <label for="from">From:</label> -->
                            <input type="text" class="form-control input-with-icon" id="from" name="from" placeholder="Collection Location...">
                            <img src="{{ asset('/img/pin.png') }}" alt="icon" class="input-icon">
                        </div>
                        <div class="form-group position-relative location">
                            <!-- <label for="to">To:</label> -->
                            <input type="text" class="form-control input-with-icon" id="to" name="to" placeholder="Delivery Location...">
                            <img src="{{ asset('/img/pin.png') }}" alt="icon" class="input-icon">
                        </div>
                    </div>
                    <div class="form-group position-relative phone">
                        <!-- <label for="service">Phone number:</label> -->
                        <input type="text" class="form-control input-with-icon" id="phone" name="phone" placeholder="Your phone number...">
                        <img src="{{ asset('/img/phone_input.png') }}" alt="icon" class="input-icon">
                    </div>
                    <div class="btn__container">
                        <button type="submit">Receive quotes in minutes</button>
                    </div>
                </form>

            </div>
        </section>
        <section class="whyus__section" id="services">
            <div class="section__container">
                <div class="text__container">
                    <h2>OUR SERVICES</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Expert Care and Reliable Service for All Your Moving Needs</p>
                </div>
                <div class="cards__container">
                    @foreach($services as $service)
                    <div class="card">
                        <div class="image__container">
                            <img src="{{ asset('storage/'.$service->image) }}" alt="Truck Icon">
                        </div>
                        <h2>{{ $service->name }}</h2>
                        <p>{{ $service->description }}</p>
                    </div>
                    @endforeach
            </div>
        </section>
        <section class="bestat__section" id="specialities">
            <div class="section__container">
                <div class="text__container">
                    <h2>OUR SPECIALITIES</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Leading the Way in Quality and Reliability</p>
                </div>
                <div class="grid-container">
                    <div class="column first-column">
                        @foreach($specialitiesFirst as $speciality)
                        <div class="item">
                            <div class="text">
                                <h3>{{ $speciality->name }}</h3>
                                <p>{{ $speciality->description }}</p>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('storage/'.$speciality->image) }}" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="column second-column">
                        <img src="{{ asset('img/van.jpg') }}" alt="Van">
                    </div>

                    <div class="column third-column">
                        @foreach($sepcialitiesSecond as $speciality)
                        <div class="item">
                            <div class="icon">
                                <img src="{{ asset('storage/'.$speciality->image) }}" alt="">
                            </div>
                            <div class="text">
                                <h3>{{ $speciality->name }}</h3>
                                <p>{{ $speciality->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="aboutus__section" id="about">
            <div class="aboutus__section-container">
                <div class="text__container">
                    <h2>ABOUT US</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Your Trusted Partner for Furniture Transport, Removals, and Pallet Shipping</p>
                </div>
                <div class="about__text">
                    <p>{{ setting('site.about') }}</p>
                </div>
            </div>
        </section>
        <!-- <section class="contact__section" id="contact">
            <div class="contact__section-container">
                <div class="text__container">
                    <h2>CONTACT US</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Contact Us for Prompt and Friendly Support</p>
                </div>
                <form method="POST" action="{{ route('contact.send') }}#contact">
                    @csrf

                    @if(session()->has('success'))
                        <div class="contact__section-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <div class="form__container">
                        <div class="input__container">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" required placeholder="Enter your first name">
                            @error('first_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input__container">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" minlength="3" id="last_name" required placeholder="Enter your last name">
                            @error('last_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input__container">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required placeholder="Enter your email">
                             @error('email')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input__container">
                            <label for="phone">Phone number</label>
                            <input type="number" name="phone" minlength="3" id="phone" required placeholder="Enter your phone number">
                             @error('phone')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="textarea__container">
                            <textarea name="message" minlength="5" rows="5" id="message" required placeholder="Enter your message"></textarea>
                             @error('message')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="btn__container">
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </section> -->
        <!-- <section id="testimonials" class="testimonials-section">
            <div class="section__container">
                <div class="text__container">
                    <h2>WHAT OUR CLIENTS SAY</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Read some opinions about us and our services</p>
                </div>
          
    
              <div class="swiper-container2 testimonial-swiper">
                <div class="swiper-wrapper">
                  @foreach($testimonials as $testimonial)
                  <div class="swiper-slide">
                    <div class="testimonial-card p-4 shadow">
                      <div class="testimonial-content mb-4">
                        <p>{{ $testimonial->text }}</p>
                      </div>
                      <div class="testimonial-author d-flex align-items-center">
                        <div class="ml-3">
                          <h5 class="mb-0">{{ $testimonial->name }}</h5>
                          <p class="text-muted mb-0">{{ $testimonial->company }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </section> -->
          <div class="testimonial-container">
            <div class="section__container">
                <div class="text__container">
                    <h2>WHAT OUR CLIENTS SAY</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Read some opinions about us and our services</p>
                </div>
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-card p-4 shadow-sm">
                                <div class="testimonial-content mb-4">
                                    <p>{{ $testimonial->text }}</p>
                                </div>
                                <div class="testimonial-author">
                                    <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                    <p class="text-muted mb-0">{{ $testimonial->company }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>