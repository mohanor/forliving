<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function redirectUser()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('dashbord');
        }
        else {
            return redirect()->route('products.index');
        }
    }

    public function index()
    {
        $products = DB::table('products')
                    ->join('images', 'products.id', 'images.product_id')
                    ->join('order_product', 'products.id', 'order_product.product_id')
                    ->join('orders', 'order_product.order_id', 'orders.id')
                    ->where('orders.user_id', '=', auth()->user()->id)
                    ->where('images.type', '=', 'primary')
                    ->select('products.id as product', 'title', 'src', 'status')
                    ->get();

        return view('home')->with(['products' => $products]);
    }

    public function contact()
    {
        $categories = DB::table('categories')
                    ->get();

        return view('contact')->with(['categories' => $categories]);
    }

    public function review($id)
    {
        $product = DB::table('products')
                    ->join('images', 'products.id', 'images.product_id')
                    ->where('products.id', '=', $id)
                    ->select('products.id as id','title', 'src')
                    ->get();
        
        return view('review')->with(['product' => $product]);
    }

    public function storeReview(Request $request)
    {
        Review::create([
            'rating'        => $request->rate,
            'comment'       => $request->review,
            'product_id'   => $request->product_id,
            'user_id'       => Auth::user()->id,
        ]);

        return redirect()->route('home');
    }
}
