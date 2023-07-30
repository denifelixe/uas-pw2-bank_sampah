<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nasabah = Nasabah::all();

        return view('nasabah.index', compact('nasabah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisSampah = BankSampah::all();

        return view('nasabah.create', compact('jenisSampah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // make validation
        $request->validate([
            'tanggal_transaksi' => 'required|date_format:Y-m-d',
            'nama_nasabah' => 'required',
            'jenis_sampah_id' => 'required|numeric',
            'berat_sampah' => 'required|numeric',
        ]);

        // save to database
        Nasabah::create([
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'nama_nasabah' => $request->nama_nasabah,
            'jenis_sampah_id' => $request->jenis_sampah_id,
            'berat_sampah' => $request->berat_sampah,
        ]);

        // redirect to index
        return redirect()->route('nasabah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nasabah = Nasabah::findOrFail($id);
        $jenisSampah = BankSampah::all();

        return view('nasabah.edit', compact('nasabah', 'jenisSampah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // make validation
        $request->validate([
            'tanggal_transaksi' => 'required|date_format:Y-m-d',
            'nama_nasabah' => 'required',
            'jenis_sampah_id' => 'required|numeric',
            'berat_sampah' => 'required|numeric',
        ]);

        // save to database
        Nasabah::findOrFail($id)->update([
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'nama_nasabah' => $request->nama_nasabah,
            'jenis_sampah_id' => $request->jenis_sampah_id,
            'berat_sampah' => $request->berat_sampah,
        ]);

        // redirect to index
        return redirect()->route('nasabah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Nasabah::findOrFail($id)->delete();

        return redirect()->route('nasabah.index');
    }
}
