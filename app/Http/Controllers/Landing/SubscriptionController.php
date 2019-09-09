<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function showForm()
    {
        return view('subscribe');
    }
}
