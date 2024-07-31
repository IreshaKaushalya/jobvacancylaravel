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

<link rel="stylesheet" type="text/css" href="../table/style.css">

</head>

<body>

	<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        
        <h1 class="sitename">Job Vacancy</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" >Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Portfolio</a></li>
          <li><a href="">Team</a></li>
          <li ><a href="#"></a></li>
          <li><a href="">Contact</a></li>
       
     

         @if(Route::has('login'))

    @auth


    <li><a class="btn-getstarted" href="{{ url('myapplication') }}"class="active">My Application</a></li>

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

  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     

<main class="table" id="customers_table">
       
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Job Role <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Address <span class="icon-arrow">&UpArrow;</span></th>
                        
                       
                        <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Your CV <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Status <span class="icon-arrow">&UpArrow;</span></th>

                         <th> Cancel Application <span class="icon-arrow">&UpArrow;</span></th>
                        


                    </tr>
                </thead>
                <tbody>

                	@foreach($applica as $applica)
                    <tr>
                        <td> {{$applica->first_name}}{{$applica->last_name}}</td>
                        <td> {{$applica->email}} </td>
                        <td> {{$applica->job_role}} </td>

                        <td> {{$applica->address}} </td>                    
                        
                        <td> {{$applica->date}}</td>

                         <td>{{$applica->upload}}</td>
                        <td>{{$applica->status}}</td>

                        <td><a style="background-color: orange;" onclick="return confirm('Are you sure to delete this')" href="{{url('cancel_applica',$applica->id)}}"
                         >Cancel</a></td>                        
                        
                      
                       
                    </tr>
                   
                  @endforeach
                   
                </tbody>
            </table>
        </section>
    </main>
    

  @include('user.footer') 




<script src="../table/script.js"></script>


      
 
</body>



</html>
    