<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $data = User::where('role','pendaftar')->with('document')->get();
        return view('admin.document.index', compact('data'));
    }

    public function store($id)
    {
        Document::create([
            'users_id' => $id,
            'status'   => 'lengkap'
        ]);

        return redirect()->back()->with('success', 'Berhasil update data');
    }
}
