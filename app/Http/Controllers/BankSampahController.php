<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use Illuminate\Http\Request;

class BankSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bankSampah = BankSampah::all();

        return view('bank-sampah.index', compact('bankSampah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bank-sampah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // make validation
        $request->validate([
            'jenis_sampah' => 'required',
            'harga_per_kilo' => 'required|numeric',
        ]);

        // save to database
        BankSampah::create([
            'jenis_sampah' => $request->jenis_sampah,
            'harga_per_kilo' => $request->harga_per_kilo,
        ]);

        // redirect to index
        return redirect()->route('dashboard');
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
        $bankSampah = BankSampah::findOrFail($id);

        return view('bank-sampah.edit', compact('bankSampah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // make validation
        $request->validate([
            'jenis_sampah' => 'required',
            'harga_per_kilo' => 'required|numeric',
        ]);

        // save to database
        $bankSampah = BankSampah::findOrFail($id);
        $bankSampah->update([
            'jenis_sampah' => $request->jenis_sampah,
            'harga_per_kilo' => $request->harga_per_kilo,
        ]);

        // redirect to index
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bankSampah = BankSampah::findOrFail($id);
        $bankSampah->delete();

        return redirect()->route('dashboard');
    }
}
