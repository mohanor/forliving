<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\product_category;
use App\Models\Image;
use DB;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashbord()
    {
        return view("admin.index");
    }

    public function category()
    {
        return view('admin.cat');
    }

    public  function create()
    {
        return view('admin.addcategory');
    }

    public  function createproduct()
    {
        $categories = DB::table('categories')
                    ->get();
        return view('admin.addproduct')->with(['categories' => $categories]);
    }

    public  function orders()
    {
        $orders = DB::table('orders')
                    ->get();
                    
        return view('admin.orders')->with(['orders' => $orders]);
    }
    
    public  function categories()
    {
        $categories = DB::table('categories')
                        ->limit(10)
                        ->get();
        return view('admin.categories')->with(['categories' => $categories]);
    }

    public function saveCategory(Request $request)
    {

        $category = new Category();

        $category->name_en = $request['category_en'];
        $category->name_fr = $request['category_fr'];
        $category->name_ar = $request['category_ar'];
        $category->description_en = $request['description_en'];
        $category->description_fr = $request['description_fr'];
        $category->description_ar = $request['description_ar'];

        if ($request->hasFile('photo'))
        {
            $fileName =  time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->photo->storeAs('public/categories', $fileName);
            $category->photo = $fileName;
        }

        $category->save();

        return Redirect()->back()->with('success', 'Category created successfully.');
    }

    public function products()
    {
        $products = DB::table('products')
                    ->join('images', 'products.id', 'images.product_id')
                    ->where('images.type', '=', 'primary')
                    ->orderBy('products.id', 'desc')
                    ->get();

        return view('admin.products')->with(['products' => $products]);
    }
    
    public function saveProduct(Request $request)
    {
        request()->validate([
            'name_en'           => 'required',
            'name_fr'           => 'required',
            'name_ar'           => 'required',
            'description_en'       => 'required',
            'description_fr'       => 'required',
            'description_ar'       => 'required',
            'price'             => 'required',
            'campare_price'     => 'required',
            'images'            => 'required',
            'images.*'          => 'required|image|mimes:jpeg,png,jpg,webp',
            'categories.*'      => 'required',
        ]);

        $product = Product::create([
            'title_en'         => $request['name_en'],
            'title_fr'         => $request['name_fr'],
            'title_ar'         => $request['name_ar'],
            'description_en'   => $request['description_en'],
            'description_fr'   => $request['description_fr'],
            'description_ar'   => $request['description_ar'],
            'price'             => $request['price'],
            'compare_price'     => $request['campare_price'],
            'user_id'       => Auth::user()->id,
        ]);

        $categories =  $request['states'];
        foreach($categories as $item)
        {
            product_category::create([
                'product_id'         => $product->id,
                'category_id'   => $item
            ]);
        }

        if($request->hasfile('images'))
        {
            $i = rand(1,100);
            $j = 1;
            foreach ($request->file('images') as $file)
            {
                $fileName =  $i."-".time().'.'.$file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);
                $image = new Image();
                $image->src = $fileName;
                $image->product_id = $product->id;
                if ($j)
                {
                    $image->type = "primary";
                    $j = 0;
                }
                else
                    $image->type = "gallery";
                $image->save();
                $i++;
            }
        }
        return back()->with('success', 'product has been successfully added');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        
		return view('admin.edit-product', compact('product'));
    }

    public function destroy($id)
    {
        
        $image = Image::where('product_id', $id)->delete();
        $product = Product::findOrFail($id)->delete();
        
		$product->delete();

		Session::flash('success', 'Product deleted successfully!');

		return redirect()->route('products');
    }
}