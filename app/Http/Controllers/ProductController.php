<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFeature;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $dirPath = 'images/product_images/';
    

    public function index()  //<--(listing)-->
    {
        $products = Product::with('category')->get()->all();
        return view('admin.product.index', compact('products'));
    }


    public function create() //<--(create form)-->  
    {
        $data['categories'] = Category::where('status',1)->get();
        return view('admin.product.create',$data);
    }


    public function store(Request $request) //<--(insert in db)-->
    {
        $request->validate([
            'prod_image' => ['required'],
            'price' => ['required', 'numeric'],
            'status' => 'required',
        ]);
        $requestData = $request->all();

        unset($requestData['prod_image'],

        $request['title'],           //AddNewFeature button 
        $request['add_description']);    //AddNewFeature button

        if ($request->has('prod_image')) {

            $image = $request->file('prod_image'); //name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); //<--(FOR STORE IN FOLDER)-->

            $requestData['image'] = $this->dirPath . $image_name;   //<--(FOR STORE IN DB)-->
        }

        $product = Product::create($requestData);   //<--(INSERT DATA INTO products TABLE)-->


    if ($request->has('title')) {
    
            for ($i = 0; $i < count($request->title); $i++) {  
                                                //<--(INSERT DATA INTO products_addfeatures TABLE)-->
                $feature =  new ProductFeature();

                $feature->product_id = $product->id;
                $feature->title = $request['title'][$i];
                $feature->description = $request['add_description'][$i];

                $feature->save();
            }
    }

        return redirect()->route('admin.product.index')->with('msg', 'Record Successfully Inserted');
    }


    
    public function edit($id)
    {   
        $product = Product::where('id', $id)->get()->first();
        $features = ProductFeature::where('product_id' , $id)->get()->all();
        $categories = Category::where('status',1)->get();

        return view('admin.product.edit', compact('product','features','categories'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => ['required'],
            'price' => ['required', 'numeric'],
            'status' => 'required',
        ]);

        $product = Product::where('id', $request->id)->get()->first();
        // dd($request);
        // $category->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->colour = $request->colour;

        $product->data = $request->data;
        $product->data_detail = $request->data_detail;

        $product->calls = $request->calls;
        $product->calls_detail = $request->calls_detail;

        $product->sms = $request->sms;
        $product->sms_detail = $request->sms_detail;

        $product->credit_validity = $request->credit_validity;
        $product->credit_validity_detail = $request->credit_validity_detail;



        if ($request->has('prod_image')) {    //=>this condition use if edit form and not upload image then consider old image
            if (file_exists(public_path($product->image))) {
                @unlink(public_path($product->image));
            }
            $image = $request->file('prod_image'); // name of your input field

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $product->image = $this->dirPath . $image_name; // for store in database
        }

        $product->save();

 
        ProductFeature::where('product_id', $id)->delete();

            if ($request->has('title')){  //this condition are AddNewFeture array null passed otherwise error passed

                for ($i = 0; $i < count($request->title); $i++) {
                    //<--(INSERT DATA INTO products_addfeatures TABLE)-->
                    $feature =  new ProductFeature();

                    $feature->product_id = $product->id;
                    $feature->title = $request['title'][$i];
                    $feature->description = $request['add_description'][$i];

                    $feature->save();
                }

            }
        return redirect()->route('admin.product.index')->with('msg', 'Record Updated');
    }



    public function destroy($id)
    {
        //FOR product DELETE...
        $product = Product::where('id', $id)->get()->first();

            if (file_exists(public_path($product->image))) {
                @unlink(public_path($product->image));
            }

        $product->delete();

        return redirect()->route('admin.product.index')->with('msg', 'Record Deleted');
    }
}
