<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Events\NewNotification;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Auth;
use DB;

class CartController extends Controller
{
    public function store(Request $request) {}

    public function shpingCart() {
        $name = "name_" . config('app.locale') . " as name";
        $categories = DB::table('categories')
                            ->select($name)
                            ->get();

        return view('shoping-cart')->with(['categories' => $categories]);
    }

    public function shpingCartAr() {
        
        $categories = DB::table('categories')
                            ->select("name_ar as name")
                            ->get();

        return view('shoping-cartar')->with(['categories' => $categories]);
    }

    public function addToCartFromDetails(Request $request) {

        $title = "title_" . config('app.locale') . " as title";

        $product = DB::table('products')
            ->join('images', 'products.id', 'images.product_id')
            ->select('products.id as product', $title,'price', 'src')
            ->where('images.type', '=', 'primary')
            ->where('products.id', '=', $request['id'])
            ->get();

        Cart::add(
            $product[0]->product,
            $product[0]->title,
            1,
            $product[0]->price,
            0,
            [
                'src' => $product[0]->src,
                'total' => $product[0]->price,
            ],
        );

        return redirect()->back();
    }

    public function checkout()
    {
        $order = Cart::content();
        $total = 0;

        foreach($order as $item)
        {
            $total += $item->options['total'];
        }
        return view('checkout')
            ->with([
                'order' => $order,
                'total' => $total
            ]);
    }

    public function checkoutAr()
    {
        $order = Cart::content();
        $total = 0;

        foreach($order as $item)
        {
            $total += $item->options['total'];
        }

        return view('checkout-ar')
            ->with([
                'order' => $order,
                'total' => $total
            ]);
    }

    public function sendOrder(Request $request)
    {
        $client_name    = $request['full_name'];
        $phone          = $request['phone'];
        

        if (Auth::user())
            $user_id = Auth::user()->id;
        else
            $user_id = null;

        $order = Order::create([
            'client_name'   => $client_name,
            'phone'         => $phone,
            'user_id'       => $user_id,
        ]);

        $cart = Cart::content();
        
        foreach($cart as $item)
            $order->products()->attach($item->id, ['quantity' => $item->qty, 'price' => $item->price]);

        Cart::destroy();

        event(new NewNotification(['client' => $client_name]));
        return view("done");
    }

    public function sendOrderAr(Request $request)
    {
        $client_name    = $request['full_name'];
        $phone          = $request['phone'];
        

        if (Auth::user())
            $user_id = Auth::user()->id;
        else
            $user_id = null;

        $order = Order::create([
            'client_name'   => $client_name,
            'phone'         => $phone,
            'user_id'       => $user_id,
        ]);

        $cart = Cart::content();
        
        foreach($cart as $item)
            $order->products()->attach($item->id, ['quantity' => $item->qty, 'price' => $item->price]);

        Cart::destroy();

        event(new NewNotification(['client' => $client_name]));
        return view("donear");
    }

    public function sendOrderNow(Request $request)
    {
        $client_name    = $request['full_name'];
        $phone          = $request['phone'];
        $product        = $request['product'];
        $price        = $request['price'];

        if (Auth::user())
            $user_id = Auth::user()->id;
        else
            $user_id = null;

        $order = Order::create([
            'client_name'   => $client_name,
            'phone'         => $phone,
            'user_id'       => $user_id,
        ]);

        $order->products()->attach($product, ['quantity' => 1, 'price' => $price]);

        event(new NewNotification(['client' => $client_name]));
        return view("done");
    }

    public function shopNow($id) 
    {
        $product = DB::table('products')
            ->join('images', 'products.id', 'images.product_id')
            ->select('products.id as product', 'title','price', 'src')
            ->where('images.type', '=', 'primary')
            ->where('products.id', '=', $id)
            ->get();
        
        return view('checkoutnow')
            ->with([
                'order' => $product
            ]);
    }

    public function checkoutNowAr($id) {
        $product = DB::table('products')
        ->join('images', 'products.id', 'images.product_id')
        ->select('products.id as product', 'title_ar as title','price', 'src')
        ->where('images.type', '=', 'primary')
        ->where('products.id', '=', $id)
        ->get();
    
        return view('checkoutnow-ar')
            ->with([
                'order' => $product
            ]);
    }
}
