@extends('layouts.dashboard')
@section('title','Account Settings')

@section('content')

<!-- Dashboard aside Start -->
<x-dashboard.aside />
<!-- Dashboard aside End -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1 class="text-black">Pricing</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="sub-bread"><i class="fa fa-angle-right"></i> Pages</li>
      <li><i class="fa fa-angle-right"></i>Account Settings</li>
    </ol>
  </div>

  <x-dashboard.profile />

</div>

@endsection