<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboard(Request $request)
    {
        return view('user.dashbord');
    }

    public function adduser(Request $request)
    {
        // user form
        return view('user.adduser');
    }

    public function store(Request $req)    //INSERT IN DB...
    {
       $user= new user;
       $user->name=$req->name;
       $user->last_name=$req->last_name;
       $user->email=$req->email;
       $user->password=$req->password;
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

    public function edit($id)
    {
        //FOR user EDIT...
        $user = User::where('id', $id)
            ->get()
            ->first();
        return view('user.uedit', compact('user'));
    }

    function update(Request $req)
    {
        //user UPDATE IN DB...
        $user = User::where('id', $req->id)
            ->get()
            ->first();
        dd($req);
        $user->name = $req->name;
        $user->last_name = $req->last_name;
        $user->email = $req->email;
        $user->verify_acc = $req->verify_acc;

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
    
    function verify($id)
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
