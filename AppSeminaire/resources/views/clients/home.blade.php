@extends('layouts.client')

@section('title')
    seminaire fac.sce
@endsection

@section('content')
      <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-seminaires-center ">
    <div class="container-fluid container-xxl d-flex align-seminaires-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="{{url('/')}}" class="scrollto">Fac sce/Seminaires</a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Conferencier</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Calendrier</a></li>
          <li><a class="nav-link scrollto" href="#venue">Lieu</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallerie</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link buy-tickets scrollto" href="{{url('/newRegister')}}">Register Orateur</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      {{-- <a class="buy-tickets scrollto" href="{{url('/register')}}">Register</a> --}}

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Séminaire du <strong>{{ $seminaire->jour}}, {{$seminaire->num_jour}}/{{$seminaire->mois}}/{{$seminaire->annee}}</strong></h1>
      <p class="mb-4 pb-0">{{$seminaire->heure_debut}}-{{$seminaire->heure_fin}}, {{$seminaire->lieu}}, Unikin/fac sce</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>

    
  </section><!-- End Hero Section -->

  <main id="main">

@include('includes.about')

@include('includes.speakers')

@include('includes.schedule')

@include('includes.venue')

@include('includes.galery')

{{-- @include('includes.sponsors') --}}

{{-- @include('includes.faq') --}}

    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Abonnez-vous à notre Newsletter pour plus d'actualité.</p>
        </div>

        <form method="POST" action="#">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input type="text" class="form-control" placeholder="Enter your Email">
              <button type="submit" class="ms-2">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section><!-- End Subscribe Section -->

{{-- @include('includes.tickets') --}}

@include('includes.contact')

  </main><!-- End #main -->

@include('includes.footer')

  <a href="#" class="back-to-top d-flex align-seminaires-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection