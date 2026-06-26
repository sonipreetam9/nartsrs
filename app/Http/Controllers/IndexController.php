<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function Index()
    {
        return view('index');
    }

    public function TraningPlacementIndex()
    {
        return view('training-placement');
    }

    public function NetworkIndex()
    {
        return view('network');
    }

    public function GalleryIndex()
    {
        return view('gallery');
    }

}
