<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
use DB;

class ProductsController extends Controller
{
    public function index()
    {

        $name = "name_" . config('app.locale'). " as name" ;
        $categories = DB::table('categories')
                            ->select($name, 'photo')
                            ->get();

        return view('index')->with(['categories' => $categories]);
    }

    public function indexar()
    {
        $categories = DB::table('categories')
                            ->select('name_ar as name', 'photo')
                            ->get();

        return view('indexar')->with(['categories' => $categories]);
    }

    public function search(Request $request)
    {
        Session::put('searchFrom', 'index');
        Session::put('category', $request['category']);
        Session::put('searchWord', $request['serach']);

        return view('shop-grid');
    }
    
    public function getSearch()
    {
        $categories = DB::table('categories')
                        ->get();
        return view('shop-grid')->with(['categories' => $categories]);
    }

    public function getProduct($id)
    {
        $title = "title_" . config('app.locale') . " as title";
        $name = "name_" . config('app.locale') . " as name";
        $description = "description_" . config('app.locale') . " as description";

        $product = DB::table('products')
                    ->join('product_categories', 'products.id', 'product_categories.product_id')
                    ->select('products.id as product_id', $title, $description, 'price', 'compare_price', 'category_id')
                    ->where('products.id', '=', $id)
                    ->get();

        if ($product->isEmpty())
            return "product not found";
        
        $categories = DB::table('categories')
                        ->select($name)
                        ->get();

        $images = DB::table('images')
                        ->where('images.product_id', '=', $id)
                        ->get();

        $Related_product = DB::table('products')
                    ->join('images', 'products.id', 'images.product_id')
                    ->join('product_categories', 'products.id', 'product_categories.product_id')
                    ->where('product_categories.category_id', '=', $product[0]->category_id)
                    ->where('images.type', '=', 'primary')
                    ->select('products.id as product', $title, 'price', 'src')
                    ->get();
        
        $cart = Cart::content();
        
        return view('shop-details')->with([
            'product'           => $product[0],
            'images'            => $images,
            'Related_product'   => $Related_product,
            'categories'        => $categories,
            'cart'              => $cart
        ]);
    }

    public function getProductAr($id)
    {
        $title = "title_ar as title";
        $name = "name_ar as name";
        $description = "description_ar as description";

        $product = DB::table('products')
                    ->join('product_categories', 'products.id', 'product_categories.product_id')
                    ->select('products.id as product_id', $title, $description, 'price', 'compare_price', 'category_id')
                    ->where('products.id', '=', $id)
                    ->get();

        if ($product->isEmpty())
            return "product not found";
        
        $categories = DB::table('categories')
                        ->select($name)
                        ->get();

        $images = DB::table('images')
                        ->where('images.product_id', '=', $id)
                        ->get();
        $Related_product = DB::table('products')
                    ->join('images', 'products.id', 'images.product_id')
                    ->join('product_categories', 'products.id', 'product_categories.product_id')
                    ->where('product_categories.category_id', '=', $product[0]->category_id)
                    ->where('images.type', '=', 'primary')
                    ->select('products.id as product', $title, 'price', 'src')
                    ->get();
        
        $cart = Cart::content();
        
        return view('shop-details-ar')->with([
            'product'           => $product[0],
            'images'            => $images,
            'Related_product'   => $Related_product,
            'categories'        => $categories,
            'cart'              => $cart
        ]);
    }

    //public function getSearchByCategory($catergory)
    //{
        //Session::put('category', $catergory);
        //Session::put('searchFrom', 'searchByCategory');
        
        // return view('shop-grid');
    // }
}
