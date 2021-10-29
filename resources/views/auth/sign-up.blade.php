@extends('layouts.front-layout')
@section('title','Essays')

@section('content')

<!-- Mobile Menu Start -->
<x-mobile_menu />
<!-- Mobile Menu End -->

<!-- Page Banner Start -->
<x-page_banner />
<!-- Page Banner End -->

<div class="section pt-10 pb-10">
    <div class="container">
        <!-- Register & Login Wrapper Start -->
        <x-register_form />
        <!-- Register & Login Wrapper End -->
    </div>
</div>

<!-- Subscribe Start -->
<x-subscribe />
<!-- Subscribe End -->

@endsection