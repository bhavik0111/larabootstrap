<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $dirPath = 'images/product_images/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get()->all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::where('status',1)->get();
        return view('admin.product.create',$data);
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
            'prod_image' => ['required'],
            'price' => ['required', 'numeric'],
            'status' => 'required',
        ]);
        $requestData = $request->all();
        unset($requestData['prod_image']);

        if ($request->has('prod_image')) {
            // folder name where you wan to upload
            $image = $request->file('prod_image'); // name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $requestData['image'] = $this->dirPath . $image_name; // for store in database
        }

        Product::create($requestData); //insert data to product table
        return redirect()
            ->route('admin.product.index')
            ->with('msg', 'Record Successfully Inserted');
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
        $product = Product::where('id', $id)
            ->get()
            ->first();
        return view('admin.product.edit', compact('product'));
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
        $product = Product::where('id', $request->id)
            ->get()
            ->first();
        // dd($req);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status;
        if ($request->has('prod_image')) {
            //=>this condition use if edit form and not upload
            //image then consider old image
            if (file_exists(public_path($product->image))) {
                @unlink(public_path($product->image));
            }
            $image = $request->file('prod_image'); // name of your input field

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $product->image = $this->dirPath . $image_name; // for store in database
        }

        $product->save();

        return redirect()
            ->route('admin.product.index')
            ->with('msg', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //FOR product DELETE...
        $product = Product::where('id', $id)
            ->get()
            ->first();
            if (file_exists(public_path($product->image))) {
                @unlink(public_path($product->image));
            }
        $product->delete();
        return redirect()
            ->route('admin.product.index')
            ->with('msg', 'Record Deleted');
    }
}
