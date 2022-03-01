<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ProductsArController extends Controller
{
    public function search(Request $request)
    {
        Session::put('searchFrom', 'index');
        Session::put('category', $request['category']);
        Session::put('searchWord', $request['serach']);

        return view('shop-gridar');
    }

}
