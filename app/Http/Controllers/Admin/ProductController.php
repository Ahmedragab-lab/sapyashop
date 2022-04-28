<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Models\Product;
use App\Models\section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('Admin.products.index',compact('products'));
    }


    public function create()
    {
        $sections= section::all();
        return view('Admin.products.create',compact('sections'));
    }


    public function store(StoreProduct $request)
    {
        try {
            $validated = $request->validated();
            $product = new Product();
            if($request->hasfile('image')){
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/product/', $filename);
                $product->image = $filename;
            }
            $product->section_id = $request->section_id;
            $product->product_name = ['en'=>$request->product_name_en ,'ar'=>$request->product_name];
            $product->slug = $request->slug;
            $product->small_desc = $request->small_desc;
            $product->desc = $request->desc;
            $product->original_price = $request->original_price;
            $product->selling_price = $request->selling_price;
            $product->tax = $request->tax;
            $product->qty = $request->qty;
            $product->qty = $request->qty;
            $product->status = $request->status==true?'1':'0';
            $product->trending = $request->trending==true?'1':'0';
            $product->save();
            toastr()->success(__('product create successfully'));
            return redirect()->route('products.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $sections= Section::all();
        return view('Admin.products.edit',compact('sections','product'));
    }


    public function update(StoreProduct $request, $id)
    {
        try {
            $validated = $request->validated();

            $product = Product::findorfail($id);
            if($request->hasFile('image')){
                $path = 'uploads/product/' . $product->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/product',$filename);
                $product->image = $filename;
            }
            $product->product_name = ['en'=>$request->product_name_en ,'ar'=>$request->product_name];
            $product->product_name = $request->product_name;
            $product->slug = $request->slug;
            $product->small_desc = $request->small_desc;
            $product->desc = $request->desc;
            $product->original_price = $request->original_price;
            $product->selling_price = $request->selling_price;
            $product->tax = $request->tax;
            $product->qty = $request->qty;
            $product->qty = $request->qty;
            $product->status = $request->status==true?'1':'0';
            $product->trending = $request->trending==true?'1':'0';
            $product->save();
            toastr()->success(__('product update successfully'));
            return redirect()->route('products.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try{
            $product = Product::findorfail($id);
            if($product->image){
                $path = 'uploads/product/' . $product->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $product->delete();
            toastr()->error(__('product delete successfully'));
            return redirect()->route('products.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }
}
