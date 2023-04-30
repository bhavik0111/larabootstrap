<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductFeature;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request)     //<--(FOR USER MAIN HOME PAGE CATEGORY LISTING)-->
    {
        $products = Product::with('category','features')->get()->all();
        $features = ProductFeature::get()->all();
        return view('home', compact('products','features'));
    }

    public function login(){                  //<--(FOR USER LOGIN)-->
        return view('user.auth.login');
    }



    public function dashboard(Request $request)
    {
        return view('user.dashbord');
    }

    public function adduser(Request $request)
    {
        // user form
        return view('user.adduser');
    }

    public function store(Request $req)    //<--(INSERT IN DB)-->
    {

        $req->validate([
            'password' => ['required','string','min:6']
        ]);

       $user= new user;
       $user->name=$req->name;
       $user->last_name=$req->last_name;
       $user->email=$req->email;
       $user->password=bcrypt($req->password);
       $user->is_admin = $req->is_admin;
       $user->save();
       // $student::create($req->all());
       return redirect()->route('user.index')->with('msg','Record Successfully Inserted');
    }


    public function index(Request $request)
    {
        // FOR user LISTING...
        $users = User::get()->all();
        return view('user.uindex', compact('users'));
    }

    public function edit($id)       //<--(USER EDIT FORM)-->
    {

        $user = User::where('id', $id)->get()->first();
        return view('user.uedit', compact('user'));
    }


    function update(Request $req)   //<--(USER UPDATE IN DB)-->
    {

        $user = User::where('id', $req->id)->get()->first();
        // dd($req);
        $user->name = $req->name;
        $user->last_name = $req->last_name;
        $user->email = $req->email;
         $user->password=bcrypt($req->password);
        $user->verify_acc = $req->verify_acc;
        $user->is_admin = $req->is_admin;

        $user->save();

        return redirect()->route('user.index')->with('msg', 'Record Updated');
    }

    function destroy($id)
    {
        //FOR user DELETE...
        $user = User::where('id', $id)
            ->get()
            ->first();
        $user->delete();

        return redirect()->route('user.index')->with('msg', 'Record Deleted');
    }

    function verify($id)   //listing file butons verify and unverify
    {
        //FOR user verify...
        $user = user::where('id', $id)
            ->get()
            ->first();
        $user->verify_acc = 1;
        $user->save();
        return redirect()->route('user.index')->with(
            'msg',
            'user account is verifyed'
        );
    }

    function unverify($id)
    {
        //FOR user unverify...
        $user = user::where('id', $id)
            ->get()
            ->first();
        $user->verify_acc = 0;
        $user->save();
        return redirect()->route('user.index')->with(
            'msg',
            'user account is unverifyed'
        );
    }
}
