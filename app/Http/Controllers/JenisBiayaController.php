<?php

namespace App\Http\Controllers;

use App\Models\JenisBiaya;
use Illuminate\Http\Request;

class JenisBiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biaya = JenisBiaya::all();
        return view('admin.jenisBiaya.index', compact('biaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenisBiaya.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisBiaya::create($request->all());
        return redirect()->route('jenis-biaya.index')->with('success','Berhasil tambah data');
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
        $biaya = JenisBiaya::findOrFail($id);
        return view('admin.jenisBiaya.edit', compact('biaya'));
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
        JenisBiaya::findOrFail($id)->update($request->all());
        return redirect()->route('jenis-biaya.index')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisBiaya::findOrFail($id)->delete();
        return redirect()->route('jenis-biaya.index')->with('success', 'Berhasil hapus data');
    }
}
