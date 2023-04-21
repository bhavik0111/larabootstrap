<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request $request)
    {
        // category form
        return view('admin.ctgry.category');
    }
}
