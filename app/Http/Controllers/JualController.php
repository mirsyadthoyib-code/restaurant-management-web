<?php

namespace App\Http\Controllers;

use App\Models\jual;
use Illuminate\Http\Request;

class JualController extends Controller
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
     * @param  \App\Models\jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function show(jual $jual)
    {
        //
        $data = $jual->all();
        $total_qty = 0;
        $total_lo = 0;
        $total = 0;
        foreach ($data as $item) {
            $total_qty += $item->kuantitas;
            $total_lo += $item->sisa;
            $total += ($item->kuantitas - $item->sisa) * $item->harga_jual;
        }
        return view('selling.list', [
            'title' => 'selling',
            'data' => $data,
            'total_qty' => $total_qty, 
            'total_lo' => $total_lo,
            'total' => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function edit(jual $jual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jual $jual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function destroy(jual $jual)
    {
        //
    }
}
