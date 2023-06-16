<?php

namespace App\Http\Controllers;

use NumberFormatter;
use App\Models\Belanja;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shopping.list', [
            'title' => 'shopping'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shopping.form', [
            'title' => 'shopping'
        ]);
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
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function show(Belanja $belanja)
    {
        //
        $data = $belanja->getBelanjaBahanList();
        $total = 0;

        foreach ($data as $item) {
            $total += $item->kuantitas * $item->harga;
        }

        $fmt = numfmt_create( 'in_ID', NumberFormatter::CURRENCY );
        $total = numfmt_format_currency($fmt, $total, "IDR")."\n";
        
        return view('shopping.list', [
            'title' => 'shopping',
            'data' => $data,
            'total' => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function edit(Belanja $belanja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Belanja $belanja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Belanja $belanja)
    {
        //
    }
}
