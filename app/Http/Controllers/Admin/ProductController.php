<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Sub_Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function show(Request $request)
    {
        # code...
    }

    public function create()
    {
        $sub_categories = Sub_Category::all();
        return view('admin.products.create', compact('sub_categories'));
    }

    public function store(ProductRequest $request)
    {
        $image = '';
        if ( $request->hasFile('image') ) {
            $file = $request->file('image');
            $nameImage = $file->getClientOriginalName();
            $image = time()."_".$nameImage;
            while (file_exists('images/uploads/products/'.$image)) {
                $image = time()."_".$nameImage;
            }
            $file->move("images/uploads/products", $image);
        }

        $product = Product::create([
            'name' => $request->name,
            'unit_price' => $request->unit_price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'image' => $image,
            'status' => $request->status,
            'hot' => $request->hot,
            'discount' => $request->discount,
            'sub_category_id' => $request->sub_category_id,
        ]);
        if ($product) {
            return redirect()->route('admin.products.index');
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $old_sub_category = $product->subCategory;
        $sub_categories = Sub_Category::all();
        return view('admin.products.edit', compact('product', 'sub_categories', 'old_sub_category'));
    }

    public function update(ProductRequest $request, $id)
    {
        //dd($request->file('image'));
        $product = Product::find($id);
        $image_product = $product->image;
        if ( $request->hasFile('image' )) {
            $file = $request->file('image');
            $nameImage = $file->getClientOriginalName();
            $image = time()."_".$nameImage;
            while (file_exists('images/uploads/products/'.$image)) {
                $image = time()."_".$nameImage;
            }    
            $file->move("images/uploads/products", $image);
            $image_product = $image;
        } 
        
        $product->update([
            'name' => $request->name,
            'unit_price' => $request->unit_price,
            'description' => $request->description,
            'image' => $image_product,
            'status' => $request->status,
            'hot' => $request->hot,
            'discount' => $request->discount,
            'sub_category_id' => $request->sub_category_id,
        ]);

        return redirect()->route('admin.products.index')->with('success','Cập nhật thành công');
    }

    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return response()->json([
            'message' => '<div class="col-md-6 alert alert-success"> Xóa thành công! </div>',
        ]);
    }
}
