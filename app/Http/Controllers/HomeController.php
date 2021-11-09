<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meta_sample;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
}
