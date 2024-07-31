<!-- Clients Section -->
<section id="clients" class="clients section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Clients</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>

      <div class="swiper-wrapper align-items-center">
        @foreach($companyphoto as $photo)
          <div class="swiper-slide">
            <img width="150px" height="150" src="CompanyLogoimage/{{ $photo->image }}" class="img-fluid" alt="">
          </div>
        @endforeach
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Include Swiper CSS and JS directly in this section -->
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const swiperConfigs = document.querySelectorAll('.swiper-config');
      swiperConfigs.forEach(config => {
        const swiper = new Swiper(config.closest('.swiper'), JSON.parse(config.textContent));
      });
    });
  </script>

</section><!-- /Clients Section -->
