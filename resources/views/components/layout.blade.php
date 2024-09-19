<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transport</title> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
  @vite(['resources/js/app.js', 'public/js/app.js', 'public/scss/style.scss'])
</head>
<body>
  <div class="socials__header">
    <div class="socials__header-container">
      <div class="links">
        <a href="#">FAQ</a>
        <span>|</span>
        <a href="#">Helpdesk</a>
        <span>|</span>
        <a href="#">Track Shipment</a>
      </div>
      <div class="socials">
        <div class="social">
          <a href="#">
            <img src="{{ asset('/img/fb_icon.png') }}" alt="facebook" class="icon">
          </a>
        </div>
        <div class="social">
          <a href="#">
            <img src="{{ asset('/img/linkedin_icon.png') }}" alt="linkedin" class="icon">
          </a>
        </div>
      </div>
    </div>
  </div>
  <header class="logo__header">
    <div class="logo__header-container">
      <div class="logo__container">
        <img src="{{ asset('/img/logo.png') }}" alt="Logo">
      </div>
      <div class="points__container">
        <div class="point">
          <div class="point__text">
            <h4>WE ARE HERE</h4>
            <p>West Yorkshire - UK</p>
          </div>
          <div class="point__img">
            <img src="{{ asset('/img/location_icon.png') }}" alt="Location Icon">
          </div>
        </div>
        <div class="point">
          <div class="point__text">
            <h4>CALL US ON</h4>
            <p>
              <a href="tel:+12123456789">+12 123 456 789</a>
            </p>
          </div>
          <div class="point__img">
            <img src="{{ asset('/img/phone_icon.png') }}" alt="Phone Icon">
          </div>
        </div>
        <div class="point clock__point">
          <div class="point__text">
            <h4>WE ARE OPEN</h4>
            <p>9.00 AM - 6.00 PM</p>
          </div>
          <div class="point__img">
            <img src="{{ asset('/img/clock_icon.png') }}" alt="Clock Icon">
          </div>
        </div>
      </div>
    </div>
  </header>
  <nav class="navbar navbar-expand-md">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul>
          <li><a href="#hero" class="menu-link">HOME</a></li>
          <li><a href="#services" class="menu-link">SERVICES</a></li>
          <li><a href="#specialities" class="menu-link">OUR SPECIALITIES</a></li>
          <li><a href="#about" class="menu-link">ABOUT US</a></li>
          <li><a href="#contact" class="menu-link">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    {{ $slot }}
  </main>
  <footer>
    <div class="footer__container">
      <div class="footer__element footer__logo">
        <div class="image__container">
          <img src="{{ asset('/img/logo_white.png') }}" alt="Logo">
        </div>
        <p>
          At [Your Company Name], we specialize in providing reliable and efficient transport and removal services. With a commitment to quality and sustainability, our experienced team ensures safe delivery of furniture, eco-friendly disposal of old items, and seamless moving solutions. Trust us to handle your needs with care and professionalism.
        </p>
      </div>
      <div class="footer__element">
        <h2>Navigation</h2>
        <ul>
          <li><a href="#hero" class="menu-link">HOME</a></li>
          <li><a href="#services" class="menu-link">SERVICES</a></li>
          <li><a href="#specialities" class="menu-link">OUR SPECIALITIES</a></li>
          <li><a href="#about" class="menu-link">ABOUT US</a></li>
          <li><a href="#contact" class="menu-link">CONTACT</a></li>
        </ul>
      </div>
      <div class="footer__element">
        <h2>Section</h2>
        <ul>
          <li><a href="#">THIS</a></li>
          <li><a href="#">IS</a></li>
          <li><a href="#">SOME</a></li>
          <li><a href="#">LIST</a></li>
        </ul>
      </div>
      <div class="footer__element footer__contact">
        <h2>Contact us</h2>
        <div>
          <p>50 Main Design Street</p>
          <p>West Yorkshire - UK</p>
        </div>
        <div>
          <p>
            <a href="tel:">+1 (234) 5678 90,</a>
          </p>
          <p>
            <a href="tel:">+1 (234) 5678 90</a>
          </p>
        </div>
        <div>
          <p>
            <a href="mailto:">office@transport.com</a>
          </p>
          <p>
            <a href="mailto:">info@transport.com</a>
          </p>
        </div>
      </div>
    </div>
    <div class="footer__copyright">
      Designed by: <a href="https://stronydlafirm.eu">StronyDlaFirm.eu</a>
    </div>
    <div class="phone__call">
      <a href="tel:+12123456789">
        <img src="{{ asset('img/phone_call_icon.png') }}" alt="phone">
      </a>
    </div>
  </footer>
</body>
</html>