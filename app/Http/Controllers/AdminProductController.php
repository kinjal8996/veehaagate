<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function adminproduct(Request $request)
    {
        $search=$request['search']??"";
        if($search!=""){
            $products=Product::with(['category', 'subcategory'])
            ->where('name', 'LIKE', "%$search%")
            ->get();
        }
        else{
            $products=Product::with(['category', 'subcategory'])->get();
        }

        $data=compact('products', 'search');
        return view('AdminPanel.products')->with($data);
    }

    public function adminproductform()
     {
        $products = new Product();
        $categories = Category::all();
        $subcategory = Subcategory::all();
        $url=url('/Adminproductform2');
        $title="Products Detail Form";
        $data=compact('url','title','products','categories','subcategory');

        return view('AdminPanel.productsform')->with($data);
    }

    public function productform(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category' => 'required|exists:category,category_id',
            'subcategory' => 'required|exists:subcategory,subcategory_id',
            'name' => 'required|string',
            'description' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product= new Product();
        $product->category_id=$request->input('category');
        $product->subcategory_id=$request->input('subcategory');
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileName = time() . "img." . $request->file('image')->getClientOriginalExtension();
            $file->move('productsimg', $fileName);
            $product->image = $fileName;
        }

        $product->save();

        return redirect('/Adminproduct');

    }

    public function producttrash()
    {
        $products = Product::onlyTrashed()->with(['category', 'subcategory'])->get();
        $data=compact('products');

        return view ("AdminPanel.productstrash")->with($data);
    }

    public function productedit($id)
    {
        $products=Product::find($id);
        if(is_null($products)){
            return redirect('/Adminproduct');
        }
        else
        {
            $categories = Category::all();
            $subcategory = Subcategory::all();
            $url=url('/product/update')."/".$id;
            $title="Update Product Details";
            $data=compact('products','url','title','categories','subcategory' );
            return view('AdminPanel.productsform')->with($data);

        }

    }

    public function productupdate($id, Request $request)
    {
        $product=Product::find($id);

        $product->category_id=$request->input('category');
        $product->subcategory_id=$request->input('subcategory');
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price= $request->input('price');

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image && file_exists(public_path('productsimg/' . $product->image))) {
                unlink(public_path('productsimg/' . $product->image));
            }

            // Upload the new image
            $file = $request->file('image');
            $fileName = time() . "img." . $file->getClientOriginalExtension();
            $file->move('productsimg', $fileName);
            $product->image = $fileName;
        }

        $product->save();

        return redirect('/Adminproduct');

    }

    public function productdelete($id)
    {
        $products=Product::find($id);
        if(!is_null($products)){
            $products->delete();
        }
        return redirect('/Adminproduct');
    }

    public function productrestore($id)
    {
        $products=Product::withTrashed()->find($id);
        if(!is_null($products)){
            $products->restore();
        }
        return redirect('Adminproduct');
    }

    public function productforcedelete($id)
    {
        $products=Product::withTrashed()->find($id);
        if(!is_null($products)){
            $products->forceDelete();
        }
        return redirect()->back();
    }

}
