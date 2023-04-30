<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $dirPath = 'images/category_images/';

    public function index(Request $req)
    {
        //Category LISTING...
        $category = Category::get()->all();
        return view('admin.category.index', compact('category'));
    }
    public function create(Request $req)
    {
        // Category form open
        return view('admin.category.create');
    }

    public function store(Request $req)
    {

        $req->validate([
            'cat_image' => ['required'],
            // 'price' => ['required','numeric'],
            'status' => 'required'
        ]);

        //INSERT IN DB...
        $category = new Category();
        $category->name = $req->name;
        // $category->image = $req->file('image');
        // $category->price = $req->price;
        $category->description = $req->description;
        $category->status = $req->status;

        if ($req->has('cat_image')) {
            // folder name where you wan to upload
            $image = $req->file('cat_image'); // name of your input field
            
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $category->image = $this->dirPath . $image_name; // for store in database
        }

        $category->save();
        
        return redirect()->route('admin.category.index')->with('msg', 'Record Successfully Inserted');
    }

    public function edit($id)
    {
        // user EDIT form display...
        $category = Category::where('id', $id)
            ->get()
            ->first();
        return view('admin.category.edit', compact('category'));
    }

    function update(Request $req)
    {
        //user UPDATE IN DB...
        $category = Category::where('id', $req->id)
            ->get()
            ->first();
        // dd($req);
        $category->name = $req->name;
        // $category->price = $req->price;
        $category->description = $req->description;
        $category->status = $req->status;

        if ($req->has('cat_image')) {
            //=>this condition use if edit form and not upload
            //image then consider old image
            if (file_exists(public_path($category->image))) {
                @unlink(public_path($category->image));
            }
            $image = $req->file('cat_image'); // name of your input field

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $category->image = $this->dirPath . $image_name; // for store in database
        }

        $category->save();

        return redirect()
            ->route('admin.category.index')
            ->with('msg', 'Record Updated');
    }

    function destroy($id)
    {
        //FOR Category DELETE...
        $category = Category::where('id', $id)
            ->get()
            ->first();
        if (file_exists(public_path($category->image))) {
            @unlink(public_path($category->image));
        }
        $category->delete();
        return redirect()
            ->route('admin.category.index')
            ->with('msg', 'Record Deleted');
    }
}
