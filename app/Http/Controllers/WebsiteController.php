<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
}
