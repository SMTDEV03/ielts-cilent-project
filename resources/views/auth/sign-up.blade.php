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
                <x-register_form/>
            <!-- Register & Login Wrapper End -->
        </div>
    </div>

    <!-- Subscribe Start -->
        <x-subscribe/>
    <!-- Subscribe End -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Enter name"/>
        <input type="email" name="email" class="form-control" placeholder="Enter email"/>
        <input type="password" name="password" class="form-control" placeholder="Enter password"/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>