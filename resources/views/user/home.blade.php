<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Job Vacancy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">

  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        
        <h1 class="sitename">Job Vacancy</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Portfolio</a></li>
          <li><a href="">Team</a></li>
          <li ><a href="#"></a></li>
          <li><a href="">Contact</a></li>
       
     

         @if(Route::has('login'))

    @auth


    <li><a class="btn-getstarted" href="{{ url('myapplication') }}">My Application</a></li>

<x-app-layout>
</x-app-layout>

      @else
      <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
       <a class="btn-getstarted" href="{{ route('register') }}">Register</a>


        @endauth

        @endif


           <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
           
          </ul>

      </nav>

     
    </div>
  </header>






  <main class="main">

    
 @if(session()->has('message'))

        <div class="alert alert-success"style="padding:25px;margin-left:25%; border-color: #ffa426;box-shadow: 0 2px 26px #ffc473;background-color: #ffa426;margin-top:10%">
          
          <button type="button" class="close" data-dismiss="alert">X
          </button>

          {{session()->get('message')}}
        </div>
        @endif
        

    <!-- Hero Section -->
    <section id="hero" class="section hero light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>New job opportunitys</h1>
            <p>With Our Network Of Partners, We Mentor, Train And Inspire Local Teams So 
                They Can Save Sight In Their Communities.</p>
            <div class="d-flex">
              <a href="{{ route('register') }}" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=2XWsTDZl4pM" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.webp" width="5000" height="5000" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


 
@include('user.aboutUs')

@include('user.service')

@include('user.jobs')

@include('user.companyteam')

@include('user.clients')

@include('user.job_application')

@include('user.contact')    
   

  </main>

  @include('user.footer') 


  

 <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>