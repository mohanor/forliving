<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

use DB;
class ProductsGrid extends Component
{
    public $perPage = 4;
    public function render()
    {
        $title = "title_". config('app.locale') ." as title";
        $products = DB::table('products')
                    ->join('images', 'products.id', 'images.product_id')
                    ->select('products.id as product', $title,'price', 'compare_price', 'src')
                    ->where('images.type', '=', 'primary')
                    ->limit($this->perPage)
                    ->get();
        $cart = Cart::content();
        return view('livewire.products-grid', compact('products', 'cart'));
    }

    public function loadMore()
    {
        $this->perPage = $this->perPage + 4;
    }

    public function addToCart($product_id)
    {
        $product = DB::table('products')
            ->join('images', 'products.id', 'images.product_id')
            ->select('products.id as product', 'title','price', 'src')
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
                'src' => $product[0]->src,
                'total' => $product[0]->price,
            ],
        );

        $this->emit('cart_updated');
    }
}
