@extends('layouts.front-layout')
@section('title','Home')

@section('content')

    <!-- Mobile Menu Start -->
    <x-mobile_menu />
    <!-- Mobile Menu End -->

    <!-- Page Banner Start -->
        <x-page_banner />
    <!-- Page Banner End -->
    
         <div class="section section-padding pt-10">
            <div class="container">
               <div class="row gx-10">
                  <div class="col-lg-8">
                    <!-- Correction Form Start -->
                        <x-correction_form/>
                    <!-- Correction Form End -->
                  </div>
                  <div class="col-lg-4">
                    <!-- Sidebar Start -->
                        <x-sidebar/>
                    <!-- Sidebar End --> 
                  </div>
               </div>
            </div>
         </div>

    <!-- Subscribe Start -->
        <x-subscribe/>
    <!-- Subscribe End -->