@extends('layouts.front-layout')
@section('title','Recent Essays')

@section('content')

<!-- Mobile Menu Start -->
<x-mobile_menu />
<!-- Mobile Menu End -->

<!-- Page Banner Start -->
<x-page_banner path="Writing">
    <h2 class="title">Essays With <span>Sample</span></h2>
</x-page_banner>
<!-- Page Banner End -->

<div class="section section-padding pt-10">
    <div class="container">
        <div class="row gx-10">
            <div class="col-lg-8">
                <!-- Blog Details Wrapper Start -->
                <div class="blog-details-wrapper mt-0">
                    <h2 class="title">{{ $sample->question }}</h2>
                    <div class="blog-details-description">
                            {{$sample->answer}}
                    </div>
                </div>
                <!-- Blog Details Wrapper End -->
            </div>
            <div class="col-lg-4">
                <!-- Sidebar Start -->
                <x-sidebar :data="$essay_samples"/>
            </div>
        </div>
    </div>
</div>

<!-- Subscribe Start -->
<x-subscribe />
<!-- Subscribe End -->

@endsection