<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = Pembayaran::with('user')->get();
        return view('admin.konfirmasi-pembayaran.index', compact('data'));
    }

    public function lunas($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update([
            'status' => 'lunas'
        ]);

        return redirect()->route('list-pembayaran');
    }

    public function belumLunas($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update([
            'status' => 'belum-lunas'
        ]);

        return redirect()->route('list-pembayaran');
    }
}
