@extends('layouts.dashboard')
@section('title','Home')

@section('content')


<!-- Dashboard aside Start -->
<x-dashboard.aside />
<!-- Dashboard aside End -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <a href="{{ route('become_supporter') }}"><div class="info-box bg-darkblue text-justify"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">Recent Speaking Topics</h6>
              <h2 class="text-white">Test 1</h2>
              <span class="text-white " >We have added recent IELTS speaking test questions, which are from the Internet and our visitors who have just taken the test. Its contents cover all speaking question types: Part 1, Part 2, and Part 3. We organize all questions by topics and test date. </span> </div>
            <!-- /.info-box-content --> 
          </div></a>
          <!-- /.info-box --> 
        </div>
        <!-- /.col -->
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <a href="{{ route('become_supporter') }}"><div class="info-box bg-green text-white text-justify"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">High Band Score Examples</h6>
              <h2 class="text-white">Test 2</h2>
              <span class="text-white ">Now Top Example section shows texts added by our supporters, and these writings have up to 9 Band scores. Moreover, we have improved the speed of our server response.</span> </div>
            <!-- /.info-box-content --> 
          </div></a>
          <!-- /.info-box --> 
        </div>
        <!-- /.col -->
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <a href="{{ route('become_supporter') }}"><div class="info-box bg-aqua text-justify"> <span class="info-box-icon bg-transparent"><i class="ti-bar-chart"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">New Version of Premium Checker</h6>
              <h2 class="text-white">Test 3</h2>
              <span class="text-white">We just released the latest version (v. 5.32.1) of our premium evaluation algorithm, now it can evaluate high band writings (up to 9 Bands for essays and 7 for letters and academic writings). It finds much more errors and it also shows examples with correct usage. </span> </div>
            <!-- /.info-box-content --> 
          </div></a>
          <!-- /.info-box --> 
        </div>

      </div>
      <!-- /.row --> 
  </div>
    <!-- /.content --> 
  </div>

@endsection
