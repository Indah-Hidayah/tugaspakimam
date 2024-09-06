<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Required;

class UserController extends Controller
{

    public function cekout()
    {
        return view('/cekout',);
    }
     public function checkout()
     {
        return view('/checkout',);

    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); 
    }
    public function show($id)
    {
        $user = auth()->user();
        $data['produk'] = produk::find($id);
        return view('user-shop', compact('user'),$data);
    }
    public function co(){
        // $data['produk'] = produk::find();
        $data['produk'] = produk::all();
        return view('user-co',$data);
    }

    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validate)) {
            return redirect('/user');
        }

        return redirect()->back()->with('pesanLogin', 'Maaf, Login anda gagal!');
    }
    // public function co($id)
    // {
    //     $user = auth()->user();
    //     $data['produk'] = produk::find($id);
    //     return view('user-co', compact('user'),$data);
    // }
    // public function co(){
    //     return view('user-co');
    // }

    public function user(  )
    {
        $data['user'] = User::all();
        $data['produk'] = produk::all();
        return view('user', $data);
    }


    function add(){

    }
}
