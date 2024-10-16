<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function privacypolicy()
    {
        return view('frontend.privacypolicy'); // Make sure this view exists
    }
    public function termscondition()
    {
        return view('frontend.termscondition');
    }
    public function cancellation()
    {
        return view('frontend.cancellation');
    }
    public function shipping()
    {
        return view('frontend.shipping');
    }
}
