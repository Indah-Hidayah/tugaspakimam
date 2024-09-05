<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class orderController extends Controller
{
    //
// public function viewCheckout(){
//     return view('checkout', compact('order'));
// }
public function checkout(Request $request)
{
    // Order::create([
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'alamat' => $request->alamat,
    //     'kota' => $request->kota,
    //     'kode_pos' => $request->kode_pos,
    // ]);

    return redirect('/checkout');

    // // Ambil data order berdasarkan ID
    // $order = Order::find($id);

    // // Cek apakah order ditemukan
    // if (!$order) {
    //     return redirect()->back()->with('error', 'Order tidak ditemukan.');
    // }

    // Kirim data order ke view checkout success
    // return view('checkout', compact('order'));
}
    public function cekout($redirect){
        $data['order'] = order::all();
        $data['total_cekout']= $data['cekout']->count();

        return view('checkout', $data);
}
}

