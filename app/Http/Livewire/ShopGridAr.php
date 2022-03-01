<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Livewire\Component;
use Session;
use DB;

class ShopGridAr extends Component
{

    public $products = [];
    public $categories = [];
    public $nbr_products = 0;
    public $cart_count = 25;

    public function getSearchByCategory($category)
    {
        $title = "products.title_ar as title";
        $this->products = DB::table('products')
                ->join('images', 'products.id', 'images.product_id')
                ->join('product_categories', 'products.id', 'product_categories.product_id')
                ->join('categories', 'product_categories.category_id', 'categories.id')
                ->where('categories.name_ar', "=", $category)
                ->where('images.type', "=", "primary")
                ->select('products.id as product', $title, 'products.price', 'images.src')
                ->get();
        
        Session::put('searchFrom', 'ByCategory');
        Session::put('category', $category);
    }

    public function search()
    {
            $searchWord = Session::get('searchWord');
            $category = Session::get('category');
            $title = "products.title_ar as title";

            if ($category != 'all')
            {
                $this->products = DB::table('products')
                                ->join('images', 'products.id', 'images.product_id')
                                ->join('product_categories', 'products.id', 'product_categories.product_id')
                                ->join('categories', 'product_categories.category_id', 'categories.id')
                                ->where('categories.name_ar', "=", $category)
                                ->where('products.title_ar', 'like', '%' . $searchWord . '%')
                                ->where('images.type', "=", "primary")
                                ->select('products.id as product',$title, 'products.price', 'images.src')
                                ->get();
            }
            else
            {
                $this->products = DB::table('products')
                                ->join('images', 'products.id', 'images.product_id')
                                ->join('product_categories', 'products.id', 'product_categories.product_id')
                                ->join('categories', 'product_categories.category_id', 'categories.id')
                                ->where('products.title_ar', 'like', '%' . $searchWord . '%')
                                ->where('images.type', "=", "primary")
                                ->select('products.id as product', $title, 'products.price', 'images.src')
                                ->get();
            }

            Session::put('searchFrom', 'result');
    }

    public function check()
    {
        if (Session::get('searchFrom') == 'index') {
            $this->search();
        }
    }

    public function getSearchByPriceUp($price)
    {
        $title = "products.title_ar as title";
        if(Session::get('category') != "all")
        {
            $this->products = DB::table('products')
                ->join('images', 'products.id', 'images.product_id')
                ->join('product_categories', 'products.id', 'product_categories.product_id')
                ->join('categories', 'product_categories.category_id', 'categories.id')
                ->where('categories.name_ar', "=", Session::get('category'))
                ->where('images.type', "=", "primary")
                ->where('price', '>', $price)
                ->select('products.id as product', $title, 'products.price', 'images.src')
                ->get();
        }else {
            $this->products = DB::table('products')
                ->join('images', 'products.id', 'images.product_id')
                ->join('product_categories', 'products.id', 'product_categories.product_id')
                ->join('categories', 'product_categories.category_id', 'categories.id')
                ->where('images.type', "=", "primary")
                ->where('price', '>', $price)
                ->select('products.id as product', $title, 'products.price', 'images.src')
                ->get();
        }

        Session::put('searchFrom', 'PriceUp');
        Session::put('up', $price);
    }

    public function getSearchByPriceBetween($min, $max)
    {
        $title = "products.title_ar as title";
        if(Session::get('category') != "all")
        {
            $this->products = DB::table('products')
                ->join('images', 'products.id', 'images.product_id')
                ->join('product_categories', 'products.id', 'product_categories.product_id')
                ->join('categories', 'product_categories.category_id', 'categories.id')
                ->where('categories.name_ar as name', "=", Session::get('category'))
                ->where('images.type', "=", "primary")
                ->whereBetween('price', [$min, $max])
                ->select('products.id as product', $title, 'products.price', 'images.src')
                ->get();
        }else {
            $this->products = DB::table('products')
                ->join('images', 'products.id', 'images.product_id')
                ->join('product_categories', 'products.id', 'product_categories.product_id')
                ->join('categories', 'product_categories.category_id', 'categories.id')
                ->where('images.type', "=", "primary")
                ->whereBetween('price', [$min, $max])
                ->select('products.id as product', $title, 'products.price', 'images.src')
                ->get();
        }

        Session::put('searchFrom', 'PriceBetween');
        Session::put('b_min', $min);
        Session::put('b_max', $max);
    }

    public function render()
    {
        $this->check();
        
        $this->categories = DB::table('categories')
            ->select('name_ar as name')
            ->get();

        $this->nbr_products = $this->products->count();
        
        $cart = Cart::content();
        return view('livewire.shop-grid-ar', compact('cart'));
    }

    public function addToCart($product_id)
    {
        $title = "products.title_ar as title";
        
        $product = DB::table('products')
            ->join('images', 'products.id', 'images.product_id')
            ->select('products.id as product', $title,'price', 'src')
            ->where('images.type', '=', 'primary')
            ->where('products.id', '=', $product_id)
            ->get();

        Cart::add(
            $product[0]->product,
            $product[0]->title,
            1,
            $product[0]->price,
            0,
            [
                'src'   => $product[0]->src,
                'total' => $product[0]->price,
            ],
        );

        $this->emit('cart_updated');
        
        if ( Session::get('searchFrom') == "result")
        {
            $this->search();
            return;
        }

        if ( Session::get('searchFrom') == "ByCategory")
        {
            $this->getSearchByCategory(Session::get('category'));
            return;
        }

        if ( Session::get('searchFrom') == "PriceBetween")
        {
            $this->getSearchByPriceBetween(Session::get('b_min'), Session::get('b_max'));
            return;
        }

        if ( Session::get('searchFrom') == "PriceUp")
        {
            $this->getSearchByCategory(Session::get('up'));
            return;
        }
        
    }
}

