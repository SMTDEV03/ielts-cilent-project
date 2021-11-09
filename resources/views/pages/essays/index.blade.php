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

<!-- faq Start -->
<x-faq :data="$essay_samples" :currentYear="$current_year"/>
<!-- faq End -->

<!-- Subscribe Start -->
<x-subscribe />
<!-- Subscribe End -->

@endsection