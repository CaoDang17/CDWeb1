<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        // Logic của bạn ở đây
        return view('frontend.contact');
    }
}
