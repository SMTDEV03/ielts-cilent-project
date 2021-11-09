<?php

namespace App\Http\Controllers;

use App\Models\meta_sample;
use App\Models\sample;
use Illuminate\Http\Request;
use ProWritingAidSDK\Configuration;
use ProWritingAidSDK\Api\HtmlApi;
use ProWritingAidSDK\Model\HtmlAnalysisRequest;

class CorrectionController extends Controller
{
    public function index()
    {
        $samples = meta_sample::latest()->take(5)->inRandomOrder()->get();
        return view('pages.correction.index',compact('samples'));
    }

}
