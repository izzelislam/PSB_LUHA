<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Illuminate\Http\Request;

class PersyaratanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persyaratan = Persyaratan::all();
        return view('admin.persyaratan.index', compact('persyaratan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Buat Data';
        $data['submit_url'] = route('persyaratan.store');
        return view('admin.persyaratan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Persyaratan::create($request->all());
        return redirect()->route('persyaratan.index')->with('success', 'Berhasil tambah data.');
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
        $persyaratan = Persyaratan::findOrFail($id);
        $data['title'] = 'Edit Data';
        $data['submit_url'] = route('persyaratan.update', $id);
        $data['model'] = $persyaratan;
        return view('admin.persyaratan.edit', compact('persyaratan'));
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
        $persyaratan = Persyaratan::findOrFail($id);
        $persyaratan->update($request->all());
        return redirect()->route('persyaratan.index')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persyaratan::findOrFail($id)->delete();
        return redirect()->route('persyaratan.index')->with('success', 'Berhasil hapus data');
    }
}
