<x-layout>
    <div>
        <section class="hero">HERO SECTION SPACE</section>
        <section class="whyus__section">
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
                    <div class="card">
                        <div class="image__container">
                            <img src="{{ asset('img/truck_icon.png') }}" alt="Truck Icon">
                        </div>
                        <h2>Reliable Sofa Transport</h2>
                        <p>Safe and careful delivery of your sofa and large furniture. We ensure your items arrive in perfect condition.</p>
                    </div>
                    <div class="card">
                        <div class="image__container">
                            <img src="{{ asset('img/eco_icon.png') }}" alt="Truck Icon">
                        </div>
                        <h2>Eco-Friendly Furniture Removal</h2>
                        <p>Hassle-free pickup and responsible disposal of old sofas, chairs, and beds. We handle your waste sustainably.</p>
                    </div>
                    <div class="card">
                        <div class="image__container">
                            <img class="icon-filter" src="{{ asset('img/pallet_icon.png') }}" alt="Truck Icon">
                        </div>
                        <h2>Swift Moving & Pallet Transport</h2>
                        <p>Efficient moving services and secure pallet transport for a smooth transition. Reliable and timely solutions.</p>
                    </div>
            </div>
        </section>
        <section class="bestat__section">
            <div class="section__container">
                <div class="text__container">
                    <h2>OUR SPECIALITIES</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Leading the Way in Quality and Reliability</p>
                </div>
                <div class="grid__container">
                    <div class="attributes">
                        <div class="attribute">
                            <div class="text__container">
                                <h3>Fast Response and Flexible Scheduling</h3>
                                <p>We provide quick response times and adaptable scheduling to fit your busy life, ensuring a smooth and convenient service experience.</p>
                            </div>
                            <div class="image__container">
                                <img src="{{ asset('img/calendar_icon.png') }}" alt="Calendar icon">
                            </div>
                        </div>
                        <div class="attribute">
                            <div class="text__container">
                                <h3>Precision and Care in Furniture Transport</h3>
                                <p>Our team excels in handling and transporting your furniture with meticulous care, ensuring every piece arrives in perfect condition.</p>
                            </div>
                            <div class="image__container">
                                <img src="{{ asset('img/sofa_icon.png') }}" alt="Sofa icon">
                            </div>
                        </div>
                    </div>

                    <div class="main__image__container">
                        image placeholder
                    </div>
                    
                    <div class="attributes">
                        <div class="attribute">
                            <div class="image__container">
                                <img src="{{ asset('img/money_icon.png') }}" alt="Money icon">
                            </div>
                            <div class="text__container">
                                <h3>Affordable Pricing without Compromise on Quality</h3>
                                <p>Our competitive pricing ensures you get top-notch service without breaking the bank, offering great value for your investment.</p>
                            </div>
                        </div>
                        <div class="attribute">
                            <div class="image__container">
                                <img src="{{ asset('img/truck2_icon.png') }}" alt="Truck icon">
                            </div>
                            <div class="text__container">
                                <h3>Efficient and Reliable Moving Services</h3>
                                <p>We specialize in seamless and timely moving solutions, whether for residential relocations or commercial pallet transport, providing reliable service every time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact__section">
            <div class="contact__section-container">
                <div class="text__container">
                    <h2>CONTACT US</h2>
                    <div class="line">
                        <div class="blue"></div>
                        <div class="gray"></div>
                    </div>
                    <p>Contact Us for Prompt and Friendly Support</p>
                </div>
                <form action="">
                    <div class="form__container">
                        <div class="input__container">
                            <label for="name">Name</label>
                            <input type="text" id="name" required placeholder="Enter your name">
                        </div>
                        <div class="input__container">
                            <label for="lastname">Last name</label>
                            <input type="text" id="lastname" required placeholder="Enter your lastname">
                        </div>
                        <div class="input__container">
                            <label for="email">Email</label>
                            <input type="email" id="email" required placeholder="Enter your email">
                        </div>
                        <div class="input__container">
                            <label for="phone">Phone number</label>
                            <input type="number" id="phone" required placeholder="Enter your phone number">
                        </div>
                        <div class="textarea__container">
                            <textarea name="message" rows="5" id="message" required placeholder="Enter your message"></textarea>
                        </div>
                        <div class="btn__container">
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</x-layout>