<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sample;
use App\Models\meta_sample;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        $samples = meta_sample::whereYear('created_at', '=', ($request->year) ? $request->year : '2021')->whereHas('sample', function ($query) use ($type) {
            $query->where('type', '=', $type);
        })->with('sample')->simplePaginate(4)->withQueryString();
        
        return view('pages.samples.index',[
            'samples' => $samples,
            'current_year' => $request->year,
            'type' => $type
        ]);
    }

    public function show(Request $request)
    {
        $type = $request->type;
        $samples = meta_sample::latest()->whereHas('sample', function ($query) use ($type) {
            $query->where('type', '=', $type);
        })->with('sample')->take(5)->inRandomOrder()->get();

        $sample = meta_sample::findOrFail($request->id);
        return view('pages.samples.show',compact('sample','samples','type'));
    }
}
