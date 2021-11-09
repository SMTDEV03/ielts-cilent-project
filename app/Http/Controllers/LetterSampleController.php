<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meta_sample;


class LetterSampleController extends Controller
{
    public function index(Request $request){
        $letter_samples = meta_sample::where('sample_id','2')->whereYear('created_at','=',($request->year)?$request->year:'2021')->simplePaginate(4)->withQueryString();
        return view('pages.letters.index',[
            'letter_samples' => $letter_samples,
            'current_year' => $request->year,
        ]);
    }

    public function show(Request $request){
        $letter_samples = meta_sample::latest()->where('sample_id','2')->take(4)->get();
        $sample = meta_sample::findOrFail($request->id);
        return view('pages.letters.show',compact('sample','letter_samples'));
    }
}
