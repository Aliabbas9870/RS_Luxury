<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;
class SiteController extends Controller
{
    //
public function show($slug)
{
    $site = Site::with(['pages', 'faqs'])->where('slug', $slug)->firstOrFail();
    return view('frontend.index', compact('site'));
}
}
