<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title')</title>
   <meta name="robots" content="noindex, follow" />
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   @yield('seo-tags')
   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/front_assets/images/favicon.png') }}">
   <link rel="stylesheet" href="{{ asset('public/assets/front_assets/css/vendor/plugins.min.css') }}">
   <link rel="stylesheet" href="{{ asset('public/assets/front_assets/css/style.min.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
   @yield('extra-css')
</head>

<body>
   <div>
      <x-header />
      @yield('content')
      <x-footer />
   </div>
</body>
<!-- JS -->
<!-- Modernizer & jQuery JS -->
<script src="{{ asset('public/assets/front_assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('public/assets/front_assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('public/assets/front_assets/js/plugins.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('public/assets/front_assets/js/main.js') }}"></script>
@yield('extra-js')

</html>