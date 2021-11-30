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
         <h2 class="main-title">How to <span>Proceed?</span></h2>
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
               <h3 class="title">Write an Essay</h3>
               <p>Write an essay on a specific topic at your convenience.</p>
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
               <h3 class="title">Click on Eassy Correction</h3>
               <p>Paste your essay in the portal to have a check.</p>
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
               <p>You will get suggestions for correction and improvement.</p>
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
               <h5 class="sub-title">Improve Your Writing Skills</h5>
               <h2 class="main-title">Join Us To Upgrade <span>Your Skills.</span></h2>
               <p>Get assistance in essay writing with us. We are your full-stack guide to help you improve your English mistakes, grammatical errors, etc. the benefits of avail our services include:</p>
               <ul class="about-list">
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Improved English Skills.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Enhancement in Writing Skills.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i>A Better IELTS Score.</li>
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
               <h5 class="sub-title">One-Stop Writing Assistant</h5>
               <h2 class="main-title">Become the Essay Writing <span>Expert</span></h2>
               <p>At How to crack IELTS, we provide the essay and letter writing tests along with their answers to help you improve and enhance your writing skills. With improved writing skills, you will get the opportunity to get a better IELTS score. What all you will get is:</p>
               <ul class="about-list">
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Essay Writing Guide.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Assessment Tests.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Expert Guidance.</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Path to Improvement.</li>
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

<!-- Pricing Start -->
<x-pricing />
<!-- Pricing  End-->

<!-- Subscribe Start -->
<x-subscribe />
<!-- Subscribe End -->




@endsection