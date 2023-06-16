<?php

namespace App\Http\Controllers;

use NumberFormatter;
use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function show(produksi $produksi)
    {
        //
        $data = $produksi->getProduksiMenuList();
        $total_qty = 0;
        $total = 0;
        foreach ($data as $item) {
            $total_qty += $item->kuantitas;
            $total += $item->kuantitas * $item->harga_modal;
        }
        $fmt = numfmt_create( 'in_ID', NumberFormatter::CURRENCY );
        $total = numfmt_format_currency($fmt, $total, "IDR")."\n";
        return view('production.list', [
            'title' => 'production',
            'data' => $data,
            'total_qty' => $total_qty,
            'total' => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function edit(produksi $produksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produksi $produksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(produksi $produksi)
    {
        //
    }
}
