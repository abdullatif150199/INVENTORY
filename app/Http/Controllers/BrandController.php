<?php

namespace App\Http\Controllers;

class BrandController extends Controller
{
    public function __invoke()
    {
        return view('dash.brand');
    }
}
