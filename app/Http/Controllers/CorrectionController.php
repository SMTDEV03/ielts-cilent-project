<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProWritingAidSDK\Configuration;
use ProWritingAidSDK\Api\HtmlApi;
use ProWritingAidSDK\Model\HtmlAnalysisRequest;

class CorrectionController extends Controller
{
    public function index()
    {
        return view('pages.correction.index');
    }

    public function create()
    {
        
    }
}
