<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LetterSampleController extends Controller
{
    public function index(){
        return view('pages.letters.index');
    }
}
