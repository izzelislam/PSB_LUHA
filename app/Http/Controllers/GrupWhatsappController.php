<?php

namespace App\Http\Controllers;

use App\Models\GrupWhatsapp;
use Illuminate\Http\Request;

class GrupWhatsappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wa = GrupWhatsapp::all();
        return view('admin.grup-whatsapp.index', compact('wa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grup-whatsapp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GrupWhatsapp::create($request->all());
        return redirect()->route('grup-whatsapp.index')->with('success', 'Berhasil tambah data');
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
        $wa = GrupWhatsapp::findOrFail($id);
        return view('admin.grup-whatsapp.edit', compact('wa'));
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
        $wa = GrupWhatsapp::findOrFail($id);
        $wa->update($request->all());
        return redirect()->route('grup-whatsapp.index')->with('success', 'Berhasil update data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GrupWhatsapp::findOrFail($id)->delete();
        return redirect()->route('grup-whatsapp.index')->with('success', 'Berhasil hapus data');
    }
}
