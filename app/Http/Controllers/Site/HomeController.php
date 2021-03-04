<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ServicesSite;

class HomeController extends Controller
{

    public function services()
    {
        $services = ServicesSite::all();
        //dd($services[0]);
        return view('site/home', compact('services'));
    }
}
