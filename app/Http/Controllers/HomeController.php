<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::orderBy('created_at', 'DESC')->get();

    return view('index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nominal' => 'required|numeric|digits_between:1,50',
            'keterangan' => 'required|string|min:1|max:100'
        ]);

        $transaksi = new transaksi();
        $transaksi->nominal = $request->nominal;
        $transaksi->keterangan = $request->keterangan;

        if($transaksi->save()) {
            return redirect()->route('form.index')->with('message', 'Berhasil ditambahkan');
        } else {
            return redirect()->back()->with('message', 'Gagal');
        }
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
        $transaksi = transaksi::find($id);

    return view('edit', compact('transaksi'));
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
        $request->validate([
            'nominal' => 'required|numeric|digits_between:1,50',
            'keterangan' => 'required|string|min:1|max:100'
        ]);

        $transaksi = new transaksi();
        $transaksi->nominal = $request->nominal;
        $transaksi->keterangan = $request->keterangan;

        if($transaksi->save()) {
            return redirect()->route('form.index')->with('message', 'Berhasil ditambahkan');
        } else {
            return redirect()->back()->with('message', 'Gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::find($id);

    if($transaksi->delete()) {
        return redirect()->route('form.index')->with('message', 'Berhasil dihapus');
    } else {
        return redirect()->route('form.index')->with('message', 'Tidak bisa dihapus');
    }
    }
}
