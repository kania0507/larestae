<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;

use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = ProductCategory::all();

        $products = Product::paginate(10);
        return view('product.product')->with('products', $products)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Productcategories = ProductCategory::all();
        return view('product.createProduct')->with('Productcategories', $Productcategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:menus|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);
        //if a user does not uploade an image, use noimge.png for the menu
        $imageName = "noimage.png";

        //if a user upload image
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('menu_images'), $imageName);
        }
        //save information to Menus table
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $imageName;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        $request->session()->flash('status', $request->name. ' is saved successfully');
        return redirect('/product/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $productcategories = ProductCategory::all();
        return view('product.editProduct')->with('product',$product)->with('productcategories',$productcategories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // information validation
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);
        $product = Product::find($id);
        // validate if a user upload image
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);
            if($menu->image != "noimage.png"){
                $imageName = $menu->image;
                unlink(public_path('product_images').'/'.$imageName);
            }
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('product_images'), $imageName);
        }else{
            $imageName = $product->image;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $imageName;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        $request->session()->flash('status', $request->name. ' is updated successfully');
        return redirect('/product/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->image != "noimage.png" && File::exists(public_path('product_images').'/'.$product->image ) ){
            unlink(public_path('product_images').'/'.$product->image);
        }
        $productName = $product->name;
        $product->delete();
        Session()->flash('status', $productName. ' is deleted successfully');
        return redirect('/product');
    }
}
