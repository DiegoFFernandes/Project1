<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ServicesSite;
use App\Model\ItemServicesSite;

class HomeController extends Controller
{

    public function services()
    {
        $servicesResumo = ServicesSite::where('position_site', 1)->get();
        $services = ServicesSite::where('position_site', 2)->get();
        $itemservices = ItemServicesSite::where('id_itemservices', 5)->get();
        //dd($itemservices);
        return view('site/home', compact('servicesResumo', 'services', 'itemservices'));
    }
}
