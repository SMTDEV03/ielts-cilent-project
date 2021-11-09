<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meta_sample;

class EssaySampleController extends Controller
{
    public function index(Request $request){
        $essay_samples = meta_sample::where('sample_id','1')->whereYear('created_at','=',($request->year)?$request->year:'2021')->simplePaginate(4)->withQueryString();
        return view('pages.essays.index',[
            'essay_samples' => $essay_samples,
            'current_year' => $request->year,
        ]);
    }

    public function show(Request $request){
        $essay_samples = meta_sample::latest()->where('sample_id','1')->take(4)->get();
        $sample = meta_sample::findOrFail($request->id);
        return view('pages.essays.show',compact('sample','essay_samples'));
    }
}
