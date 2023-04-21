<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category(Request $req) // Category form open
    {
        return view('admin.ctgry.category');
    }

    public function store(Request $req)    //INSERT IN DB...
    {
       $category= new Category();
       $category->name=$req->name;
       // $category->image=$req->image;
       $category->price=$req->price;
       $category->description=$req->description;
       $category->status = $req->status;
       $category->save();
       // $student::create($req->all());
       return redirect()->route('admin.ctgry.index')->with('msg','Record Successfully Inserted');
    }

    public function index(Request $req)   //Category LISTING...
    {
        $category = Category::get()->all();
        return view('admin.ctgry.index', compact('category'));
    }

    public function edit($id)  // user EDIT form display...
    {
        $category = Category::where('id', $id)
            ->get()
            ->first();
        return view('admin.ctgry.editctgry', compact('category'));
    }

    function update(Request $req)  //user UPDATE IN DB...
    {
        $category = Category::where('id', $req->id)
            ->get()
            ->first();
        // dd($req);
        $category->name = $req->name;
        $category->price = $req->price;
        $category->description = $req->description;
        $category->status = $req->status;

        $category->save();

        return redirect()->route('admin.ctgry.index')->with('msg', 'Record Updated');
    }

    function destroy($id)
    {
        //FOR user DELETE...
        $user = Category::where('id', $id)
            ->get()
            ->first();
        $user->delete();

        return redirect()->route('admin.ctgry.index')->with('msg', 'Record Deleted');
    }
}
