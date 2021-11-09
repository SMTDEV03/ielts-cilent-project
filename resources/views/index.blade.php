@extends('layouts.front-layout')
@section('title','Home')

@section('content')

<!-- Mobile Menu Start -->
<x-mobile_menu />
<!-- Mobile Menu End -->

<!-- Slider Start -->
<x-home_slider />
<!-- Slider End -->

<div class="section section-padding mt-n1">
   <div class="container">
      <!-- Section Title Start -->
      <div class="section-title shape-03 text-center">
         <h2 class="main-title">How It <span> Work?</span></h2>
      </div>
      <!-- Section Title End -->
      <!-- How it Work Wrapper Start -->
      <div class="how-it-work-wrapper">
         <!-- Single Work Start -->
         <div class="single-work">
            <img class="shape-1" src="{{ asset('public/assets/front_assets/images/shape/shape-15.png') }}" alt="Shape">
            <div class="work-icon">
               <i class="flaticon-transparency"></i>
            </div>
            <div class="work-content">
               <h3 class="title">Find Your Course</h3>
               <p>It has survived not only centurie also leap into electronic.</p>
            </div>
         </div>
         <!-- Single Work End -->
         <!-- Single Work Start -->
         <div class="work-arrow">
            <img class="arrow" src="{{ asset('public/assets/front_assets/images/shape/shape-17.png') }}" alt="Shape">
         </div>
         <!-- Single Work End -->
         <!-- Single Work Start -->
         <div class="single-work">
            <img class="shape-2" src="{{ asset('public/assets/front_assets/images/shape/shape-15.png') }}" alt="Shape">
            <div class="work-icon">
               <i class="flaticon-forms"></i>
            </div>
            <div class="work-content">
               <h3 class="title">Test Your Essay</h3>
               <p>It has survived not only centurie also leap into electronic.</p>
            </div>
         </div>
         <!-- Single Work End -->
         <!-- Single Work Start -->
         <div class="work-arrow">
            <img class="arrow" src="{{ asset('public/assets/front_assets/images/shape/shape-17.png') }}" alt="Shape">
         </div>
         <!-- Single Work End -->
         <!-- Single Work Start -->
         <div class="single-work">
            <img class="shape-3" src="{{ asset('public/assets/front_assets/images/shape/shape-16.png') }}" alt="Shape">
            <div class="work-icon">
               <i class="flaticon-badge"></i>
            </div>
            <div class="work-content">
               <h3 class="title">Get Results</h3>
               <p>It has survived not only centurie also leap into electronic.</p>
            </div>
         </div>
         <!-- Single Work End -->
      </div>
   </div>
</div>
<div class="section section-padding theme-bg">
   <div class="container">
      <div class="row align-item-center">
         <div class="col-lg-6">
            <!-- About Images Start -->
            <div class="about-images about-cust-pic">
               <div class="images">
                  <img src="{{ asset('public/assets/front_assets/images/about-11.png') }}" alt="">
               </div>
            </div>
            <!-- About Images End -->
         </div>
         <div class="col-lg-6">
            <!-- About Content Start -->
            <div class="about-content">
               <h5 class="sub-title">Welcome to Crack-IELTS</h5>
               <h2 class="main-title">You can join with us and upgrade <span>your skills.</span></h2>
               <p>Lorem Ipsum has been the industr’s standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.</p>
               <ul class="about-list">
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Lorem Ipsum has been the industr’s standard dummy.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Lorem Ipsum has been the industr’s.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Lorem Ipsum has been the industr’s standard.</li>
               </ul>
               <a href="{{ route('correction_page') }}" class="btn btn-primary btn-hover-dark">Start Testing</a>
            </div>
            <!-- About Content End -->
         </div>
      </div>
   </div>
</div>
<div class="section section-padding">
   <div class="container">
      <div class="row align-item-center">
         <div class="col-lg-6">
            <!-- About Content Start -->
            <div class="about-content mx-0">
               <h5 class="sub-title">Welcome to Crack-IELTS</h5>
               <h2 class="main-title">Become An Essay <span>Expert</span></h2>
               <p>Lorem Ipsum has been the industr’s standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.</p>
               <ul class="about-list">
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Lorem Ipsum has been the industr’s standard dummy.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Lorem Ipsum has been the industr’s.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Lorem Ipsum has been the industr’s standard.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Lorem Ipsum has been the industr’s.</li>
               </ul>
               <a href="{{ route('correction_page') }}" class="btn btn-primary btn-hover-dark">Start Testing</a>
            </div>
            <!-- About Content End -->
         </div>
         <div class="col-lg-6">
            <!-- About Images Start -->
            <div class="about-images about-cust-pic">
               <div class="images">
                  <img src="{{ asset('public/assets/front_assets/images/about-22.png') }}" alt="">
               </div>
            </div>
            <!-- About Images End -->
         </div>
      </div>
   </div>
</div>

<!-- Testimonial Start -->
<x-testimonial />
<!-- Testimonial End -->

<!-- Subscribe Start -->
<x-subscribe />
<!-- Subscribe End -->

@endsection